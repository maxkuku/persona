<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap" data-page="page-php" data-page-id="<?=$post->ID?>">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" data-page="page-php">

            <div class="container contacts-breadcrumb">
                <div class="row col-sm-12">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>


            

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<? if(is_page(70)) {
    # echo do_shortcode('[gallery link="file" columns="6" ids="692,693,694,695,696,697,698,699,700,701,711,712,713,714,715,716,717,718,730,731,732,733,734,735,736,737,738,739"]');

    ?>
    <div class="folio"><button class="buttons-folio button-dark active" type="button" data-block="joker">Джокер</button>
        <button class="buttons-folio button-dark" type="button" data-block="tritix">Тритикс</button>
        <button class="buttons-folio button-dark" type="button" data-block="brus">Брус</button>
        <button class="buttons-folio button-dark" type="button" data-block="zadnik">Задник для сцены</button></div>
    <div class="gals-wrap">
        <div id="joker" class="switch active">

            <?echo do_shortcode('[gallery link="file" columns="4" ids="692,693,694,695,696,697,698,699,700,701"]')?>

        </div>
        <div id="tritix" class="switch">

	<?echo do_shortcode('[gallery columns="4" link="file" ids="711,712,713,714,715,716,717,718"]')?>

        </div>
        <div id="brus" class="switch">

	<?echo do_shortcode('[gallery columns="4" link="file" ids="730,731,732,733,734,735,736,737,738,739"]')?>

        </div>
        <div id="zadnik" class="switch">

	<?echo do_shortcode('[gallery ids="684,717,261"]')?>

        </div>
    </div>
    <?

} ?>


<?php get_footer();
