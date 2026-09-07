@extends('layouts.new-app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/promo-site/js/masterslider/style/masterslider.css')}}"/>
    <link href="{{ asset('assets/promo-site/js/animations/css/animations.min.css')}}" rel="stylesheet" type="text/css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/promo-site/js/cubeportfolio/cubeportfolio.min.css')}}">
    <link href="{{ asset('assets/promo-site/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/promo-site/js/ytplayer/ytplayer.css')}}"/>
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet"/>
@endsection

@section('scripts')
    <script src="{{ asset('assets/promo-site/js/masterslider/masterslider.min.js')}}"></script>
    <script type="text/javascript">
        (function ($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1600,    // slider standard width
                height: 650,   // slider standard height
                space: 0,
                speed: 45,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });
        })(jQuery);
    </script>
    <script src="{{ asset('assets/promo-site/js/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('assets/promo-site/js/owl-carousel/custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/promo-site/js/ytplayer/jquery.mb.YTPlayer.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/promo-site/js/ytplayer/elementvideo-custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/promo-site/js/ytplayer/play-pause-btn.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('assets/promo-site/js/progress-circle/jquery.circlechart.js')}}"></script>
    <script src="{{ asset('assets/promo-site/js/animations/js/animations.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/promo-site/js/animations/js/appear.min.js')}}" type="text/javascript"></script>

    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
@endsection

@section('content')
    <section class="sec-padding testimonials">
        <div class="container">
            <div class="col-12 text-center">
                <h1 class="paddtop1 dosis font-weight-5 lspace-sm">Документы</h1>
                <div class="title-line-4 align-center"></div>

                <div class="text-left">
                    <h4>
                        <a href="{{asset("documents/2026-2027/01 Договор-оферта ЛИНГВАКИТ 2026.docx")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Договор-оферта ЛИНГВАКИТ 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/02 РП ЛИНГВАКИТ-2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            РП ЛИНГВАКИТ 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/03-Политика в области персональных данных 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Политика в области персональных данных 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/04-Правила внутреннего распорядка обучающегося 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Правила внутреннего распорядка обучающегося 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/05-Правила внутреннего трудового распорядка для работников ИП 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Правила внутреннего трудового распорядка для работников ИП 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/06-Положение о режиме занятий обучающихся 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Положение о режиме занятий обучающихся 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/07-Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся 2026 .pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/08-Положение о порядке и основаниях перевода, отчисления и восстановления обучающихся 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Положение о порядке и основаниях перевода, отчисления и восстановления обучающихся 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/09-Правила приема на обучение по программам дополнительного образования 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Правила приема на обучение по программам дополнительного образования 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/10-Положение о порядке и основаниях перевода, отчисления и восстановления обучающихся 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Положение о порядке и основаниях перевода, отчисления и восстановления обучающихся 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/11-Правила оказания платных образовательных услуг 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Правила оказания платных образовательных услуг 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/12-Об утверждении стоимости обучения 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Об утверждении стоимости обучения 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/13-Договор_Несовершеннолетние оказания_дистанционных_образовательных_услуг_ ИП_Пристинская 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Договор "Несовершеннолетние" оказания дистанционных образовательных услуг ИП Пристинская 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/14-Договор Совершеннолетние_оказания_дистанционных_образовательных_услуг_ИП_Пристинская 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Договор "Совершеннолетние" оказания дистанционных образовательных услуг ИП Пристинская 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/16-Отчет о результатах самообследования Индивидуального предпринимателя Пристинской А.А. 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Отчет о результатах самообследования Индивидуального предпринимателя Пристинской А.А. 2026
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/17-1-приказ об отчислении 2026.docx")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Приказ об отчислении 02.2026 г.
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/17-2-об отчислении 2026-avg.docx")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Приказ об отчислении 03.2026 г.
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/17-3-об отчислении 2026.docx")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Приказ об отчислении 04.2026 г.
                        </a>
                    </h4>

                    <h4>
                        <a href="{{asset("documents/2026-2027/03-Политика в области персональных данных 2026.pdf")}}"
                           style="color: #0d75c1"
                           target="_blank">
                            Приказ о зачислении от 26 августа 2025 г.
                        </a>
                    </h4>
                </div>

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@endsection