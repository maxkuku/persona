<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<? $description = get_bloginfo('description', 'display'); ?>


<div class="layout layout_toggle wrap">
    <section class="section section-header">
        <div id="header">
            <header class="header">
                <div class="wrap">
                    <div class="header-main" style="height:204px">

                        <div class="header-text" style="left:10px; top:104px; width:1002px; height:30px">
                            <div class="unreset">
                                <h2 style="text-align: center;">
                                    <span style="font-size: 27px; font-family: 'trebuchet ms', geneva;">
                                        <?= $description ?></span>
                                </h2>
                            </div>
                        </div>
                        <div class="header-text" style="left:747px; top:22px; width:262px; height:51px">
                            <div class="unreset">
                                <div style="text-align: left;">
                                    <span style="font-family: helvetica; font-size: 30px;">
                                        <span style="font-family: 'trebuchet ms', geneva;">+7 (495) 121-77-88</span>
                                        <span style="font-family: wingdings, 'zapf dingbats';">
                                            <span style="font-family: helvetica;"><br>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="header-text" style="left:754px; top:56px; width:252px; height:42px">
                            <div class="unreset"><span style="font-size: 18px;"><span
                                            style="font-size: 27px; font-family: 'trebuchet ms', geneva;">place-print@mail.ru</span><span
                                            style="font-family: tahoma, arial, helvetica, sans-serif;"><br></span></span>
                            </div>
                        </div>
                        <div class="header-text" style="left:50px; top:159px; width:146px; height:30px">
                            <div class="unreset"><span style="font-size: 18px;">8 (495) 121-77-88</span></div>
                        </div>
                        <div class="header-text" style="left:239px; top:159px; width:153px; height:30px">
                            <div class="unreset"><span style="font-size: 18px;">place-print@mail.ru</span></div>
                        </div>
                        <div class="header-text" style="left:444px; top:160px; width:265px; height:30px">
                            <div class="unreset"><span
                                        style="font-size: 18px;">ПН-ЧТ 9:00 - 18:00. ПТ 9:00 - 17:00.</span></div>
                        </div>
                        <div class="header-text" style="left:760px; top:160px; width:253px; height:30px">
                            <div class="unreset"><span style="font-size: 18px;">г. Москва, ул. Свободы 35с14</span>
                            </div>
                        </div>
                        <div class="header-logo" style="left:13px; top:10px; width:356px; height:84px">
                            <a href="<?php echo esc_url(home_url('/')); ?>">


                                <img src="/wp-content/themes/liketwentysixteen/images/logo-550c309e87b93.png"
                                     alt="place-print.ru">


                            </a>
                        </div>
                        <div class="header-logo" style="left:453px; top:33px; width:251px; height:53px">
                            <a href="<?php echo esc_url(home_url('/')); ?>/#form/srochnaya-zayavka">
                                <img src="/wp-content/themes/liketwentysixteen/images/logo-56b99f3313f31.png"
                                     alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                        <div class="header-logo" style="left:408px; top:158px; width:30px; height:30px">
                            <img src="/wp-content/themes/liketwentysixteen/images/logo-5689968726bee.png"
                                 alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="header-logo" style="left:725px; top:158px; width:30px; height:30px">
                            <img src="/wp-content/themes/liketwentysixteen/images/logo-5689970226fdd.png"
                                 alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="header-logo" style="left:202px; top:157px; width:30px; height:30px">
                            <img src="/wp-content/themes/liketwentysixteen/images/logo-5689976a61d46.png"
                                 alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="header-logo" style="left:12px; top:156px; width:30px; height:30px">
                            <img src="/wp-content/themes/liketwentysixteen/images/logo-568997879d664.png"
                                 alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="header-mobile" style="display:none">
                        <div class="header-mobile_image">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="/wp-content/themes/liketwentysixteen/images/d1356ccd7cb87ae0577a0cafdd8b439d.png">
                            </a>
                        </div>
                        <div class="header-mobile_text"><h2 style="text-align: center;">
                                <span style="font-size: 24px;">Печать баннеров.<br>Интерьерная и широкоформатная печать в Москве и МО.<br>+7 (495) 121-77-88<br>place-print@mail.ru<br></span>
                            </h2></div>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section class="section section-headmenu in-theme-header">
        <div id="headmenu">
            <nav class="headmenu">
                <div class="wrap">
                    <?php if (has_nav_menu('primary')) : ?>
                        <nav id="site-navigation" class="main-navigation" role="navigation"
                             aria-label="<?php esc_attr_e('Primary Menu', 'twentysixteen'); ?>">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'primary-menu nav',
                                )
                            );
                            ?>
                        </nav><!-- .main-navigation -->
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </section>

	<?if(is_home()):?>
<section class="section section-slider">
    <div id="slider">
        <div class="wrap">
            <div class="slider">
                <div class="slider-cover carousel">
                    <div class="carousel-list slick-initialized slick-slider" id="slider5ca8bbd4cf6a4"
                         style="height:400px;"
                         data-slick='{"fade":false,"autoplay":true,"autoplaySpeed":3000,"arrows":true,"dots":true}' role="toolbar">
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track" role="listbox">
                                <div style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/f7f19d3f5f0a1075c89384b536dde8d3.jpg); width: 1030px;">
                                    <a href="/#form/zakazhite-svadebnyy-banner-i-poluchite-skidku-500-rub-na-razrabotku-dizayn-maketa" target="_self" tabindex="-1"></a>
                                </div>
                                <div style="height: 400px; background-image: url(
                                /wp-content/themes/liketwentysixteen/images/64d76864b27d44d258bda092d2cdd2f8.jpg); width: 1030px;">
                                    <a href="/#form/zakazhite-banner-na-den-rozhdeniya-i-poluchite-skidku-500-rub-na-razrabotku-dizayn-maketa" target="_self" tabindex="-1"></a>
                                </div>
                            <div style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/2a7eb5c1f1ac5f62a4ed85d4e329567c.jpg); width: 1030px;">
                                <a href="/#form/srochnaya-dostavka-v-den-obrascheniya" target="_self"
                                tabindex="-1"></a>
                            </div>
                        <div style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/bc5c34e0b184276406841a273225db06.jpg); width: 1030px;">
                            <a href="/#form/srochnaya-zayavka" target="_self" tabindex="-1"></a>
                        </div>
                    <div style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/8f8eaca96f550ec18961b10a0e9887a3.jpg); width: 1030px;">
                </div>
                <div style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/856bf6d4a55dee4a6ff24082e4209c8d.jpg); width: 1030px;" data-slick-index="4"
                aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide04">
                    <a href="/#form/srochnaya-zayavka" target="_self" tabindex="-1"></a>
                </div>
            <div class="item slick-slide" data-id="5" style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/f7f19d3f5f0a1075c89384b536dde8d3.jpg); width: 1030px;"><a
                href="/#form/zakazhite-svadebnyy-banner-i-poluchite-skidku-500-rub-na-razrabotku-dizayn-maketa"
                target="_self" tabindex="-1"></a></div>
        <div style="height: 400px; background-image: url(/wp-content/themes/liketwentysixteen/images/64d76864b27d44d258bda092d2cdd2f8.jpg); width: 1030px;">
            <a href="/#form/zakazhite-banner-na-den-rozhdeniya-i-poluchite-skidku-500-rub-na-razrabotku-dizayn-maketa" target="_self" tabindex="-1"></a>
        </div>
                            </div>
                        </div>


    </div>
    </div>
    </div>
    </div></div>
</section>
	<?endif?>




