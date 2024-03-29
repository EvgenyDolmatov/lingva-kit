@extends('layouts.site')

@section('seo-title', 'Лингва-Кит - ' . $course->meta->title)
@section('seo-description', 'Лингва-Кит - ' . $course->meta->description)
@section('page-styles')
    <link rel="stylesheet" href="{{asset('assets/cms/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/cms/css/owl-carousel/owl.theme.min.css')}}">
@endsection
@section('title', $course->title)
@section('header-tools')
    @auth
        <div class="page-header-tools">
            @if($course->released())
                {{$course->getProgress($user)}}
            @else
                {!! 'Дата выхода курса: <span class="text-danger">'. $course->publish_date . '</span>'; !!}
            @endif
        </div>
        @if(!$course->students->contains($user->id))
            @if($course->type === 'free')
                <form style="display: inline-block" method="POST" action="{{ route('site.get-course', $course->id) }}">
                    @csrf

                    <a href="{{ route('site.get-course', $course->id) }}"
                       class="btn-lg btn-gradient-03 text-center btn-block"
                       onclick="event.preventDefault();this.closest('form').submit();">
                        {{ __("site-pages.get-course") }}
                    </a>
                </form>
            @else
                <a href="{{route('orders.checkout', $course->id)}}"
                   class="btn-lg btn-gradient-03 text-center btn-block">
                    {{ __("site-pages.buy-course") }}
                </a>
            @endif
        @endif
    @endif
@endsection
@section('content')
    <div class="row flex-row">
        <div class="col-12">
            <div class="row flex-row">
                {{-- Course Duration --}}
                <div class="col-xl-4 col-md-12">
                    <div class="widget widget-12 has-shadow">
                        <div class="widget-body">
                            <div class="media">
                                <div class="align-self-start ml-4 mr-4">
                                    <i class="ti-time text-primary"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="number">{{$course->getDuration()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Course Price --}}
                <div class="col-xl-4 col-md-12">
                    @if($user && $user->courses->contains($course->id))
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-start ml-4 mr-4">
                                        <i class="ti-bar-chart text-primary"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="number">Ваш рейтинг: {{$user->getRatingByCourse($course)}}</div>
                                        <div class="number">Ваши
                                            баллы: {{$user->getPoints($course).' / '.$course->getTotalPoints()}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-start ml-4 mr-4">
                                        <i class="ti-money text-primary"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="number">{{$course->getCurrentPrice()}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                {{-- Course Category --}}
                <div class="col-xl-4 col-md-12">
                    <div class="widget widget-12 has-shadow">
                        <div class="widget-body">
                            <div class="media">
                                <div class="align-self-start ml-4 mr-4">
                                    <i class="ti-view-list-alt text-primary"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="number">{{__($course->category->name)}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-sm-12">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    @if($course->image)
                        <div class="about-infos d-flex flex-column mb-3">
                            <div class="about-text">
                                <img src="{{$course->getImage()}}" style="max-width:400px;"
                                     alt="{{$course->getImageAlt()}}">
                            </div>
                        </div>
                    @endif

                    <div class="about-infos d-flex flex-column mt-3">
                        <div class="about-text">
                            {!! $course->description !!}
                        </div>
                    </div>

                    @if($course->video)
                        @if(strpos($course->video, 'rutube') !== false)
                            <iframe class="rutube-frame"
                                    src="{{ 'https://rutube.ru/play/embed/' . str_replace('https://rutube.ru/video/', '',$course->video) }}"
                                    frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen
                                    mozallowfullscreen
                                    allowFullScreen></iframe>
                        @else
                            <div class="about-infos d-flex flex-column mb-3">
                                <div class="about-text">
                                    <div id="player" data-id="{{$course->getVideoId()}}"
                                         data-width="640" data-height="390"></div>
                                </div>
                            </div>
                        @endif
                    @endif

                    {!! $course->getPageActiveButton() !!}

                    <hr>

                    {{-- Reviews --}}
                    <div class="review-container">
                        <div class="about-infos d-flex flex-column">
                            <div class="about-title">
                                <h2>Отзывы о курсе</h2>
                            </div>
                            <div class="about-text">
                                <div class="la la-star @if($course->reviews && ($course->getAverageGrade() >= 1)) gold @endif"></div>
                                <div class="la la-star @if($course->reviews && ($course->getAverageGrade() >= 2)) gold @endif"></div>
                                <div class="la la-star @if($course->reviews && ($course->getAverageGrade() >= 3)) gold @endif"></div>
                                <div class="la la-star @if($course->reviews && ($course->getAverageGrade() >= 4)) gold @endif"></div>
                                <div class="la la-star @if($course->reviews && ($course->getAverageGrade() >= 5)) gold @endif"></div>
                            </div>

                            @if($reviews->count())
                                @foreach($reviews as $review)
                                    <div class="review-item">
                                        <h3 class="mb-2">{{$review->user->name}}</h3>
                                        <div class="about-text">
                                            <div class="la la-star grade-1 @if($review->grade >= 1) gold @endif"></div>
                                            <div class="la la-star grade-2 @if($review->grade >= 2) gold @endif"></div>
                                            <div class="la la-star grade-3 @if($review->grade >= 3) gold @endif"></div>
                                            <div class="la la-star grade-4 @if($review->grade >= 4) gold @endif"></div>
                                            <div class="la la-star grade-5 @if($review->grade == 5) gold @endif"></div>
                                        </div>

                                        <div class="about-text mt-3">
                                            <p>{!! $review->review !!}</p>
                                        </div>

                                    </div>
                                @endforeach
                            @else
                                Об этом курсе пока нет ни одного отзыва.
                            @endif

                            {{-- Leave Review --}}
                            @auth
                                @if(!$course->isRatedByUser($user))
                                    <form action="{{ route('course.reviews.store', $course) }}"
                                          method="POST" class="review-form-container">
                                        @csrf

                                        <h3>Оставить отзыв</h3>

                                        <div class="form-group mt-4">
                                            <label for="grade">Ваша оценка</label>
                                            <input type="hidden" name="grade" id="grade" class="form-control"
                                                   value="{{old('grade')}}">

                                            <div class="about-text">
                                                <div class="la la-star grade-1 @if(old('grade') >= 1) active @endif"
                                                     data-grade="1"></div>
                                                <div class="la la-star grade-2 @if(old('grade') >= 2) active @endif"
                                                     data-grade="2"></div>
                                                <div class="la la-star grade-3 @if(old('grade') >= 3) active @endif"
                                                     data-grade="3"></div>
                                                <div class="la la-star grade-4 @if(old('grade') >= 4) active @endif"
                                                     data-grade="4"></div>
                                                <div class="la la-star grade-5 @if(old('grade') == 5) active @endif"
                                                     data-grade="5"></div>
                                            </div>
                                            @error('grade')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="review">Ваш отзыв</label>
                                            <textarea name="review" id="review" rows="4"
                                                      class="form-control">{{old('review')}}</textarea>
                                            @error('review')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-brand">Отправить</button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-12">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="about-title mb-3">
                        <h3>{{ __("cms-pages.course-plan") }}</h3>
                    </div>
                    <ul>
                        @foreach($course->stages as $stage)
                            <li>
                                <div class="mt-5"></div>
                                <h4>{{$stage->name}}</h4>
                            </li>
                            @foreach($stage->topics->sortby('index_number') as $key => $topic)
                                <li>
                                    <div class="about-infos d-flex flex-column mt-3">
                                        @if($topic->lesson)
                                            <div class="about-text">
                                                @if($course->isBelongsToStudent($user))
                                                    <a href="{{route('site.show-topic', [$course->id, $topic->id])}}"
                                                       class="{{$topic->getCssClass($user)}}">
                                                        {{ __("cms-pages.lesson") }}. {{ $topic->lesson->title }}
                                                        ({{ __("cms-pages.".$topic->name) }})

                                                        @if($topic->lesson->homeWork)
                                                            @if($topic->lesson->homeWork->finishedTask)
                                                                @if($topic->lesson->homeWork->finishedTask->isChecked())
                                                                    <span class="text-primary">
                                                                        | ОЦЕНКА: {{$topic->lesson->homeWork->finishedTask->assessment}}
                                                                    </span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    </a>
                                                @else
                                                    <span>
                                                        {{ __("cms-pages.lesson") }}. {{ $topic->lesson->title }} ({{ __("cms-pages.".$topic->name) }})
                                                    </span>
                                                @endif
                                            </div>
                                        @elseif($topic->quiz)
                                            <div class="about-text">
                                                @if($course->isBelongsToStudent($user) && $topic->isAllowedToPass($user))
                                                    <a href="{{route('site.show-topic', [$course->id, $topic->id])}}"
                                                       class="{{$topic->getCssClass($user)}}">
                                                        {{ __("cms-pages.quiz") }}. {{ $topic->quiz->title }}
                                                        ({{ __("cms-pages.".$topic->name) }})
                                                    </a>
                                                @else
                                                    <span>
                                                        {{ __("cms-pages.quiz") }}. {{ $topic->quiz->title }} ({{ __("cms-pages.".$topic->name) }})
                                                    </span>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-scripts')
    <script src="{{asset('assets/cms/vendors/js/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/cms/vendors/js/progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/cms/vendors/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('assets/cms/vendors/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('assets/cms/vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/cms/js/dashboard/db-default.js')}}"></script>
    <script src="{{asset('assets/cms/js/youtube.min.js')}}"></script>
@endsection
