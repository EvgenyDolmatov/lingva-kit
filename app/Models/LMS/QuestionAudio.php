<?php

namespace App\Models\LMS;

use App\Models\MediaFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAudio extends Model
{
    use HasFactory;

    protected $table = 'lms_question_audios';

    protected $fillable = ['audio', 'question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function audio()
    {
        return $this->hasOne(MediaFile::class, 'id', 'audio');
    }

    public function getAudio() : string
    {
        $audio = $this->audio()->first();

        if ($audio) {
            return $audio->getPath();
        }
        return false;
    }

    public function remove()
    {
        $this->delete();
    }
}
