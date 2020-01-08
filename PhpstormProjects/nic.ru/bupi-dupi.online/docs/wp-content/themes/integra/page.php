<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

    <?if(!is_front_page()){?>
    <div id="sidebar-first" class="col-md-3 order-12 order-md-1">
        <div class="section">
            <ul class="region region-left">
    <?if($post->ID == 433
        || get_root_parent_id( $post->ID ) == 766
        || $post->ID == 781
        || $post->ID == 766
        || $post->ID == 23
        || $post->post_parent == 781
        || $post->post_parent == 766){?>
        <?php  dynamic_sidebar( 'pulmo-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 189
        || $post->ID == 405
        || get_root_parent_id( $post->ID ) == 189){?>
        <?php  dynamic_sidebar( 'about-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 246
        || get_root_parent_id( $post->ID ) == 246){?>
        <?php  dynamic_sidebar( 'program-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 812
        || get_root_parent_id( $post->ID ) == 812){?>
        <?php  dynamic_sidebar( 'allerg-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 190
        || get_root_parent_id( $post->ID ) == 190){?>
        <?php  dynamic_sidebar( 'contact-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 819
        || $post->ID == 461
        || $post->ID == 464
        || get_root_parent_id( $post->ID ) == 819){?>
        <?php  dynamic_sidebar( 'lor-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 1055
        || get_root_parent_id( $post->ID ) == 1055){?>
        <?php  dynamic_sidebar( 'diag-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 232
        || get_root_parent_id( $post->ID ) == 232){?>
        <?php  dynamic_sidebar( 'somno-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 233
        || get_root_parent_id( $post->ID ) == 233){?>
        <?php  dynamic_sidebar( 'endo-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 236
        || get_root_parent_id( $post->ID ) == 236){?>
        <?php  dynamic_sidebar( 'therapy-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 1287
        || get_root_parent_id( $post->ID ) == 1287){?>
        <?php  dynamic_sidebar( 'cardio-side-bar' ); ?>
    <?}?>
    <?if($post->ID == 1613
        || get_root_parent_id( $post->ID ) == 1613){?>
        <?php  dynamic_sidebar( 'neuro-side-bar' ); ?>
    <?}?>
            </ul>
            <script type="text/javascript">
                <!--//--><![CDATA[// ><!--

                $(function(){
                        $("body").addClass("left_js");

                        $(".menu_left_title_320").click(
                            function(){
                                $("body").toggleClass("left_mobile_nav");
                                $("body").removeClass("mobile_nav");
                                $("body").removeClass("ill_mobile_nav");
                                $("body").removeClass("simptom_mobile_nav");
                                return false;
                            }
                        );
                        $(".menu_left_a").click(
                            function(){
                                $("body").removeClass("left_mobile_nav");
                            }
                        );
                    }
                );

                //--><!]]>
            </script>
        </div>
    </div>
    <?}?>






	<div id="content" class="<?if(!is_front_page()){?>col-md-9<?}?> order-1 order-md-12" data-parent-root="<?=get_root_parent_id( $post->ID )?>">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );



				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
