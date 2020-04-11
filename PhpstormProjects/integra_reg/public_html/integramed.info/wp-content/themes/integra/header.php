<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?$GLOB['protocol'] = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";?>

    <base href="<?=$GLOB['protocol'].$_SERVER["HTTP_HOST"]?>">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/fancybox/jquery.fancybox.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="<?=get_template_directory_uri()?>/js/bootstrap.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/fancybox/jquery.fancybox.js"></script>
    <script src="<?=get_template_directory_uri()?>/fancybox/jquery.fancybox.pack.js"></script>

    <?php
    if (is_front_page()) print '<script src="//cdn.jsdelivr.net/jquery.touchswipe/1.6.5/jquery.touchSwipe.min.js"></script>';  ?>
    <script src="<?=get_template_directory_uri()?>/js/scrips.js?v=14"></script>
    

    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139306911-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-139306911-1');
    </script>


</head>
<body>
<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-sm-4">
                <!--         Ссылка с логотипом и текстом-->
                <a class="navbar-brand row align-self-center" href="/">
                    <img src="/uploaded/logo_n.png" class="align-top pr-0" alt="КЛИНИКА РЕСПИРАТОРНОЙ МЕДИЦИНЫ ИНТЕГРАМЕД"/>

                </a>
            </div>
            <div class="col-12 col-md-2 col-sm-8 phone-wrapper heading-bold text-primary">

                <span class="phone col-6 col-md-12 p-md-0"></i><a href="tel:84956629924" rel="nofollow">8 495 662-99-24</a></span>

                <span class="phone col-6 col-md-12 p-md-0"></i><a href="tel:88005550382" rel="nofollow">8 800 555-03-82</a></span>

            </div>
            <div class="col-12 col-md-5 float-right text-right">
                <div class="align-content-center justify-content-center soc">
                    <span ><a rel="nofollow"  href="https://www.facebook.com/klinikarm/"><i class="fab fa-facebook text-primary"></i></a></span>
                    <span ><a rel="nofollow" href="https://vk.com/klinikarm"><i class="fab fa-vk   text-primary"></i></a></span>
                    <span ><a rel="nofollow" href="https://twitter.com/PulmonologyINT"><i class="fab fa-twitter  text-primary"></i></a></span>
                    <span ><a rel="nofollow" href="//www.youtube.com/channel/UCfmeP6mEga4grBRvtIeCdWw"><i class="fab fa-youtube  text-primary"></i></a></span>
                    <span ><a rel="nofollow" href="//www.yell.ru/moscow/com/otdelenie-pulmonologii-integramedservis-ooo_10694993/"><i class="fab text-primary fa-yahoo  "></i></a></span>


                    <span class="btn btn-primary m-1" data-toggle="modal" data-target="#forma-zapisi" >Запись онлайн</span>
                </div>
                <div class="address">
                    <i class="fas fa-map-marker-alt "></i>
                    <span>г. Москва, ст. м. Электрозаводская, Мажоров переулок, д. 7</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'menu-1',
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse justify-content-md-center',
                            'container_id' => 'main_menu',
                            'menu_class'      => 'navbar-nav',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
            <?php endif; ?>

    </nav>
</header>





<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?
$n = strtotime("now");
if($n > strtotime("2020/03/27") && $n < strtotime("2020/04/06")):?>
<div class="banner container">
    <div class="row">
		<p class="in-banner">С 30 марта по 5 апреля клиника работает в обычном режиме</p>
    </div>
</div>
<?endif?>
<main id="main" role="main" class="old-styles">

    <?if(is_front_page()){?>
        <div class="region region-before-content">
            <div id="block-block-1" class="block block-block">
                <div id="slider">
                    <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-main">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#carousel-main" class="active">
                                &nbsp;
                            </li>
                            <li data-slide-to="1" data-target="#carousel-main" class="">
                                &nbsp;
                            </li>
                            <li data-slide-to="2" data-target="#carousel-main" class="">
                                &nbsp;
                            </li>
                            <li data-slide-to="3" data-target="#carousel-main" class="">
                                &nbsp;
                            </li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img alt="First slide" src="/wp-content/themes/integra/img/slide1.jpg">
                                <div class="carousel-caption  text-left">
                                    <div class="slide-head heading-bold">
                                        Пульмонология
                                    </div>

                                    <div class="slide-desc">
                                        <ul>
                                            <li>
                                                Приём ведут врачи пульмонологи из НИИ пульмонологии
                                            </li>
                                            <li>
                                                Все лёгочные заболевания
                                            </li>
                                            <li>
                                                Годовые программы ведения пациентов с лёгочной патологией
                                            </li>
                                            <li>
                                                Узкая специализация врачей по отдельным лёгочным заболеваниям
                                            </li>
                                        </ul>
                                    </div>

                                    <p>
                                        <a class="btn btn-primary btn-lg slide-lnk" data-target="#forma-zapisi" data-toggle="modal" href="#" rel="noopener noreferrer">Записаться на консультацию</a>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img alt="Аллергология" src="/wp-content/themes/integra/img/2_new.jpg">
                                <div class="carousel-caption  text-left">
                                    <div class="slide-head heading-bold">
                                        Аллергология
                                    </div>

                                    <div class="slide-desc">
                                        <ul>
                                            <li>
                                                Все виды аллергологических тестов
                                            </li>
                                            <li>
                                                АСИТ
                                            </li>
                                            <li>
                                                Консультация опытных аллергологов
                                            </li>
                                            <li>
                                                Консультации взрослых и детей
                                            </li>
                                        </ul>
                                    </div>

                                    <p>
                                        <a class="btn btn-primary  btn-lg slide-lnk" data-target="#forma-zapisi" data-toggle="modal" href="#" rel="noopener noreferrer">Записаться на консультацию</a>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img alt="ЛОР" src="/wp-content/themes/integra/img/3.jpg">
                                <div class="carousel-caption  text-left">
                                    <div class="slide-head heading-bold">
                                        ЛОР (отоларингология)
                                    </div>

                                    <div class="slide-desc">
                                        <ul>
                                            <li>
                                                Диагностика и лечение заболеваний Уха, Горла, Носа
                                            </li>
                                            <li>
                                                Лечение гайморита без «проколов» и пункций
                                            </li>
                                            <li>
                                                Эндоскопическая диагностика
                                            </li>
                                            <li>
                                                Помощь взрослым и детям с ЛОР заболеваниями
                                            </li>
                                        </ul>
                                    </div>

                                    <p>
                                        <a class="btn btn-primary btn-lg  slide-lnk" data-target="#forma-zapisi" data-toggle="modal" href="#" rel="noopener noreferrer">Записаться на консультацию</a>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img alt="Сомнология" src="/wp-content/themes/integra/img/4.jpg">
                                <div class="carousel-caption  text-left">
                                    <div class="slide-head heading-bold">
                                        Сомнология
                                    </div>

                                    <div class="slide-desc">
                                        <ul>
                                            <li>
                                                Респираторно - сомнологический центр аккредитован в РОС (Российское Общество Сомнологов)
                                            </li>
                                            <li>
                                                Бессонница
                                            </li>
                                            <li>
                                                Храп
                                            </li>
                                            <li>
                                                Апноэ
                                            </li>
                                        </ul>
                                    </div>

                                    <p>
                                        <a class="btn btn-primary btn-lg slide-lnk" data-target="#forma-zapisi" data-toggle="modal" href="#" rel="noopener noreferrer">Записаться на консультацию</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="preference container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-3 col-md-12">
                            <img class="img-fluid" src="/wp-content/themes/integra/img/team.png" alt="Врачи">
                        </div>

                        <div class="col-9 col-md-12">
                            <p class="card-text">
                                Только у нас Вы можете попасть на прием к лучшим профильным врачам России.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-3 col-md-12">
                            <img class="img-fluid" src="/wp-content/themes/integra/img/medal.png" alt="Медаль">
                        </div>
                        <div class="col-9 col-md-12">
                            <p class="card-text">
                                Мы обладаем высококвалифицированными специалистами: пульмонологами, аллергологами и отоларингологами.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-3 col-md-12">
                            <img class="img-fluid" src="/wp-content/themes/integra/img/network.png" alt="Респираторные">
                        </div>
                        <div class="col-9 col-md-12">
                            <p class="card-text">
                                Мы объединили все респираторные специализации в одном месте и на высоком профессиональном уровне.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-3 col-md-12">
                            <img class="img-fluid" src="/wp-content/themes/integra/img/piggy-bank.png" alt="Открытость">
                        </div>
                        <div class="col-9 col-md-12">
                            <p class="card-text">
                                Мы придерживаемся политики открытости и прозрачности цен. Все делается в необходимом и достаточном объеме.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="otdels container-fluid">
            <div class="container">
                <div class="row">
                    <!-- Nav tabs -->
                    <div class="nav nav-tabs col-12 col-md-6" id="myTab" role="tablist">
                        <a class="col-6 col-md-4 " id="pumonologia-tab" data-toggle="tab" href="#pulmonologia" role="tab" aria-controls="pulmonologia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tabs-pulmonologia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Пульмонология</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="lor-tab" data-toggle="tab" href="#lor" role="tab" aria-controls="lor" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-lor.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>ЛОР (отоларинголог)</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="allergologia-tab" data-toggle="tab" href="#allergologia" role="tab" aria-controls="allergologia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-allergologia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Аллергология</div></div>
                        </a>
                        <a class="col-6 col-md-4 active" id="somnologia-tab" data-toggle="tab" href="#somnologia" role="tab" aria-controls="somnologia" aria-selected="true">
                            <div><img src="/wp-content/themes/integra/img/tab-somnologia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Сомнология</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="terapia-tab" data-toggle="tab" href="#terapia" role="tab" aria-controls="terapia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-terapia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Терапия</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="hirurgia-tab" data-toggle="tab" href="#hirurgia" role="tab" aria-controls="hirurgia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-hirurgia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Торакальная хирургия</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="endokrinologia-tab" data-toggle="tab" href="#endokrinologia" role="tab" aria-controls="endokrinologia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-endokrinologia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Эндокринология</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="kardiologia-tab" data-toggle="tab" href="#kardiologia" role="tab" aria-controls="kardiologia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-kardiologia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Кардиология</div></div>
                        </a>
                        <a class="col-6 col-md-4" id="nevrologia-tab" data-toggle="tab" href="#nevrologia" role="tab" aria-controls="nevrologia" aria-selected="false">
                            <div><img src="/wp-content/themes/integra/img/tab-nevrologia.png" alt="" class="/wp-content/themes/integra/img-fluid"><div>Неврология</div></div>
                        </a>

                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content col-12 col-md-6">
                        <div class="tab-pane active" id="pulmonologia" role="tabpanel" aria-labelledby="pumonologia-tab">
                            <h3>Пульмонология</h3>
                            <p><strong>Пульмонология</strong> – раздел Респираторной медицины, который изучает, исследует и лечит заболевания легких различного происхождения.</p>
                            <p><strong>Пульмонолог</strong> — это врач, который занимается диагностикой и лечением болезней органов дыхания человека. Пульмонологи занимаются так же такими высокотехнологичными методами лечения, как длительная кислородотерапия на дому и неинвазивная вентиляция легких.</p>
                            <p><strong>Пульмонологический центр «ИнтеграМедсервис» - узкоспециализированная частная медицинская клиника, занимающийся только респираторными заболеваниями: <a href="/">лечению и&nbsp;диагностике болезней органов дыхания</a>. Наши доктора постоянные докладчики на профессиональных Российских и международных конференциях по респираторным проблемам. Нас постоянно  приглашают как экспертов  на <a href="/about">телевидении и в СМИ</a></strong></p>
                            <a href="/pulmonology" class="btn btn-danger btn-md d-inline-block">Подробнее о пульмонологии</a>
                            <a href="#" data-toggle="modal" data-target="#forma-zapisi" data-dir="pulmonologia" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="somnologia" role="tabpanel" aria-labelledby="somnologia-tab">
                            <h3>Сомнология</h3>
                            <p>Нормальный сон - необходимая часть жизни любого человека. Качественный, здоровый сон, влияет на
                                общее самочувствие, быстроту реакции, хорошее настроение, сексуальную жизнь, работоспособность.
                                Если человек не высыпается- его организм будет работать с большими перегрузками и о качестве
                                жизни можно вообще забыть. В таком случае ему необходимо записаться на прием врача Сомнолога в
                                медицинский центр.</p>
                            <p>Ввиду важности проблемы для изучения нарушений сна и их коррекцией, был создан особый раздел
                                медицины и нейробиологии - сомнология (от лат. somnus – сон).</p>
                            <p>Сомнологические центры занимаются изучением нарушений сна и заболеваний, которые могут быть
                                инициированы. Отмечается, что ряд заболеваний могут проявлять себя во время бодрствования и во
                                время сна. Причем заболевания, протекающие в ночное время, обычно протекают и лечатся сложнее.
                                К таким болезням относятся: бронхиальная астма, инсульты, инфаркты, нарушения ритма сердца.</p>
                            <a href="somnology" class="btn btn-danger btn-md d-inline-block">Подробнее о сомнологии</a>
                            <a href="#" data-toggle="modal" data-target="#forma-zapisi" data-dir="somnologia" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>

                        </div>
                        <div class="tab-pane" id="hirurgia" role="tabpanel" aria-labelledby="hirurgia-tab">
                            <h3>Торакальная хирургия</h3>
                            <p><strong>Торакальная хирургия</strong> – это хирургическое лечение заболеваний органов полости грудной клетки. Это болезни легких, средостения и пищевода. Наиболее часто проблемы в грудной клетке обнаруживаются в ходе обследований организма - при компьютерная томографии органов грудной клетки.</p>
                            <p><strong>Почему у нас:</strong> наш <a href="/" title="пульмонологический центр, центр респираторной медицины">центр респираторной медицины</a> специализируется на болезнях легких (<a href="/pulmonology" title="врачи пульмонологи, пульмонология">пульмонологии</a>) у нас самые лучшие, проверенные и длительные профессиональные контакты с лучшими торакальными хирургами страны наши <a href="/pulmonology" title="врачи пульмонологи, пульмонология">пульмонологи</a> профессионально разбираются в сложных болезнях легких, в тонкостях их течения и диагностики мы уверенно можем рекомендовать необходимость в проведении бронхоскопии с биопсией или видеоторакоскопии, и знаем, кто лучше всех справится с этой задачей мы знаем, что делать с пациентом после получения гистологического заключения.</p>


                            <a href="/thoracic_surgery" class="btn btn-danger btn-md d-inline-block">Подробнее о торокальной хирургии</a>
                            <a href="#" data-toggle="modal" data-target="#forma-zapisi" data-dir="hirurgia" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="allergologia" role="tabpanel" aria-labelledby="allergologia-tab">
                            <h3>Аллергология</h3>
                            <p><b>Аллергия</b> это&nbsp;свойство иммунной системы реагировать на контакты, повторные контакты, с органическими и неорганическими веществами, элементами растительного или животного мира. Вещества, вызывающие аллергию называются аллергенами.
                            </p>
                            <p><b>Аллергены</b> разделены на неинфекционные (домашняя пыль, пыльца растений, шерсть животных, краски, лаки и т.п.)&nbsp; и инфекционные (грибы, паразиты, продукты распада бактерий и вирусов). Иммунный ответ на контакт с аллергеном, приводящий к повреждению тканей называется <strong>аллергической реакцией</strong>. Аллергические реакции, вызванные аллергенами, встречаются как у новорожденных, так и у пожилых пациентов.
                            </p>
                            <p>Наследственная форма аллергии называется <strong>атопией</strong> — атопический дерматит, атопическая бронхиальная астма. Кроме наследственной аллергии встречается <b>ненаследственная</b>, например, <b>анафилактическая реакция</b>. Развитие не наследственной аллергии возможно у любого здорового человека, при длительном контакте с аллергеном - например, профессиональные аллергии.
                            </p>
                            <p>Аллергология это раздел медицины и медицинская специальность. Задача аллергологии лечение и диагностика аллергических заболеваний. Аллерголог - врач диагностирующий и лечащий аллергические заболевания . В нашем центре предоставляются платные услуги врача аллерголога для взрослых и пациентов детского возраста
                            </p>

                            <a href="/allergology" class="btn btn-danger btn-md d-inline-block">Подробнее о аллергологии</a>
                            <a href="#" data-toggle="modal" data-target="#forma-zapisi" data-dir="allergologia" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="endokrinologia" role="tabpanel" aria-labelledby="endokrinologia-tab">
                            <h3>Эндокринология</h3>
                            <p>Эндокринология – медицинское направление, основной задачей которого является диагностика и лечение заболеваний эндокринной системы организма человека. Возникающие проблемы в одном из эндокринных органов всегда отражаются на всем организме в целом. Поэтому эндокринологические проблемы могут быть причиной обращения к кардиологу, неврологу, терапевту. Связано это с гормонами, которые вырабатываются железами эндокринной системы человека: поджелудочной и щитовидной, надпочечниками. Это гипоталамические гормоны, гормоны половых желез и т.д., которые воздействуют на отдельные органы и системы организма человека.</p>
                            <p>Основная задача хорошего врача-эндокринолога - проведение качественной консультации, необходимой диагностики и назначение лечения. При необходимости Вам будет предложено стационарное лечение в эндокринологической клинике. Лечение заболеваний эндокринной системы может осуществляться эндокринологом как медикаментозно, так и с использованием хирургических методов, подбирается врачом индивидуально, с учетом всех особенностей Вашего организма.</p>
                            <p>В нашем медицинском центре Вы можете получить качественную консультацию врача-эндокринолога, с большим клиническим опытом амбулаторного и стационарного лечения, получить дополнительные знания по самостоятельному контролю за эндокринной системой. При наличии андрологических проблем у мужчин (снижение либидо, потенции, возрастной андрогенный дефицит у мужчин, гипогонадизм, гинекомастия) мы можем помочь справиться с проблемой. Наш врач-эндокринолог - сертифицированный специалист в области андрологии.</p>
                            <a href="/endocrinology" class="btn btn-danger btn-md d-inline-block">Подробнее о эндокринологии</a>
                            <a href="#" data-toggle="modal" data-dir="endokrinologia" data-target="#forma-zapisi" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="kardiologia" role="tabpanel" aria-labelledby="kardiologia-tab">
                            <h3>Кардиология</h3>
                            <p>Успешное двенадцатилетнее сотрудничество между медицинским центром «ИнтеграМедсервис» и «Российским кардиологическим научно-производственным комплексом» МЗ РФ (Кардиоцентром им. А.Л. Мясникова) привело к возможности предложить нашим пациентам высококачественные услуги консультативной помощи в области кардиологии, а так же повысить качество стационарного лечения и обследований на базе Кардиоцентра им. А.ЛГНИЦ Профилактической медицины. Мясникова.</p>
                            <p>В 2011 году кардиология нашего медицинского центра была усилена партнерскими отношениями с Государственным научно-исследовательским центром профилактической медицины (ГНИЦ Профилактической медицины»)</p>

                            <a href="/cardiology" class="btn btn-danger btn-md d-inline-block">Подробнее о кардиологии</a>
                            <a href="#" data-toggle="modal" data-dir="kardiology" data-target="#forma-zapisi" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="lor" role="tabpanel" aria-labelledby="lor-tab">
                            <h3>ЛОР (отоларинголог)</h3>
                            <p>Оториноларингология - это раздел медицины, изучающий особенности анатомического строения, физиологии, функции лор-органов, а также причины, особенности клинического течения, диагностики, лечения и профилактики заболевании лор-органов.</p>
                            <p>В нашем центре предоставляются платные услуги отоларинголога для взрослых и пациентов детского возраста. Следует обратить внимание, что консультация ЛОР-специалиста необходима не только в связи с болью в ухе или в горле, но и для того, чтобы понять причину дыхательных расстройств (кашля, хрипов, свистов в грудной клетке). Отоларингологи имеют возможность исследовать верхние дыхательные пути, что очень часто помогает пульмонологам, специализирующихся на диагностике и лечении заболеваний бронхов и легких. Таким образом, в нашем медицинском центре вы можете получить грамотную консультацию по состоянию всего респираторного тракта.</p>

                            <a href="/lor" class="btn btn-danger btn-md d-inline-block">Подробнее о ЛОР отделении</a>
                            <a href="#" data-toggle="modal" data-dir="lor" data-target="#forma-zapisi" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="terapia" role="tabpanel" aria-labelledby="terapia-tab">
                            <h3>Терапия</h3>
                            <p>Прием терапевта в «ИНТЕГРАМЕД» проводится по предварительной записи, кроме воскресенья и праздничных дней.</p>
                            <p>Терапевтический осмотр во время консультации предполагает внимательный анализ жалоб, сбор анамнеза, осмотр пациента, проведение простых тестов, анализ представленной медицинской информации, протоколов, исследований. Совместно с Вами разработают и согласуют общий план исследований.</p>
                            <p><strong>Кроме плохого самочувствия или заболевания консультация терапевта необходима при:</strong></p>
                            <ul>
                                <li>предстоящем плановым хирургическим вмешательством (операцией);</li>
                                <li>во время беременности;</li>
                                <li>для записи в спортивные секции  и клубы.</li>
                            </ul>

                            <a href="/therapy" class="btn btn-danger btn-md d-inline-block">Подробнее о терапии</a>
                            <a href="#" data-toggle="modal" data-dir="terapia" data-target="#forma-zapisi" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                        <div class="tab-pane" id="nevrologia" role="tabpanel" aria-labelledby="nevrologia-tab">
                            <h3>Неврология</h3>
                            <p>Предметом изучения Неврологии являются заболевания нервной системы человека, как центральной так и переферической ее части. Роль нервной системы в полноценной жизни человека сложно переоценить, поскольку ее правильное функционирование обеспечивает слаженную деятельность внутренних органов, все внешние восприятия окружающего нас мира. Соответственно, врачи занимающиеся проблемами неврологии называются неврологами.</p>
                            <p><strong>Медицинский центр «ИнтеграМедсервис» предлагает:</strong></p>
                            <ul>
                                <li>консультацию невролога в медицинском центре «ИнтеграМедсервис», консультацию невролога на дому;</li>
                                <li>консультацию профессора Иллариошкина С.Н. в Центре Неврологии РАМН;</li>
                                <li>стационарное лечение в Центре Неврологии РАМН.</li>
                            </ul>
                            <p>Консультация невролога- это важнейший этап в  диагностике и назначении лечения. Во время приема врач невролог внимательно соберет анамнез вашей проблемы, оценит текущий неврологический статус, проведет оценку уже имеющейся медицинской документации и результатов МРТ или КТ исследований.</p>

                            <a href="/neurology" class="btn btn-danger btn-md d-inline-block">Подробнее о неврологии</a>
                            <a href="#" data-toggle="modal" data-dir="nevrologia" data-target="#forma-zapisi" class="btn btn-primary btn-md d-inline-block" rel="noopener noreferrer">Записаться на консультацию</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="about container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4>Центр респираторной медицины - <span class="text-primary">Интеграмедсервис</span></h4>

                    <p>«ИнтеграМедсервис» — это многопрофильный респираторный медицинский центр, рассчитанный на
                        комплексный подход к здоровью наших клиентов.Нашим основным приоритетом была и остается Пульмонология
                        Мы специализируемся на болезнях легких, бронхов, а так же верхних дыхательных путей - органов ЛОР.
                        Такое сочетание дает нам возможность решать весь спектр проблем с дыханием, независимо от локализации
                        патологии. Часто бывает так, что пациенты приходят с затяжным кашлем, а выясняется что у них ЛОР
                        проблема, или наоборот.</p>
                    <p>В течение последних нескольких лет, нам стало очевидным, что в РФ есть дефицит докторов в сфере
                        болезней дыхательных путей. Найти хорошего пульмонолога, хорошего аллерголога или хорошего ЛОР врача
                        очень сложно, даже в Москве. И обычно все эти специальности взаимосвязаны друг с другом. Это и не
                        удивительно ведь дыхательная система человека состоит из верхних и нижних дыхательных путей и связь
                        эта неразрывна. И у нас возникло желание создать клинку, в которой всем было бы удобно и было все
                        для решения задач с дыхательной системой.</p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="/wp-content/themes/integra/img/about.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="vrachi container">
            <div class="row">
                <div class="col"><h3>Лучшие врачи Москвы</h3></div>
            </div>
            <div class="owl-carousel row owl-loaded owl-drag" id="vrachi-carusel">






                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1180px, 0px, 0px); transition: all 0s ease 0s; width: 4484px;"><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/82"><img class="img-fluid" src="/wp-content/themes/integra/img/240x320-samoilenko.jpg" alt="Самойленко"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Самойленко  Виктор Александрович</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/84"><img class="img-fluid" src="/wp-content/themes/integra/img/mesheryakova240.jpg" alt="Мещерякова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Мещерякова  Наталья Николаевна</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук, врач высшей категории</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/88"><img class="img-fluid" src="/wp-content/themes/integra/img/aliya240.jpg" alt="Мулдашева"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Мулдашева Алия Амангалиевна</h5>

                                    <p class="card-text">Врач-оториноларинголог, сомнолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/89"><img class="img-fluid" src="/wp-content/themes/integra/img/kuleshova-300_0.jpg" alt="Кулешова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Кулешова  Юлия Александровна</h5>

                                    <p class="card-text">Детский пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/96"><img class="img-fluid" src="/wp-content/themes/integra/img/nikitina240.jpg" alt="Никитина"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Никитина Наталия Владимировна</h5>

                                    <p class="card-text">Аллерголог-пульмонолог</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item active" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/30"><img class="img-fluid" src="/wp-content/themes/integra/img/kuleshov240.jpg" alt="Кулешов"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Кулешов Андрей Владимирович</h5>

                                    <p class="card-text">Врач-пульмонолог, сомнолог, кандидат медицинских наук, главный врач медицинского центра «ИнтеграМедсервис»</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item active" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/100"><img class="img-fluid" src="/wp-content/themes/integra/img/kardanova240.jpg" alt="Карданова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Карданова Мадина Владимировна</h5>

                                    <p class="card-text">Врач аллерголог-иммунолог</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item active" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/79"><img class="img-fluid" src="/wp-content/themes/integra/img/chikina240.jpg?itok=0DbO3ASj" alt="Чикина"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Чикина Светлана Юрьевна</h5>

                                    <p class="card-text">Врач-пульмонолог, врач функциональной диагностики, кандидат медицинских наук, врач высшей категории</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item active" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/80"><img class="img-fluid" src="/wp-content/themes/integra/img/popova.jpg" alt="Попова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Попова Ксения Александровна</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item active" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/82"><img class="img-fluid" src="/wp-content/themes/integra/img/240x320-samoilenko.jpg" alt="Самойленко"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Самойленко  Виктор Александрович</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/84"><img class="img-fluid" src="/wp-content/themes/integra/img/mesheryakova240.jpg" alt="Мещерякова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Мещерякова  Наталья Николаевна</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук, врач высшей категории</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/88"><img class="img-fluid" src="/wp-content/themes/integra/img/aliya240.jpg" alt="Мулдашева"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Мулдашева Алия Амангалиевна</h5>

                                    <p class="card-text">Врач-оториноларинголог, сомнолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/89"><img class="img-fluid" src="/wp-content/themes/integra/img/kuleshova-300_0.jpg" alt="Кулешова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Кулешова  Юлия Александровна</h5>

                                    <p class="card-text">Детский пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/96"><img class="img-fluid" src="/wp-content/themes/integra/img/nikitina240.jpg" alt="Никитина"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Никитина Наталия Владимировна</h5>

                                    <p class="card-text">Аллерголог-пульмонолог</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/30"><img class="img-fluid" src="/wp-content/themes/integra/img/kuleshov240.jpg" alt="Кулешов"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Кулешов Андрей Владимирович</h5>

                                    <p class="card-text">Врач-пульмонолог, сомнолог, кандидат медицинских наук, главный врач медицинского центра «ИнтеграМедсервис»</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/100"><img class="img-fluid" src="/wp-content/themes/integra/img/kardanova240.jpg" alt="Карданова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Карданова Мадина Владимировна</h5>

                                    <p class="card-text">Врач аллерголог-иммунолог</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/79"><img class="img-fluid" src="/wp-content/themes/integra/img/chikina240.jpg" alt="Чикина"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Чикина Светлана Юрьевна</h5>

                                    <p class="card-text">Врач-пульмонолог, врач функциональной диагностики, кандидат медицинских наук, врач высшей категории</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/80"><img class="img-fluid" src="/wp-content/themes/integra/img/popova.jpg" alt="Попова"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Попова Ксения Александровна</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div><div class="owl-item cloned" style="width: 226px; margin-right: 10px;"><div class="card">




                                <a href="/team/82"><img class="img-fluid" src="/wp-content/themes/integra/img/240x320-samoilenko.jpg" alt="Самойленко"></a>

                                <div class="card-body">

                                    <h5 class="card-title">Самойленко  Виктор Александрович</h5>

                                    <p class="card-text">Врач-пульмонолог, кандидат медицинских наук</p>

                                    <a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-danger btn-sm " rel="noopener noreferrer">Записаться на приём</a>

                                </div>




                            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-arrow-circle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-arrow-circle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
        </div>
        <div class="otzivi container-fluid">
            <div class="container">
                <div class="owl-carousel owl-loaded owl-drag" id="otzivi-slide">





                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: all 0s ease 0s; width: 3600px;"><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-3.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Мария Ситтель</div>
                                            <div class="text-muted">27.11.2017 17:00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «Я с радостью рекомендую компанию «ИнтеграМедсервис» своим близким и друзьям! Здесь я получила высококачественную помощь настоящих врачей-профессионалов, верных клятве Гиппократа.»
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-2.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Игорь Львович Ланской</div>
                                            <div class="text-muted">07.10.2017 12:00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «Профессионализм – исключительная черта доктора Андрея Кулешова. Точность в определении заболеваний, рекомендации по профилактике и поддержанию организма в тонусе – малая толика того, что я получил, обратившись за помощью к специалистам «ИнтеграМедсервис».
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-1.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Лариса Геннадьевна Зелькова</div>
                                            <div class="text-muted">17.01.2017 10:59</div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «ИнтеграМедсервис» - это образец качественного отношения к здоровью человека. Профессиональная забота, квалифицированная помощь, внимание и душевная теплота – лучшие лекарства врачей компании. Я и мои близкие доверяем свое здоровье специалистам «ИнтеграМедсервис».
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-3.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Мария Ситтель</div>
                                            <div class="text-muted">27.11.2017 17:00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «Я с радостью рекомендую компанию «ИнтеграМедсервис» своим близким и друзьям! Здесь я получила высококачественную помощь настоящих врачей-профессионалов, верных клятве Гиппократа.»
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-2.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Игорь Львович Ланской</div>
                                            <div class="text-muted">07.10.2017 12:00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «Профессионализм – исключительная черта доктора Андрея Кулешова. Точность в определении заболеваний, рекомендации по профилактике и поддержанию организма в тонусе – малая толика того, что я получил, обратившись за помощью к специалистам «ИнтеграМедсервис».
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-1.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Лариса Геннадьевна Зелькова</div>
                                            <div class="text-muted">17.01.2017 10:59</div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «ИнтеграМедсервис» - это образец качественного отношения к здоровью человека. Профессиональная забота, квалифицированная помощь, внимание и душевная теплота – лучшие лекарства врачей компании. Я и мои близкие доверяем свое здоровье специалистам «ИнтеграМедсервис».
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-3.png" alt="Отзыв: профессиональная забота" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Мария Ситтель</div>
                                            <div class="text-muted">27.11.2017 17:00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «Я с радостью рекомендую компанию «ИнтеграМедсервис» своим близким и друзьям! Здесь я получила высококачественную помощь настоящих врачей-профессионалов, верных клятве Гиппократа.»
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-2.png" alt="Отзыв: высококачественная помощь" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Игорь Львович Ланской</div>
                                            <div class="text-muted">07.10.2017 12:00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «Профессионализм – исключительная черта доктора Андрея Кулешова. Точность в определении заболеваний, рекомендации по профилактике и поддержанию организма в тонусе – малая толика того, что я получил, обратившись за помощью к специалистам «ИнтеграМедсервис».
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="otziv-card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/wp-content/themes/integra/img/user-otziv-1.png" alt="Отзыв пользователя: точность в определении" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="user-name">Лариса Геннадьевна Зелькова</div>
                                            <div class="text-muted">17.01.2017 10:59</div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col pt-3">
                                            «ИнтеграМедсервис» - это образец качественного отношения к здоровью человека. Профессиональная забота, квалифицированная помощь, внимание и душевная теплота – лучшие лекарства врачей компании. Я и мои близкие доверяем свое здоровье специалистам «ИнтеграМедсервис».
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
                <div class="col text-center p-4">
                    <a href="/about/otzyvy" class="btn btn-danger btn-lg">Читать все отзывы</a>
                </div>
            </div>
        </div>
        <div class="container news-index">

            <div class="section-header">Последние новости и акции</div>

            <div class="row m-0 m-md-auto">




                <div class="col-12 col-md-3 p-1 card">
                    <a href="/pulmonology/pneumo23"><img src="/wp-content/themes/integra/img/img-article.png" width="290" height="188.5" alt="Пневмо 23 в Москве"></a>
                    <div class="card-body ">
                        <div class="text-muted p-1">11/06/2019 - 08:59</div>
                        <h6 class="card-title"><a href="/pulmonology/pneumo23">Сделать прививку Пневмо 23 в Москве</a></h6>
                        <p class="card-text text-muted"></p><h1>
                            Сделать прививку Пневмовакс 23 в Москве</h1><p></p>
                    </div></div>


                <div class="col-12 col-md-3 p-1 card">
                    <a href="/articles/170"><img src="/wp-content/themes/integra/img/2018_09_16-1.jpg" width="290" height="188.5" alt="Международный конгресс"></a>
                    <div class="card-body ">
                        <div class="text-muted p-1">09/16/2018 - 00:00</div>
                        <h6 class="card-title"><a href="/articles/170">Международный конгресс Европейского Респираторного Общества 2018</a></h6>
                        <p class="card-text text-muted"></p><p>
                            15.09.2018 в Париже начал работу ежегодный Международный конгресс Европейского Респираторного Общества 2018. В нем принимают участие наши пульмонологи К.М.Н. Чикина С.Ю., К.М.Н. Гусева Н.А., К.М.Н. Мещерякова Н.Н..
                        </p>
                        <p></p>
                    </div></div>


                <div class="col-12 col-md-3 p-1 card">
                    <a href="/articles/168"><img src="/wp-content/themes/integra/img/vapeimg2206.jpg" width="290" height="188.5" alt="Электронных сигаретах"></a>
                    <div class="card-body ">
                        <div class="text-muted p-1">06/22/2017 - 00:00</div>
                        <h6 class="card-title"><a href="/articles/168">Об электронных сигаретах</a></h6>
                        <p class="card-text text-muted"></p><p>
                            Воздействие никотина при использовании электронной сигареты, как и курение сигарет, увеличивает частоту сердечных сокращений и фиксируется, на биохимическом уровне, в крови высокими уровнями котинина крови(метаболит никотина).
                        </p>
                        <p></p>
                    </div></div>


                <div class="col-12 col-md-3 p-1 card">
                    <a href="/articles/169"><img src="/wp-content/themes/integra/img/kurenie2206big.jpg" width="290" height="188.5" alt="Курение"></a>
                    <div class="card-body ">
                        <div class="text-muted p-1">06/22/2017 - 00:01</div>
                        <h6 class="card-title"><a href="/articles/169">Воздействие курения в детстве и юности ухудшает функционирование лёгких взрослого человека</a></h6>
                        <p class="card-text text-muted"></p><p>
                            Исследователи из Великобритании передают, что респираторные инфекции в детстве и юности, неблагоприятные бытовые условия и перенаселённость в домах и квартирах, приводят к ухудшению работы лёгких у взрослых людей, но только среди тех, кто курит.
                        </p>
                        <p></p>
                    </div></div>





            </div>
        </div>
        <div class="container smi-index">

            <div class="section-header">СМИ о нашем центре</div>


            <div class="card-deck">
                <div class="card">
                    <iframe frameborder="0" src="https://www.youtube.com/embed/JkivtqBW5hw"></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Отрывок передачи с интервью Кулешова А.В. про плесень.</h5>
                    </div>

                </div>
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/-OKPo26rsNY?start=768" frameborder="0"></iframe>
                    <div class="card-body">
                        <h5 class="card-title">О самом главном: Головная боль, бронхит, коктейль для иммунитета, потенция, советы уролога</h5>
                    </div>
                </div>
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/ODgKy_klbQw?start=307" frameborder="0"></iframe>
                    <div class="card-body">
                        <h5 class="card-title">О самом главном: Затяжной кашель, ранний климакс, болит плечо, мелатонин</h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid action-index">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-10">Запишитесь онлайн на консультацию</div>
                    <div class="col-12 col-md-2"><a href="#" data-toggle="modal" data-target="#forma-zapisi" class="btn btn-primary color-white" rel="noopener noreferrer">Записаться на приём</a></div>
                </div>
            </div>
        </div>
    <?}?>

    <div id="page-wrapper" class="container">

        <div id="page" class="row">
