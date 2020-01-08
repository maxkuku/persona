<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  data-page="templates-parts-page-content-page-php">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
        <?php
        if(is_page(34)):
            #echo "Page 34";
		$args = array( 'category' => 8, 'post_type'=> 'post',  'numberposts' => 26 );
		$postslist = get_posts( $args );

		#var_dump($postslist);

		foreach ($postslist as $post) :
			setup_postdata($post);

			echo "<div class='berfore-excerpt' onclick='location.href=\"" . get_the_permalink() . "\"' style=\"cursor:pointer\"><a href='" . get_the_permalink() . "' title='" . get_the_title() . "'>" . get_the_post_thumbnail() . "</a></div>";

		    echo "<h2><a href='" . get_the_permalink() . "'>" . get_the_title() . "</a></h2>";

			echo get_the_excerpt();


		endforeach;
	    wp_reset_postdata();
		endif;
        ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
