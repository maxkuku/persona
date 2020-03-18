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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-page="template-parts-page-content-page">
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
		<?php
		the_content(); ?>

		<?php
		if ( is_page( 179 ) ) {


			$date = htmlspecialchars( $_REQUEST["date"], 3 );

			echo "( date ) - " . $date . "<br>";


			if ( $date ) {

				global $query_string;
				$query_args   = explode( "&", $query_string );
				$search_query = array();

				foreach ( $query_args as $key => $string ) {
					$query_split                     = explode( "=", $string );
					$search_query[ $query_split[0] ] = urldecode( $query_split[1] );
					$search_query[] = urldecode( $date );
				}



				$the_query = new WP_Query( $search_query );
				if ( $the_query->have_posts() ) :

					while ( $the_query->have_posts() ) : $the_query->the_post();
						echo the_post();
					endwhile;
					wp_reset_postdata(); ?>

				<?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif;

			}








			$days = htmlspecialchars( $_REQUEST["days"], 3 );

			# echo "( days ) - " . $days . "<br>";

			$args  = array(
				'meta_query' => array(
					array(
						'key'     => 'Продолжительность',
						'value'   => $days * 24,
						'compare' => '<',
					)
				)
			);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {

				while ( $query->have_posts() ) {
				    $e = $query->the_post();
					echo $e->post_content;
				}
				wp_reset_postdata();
			}


		}
		?>

		<? /*wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );*/
		?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
