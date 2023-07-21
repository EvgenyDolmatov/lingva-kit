@extends('layouts.new-app')

@section('content')
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">Что о нас говорят?</h4>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="{{asset('assets/promo-site/images/reviews-bg.jpg')}}" alt="" class="img-responsive"/></div>
    </section>
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Отзывы клиентов</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">
                            <a href="{{route('site.index')}}">Главная</a><i> / </i>
                            Отзывы
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bmargin">
                    <div id="review1" class="blog1-post-info-box">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review1.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Инна Русецкая</h4>
                                <p>Мой ребенок с 2019 года занимается китайским языком. Почему именно
                                    китайским, ведь я сама учитель английского и французского языков???
                                    Потому что начертание иероглифов ребенку казалось совсем неординарным делом, это
                                    ведь
                                    "не просто буквы". Начали с малого, просто для того, чтобы поддерживать интерес к
                                    изучению языков, о потом по-тихоньку, малыми шагами, мы дошли и до экзамена
                                    HSK1.<br><br>

                                    Было нелегко - пандемия, перенос экзаменов, но мы справились. Дочь на первом
                                    экзамене
                                    получила 200 баллов из 200. Вот это была радость и мотивация продолжать дальше!
                                    Затем второй экзамен, HSK 2. Потом устный экзамен HSKK1 - и тоже успех. И вот в
                                    начале
                                    2022 года сдавали HSK 3.<br><br>

                                    Каждый раз, когда забираем сертификат, это все больше и больше мотивирует ребенка
                                    двигаться дальше. Пусть невсегда легко, а иногда и трудно, она все равно идет
                                    вперед.<br><br>

                                    Волшебный китайский язык? Нет. Это педагог, который нашел подход к моему сложному
                                    уже
                                    подростку. Алена Алексеевна, спасибо Вам!</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review2" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review2.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Ирина Урядченко</h4>
                                <p>Хотела бы рассказать о нашем пути в изучении китайского языка. А
                                    точнее, о том, как его
                                    изучает моя дочь Маша. Изначально тема китайского языка привлекала своей
                                    необычностью и
                                    уникальностью (все-таки в основной массе дети учат английский и другие европейские
                                    языки). Но китайский язык в сочетании с культурой и традициями вызывал определенный
                                    трепет и желание изучить и познать нечто непохожее на все остальное. Ну и не будем
                                    лукавить, тенденции современных мировых течений политики и экономики кричат нам о
                                    том,
                                    что китайское доминирование - это будущее всего мирового сообщества.<br><br>

                                    И вот, вооружившись такими настроениями, около 3 лет назад моя дочь ступила на путь
                                    познания и изучения китайского языка. И благодаря нашему замечательному педагогу
                                    Алене
                                    Алексеевне Пристинской, ее занятия не ограничиваются только языком. В конву занятий
                                    тесно вплетена информация об истории, культурных традициях, ценностях, обычаях и
                                    настроениях Китая. Алена Алексеевна следит за интересными событиями Поднебесной,
                                    праздниками. Угощала лунными пряниками). Ой, как это вкусно. А как приятно!<br><br>

                                    Но вернусь к обучению. Начинали в буквальном смысле с нуля. Маше на тот момент было
                                    12
                                    лет. Очень интересно. Но и сразу стало понятно, что будет непросто. Расслабляться
                                    нельзя. Много информации нужно было усваивать. Тяжело моментами. Но в любом деле
                                    главное
                                    - желание и труд. Труд обоюдный - и педагога и ученика!<br><br>

                                    Дочка очень старалась и через год был преодолен первый рубеж - экзамен HSK1. Сдавали
                                    в
                                    институте Конфуция при МГЛУ. Остоженка, настоящий большой серьезный университет,
                                    педагоги-китайцы, много соискателей! Все очень ответственно и волнительно! Но наш
                                    педагог был с нами в этот день. И это было важно! Остальное в руках ученика, главное
                                    быть уверенным в знаниях. А они (знания) были!! Итог порадовал - 190 баллов из 200
                                    возможных! И это твердая пятерка! Успех важен, т.к. дает импульс к дальнейшему труду
                                    и
                                    развитию. Дальше больше. Рука об руку с Аленой Алексеевной были взяты HSK2, HSKK,
                                    HSK3…
                                    и мы ни в коем случае не останавливаемся).<br><br>

                                    Небольшая передышка на лето и двигаемся дальше 😁! Хотим выразить огромную
                                    благодарность
                                    Алене Алексеевне за знания, которыми она делится со своими учениками, за терпение,
                                    за
                                    веру и профессионализм!!!</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review3" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review3.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Наталья Манжелли</h4>
                                <p>«Предложила сыну начать учить китайский язык, в шутку! А он согласился)
                                    Нам посоветовали обратиться к Алене Алексеевне.<br><br>

                                    Она предложила ознакомительный курс, который позволил понять: «Что такое китайский
                                    язык?» и «Хочу ли я стать носителем одного из древнейших языков?»
                                    Не знаю как, но после 8 занятий у сына желание не только не пропало, НО ребёнок
                                    поставил
                                    себе ЦЕЛЬ: выучить язык и поступить в китайский вуз!<br><br>

                                    Грамотно разработанная программа, дисциплина и главное «контакт» с ребёнком, умение
                                    замотивировать и заинтересовать дали свой результат уже через 8 мес! Первый экзамен
                                    200
                                    баллов из 200!<br><br>

                                    Ждём через 3 месяца следующий экзамен и уверены в аналогичном результате! Спасибо
                                    Алене
                                    Алексеевне! Не каждый учитель является педагогом!</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review4" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review4.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Анатолий Мамаев, 16 лет</h4>
                                <p>Алёна Алексеевна - это отличный учитель иностранных языков и страноведения, конкретно
                                    в моём случае - учитель китайского языка. Курс "Первые шаги в китайском" быстро
                                    научил меня азам китайского и настроил на нужный темп обучения.<br>
                                    По окончанию курса, Алёна Алексеевна сопровождала меня и других учеников в институт
                                    Конфуция в Москве на первый экзамен по китайскому: HSK 1. Благодаря методике Алёны
                                    Алексеевны и огромному количеству подготовительных материалов, экзамен был сдан
                                    идеально.<br>
                                    Дальше я хотел как можно быстрее освоить новые уровни владения языком, из-за этого
                                    HSK 2 и 3 давались заметно сложнее, за километр было слышно как шевелились извилины
                                    на уроках, я еле успевал выполнять домашнее задание. Все старания окупались
                                    ежегодно: один год обучения - один сданный экзамен. Я очень доволен!</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review5" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review5.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Екатерина Назарук, 20 лет</h4>
                                <p>Начинать что-то всегда сложно, но когда у тебя есть замечательный наставник все
                                    становится намного легче. Безумно благодарна Алене Алексеевне за все те знания,
                                    которые были вложены в меня.<br>
                                    Занятия всегда были структурированы, не было скучно. Всегда присутствовал формат
                                    игры, что для ребенка очень важно, ведь через игровой формат, ребенок может изучить
                                    больше материала. Подобранный материал для занятий был очень емким и интересным.<br>
                                    Насчет домашнего задания: оно подбиралось настолько тщательно, что мне всегда было
                                    интересного делать. А так же, несмотря на лично мою загруженность музыкальной школой
                                    и тренировками, дз подбиралось так, чтобы я максимально закрепила материал.<br>
                                    Благодаря этому уже через год, смогла сдать HSK 1 на высокий был, так же это
                                    подтолкнуло меня еще больше углубиться в изучение китайского языка. Еще раз хочу
                                    выразить огромную благодарность!</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review6" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review6.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Арина Бондаренко, 18 лет</h4>
                                <p>Замечательный мир китайского языка открыли для меня уроки Алены Алексеевны.<br>
                                    Китайский – это моя мечта, которую воплотить в реальность мне помогла Алена
                                    Алексеевна. Она научила меня любить и эффективно изучать язык. В ходе обучения моя
                                    жизнь стала интереснее: я участвовала в различных олимпиадах и конкурсах. И не могла
                                    отказать себе в удовольствии сдать ЕГЭ по китайскому языку! В 2022 году я стала
                                    студенткой Чжецзянского университета! Более того, мои знания позволили мне сдать
                                    экстерном экзамены за первый курс и я сразу начала учиться на втором! Экономия —
                                    целый год!<br>
                                    Большое спасибо преподавателю и наставнику — Алене Алексеевне за путешествие в мир
                                    китайской культуры длиною в жизнь!</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review7" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review7.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Ирина Александровна Петрова, 42 года</h4>
                                <p>Ирина Александровна: «Второй год занимаюсь изучением китайского языка с Аленой
                                    Алексеевной Пристинской на курсе «Первые шаги в китайском». Занятия проходят онлайн,
                                    дважды в неделю. Хотелось бы чаще, но время не позволяет.<br>
                                    Алена Алексеевна - прекрасный специалист, с ее помощью я смогла хорошо
                                    подготовиться и сдать экзамен HSK-1 с результатом 198 баллов из 200.<br>
                                    Хотелось бы отметить ее умение раскрыть в ученике его способности, желание изучать
                                    не только язык, но и культуру Китая. Всем рекомендую заниматься именно здесь!»</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="review8" class="blog1-post-info-box mt-1">
                        <div class="text-box border padding-3">
                            <div class="iconbox-medium left round overflow-hidden">
                                <img src="{{asset('assets/promo-site/images/reviews/review8.jpg')}}" alt
                                     class="img-responsive"/>
                            </div>
                            <div class="text-box-right more-padding-2">
                                <h4>Анна Абрамова</h4>
                                <p>Мне нравится изучать иностранные языки, но к методам изучения я предъявляю очень
                                    большие требования. Важно, чтобы был соблюден баланс между упражнениями на
                                    грамматику, лексику и фонетику, а также, чтобы работа велась с 4 базовыми навыками:
                                    разговором, аудированием, чтением и письмом. Материалы должны быть нескучными. Всё
                                    это и даже более того я нашла на уроках Алёны Алексеевны (墨岚 Mòlán). На каждом
                                    уроке я получаю драгоценные знания, возможность попрактиковаться, вдохновение на
                                    изучение большего материала самостоятельно, много положительнэх эмоций и
                                    эстетическое удовольствие от прекрасно составленных презентаций.<br>
                                    Личность преподавателя, его профессионализм, опыт и харизма играют огромную роль в
                                    успехе обучения. Алёна Алексеевна — удивительный, талантливый человек с уникальным
                                    опытом, с ней очень интересно.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@endsection

@section('scripts')
    <script type="text/javascript"
            src="{{asset('assets/promo-site/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/promo-site/js/cubeportfolio/main.js')}}"></script>
@endsection