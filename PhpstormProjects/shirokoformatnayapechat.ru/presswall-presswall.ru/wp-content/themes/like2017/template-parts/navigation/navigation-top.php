<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation visible-lg visible-md  visible-sm" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
<div id="mobileheader" class="visible-xs nav navbar navbar-nav navbar-custom">
    <div id="mobilemenu" class="leftside">
        <div class="mobilemenu-v1 scroller">
            <div class="wrap">
                <div class="back" style="white-space: nowrap;">
                    Назад <i class="fa fa-arrow-left"></i>
                </div>
                <div class="menu top aspro_bitrix_top_mobile">
	                <?php wp_nav_menu( array(
		                'theme_location' => 'top',
		                'menu_id'        => 'top-menu',
	                ) ); ?>
                </div>
                <div class="contacts">
                    <div class="title">Будьте на связи</div>
                    <div class="address">
                        <i class="fa fa-map-marker"></i>
                        <div style="white-space:nowrap;">
                            г. Москва, ул. Свободы 35с5
                        </div>
                        <br>
                    </div>
                    <div class="phone" style="white-space: nowrap;">
                        <i class="fa fa-envelope"></i>
	                    <?php echo get_option('email') ; ?>
                    </div>
                    <div class="phone" style="white-space: nowrap;">
                        <i class="fa fa-phone"></i>
	                    <?php echo get_option('phone') ; ?>
                    </div>

                </div>
                <div class="social-icons">
                    <!-- noindex -->
                    <ul>
                    </ul>
                    <!-- /noindex -->
                </div>
            </div>
        </div>
    </div>
    <div id="mobilemenu-overlay">
    </div>
</div>