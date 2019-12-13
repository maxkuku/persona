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
    

    <!-- Global site tag (gtag.js) - Google Analytics -->
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
            <div class="col-12 col-md-5">
                <!--         Ссылка с логотипом и текстом-->
                <a class="navbar-brand row align-self-center" href="/">
                    <img src="/uploaded/logo_n.png" class="align-top pr-0" alt="КЛИНИКА РЕСПИРАТОРНОЙ МЕДИЦИНЫ ИНТЕГРАМЕД"/>

                </a>
            </div>
            <div class="col-12 col-md-2 phone-wrapper heading-bold text-primary">

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


<main id="main" role="main" class="old-styles">

    <?if(is_front_page()){?>
        <div class="region region-before-content">
            <div id="block-block-1" class="block block-block">
                <div id="slider">
                    <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-main">
                        <ol class="carousel-indicators">
                            <li class="" data-slide-to="0" data-target="#carousel-main">
                                &nbsp;
                            </li>
                            <li data-slide-to="1" data-target="#carousel-main" class="">
                                &nbsp;
                            </li>
                            <li data-slide-to="2" data-target="#carousel-main" class="active">
                                &nbsp;
                            </li>
                            <li data-slide-to="3" data-target="#carousel-main" class="">
                                &nbsp;
                            </li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item">
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
                                        <a class="btn btn-primary btn-lg slide-lnk" data-target="#forma-zapisi" data-toggle="modal" href="#" rel="noopener noreferrer">Записаться на консультацию</a>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item active">
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
                                        <a class="btn btn-primary btn-lg slide-lnk" data-target="#forma-zapisi" data-toggle="modal" href="#" rel="noopener noreferrer">Записаться на консультацию</a>
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
    <?}?>

    <div id="page-wrapper" class="container">

        <div id="page" class="row">
