<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="content-wrapper" data-page="index-php">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
        <div class="promo promo-light promo-full landing-promo center">
            <div class="container clearfix">
                <? /* ucfirst первая буква - заглавная */ ?>
                <h3>«<?=ucfirst($_SERVER['HTTP_HOST'])?>» - Пресс-воллы на все случаи!</h3>
                Создадим дизайн, изготовим, осуществим сборку и монтаж пресс-воллов на вашем мероприятии.
            </div>
        </div>

	<?php endif; ?>
	<?php $side = "";
	if(!is_home())
		$side = "no-sidebar"; ?>
	<div id="primary" class="content-area <?=$side?>">
		<main id="main" class="site-main" role="main">
            <div class="container">
			<?php


            $args = array( 'category' => 'main', 'numberposts' => 26 );
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :
                setup_postdata($post);
                the_post();
                $p = $post->post_category;

                if($p[0] == 1):
	            get_template_part( 'template-parts/post/content', get_post_format() );
	            the_posts_pagination( array(
		            'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
		            'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
		            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
	            ) );
                endif;
            endforeach;





			?>
            </div>


            <?if(is_home()):?>
            <div class="other-content container">
                <?$w = get_post(2);
                $content = $w->post_content;
                echo apply_filters( 'the_content', $content );
                ?>
            </div>
            <?endif?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if(!is_front_page())
	        get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
