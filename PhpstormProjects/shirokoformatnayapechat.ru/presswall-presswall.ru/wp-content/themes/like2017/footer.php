<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</div>





<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrap container">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' );
		if ( has_nav_menu( 'social' ) ) : ?>
            <nav class="social-navigation" role="navigation"
                 aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
				) );
				?>
            </nav><!-- .social-navigation -->
		<? endif; ?>
    </div><!-- .wrap -->
</footer>

<div class="bottom-page-wrap">
    <div class="module-small bg-dark shop_isle_footer_sidebar">
        <div class="container">
            <div class="bow">
                <div class="foot-menu">
                    <div class="menu-menyu-futera-container">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'bottom',
							'menu_class'     => 'bottom-menu',
							'depth'          => 1,
							'link_before'    => '<span class="bot-menu">',
							'link_after'     => '',
						) );
						?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row footer-widgets">

                <div class="col-sm-6 col-md-3 footer-sidebar-wrap">
                    <div id="custom_html-3" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="col-sm-3 col-xs-12">
                                <img class="footer-pics" src="/images/icons8-phone-64.png" alt="Значок телефона">
                            </div>
                            <div class="col-sm-9 col-xs-12">
	                            <?php echo get_option('phone') ; ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 footer-sidebar-wrap">
                    <div id="custom_html-4" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="col-sm-3 col-xs-12">
                                <img class="footer-pics" src="/images/icons8-new-post-64.png" alt="Значок e-mail">
                            </div>
                            <div class="col-sm-9 col-xs-12">
	                            <?php echo get_option('email') ; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 footer-sidebar-wrap">
                    <div id="custom_html-5" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="col-sm-3 col-xs-12">
                                <img class="footer-pics" src="/images/icons8-marker-64.png" alt="Значок маркера">
                            </div>
                            <div class="col-sm-9 col-xs-12">
                                <a href="https://yandex.ru/maps/-/CBe0RQSL2C">125362, Москва, улица Свободы, 35с5</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3 footer-sidebar-wrap">
                    <div id="custom_html-2" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="col-sm-3 col-xs-12">
                                <img class="footer-pics copy" src="/images/icons8-copyright-50.png" alt="Значок копирайт">
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <a href="/">2018 Прессволл-прессволл</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bot-hrefs"><a href="/soglasie-na-obrabotku-personalnyx-dannyx/" target="_blank">Политика обработки персональных данных</a><a href="/polozhenie-ob-obrabotke-personalnyx-dannyx/" target="_blank">Положение об обработке персональных данных</a></div>
        </div>
    </div>
</div>

</div>
</div>



<div id="footer-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Оставьте заявку</h2>
        <a class="uk-modal-close uk-close"></a>
        <div id="about-form"></div>
        <div class="form-text">Оставьте Ваш номер телефона и примерные параметры заказа. Мы перезвоним через 2 минуты и
            озвучим цену! Ваши контактные данные в безопасности и не будут переданы третьим лицам.
        </div>
		<?= do_shortcode( '[contact-form-7 id="125" title="Оставьте заявку"]' ) ?>
    </div>
</div>
<div id="footer-modal-call" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Закажите звонок</h2>
        <a class="uk-modal-close uk-close"></a>
		<?= do_shortcode( '[contact-form-7 id="165" title="Закажите звонок"]' ) ?>
    </div>
</div>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48933182 = new Ya.Metrika({
                    id:48933182,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48933182" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/script.js"></script>
</body>
</html>
