@extends('layouts.site-container')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('assets/cms/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/cms/css/owl-carousel/owl.theme.min.css')}}">
@endsection
@section('title', __("site-pages.offer-agreement"))
@section('header-tools')
    <ul class="breadcrumb justify-content-start">
        <li class="breadcrumb-item"><a href="{{ route('site.index') }}"><i class="ti ti-home"></i></a></li>
        <li class="breadcrumb-item active">{{ __("site-pages.about-us") }}</li>
    </ul>
@endsection
@section('content')
    <div class="widget widget-12 has-shadow">
        <div class="widget-body">

            <div class="about-body mt-3">
                <p>Дата размещения 25 сентября 2020 года.</p>
                <p>Настоящая публичная Оферта (в дальнейшем — Договор) является официальным предложением Индивидуального предпринимателя Пристинской Алены Алексеевны, ИНН 280111660440 (далее по тексту – Исполнитель) в соответствии со статьей 435 и частью 2 статьи 437 Гражданского кодекса РФ в адрес любого лица (физического лица), обладающего дееспособностью и необходимым полномочием заключить договор оказания услуг в сервисе LINGVAKIT (ЛингваКит) с Исполнителем на условиях, определенных в настоящей оферте, и содержит все существенные условия договора.</p>
                <p>Текст настоящего Договора-оферты (далее по тексту — Договор/Оферта/Договор-оферта/Договор оказания услуг) расположен по адресу: www.lingva-kit.ru</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>1. Термины и определения</h3>
            </div>
            <div class="about-body">
                <p>1.1.В целях настоящего документа нижеприведенные термины используются в следующем значении:</p>
                <p>Оферта —настоящий документ, размещенный в сети Интернет;</p>
                <p>Акцепт Оферты —полное и безоговорочное принятие Оферты путем осуществления действий, указанных в Оферте. Акцептом оферты заключается Договор оказания услуг, указанных в п:2.1 настоящего Договора;</p>
                <p>Договор оказания услуг —договор между Пользователем и Исполнителем на оказание Услуг в LINGVAKIT, который заключается посредством Акцепта Оферты;</p>
                <p>Исполнитель — Индивидуальный предприниматель Пристинская Алена Алексеевна, ИНН 280111660440  ОГРНИП: 320508100275828.</p>
                <p>Заказчик –любое физическое лицо, акцептовавшее публичную оферту на условиях настоящей оферты.</p>
                <p>Регистрация — заполнение учетных данных (email, пароль и др.) в регистрационной форме на Сервисе www.lingvakit.ruПо результату регистрации автоматически создается персональный аккаунт Заказчика (Личный кабинет) для осуществления доступа и пользования услугами Сервиса сайта www.lingvakit.ru.</p>
                <p>Банковская карта —расчетная или кредитная карта, являющаяся инструментом безналичных расчетов, предназначенная для совершения Заказчиком операций с денежными средствами, находящимися на его банковских счетах, или с денежными средствами, предоставленными в кредит в соответствии с законодательством Российской Федерации, а также договором банковского счета, или в пределах установленного лимита, в соответствии с условиями кредитного, при условии, что такая расчетная или кредитная карта может быть использована Заказчиком для оплаты услуг Исполнителя.</p>
                <p>Личный кабинет –раздел Сайта Исполнителя, защищенный системой контроля доступа, обеспечивающий Заказчику интерфейс для взаимодействия с Исполнителем по Договору.</p>
                <p>Сервис LINGVAKIT (ЛингваКит) — сервис (набор инструментов), по средствам которого оказываются услуги в рамках данного Договора и размещенный по адресу: www.lingva-kit.ru.</p>
                <p>1.2.В случае отсутствия толкования термина в тексте Оферты следует руководствоваться толкованием термина, определенным: в первую очередь —законодательством РФ, во вторую очередь—сложившимся (общеупотребимым) в сети Интернет.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>2. Предмет Договора</h3>
            </div>
            <div class="about-body">
                <p>2.1. Исполнитель обязуется оказывать Заказчику услуги в виде дистанционных занятий и индивидуальных консультаций по английскому и китайскому языкам (далее – Услуги), а Заказчик обязуется принять и оплатить оказанные услуги в соответствии с условиями настоящего договора (публичной оферты).
                <p>После регистрации Заказчика в порядке, определенным настоящим договором, ему предоставляется Личный кабинет в ресурсе LINGVAKIT по средствам которого осуществляется оказание услуг в виде дистанционных занятий или индивидуальных консультаций. Цена дистанционных занятийопределяются Исполнителем в одностороннем бесспорном порядке и указываются на страницах сайта, расположенного по интернет-адресу: www.lingvakit.ru.В случае необходимости по желанию Заказчика он может приобрести в порядке, определенным настоящим договором, индивидуальные консультации, оплатив их стоимость, которая оговаривается в индивидуальном порядке.</p>
                <p>2.2. Получить услуги, предусмотренные настоящим договором, могут только зарегистрированные Заказчики.</p>
                <p>2.3. Исполнитель не несет ответственности за точность и правильность информации, предоставляемой Заказчиком при регистрации.</p>
                <p>2.4. Заказчик, зарегистрировавшийся на сайте www.lingvakit.ruполучает индивидуальную идентификацию путем предоставления логина и пароля. Индивидуальная идентификация Заказчика позволяет избежать несанкционированных действий третьих лиц от имени Заказчика и открывает доступ к дополнительным сервисам. Передача Заказчиком логина и пароля третьим лицам запрещена. Заказчик самостоятельно несёт ответственность за все возможные негативные последствия, в случае передачи логина и пароля третьим лицам.</p>
                <p>2.5 Оказание услуг в виде дистанционных занятий осуществляется посредством Интернет, с использованием программного обеспечения, обеспечивающего голосовую и видео связь через интернет между Клиентом и Исполнителем (Skype, Zoom, другие подобные программы). Оказание услуг по индивидуальным консультациям осуществляется по средствам личных встреч по согласованному с Заказчиком адресу.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>3. Акцепт Оферты</h3>
            </div>
            <div class="about-body">
                <p>3.1. Акцепт настоящей Оферты представляет собой ряд последовательных действий Заказчика, направленных на заключение Договора оказания услуг (услуг), а именно — прохождение Регистрации в Сервисе LINGVAKIT путем указания адреса электронной почты, пароля (и/или использования аккаунта Исполнителя в социальных сетях), подтверждение согласия с договором и последующей оплаты за оказываемые услуги.</p>
                <p>3.2. Акцепт настоящей Оферты означает принятие Заказчиком всех условий взаимодействия с Исполнителем, указанных в настоящем договоре. Акцептируя настоящую оферту, Заказчик выражает согласие в том, что:</p>
                <p>- регистрационные данные (в том числе персональные данные) указаны им добровольно</p>
                <p>— регистрационные данные (в том числе персональные данные) передаются в электронной форме по открытым каналам связи сети «Интернет»</p>
                <p>— регистрационные данные (в том числе персональные данные) могут быть использованы Исполнителем в целях продвижения услуг, путем осуществления прямых контактов с Заказчиком с помощью каналов связи</p>
                <p>— регистрационные данные (в том числе персональные данные) могут быть использованы Исполнителем в целях направления Заказчику рекламы и информации от Исполнителя по сетям электросвязи, в том числе через Интернет, в соответствии со ст.18 Ф3 «О рекламе» от 13.03.2006 г.</p>
                <p>— в целях дополнительной защиты от мошеннических действий указанные Заказчиком регистрационные данные (в том числе персональные данные) могут быть переданы банку, осуществляющему транзакции по оплате оформленных на сайте www.lingvakit.ruуслуг</p>
                <p>— данное Заказчиком согласие на обработку его регистрационных данных (в том числе персональных данных) является бессрочным и может быть отозвано Заказчиком или его законным представителем, подачей письменного заявления, переданного Исполнителю</p>
                <p>3.3. Лицо, прошедшее Регистрацию и получившее доступ в Личный кабинет, совершением указанных действий подтверждает, что ознакомлено с условиями настоящей Оферты, полностью их понимает и акцептует ее в полном объеме.</p>
                <p>3.4. Изменение положений настоящего договора производится Исполнителем в одностороннем порядке. Уведомление об изменениях осуществляется Исполнителем путем размещения информации об этом на сайте по адресу www.lingvakit.ru.</p>
                <p>3.5. Все изменения (дополнения), вносимые Исполнителем в настоящий Договор, вступают в силу и становятся обязательными для Сторон немедленно после их размещения на сайте www.lingvakit.ru.</p>
                <p>3.6. Все приложения, изменения и дополнения к настоящему Договору, являются его составной и неотъемлемой частью. Принятие новой редакции настоящего Договора производится действиями Заказчика по дальнейшему использованию Сервиса.</p>
                <p>3.7. Принимая настоящий Договор, Заказчик дает свое согласие на получение информации о работе Сервиса LINGVAKIT через контактные данные, предоставленные Заказчиком при его Регистрации в Сервисе LINGVAKIT. Такие информационные уведомления согласовываются Сторонами как необходимые для защиты интересов Заказчика в Сервисе LINGVAKIT. Согласие Заказчика на информирование предоставляется Исполнителю на весь период действия Договора-оферты.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>4. Права и обязанности сторон</h3>
            </div>
            <div class="about-body">
                <div class="section-title mt-5 mb-3">
                    <h4>4.1. Исполнитель обязуется:</h4>
                </div>
                <p>- С момента заключения настоящего Договора обеспечить в полной мере все обязательства перед Заказчиком в соответствии с условиями настоящего договора и действующего законодательства. Исполнитель оставляет за собой право невыполнения обязательств по Договору в случае возникновения обстоятельств непреодолимой силы.</p>
                <p>- При оказании Услуг по Договору обеспечить возможность доступа Заказчика к ресурсам, расположенным на сервисеLINGVAKIT через Клиентский интерфейс с использованием логина и пароля Заказчика.</p>
                <p>- Обеспечить конфиденциальность информации, предоставляемой сервисом Заказчику и конфиденциальность данным, полученных от Заказчика. Стороны согласились, что условие сохранения конфиденциальности регистрационных данных (включая персональные данные), указанных Заказчиком при регистрации в LINGVAKIT и/или при заключении Договора, не распространяется на случаи использования LINGVAKIT таких данных в целях формирования Исполнителю счетов на оказание информационных Услуг и актов сдачи-приемки Услуг.</p>
                <p>- Обрабатывать персональные данные Заказчика в порядке, установленном действующим законодательством и политикой Исполнителя в отношении организации обработки и обеспечения безопасности персональных данных.</p>
                <p>- В случае достижения цели обработки персональных данных Исполнитель обязуется прекратить обработку персональных данных или обеспечить ее прекращение (если обработка персональных данных осуществляется другим лицом, действующим по поручению Исполнителя) и уничтожить персональные данные или обеспечить их уничтожение (если обработка персональных данных осуществляется другим лицом, действующим по поручению Исполнителя) в срок, не превышающий тридцати дней с даты достижения цели обработки персональных данных, если иное не предусмотрено договором, стороной которого, выгодоприобретателем или поручителем по которому является Заказчик, иным соглашением между Исполнителем и Заказчиком.</p>
                <p>- В случае отзыва Заказчика согласия на обработку его персональных данных Исполнитель обязуется прекратить их обработку или обеспечить прекращение такой обработки (если обработка персональных данных осуществляется другим лицом, действующим по поручению Исполнителя) и в случае, если сохранение персональных данных более не требуется для целей обработки персональных данных, уничтожить персональные данные или обеспечить их уничтожение (если обработка персональных данных осуществляется другим лицом, действующим по поручению Исполнителя) в срок, не превышающий тридцати дней с даты поступления указанного отзыва, если иное не предусмотрено договором, стороной которого, выгодоприобретателем или поручителем по которому является Заказчик.</p>

                <div class="section-title mt-5 mb-3">
                    <h4>4.2.Исполнитель имеет право:</h4>
                </div>
                <p>- Изменять настоящий Договор, Тарифы на оказываемые услуги, способы и сроки оплаты в одностороннем порядке, помещая их на страницах сайта www.lingvakit.ru. Все изменения вступают в силу немедленно после публикации, и считаются доведенными до сведения Заказчика с момента такой публикации.</p>
                <p>- без согласования с Заказчиком, передавать свои права и обязанности по исполнению Договора третьим лицам.</p>
                <p>- направлять Заказчику сообщения рекламно-информационного характера посредством e-mail и sms-рассылок с информацией о скидках, акциях и т.п. Частота рассылок определяется Исполнителем самостоятельно, в одностороннем порядке.</p>
                <p>- изменять условия Акций, размещённых на сайте www.lingvakit.ru, в одностороннем порядке без согласия Заказчика, путём размещения таких изменений на сайте www.lingvakit.ru.</p>
                <p>- временно приостановить оказание Заказчику информационных Услуг по Договору по техническим, технологическим или иным причинам, препятствующим оказанию Услуг, на время устранения таких причин.</p>
                <p>— временно или навсегда прекратить доступ Заказчика к системе за нарушения правил сервиса без объяснения причины.</p>
                <p>— Приостановить доступ Заказчика к системе и расторгнуть Договор в одностороннем порядке в случае причинение ущерба деловой репутации сервиса LINGVAKIT и/или распространения заведомо ложной и/или порочащей репутацию информации о сервисе LINGVAKIT, в том числе, но не ограничиваясь, использованием социальных сетей, массовых почтовых e-mail сообщений и прочих ресурсов в интернете.</p>
                <p>— использовать обезличенные данные от заказчиков для улучшения качества работы онлайн-инструментов и проведения исследовательской деятельности с дальнейшей презентацией итогов исследований в открытом доступе (в обезличенном, агрегированном виде).</p>
                <p>— заблокировать доступ Заказчика к его Личному кабинету в случае фиксации подозрительной активности со стороны Заказчика.</p>

                <div class="section-title mt-5 mb-3">
                    <h4>4.3. Заказчик обязуется:</h4>
                </div>
                <p>- До момента заключения Договора ознакомиться с содержанием и условиями Договора, стоимостью услуг, предлагаемыми Исполнителем на сайте www.lingvakit.ru, либо оговорённой с Исполнителем в индивидуальном порядке.</p>
                <p>- Во исполнение Исполнителем своих обязательств перед Заказчиком последний должен сообщить все необходимые данные, однозначно идентифицирующие его как Заказчика, и достаточные для оказания ему услуг Исполнителем.</p>
                <p>- Оплачивать предоставляемые услуги на условиях настоящего договора.</p>
                <p>— При подготовке и введении необходимых для использования сервиса данных соблюдать все требования LINGVAKIT к предоставляемым данным.</p>
                <p>— Не злоупотреблять предоставленными Заказчику возможностями по использованию инструментов по Договору, в частности, не использовать инструменты с целью принести ущерб третьим лицам или сервису LINGVAKIT.</p>
                <p>— Не использовать самостоятельно или с привлечением третьих лиц оказание информационных Услуг и/или возможности сервиса LINGVAKIT в целях, которые могут быть квалифицированы как нарушение прав третьих лиц. Не осуществлять действий, которые влияют на нормальную работу сервиса и инструментов LINGVAKIT, а также являются его недобросовестным использованием.</p>
                <p>— Не передавать третьим лицам свой логин и пароль. Все действия, осуществленные в Сервисе LINGVAKIT с использованием логина и пароля Заказчика, считаются осуществленными Заказчиком. Заказчик самостоятельно несет ответственность перед третьими лицами за все действия, совершенные с использованием его логина и пароля. Исполнитель не несет ответственности за несанкционированное использование регистрационных данных Заказчика третьими лицами.</p>
                <p>- Поддерживать актуальными и соответствующими действительности сведения, содержащиеся в Личном кабинете Заказчика. В срок не позднее 3 (трех) рабочих дней с даты изменений в сведениях о Заказчике, внести соответствующие изменения, содержащиеся в Личном кабинете. Актуализация реквизитов производится Заказчиком самостоятельно посредством внесения соответствующих изменений в Личном кабинете.</p>

                <div class="section-title mt-5 mb-3">
                    <h4>4.4.Заказчик имеет право:</h4>
                </div>
                <p>- отказаться от получения e-mail и sms-рассылок, для этого ему нужно нажать соответствующую кнопку в информационном письме или отправить сообщение в ответ на соответствующее информационное письмо с помощью электронной почты или направить письмо на электронный адрес Исполнителя, указанный в реквизитах Договора-оферты, без указания причины и дополнительных расходов.</p>
                <p>— использовать предоставленные сервисом инструменты в соответствии со своими нуждами для получения информации, которую они предоставляют.</p>
                <p>— управлять возможностями своего аккаунта согласно возможностям, предоставляемым сервисом.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>5. Стоимость услуг, порядок оплаты и принятие услуг</h3>
            </div>
            <div class="about-body">
                <p>5.1. Исполнитель предоставляет Заказчику полную и достоверную информацию о стоимости дистанционно оказываемых услуг в разделе «Курсы», либо оговорённую в индивидуальном порядке стоимость индивидуальных консультаций.</p>
                <p>5.2. Исполнитель имеет право в одностороннем порядке изменить стоимость любыхоказываемых услуг. В случае изменения стоимости оказываемых услуг, Исполнитель размещает об этом информацию на сайте www.lingvakit.ruне позднее, чем за одни сутки до соответствующего изменения.</p>
                <p>5.3. Обязательства Заказчика по оплате услуг считаются исполненными с момента поступления денежных средств на счет Исполнителя.</p>
                <p>5.4.Заказчик самостоятельно несет ответственность за правильность производимых им платежей.</p>
                <p>5.5. Заказчик самостоятельно оплачивает все услуги организаций связи необходимые для потребления им Услуг Исполнителя.</p>
                <p>5.6. Услуги оказываются Заказчику на условиях предварительной оплаты. Заказчик производит авансовый платеж в размере 100% (Сто процентов) от общей стоимости заказываемых Услуг посредством способов оплаты, указанных на сайте www.lingvakit.ru. Стоимость оказания Услуг, оказываемых сервисом, не подлежит обложению НДС в соответствии с пунктом 2 ст. 346.11 Налогового Кодекса Российской Федерации</p>
                <p>5.7. Заказчик вправе оплатить услуги Исполнителя с помощью сервиса Яндекскасса, предоставляющего различные способы оплаты. В этом случае оплата Заказчика осуществляется безналичными денежными средствами (ЭДС), информация о платеже через ОФД передается в налоговый орган Исполнителя, фискальный чек направляется Заказчику на указанный им адрес электронной почты (e-mail), а в Личном кабинете Заказчика будет размещена ссылка на чек по операции (с одобрения Федеральной Налоговой Службы на основании письма №ЕД-4-20/2633 от 12.02.2018 и в соответствии с Федеральным законом №54).</p>
                <p>5.8. Исполнитель не гарантирует возможность проведения операций по Банковской карте.</p>
                <p>5.9. Заказчик гарантирует, что он является держателем банковской карты, осознанно, корректно и полностью вводит все требуемые реквизиты Банковской карты осуществлении оплаты услуг Исполнителя.</p>
                <p>5.10. Исполнитель не несёт ответственности за неработоспособность и/или временную неработоспособность платежных сервисов. Заказчик самостоятельно контролирует исполнение своей обязанности по оплате по Договору. При неработоспособности и/или временной неработоспособности платежной системы Заказчик обязан использовать иные способы исполнения обязанностей по Договору.</p>
                <p>5.11. Стороны установили, что Услуги считаются оказанными Исполнителем надлежащим образом и принятыми Заказчиком в указанном объеме, если в течение 5 (пяти) календарных дней с момента окончания периода оказания Услуг Исполнитель не получил от Заказчика мотивированных письменных возражений. По истечении срока, указанного выше, претензии относительно недостатков Услуг, в том числе по количеству (объему), стоимости и качеству не принимаются.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>6. Отзыв Оферты</h3>
            </div>
            <div class="about-body">
                <p>6.1. Отзыв оферты (Договора) может быть осуществлён Исполнителем в любое время, но это не является основанием для отказа от обязательств Исполнителя по уже заключённым договорам. Исполнитель обязуется разместить уведомление об отзыве оферты на сайте www.lingvakit.ru, с указанием точного времени отзыва оферты, не менее чем за 12 часов до факта наступления события отзыва (приостановки) действия Оферты.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>7. Ответственность сторон</h3>
            </div>
            <div class="about-body">
                <p>7.1. Стороны несут ответственность за неисполнение или ненадлежащее исполнение условий настоящего Договора в порядке, предусмотренном данным Договором и действующим законодательством Российской Федерации.</p>
                <p>7.2. Стороны освобождаются от ответственности за полное или частичное неисполнение обязательств по настоящему Договору, если такое неисполнение является следствием действия обстоятельств непреодолимой силы («форс-мажорных обстоятельств»), то есть чрезвычайных и непредотвратимых при данных условиях обстоятельств, в том числе массовых беспорядков, запретительных действий властей, пожаров, стихийных бедствий, катастроф и других обстоятельств, признанных таковыми, Торгово-промышленной палатой региона соответствующей Стороны.</p>
                <p>7.3. Стороны обязаны в письменной форме уведомить друг друга посредством отправки электронного письма о существовании форс-мажорных обстоятельств в течение 7 (семи) календарных дней с момента их наступления.</p>
                <p>7.4. Если наступление форс-мажорных обстоятельств непосредственно повлияло на исполнение сторонами своих обязательств в срок, установленный в Договоре оказания услуг, то такой срок соразмерно продлевается на время действия таких обстоятельств.</p>
                <p>7.5. Никакие положения настоящей Оферты не исключают и не ограничивают ответственности Сторон за умышленные нарушения ее условий; за мошеннические действия и заведомо ложные заверения и/или гарантии; за неправомерное использование Конфиденциальной информации.</p>
                <p>7.6. Исполнитель ни при каких обстоятельствах не несет никакой ответственности по Договору за: а) какие-либо действия/бездействие, являющиеся прямым или косвенным результатом действий/бездействия Заказчика и/или третьих лиц; б) какие-либо косвенные убытки и/или упущенную выгоду Заказчика и/или третьих сторон вне зависимости от того, мог Исполнитель предвидеть возможность таких убытков или нет; в) использование (невозможность использования) и какие бы то ни было последствия использования (невозможности использования) Заказчиком выбранной им формы оплаты Услуг по Договору, а равно использование/невозможность использования Заказчиком и/или третьими лицами любых средств и/или способов передачи/получения Услуг.</p>
                <p>7.7. Совокупный размер ответственности Исполнителя, включая размер штрафных санкций (пеней, неустоек) и/или возмещаемых убытков, по любому иску или претензии в отношении Договора или его исполнения, ограничивается 10% (Десять процентов) от стоимости Услуг согласно их стоимости.</p>
                <p>7.8. Заказчик несет ответственность в полном объеме за: а) соблюдение всех требований законодательства, в отношении содержания и заполнения форм инструментов сервиса, которые предоставлен доступ в системе LINGVAKIT; б) достоверность сведений, указанных им при регистрации в качестве Заказчика, и достоверность гарантий и заверений Заказчика, содержащихся в настоящей оферте.</p>
                <p>7.9. В случае нарушения Заказчиком условий Договора Исполнитель вправе приостановить оказание информационных Услуг до момента устранения Заказчиком допущенных нарушений и возмещения (компенсации) причиненных сервису таким нарушением убытков в полном объеме и/или расторгнуть Договор с направлением соответствующего уведомления Заказчику по адресу электронной почты, указанному при регистрации. При расторжении Договора по указанному основанию Исполнитель вправе путем удержания взыскать с Заказчика предъявленные в соответствии с Договором суммы неустоек и убытков.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>8. Заверения об обстоятельствах</h3>
            </div>
            <div class="about-body">
                <p>8.1. Заверения Заказчика, изложенные в настоящем разделе Договора, являются заверениями об обстоятельствах, имеющими существенные значение для Исполнителя. Заказчик соглашается с тем, что Исполнитель полагается на такие заверения при заключении и исполнении Договора.</p>
                <p>8.2. Производя Акцепт Оферты, Заказчик подтверждает и гарантирует Исполнителю, что указал достоверные данные, в том числе персональные данные при регистрации.</p>
                <p>8.3. Заказчик дает согласие на обработку Исполнителем персональных данных, указанных при заключении Договора, в том числе на совершение Исполнителем действий, предусмотренных п. 3 ст. 3 Федерального закона от 27.07.2006 года № 152-ФЗ «О персональных данных», любыми способами, для целей заключения и исполнения Договора.</p>
                <p>8.4. Заказчик заключает договор добровольно и при этом: а) полностью ознакомился с условиями Оферты, б) полностью понимает предмет Оферты и Договора, в) полностью понимает значение и последствия своих действий в отношении заключения и исполнения Договора, г) обладает всеми правами и полномочиями, необходимыми для заключения и исполнения Договора.</p>
                <p>8.5. В течение срока действия Договора Исполнитель предпримет все усилия для устранения каких-либо сбоев и ошибок, в случае их возникновения, в максимально короткие сроки. При этом Исполнитель не гарантирует отсутствия ошибок и сбоев при работе в системе и в работе сторонних сервисов, в том числе в отношении работы программного обеспечения.</p>
                <p>8.6. За исключением гарантий, прямо указанных в тексте Оферты, Исполнитель не предоставляет никаких иных гарантий по Договору и прямо отказывается от каких-либо гарантий или условий в отношении не нарушения прав, соответствия информационных Услуг конкретным целям Заказчика.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>9. Конфиденциальность</h3>
            </div>
            <div class="about-body">
                <p>9.1. Стороны соглашаются сохранять в тайне и считать конфиденциальным Договор оказания услуг, а также всю информацию, полученную одной Стороной от другой Стороны и обозначенную передающей Стороной как конфиденциальная информация такой передающей Стороны (далее — «Конфиденциальная информация»), не раскрывать, не разглашать, не обнародовать или иным способом не предоставлять такую информацию какой-либо третьей стороне без предварительного письменного разрешения Стороны, передающей эту информацию, за исключением случаев, предусмотренных законодательством Российской Федерации.</p>
                <p>9.2. Каждая из Сторон предпримет все необходимые меры для защиты Конфиденциальной информации с такой же степенью тщательности, с какой предпринимает необходимые меры разумное добросовестное лицо. Доступ к Конфиденциальной информации будет предоставлен только тем сотрудникам каждой из Сторон, которым он обоснованно необходим для выполнения трудовых (служебных) обязанностей, направленных на исполнение настоящего Договора. Каждая из Сторон обяжет таких своих сотрудников принять те же обязательства в отношении Конфиденциальной информации, которые накладываются настоящим Договором на соответствующую Сторону.</p>
                <p>9.3. Конфиденциальная информация всегда остается собственностью передающей эту информацию Стороны и не должна копироваться или иным способом воспроизводиться без предварительного письменного согласия такой передающей Стороны.</p>
                <p>9.4. Обязательство сохранять в тайне Конфиденциальную информацию в соответствии с условиями настоящего раздела вступает в силу с момента акцепта настоящей Оферты Заказчиком и остается в силе в течение 3 (трех) лет после прекращения действия данного Договора-Оферты по какой-либо причине.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>10. Прочие условия</h3>
            </div>
            <div class="about-body">
                <p>10.1. Услуги, оказываемые в соответствии с настоящим договором, не являются образовательными. Исполнитель не имеет общей для всех репетиторов программы проведения занятий, методика и формат обучения определяется непосредственно Исполнителем индивидуально для каждого Заказчика. По результатам Исполнения настоящего договора Исполнитель не выдает каких-либо документов о достижении Заказчиком какого-либо уровня владения иностранным языком.</p>
                <p>10.2. Договор, его заключение и исполнение регулируется законодательством Российской Федерации.</p>
                <p>10.3. Все споры и разногласия Стороны будут пытаться решить путем переговоров. Срок рассмотрения претензии – 30 рабочих дней с момента ее получения стороной. Претензия направляется в виде письменного документа по адресу места нахождения стороны. В случае, если стороны не смогли урегулировать возникшие противоречия мирным способом, то спор подлежит рассмотрению судом по месту фактического осуществления деятельности Исполнителя (г. Москва).</p>
                <p>10.4. Любые уведомления по Договору могут направляться одной Стороной другой Стороне: по электронной почте; почтой с уведомлением о вручении или курьерской службой с подтверждением доставки.</p>
                <p>10.5. Не вступая в противоречие с условиями Оферты, Заказчик и Исполнитель вправе в любое время оформить Договор в форме письменного двухстороннего документа.</p>
            </div>

            <div class="section-title mt-5 mb-3">
                <h3>11. Реквизиты Исполнителя</h3>
            </div>
            <div class="about-body">
                <p>ИП Пристинская Алена Алексеевна</p>
                <p>ОГРНИП: 320508100275828</p>
                <p>ИНН: 280111660440</p>
                <p>Телефон: +7 993 201 64 40</p>
                <p>E-mail: info@lingvakit.ru</p>
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
@endsection
