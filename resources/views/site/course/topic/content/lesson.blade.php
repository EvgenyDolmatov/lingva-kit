<div class="widget widget-12 has-shadow">
    <div class="widget-body sliding-tabs">
        <ul class="nav nav-tabs" id="example-one" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="base-tab-lesson" data-toggle="tab" href="#tab-lesson" role="tab"
                   aria-controls="tab-lesson" aria-selected="true">Урок</a>
            </li>
            <li class="nav-item @if(!$lesson->presentation) disabled @endif">
                <a class="nav-link" id="base-tab-video" data-toggle="tab"
                   href="#tab-video" role="tab" aria-controls="tab-video" aria-selected="false">Аудио/Видео</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(!$lesson->presentation) disabled @endif" id="base-tab-pres" data-toggle="tab"
                   href="#tab-pres" role="tab"
                   aria-controls="tab-pres" aria-selected="false">Презентация</a>
            </li>
            <li class="nav-item @if(!$lesson->presentation) disabled @endif">
                <a class="nav-link" id="base-tab-file" data-toggle="tab"
                   href="#tab-file" role="tab" aria-controls="tab-file" aria-selected="false">Файлы</a>
            </li>
        </ul>
        <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="tab-lesson" role="tabpanel" aria-labelledby="base-tab-lesson">
                @if($lesson->image)
                    <div class="about-infos d-flex flex-column mb-3">
                        <div class="about-text">
                            <img src="{{$lesson->getImage()}}" style="max-width:400px;"
                                 alt="{{$lesson->getImageAlt()}}">
                        </div>
                    </div>
                @endif

                <div class="about-infos d-flex flex-column mt-3">
                    <div class="about-text">
                        {!! $lesson->description !!}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-video" role="tabpanel" aria-labelledby="base-tab-video">
                @if($lesson->audios)
                    @foreach($lesson->audios as $audio)
                        <div class="about-infos d-flex flex-column mb-3">
                            <audio src="{{$audio->getAudio()}}" controls></audio>
                        </div>
                    @endforeach
                @endif
                @if($lesson->video)
                    @if(strpos($lesson->video, 'rutube') !== false)
                        <iframe class="rutube-frame"
                                src="{{ 'https://rutube.ru/play/embed/' . str_replace('https://rutube.ru/video/', '',$lesson->video) }}"
                                frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen
                                mozallowfullscreen
                                allowFullScreen></iframe>
                    @else
                        <div class="about-infos d-flex flex-column mb-3">
                            <div class="about-text">
                                <div id="player" data-id="{{$lesson->getVideoId()}}"
                                     data-width="640" data-height="390"></div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <div class="tab-pane fade" id="tab-pres" role="tabpanel" aria-labelledby="base-tab-pres">
                @if($lesson->presentation)
                    @if($lesson->presentation->slides->count())
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="presentation owl-carousel">
                                    @foreach($lesson->presentation->slides as $slide)
                                        <div class="swiper-slide">
                                            <img src="{{ $slide->slideImage->getLargeImage() }}"
                                                 alt="{{ $slide->title }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="presentation-thumbs">
                                    @foreach($lesson->presentation->slides as $key => $slide)
                                        <div class="thumb" data-slide-index="{{$key}}">
                                            <img src="{{ $slide->slideImage->getSmallImage() }}"
                                                 alt="{{ $slide->title }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <div class="tab-pane fade" id="tab-file" role="tabpanel" aria-labelledby="base-tab-file">
                @if($files)
                    <div class="about-title mt-3 mb-3">
                        <h3>{{__("site-pages.additional-materials")}}</h3>
                    </div>
                    <div class="about-infos d-flex justify-content-start">
                        @foreach($files as $file)
                            @if($file->document && $file->document->type === 'file')
                                <div class="about-text m-3">
                                    <div class="about-icon {{$file->getFileType($file->document->filename)}} mb-2"></div>
                                    <a href="{{route('media.download', $file->file_id)}}">{{$file->document->title}}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
