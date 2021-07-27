<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LMS\Conformity;
use App\Models\LMS\Course;
use App\Models\LMS\ConformityOption;
use App\Models\LMS\QuestionAudio;
use App\Models\LMS\Quiz;
use App\Models\LMS\Question;
use App\Models\LMS\Stage;
use App\Models\MediaFile;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create( Course $course, Stage $stage, Quiz $quiz, $questionType)
    {
        $audio = MediaFile::where('type', 'audio')->orderBy('id', 'desc')->get();
        $images = MediaFile::where('type', 'image')->orderBy('id', 'desc')->get();

        return view('cms.courses.quizzes.questions.create', [
            'course' => $course,
            'stage' => $stage,
            'quiz' => $quiz,
            'questionType' => $questionType,
            'audioFiles' => $audio,
            'images' => $images
        ]);
    }

    public function store(Request $request, Course $course, Stage $stage, Quiz $quiz, $questionType)
    {
        /* Validate by question type */
        $request->validate(
            validateInputs($request, $questionType)
        );

        /* Create new question */
        $question = Question::add($request->all(), $quiz, $questionType);
        $question->attachImage($request->input('question_image'));

        /* Add multiple audio files to question */
        if ($request->has('question_audios')) {
            foreach ($request->input('question_audios') as $audio) {

                QuestionAudio::create([
                    'question_id' => $question->id,
                    'audio' => $audio
                ]);
            }
        }

        /* Create new conformity */
        if ($questionType === 'make_text') {
            $text = '';

            $sentences = $request->input('matching_title');
            foreach ($sentences as $sentence) {
                if ($sentence) {
                    $text = $text . $sentence . ' ';
                }
            }

            $conformity = Conformity::create([
                'question_id' => $question->id,
                'title' => $text,
                'points' => $request->input('points'),
                'audio' => $request->input('matching_audio'),
                'image' => $request->input('matching_image'),
            ]);

            foreach ($sentences as $sentence) {
                if ($sentence) {
                    ConformityOption::add($sentence, $conformity, 1);
                }
            }

        } else {

            $conformity = Conformity::add($request->all(), $question);
            $conformity->attachAudio($request->input('matching_audio'));
            $conformity->attachImage($request->input('matching_image'));
            $conformity->addOptionByCondition($questionType, $request);
        }

        return redirect()->route('questions.show', [
            'course' => $course,
            'stage' => $stage,
            'quiz' => $quiz,
            'question' => $question,
        ]);
    }

    public function show(Course $course, Stage $stage, Quiz $quiz, Question $question)
    {
        return view('cms.courses.quizzes.questions.show', [
            'course' => $course,
            'stage' => $stage,
            'quiz' => $quiz,
            'question' => $question,
        ]);
    }

    public function edit(Course $course, Stage $stage, Quiz $quiz, Question $question)
    {
        $audio = MediaFile::where('type', 'audio')->orderBy('id', 'desc')->get();
        $images = MediaFile::where('type', 'image')->orderBy('id', 'desc')->get();

        return view('cms.courses.quizzes.questions.edit', [
            'course' => $course,
            'stage' => $stage,
            'quiz' => $quiz,
            'question' => $question,
            'audioFiles' => $audio,
            'images' => $images
        ]);
    }

    public function update(Request $request, Course $course, Stage $stage, Quiz $quiz, Question $question)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $question->update($request->all());

        foreach ($question->audios as $currentAudio) {
            $currentAudio->remove();
        }

        if ($request->has('question_audios')) {
            foreach ($request->input('question_audios') as $audio) {
                QuestionAudio::create(['question_id' => $question->id,'audio' => $audio]);
            }
        }

        if ($question->type === 'make_text') {
            if ($request->has('matching_title')) {

                foreach ($question->conformities as $currentConformity) {
                    $currentConformity->remove();
                }

                $text = '';

                $sentences = $request->input('matching_title');
                foreach ($sentences as $key => $sentence) {
                    if ($sentence) {
                        $text = $text . $sentence . ' ';
                    }
                }

                $conformity = Conformity::create([
                    'question_id' => $question->id,
                    'title' => $text,
                    'points' => $request->input('points')
                ]);

                foreach ($sentences as $sentence) {
                    ConformityOption::add($sentence, $conformity, 1);
                }
            }
        }

        return redirect()->route('questions.show', [$course->id, $stage->id, $quiz->id, $question->id]);
    }

    public function destroy(Course $course, Stage $stage, Quiz $quiz, Question $question)
    {
        $question->remove();
        return redirect()->route('quizzes.show', [$course->id, $stage->id, $quiz->id]);
    }

    public function removeImage(Course $course, Stage $stage, Quiz $quiz, Question $question)
    {
        $question->update(['image' => null]);
    }

    public function removeAudio(Course $course, Stage $stage, Quiz $quiz, Question $question, QuestionAudio $audio)
    {
        $audio->remove();
    }
}
