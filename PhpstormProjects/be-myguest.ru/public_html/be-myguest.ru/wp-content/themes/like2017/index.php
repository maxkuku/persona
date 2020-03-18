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

<div class="wrap" data-page="template-index-php">

	<?
	if(strpos(htmlspecialchars($_SERVER['REQUEST_URI'],3), 'page') == false
	&& htmlspecialchars($_REQUEST['cat'],3) == false) {
		?>
		<?if(htmlspecialchars($_REQUEST['cat'],3) == false):?>
		<h2 class="main">Самые популярные туры</h2>
		<?php echo do_shortcode( '[metaslider id="116"]' ); ?>
		<?endif?>
		<div class="tour_details become">
			<div class="column flex-wide">

				<div class="switching-guide">
					<div class="tour_desc">
                        <span><i class="fa fa-gear"></i>Интересно</span>
						<p>Ваши знания – ваше время – ваш доход</p>
                        <p>Принимайте гостей со всего мира, делитесь с ними своими знаниями об интересных местах, организовывайте яркие туры и дарите впечатления.</p>
                        <p>Самая интересная работа на свете по вашим правилам. </p>
					</div>
				</div>
				<div class="switching-guide">
					<div class="tour_desc">
                        <span><i class="fa fa-bed"></i>Удобно</span>
						<p>
							Всего несколько кликов и вы можете стать обладателем лучшего приключения в своей жизни.Не надо никуда ходить,не надо ни с кем ни о чем долго и нудно договариваться, согласовывать время и место, гадать, о качестве гида или экскурсии, на нашем сайте вы получаете полную информацию и можете сделать выбор, который подойдет именно вам, определиться с датами и оплатить онлайн.
						</p>
					</div>
				</div>
				<div class="switching-guide">
					<div class="tour_desc">
                        <span><i class="fa fa-money"></i>Выгодно</span>
						<p>
							У нас на сайте вы не переплачиваете посредникам, вы выбираете из множества предложений именно то,которое подойдет вам и по наполнению и по стоимости, вы всегда можете подобрать тур,который удовлетворит всем вашим условиям. И вам не придется покупать кота в мешке, потому что на сайте естьвся информация о туре и реальные отзывы гостей, которые уже воспользовались этим предложением.
						</p>
					</div>
				</div>

			</div>
            <button name="get-guide"><a href="/stat-gostem/">Стать гостем</a></button>
		</div>


		<h2 class="main">Самые популярные организаторы</h2>


		<div id="authors_div"><?

			echo do_shortcode( '[authoravatars avatar_size=144 show_name=true roles=merchant user_link=false
			show_postcount=true order=post_count sort_direction=descending]' );

			?></div>


		<div class="guid_details become">
			<div class="column flex-wide">

				<div class="switching-guest">
					<div class="tour_desc">
                        <span><i class="fa fa-gears"></i>Интересно</span>
						<p>
							Каждый раз, встречая своих гостей, вы знакомитесь с интересными и любознательными людьми со всего света, которые любят путешествовать и открывать новые миры. Время, проведенное с ними, наполнит вас новыми знаниями, зарядит энергией и, вполне возможно, подарит новых друзей.
						</p>
					</div>
				</div>
				<div class="switching-guest">
					<div class="tour_desc">
                        <span><i class="fa fa-hand-peace-o"></i>Просто</span>
						<p>
							Заполните заявку и шаблон тура, пришлите нам копии необходимых документов и уже через
							несколько дней вы сможете принять своих первых гостей, которые купят тур у нас на сайте.
						</p>
					</div>
				</div>
				<div class="switching-guest">
					<div class="tour_desc">
                        <span><i class="fa fa-bed"></i>Удобно</span>
						<p>
							Вы сами определяете свое рабочее расписание, определяете перечень предоставляемых услуг,
							разрабатываете интересные для вас маршруты и туры. Все свои усилия и время вы можете
							направить на создание самых интересных и необычных впечатлений для ваших гостей, а мы
							возьмем на себя заботы по вашему продвижению и поиску потребителей вашего продукта.
						</p>
					</div>
				</div>
				<div class="switching-guest">
					<div class="tour_desc">
                        <span><i class="fa fa-graduation-cap"></i>Престижно</span>
						<p>
							Гидов всегда и все любят, их слушают и слушаются, к ним относятся с большим уважением и
							благодарностью. Это ли не самая лучшая работа на свете!
						</p>
					</div>
				</div>
				<div class="switching-guest">
					<div class="tour_desc">
                        <span><i class="fa fa-credit-card"></i>Выгодно</span>
						<p>
							В ваших руках определить свою занятость и свои доходы. Будете ли вы посвящать этому делу
							свои выходные от основной работы дни, будут ли эти туры вашим дополнительным доходом, или вы
							готовы посвятить этому все свое время, сделать делом всей своей жизни и зарабатывать хорошие
							деньги – все зависит от вас. Мы всегда готовы быть рядом – консультировать, поддерживать,
							продвигать, рекламировать и искать для вас самых лучших, добрых и любознательных гостей.
						</p>
					</div>
				</div>

			</div>
            <button name="get-guide"><a href="/wp-login.php">Стать гидом</a></button>
		</div>


		<?php
	} #if strpos




    if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area" data-file="template-index">
		<main id="main" class="site-main" role="main">
			<?if(strpos(htmlspecialchars($_SERVER['REQUEST_URI'],3), 'page') == false
			&& htmlspecialchars($_REQUEST['cat'],3) == false) {?>
				<?php echo do_shortcode('[metaslider id="116"]'); ?>
			<?}




			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

					#if(function_exists('the_ratings')) { the_ratings(); }

				endwhile;
				?>
				<div class="clear"></div>
                     <?
				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
