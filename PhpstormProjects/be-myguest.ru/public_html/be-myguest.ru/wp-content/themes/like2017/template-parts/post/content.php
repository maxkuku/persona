<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
         data-page="template-parts-post-content">
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;

	

	if ( ! is_front_page() && strpos(htmlspecialchars($_SERVER['REQUEST_URI'],3),'wpshopcarts=vizit') == false ) { ?>
		<?#pr(get_defined_vars())?>
		<div id="form">
			<?$post_id = $post->ID; ?>
			<!--div id="top" class="section">
				<div id="city_name">
					<label>Город: </label>
					<?
					$category_detail = get_the_category( $post->ID );
					foreach ( $category_detail as $cd ) {
						echo $cd->cat_name;
					}
					?>
				</div>
				<div><label>Выберите дату </label><input type="date" name="date" value=""/></div>
				<div><label>Число гостей </label><input type="number" min="1" max="100" name="guests" value="1"/>
				</div>
				<?php
				$key    = "cost_1";
				$cost = get_post_meta( $post_id, $key, true );
				?>
				<div><label>Стоимость </label>
					<span id="price" data-price="<?=$cost?>"><?=$cost?></span>
				</div>
			</div-->
			<div id="heading" class="section">
				<? the_title( '<h1 class="entry-title"><a href="'.get_the_permalink().'" >', '</a></h1>' ); ?>
				<div class="icon" title="<?=get_the_author_meta( 'nicename' )?>"><? echo get_avatar(
						get_the_author_meta( 'ID' ), 132 );?>
					<span><?=get_the_author_meta( 'nicename' )?></span>
				</div>
				<?
				$key    = "Рейтинг";
				$rating = get_post_meta( $post_id, $key, true );

				if(function_exists('the_ratings')) { the_ratings(); }
				#echo tour_rating( $rating );
				?>
			</div>
			<div id="photos" class="section">
				<div class="column photo_tur flex-60">
					<!--slider-->
					<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
					<!--end slider-->
				</div>

				<div class="column flex-40">
					<div class="tour-pos"><img src="/images/stopwatch.svg"/><span
							class="desc">Продолжительность:</span>
						<span class="val"><?= get_post_meta( $post_id, "Продолжительность", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/travel.svg"/><span class="desc">Категория тура:</span>
						<span class="val"><?= get_post_meta( $post_id, "Категория тура", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/bus.svg"/><span class="desc">Вид тура:</span>
						<span class="val"><?= get_post_meta( $post_id, "Вид тура", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/family.svg"/><span class="desc">Возраст гостей:</span>
						<span class="val"><?= get_post_meta( $post_id, "Возраст гостей", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/climbing-stairs.svg"/><span
							class="desc">Уровень сложности:</span>
						<span class="val"><?= get_post_meta( $post_id, "Уровень сложности", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/user.svg"/><span class="desc">Гид:</span>
						<span class="val"><?= get_post_meta( $post_id, "Гид", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/translate.svg"/><span class="desc">Язык тура:</span>
						<span class="val"><?= get_post_meta( $post_id, "Язык тура", true ); ?></span></div>
					<div class="tour-pos"><img src="/images/cloud.svg"/><span
							class="desc">Зависимость от погоды:</span>
						<span class="val"><?= get_post_meta( $post_id, "Зависимость от погоды", true ); ?></span>
					</div>
					<?
					if ( get_post_meta( $post_id, "Что включено в стоимость тура?", true ) ): ?>
                        <div class="tour_includes">
                            <img src="/images/price-tag.svg"/>
                            <span class="desc">Что включено в стоимость тура:</span>
                            <span class="val"><?= get_post_meta( $post_id, "Что включено в стоимость тура?", true ); ?>
                                </span>
                        </div>
					<?endif ?>
					<?
					if ( get_post_meta( $post_id, "Правила отмены или переноса тура", true ) ): ?>
                        <div class="tour_rules">
                            <img src="/images/close.svg"/>
                            <span class="desc">Правила отмены или переноса тура:</span>
                            <span class="val">
								<?= get_post_meta( $post_id, "Правила отмены или переноса тура", true ); ?>
                                </span>
                        </div>
					<?endif ?>
					<?
					if ( get_post_meta( $post_id, "Место проведения", true ) ): ?>
                        <div class="tour_place">
                            <img src="/images/map.svg"/>
                            <span class="desc">Место проведения:</span>
                            <span class="val"><?= get_post_meta( $post_id, "Место проведения", true ); ?>
                                </span>
                        </div>
					<?endif ?>
					<?
					if ( get_post_meta( $post_id, "Форма одежды, необходимые предметы", true ) ): ?>
                        <div class="tour_things">
                            <img src="/images/clothes.svg"/>
                            <span class="desc">Форма одежды, необходимые предметы:</span>
                            <span class="val"><?= get_post_meta( $post_id, "Форма одежды, необходимые предметы", true ); ?>
                                </span>
                        </div>
					<?endif ?>
                </div>
			</div>
			<div class="tour_details section">
				<div class="column first-section">
					<div class="selector">
						<span class="active">Описание</span>
						<span>Отзывы</span>
					</div>
					<div class="switching open">
						<div class="tour_desc">
							<? the_content() ?>
							
						</div>


					</div>
					<div class="switching">
						<div class="tour_feed">
							<?if ( comments_open() || get_comments_number() ) :
							comments_template();
							endif;?>
						</div>
					</div>
				</div>
				<div class="column second-section">
					<div class="guid-photo-text">
						<div class="photo_org">
							<?
							echo get_avatar( get_the_author_meta( 'ID' ), 132 );?>
							<!--img src="/images/profile.svg" alt="Фотка организатора/Логотип"/-->
						</div>
						<?if(get_post_meta( $post_id, "Текст от гида, о гиде или организации", true )):?>
							<div class="about_org">
								<img src="/images/directions.svg"/><span
									class="desc">Текст от гида, о гиде или организации:</span>
								<?= get_post_meta( $post_id, "Текст от гида, о гиде или организации", true ); ?>
							</div>
						<?endif?>
					</div>
					<div class="about_video">
						<? if(get_post_meta( $post_id, "Идентификатор видео Youtube", true )){?>
							<iframe width="100%" height="315"
							        src="https://www.youtube.com/embed/<?= get_post_meta( $post_id, "Идентификатор видео Youtube", true ); ?>"
							        frameborder="0"
							        allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<?}?>
					</div>


					<!--div class="label-agree">
						<label for="agree"></label>
						<input type="checkbox" name="agree" id="agree"> Соглашаюсь с <a href="/rules/" target="_blank">правилами
							обработки</a> персональных данных
					</div-->

				</div>
			</div>
			<h2 class="main">Вам тоже могут понравиться:</h2>
			<?php echo do_shortcode('[metaslider id="116"]'); ?>
		</div>
	<?}
	else {
		?>

		<header class="entry-header" data-part="else-part">
			<?php
			if ( is_front_page() && is_home() ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
			else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>
		</header><!-- .entry-header -->

		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<div class="entry-content">
			<?php

			if(function_exists('the_ratings')) { the_ratings(); }

			if ( is_home() ) {
				$excerpt = get_the_excerpt( $post );
				echo $excerpt;
			} else {
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				) );
				/*wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );*/
			} ?>
		</div><!-- .entry-content -->

	<? } ?>
	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
