<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
    <div class="wrap">

        <div class="container">
            <div class="row top-header">
				<?php the_custom_logo(); ?>
                <div class="site-branding-text">
					<?php

					if ( get_theme_mod( 'show_site_description', 1 ) ) {
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo esc_html( $description ); ?></p>
						<?php
						endif;
					}
					?>
                </div>
                <div class="phone top-conts"><?=get_option ('phone')?></div>
                <div class="email top-conts"><?=get_option ('email')?></div>
                <div class="top-conts buttons-wrap">
                    <button class="menu-toggle visible-xs" aria-controls="top-menu" aria-expanded="false">
						<?php
						echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
						echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
						echo "<!--noindex-->";
						_e( 'Menu', 'twentyseventeen' );
						echo "<!--/noindex-->";
						?>
                    </button>
                    <button uk-toggle="target: #footer-modal" type="button" class="btn order-now gradiented">
                        <span><b></b>Оставьте заявку</span>
                    </button>
                </div>
            </div>
        </div>

    </div><!-- .wrap -->
</div><!-- .site-branding -->
