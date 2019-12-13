	</div><!-- .row -->
	</div><!-- .container -->
	</main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div>
                        <a class="navbar-brand row align-self-center a-logo-bottom" href="/">
                            <img style="height: 80px;" src="/uploaded/logo_n.png" class="align-top pr-0" alt="КЛИНИКА РЕСПИРАТОРНОЙ МЕДИЦИНЫ ИНТЕГРАМЕД">
                        </a>
                    </div>
                    <a class="navbar-brand row align-self-center a-logo-bottom" href="/">&nbsp;</a>
                    <div class="soc_new">
                        <a class="navbar-brand row align-self-center a-logo-bottom" href="/">&nbsp;</a>
                        <a rel="nofollow" href="https://vk.com/klinikarm" class="d-inline-block">
                            <img src="<?=get_template_directory_uri()?>/img/vk.png" alt=""></a>

                        <a rel="nofollow" href="https://www.facebook.com/klinikarm/" class="d-inline-block"><img src="<?=get_template_directory_uri()?>/img/facebook.png" alt=""></a>
                        <a rel="nofollow" href="//www.youtube.com/channel/UCfmeP6mEga4grBRvtIeCdWw" class="d-inline-block"><img src="<?=get_template_directory_uri()?>/img/youtube.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="head">ИнтеграМед Сервис</div>
                    <ul>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/events">Новости</a></li>
                        <li><a href="/team">Врачи</a></li>
                        <li><a href="/smi">СМИ о нас</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2 pl-auto pl-md-5">
                    <div class="head">Информация</div>
                    <ul>
                        <li><a href="/pulmonology">Специализации</a></li>
                        <li><a href="/about/licensi">Сертификаты</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <div class="head">Помощь</div>
                    <ul>
                        <li><a href="/articles">Статьи</a></li>
                        <li><a href="/contacts/faq">Вопрос-Ответ</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 p-5 m-auto p-md-0 m-md-0">
                    <div class="footer-contacts">
                        <div class="head">Контакты</div>
                        <div>107023, г. Москва, ст. м. Электрозаводская,
                            Мажоров переулок, д. 7 </div>
                    </div>
                    <div class="footer-adress">
                        <b>Телефон:</b> 8 495 662-99-24, <br>
                        8800 555-03-82 <b>бесплатный</b>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<!--footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php endif; ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?>" class="imprint">
				<?php
				/* translators: %s: WordPress. */
				printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
				?>
			</a>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>
	</footer-->

</div>

<?php wp_footer(); ?>

</body>
</html>
