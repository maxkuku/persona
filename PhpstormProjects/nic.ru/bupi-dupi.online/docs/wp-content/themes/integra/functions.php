<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


    /**
     * для общей страницы докторов получить всех
     * */
function get_by_parent($a){ // 991 специалисты
    $args = array(
        'sort_order'   => 'ASC',
        'sort_column'  => 'post_date',
        'hierarchical' => 1,
        'exclude'      => '',
        'include'      => '',
        'meta_key'     => '',
        'meta_value'   => '',
        'authors'      => '',
        'child_of'     => 0,
        'parent'       => $a["parent_id"],
        'exclude_tree' => '',
        'number'       => '',
        'offset'       => 0,
        'post_type'    => 'page',
        'post_status'  => 'publish',
    );
    $pages = get_pages( $args );
    foreach( $pages as $post ){
        setup_postdata( $post );


        $custom = get_post_custom($post->ID);
        $an = "";
        if(isset($custom['annotation'])) {
            $an =  $custom['annotation'][0];
        }

        ?>
        <div class="card col-12">


            <div class="row border-bottom p-4 m-1">
                <div class="col-md-4 col-12">
                    <a href="<?=get_the_permalink($post->ID)?>">
                        <img src="<?=get_the_post_thumbnail_url($post->ID)?>" alt="<?=$post->post_title?>"/>
                    </a>
                </div>
                <div class="col-md-8 col-12">
                    <div class="h1">
                        <p class="personNewName"><a href="<?=get_the_permalink($post->ID)?>"><?=$post->post_title?></a>
                        </p>
                    </div>
                    <p>
                        <strong><?=$an?></strong>
                    </p>
                    <p class="personNewDoljnost" style="font-weight:bold">
                        <?=$post->post_excerpt?>
                    </p>
                </div>
                <!--<?=$post->ID?>--></div>
        </div>
        <?
    }
    wp_reset_postdata();
}

add_shortcode( 'posts', 'get_by_parent' );



    /**
    * для страницы вопрос-ответ список всех вопросов
    *
    */
function get_faq_by_parent($a){ // 1792 faq
    $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'sort_order'   => 'ASC',
        'sort_column'  => 'post_date',
        'hierarchical' => 1,
        'exclude'      => '',
        'include'      => '',
        'meta_key'     => '',
        'meta_value'   => '',
        'authors'      => '',
        'child_of'     => 0,
        'parent'       => $a["parent_id"],
        'exclude_tree' => '',
        'number'       => $page,
        'paged'        => $page,
        'posts_per_page' => 15,
        'post_type'    => 'page',
        'post_status'  => 'publish',
    );
    $pages = query_posts( $args );

    foreach( $pages as $post ){
        setup_postdata( $post );
        ?>
        <div class="view-content">
            <div class="views-row views-row-2 col-12">
                <h2><a href="<?=get_the_permalink($post->ID)?>"><?=$post->post_title?></a></h2>
                <?=$post->post_content?>
            </div>
        </div>
        <?
    }
    ?>
    <div class="navigation">
        <div class="alignleft"><?php previous_posts_link('&laquo; Назад') ?></div>
        <div class="alignright"><?php next_posts_link('Вперед &raquo;') ?></div>
    </div>
    <?
    wp_reset_query();
}

add_shortcode( 'faqs', 'get_faq_by_parent' );


/** получает page по названию страницы */
function get_page_by_post_name($post_name, $output = OBJECT, $post_type = 'page' ){
    global $wpdb;
    $page = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type= %s", $post_name, $post_type ) );

    if ( $page ) return get_post( $page, $output );

    return null;
}

add_action('init','get_page_by_post_name');



if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1'        => __( 'Primary', 'twentynineteen' ),
				'menu-2'        => __( 'About', 'twentynineteen' ),
				'menu-3'        => __( 'Pulmonology', 'twentynineteen' ),
				'menu-4'        => __( 'Allergology', 'twentynineteen' ),
				'menu-5'        => __( 'Lor', 'twentynineteen' ),
				'menu-6'        => __( 'Diag', 'twentynineteen' ),
				'menu-7'        => __( 'Somnology', 'twentynineteen' ),
				'menu-8'        => __( 'Therapy', 'twentynineteen' ),
				'menu-9'        => __( 'Cardio', 'twentynineteen' ),
				'menu-10'       => __( 'Neuro', 'twentynineteen' ),
				'menu-11'       => __( 'Contacts', 'twentynineteen' ),
				'menu-12'       => __( 'Program', 'twentynineteen' ),
				'menu-13'       => __( 'Endo', 'twentynineteen' ),
				'footer'        => __( 'Footer Menu', 'twentynineteen' ),
				'footer-service'=> __( 'Footer-service Menu', 'twentynineteen' ),
				'footer-info'   => __( 'Footer-info Menu', 'twentynineteen' ),
				'footer-help'   => __( 'Footer-help Menu', 'twentynineteen' ),
				'lorproblemy'   => __( 'Lorproblemy Menu', 'twentynineteen' ),
				'vse-o-somno'   => __( 'Vse-o-somno Menu', 'twentynineteen' ),
				'social'        => __( 'Social Links Menu', 'twentynineteen' ),
				'diseases-1'    => __( 'Diseases Pulmo', 'twentynineteen' ),
				'diseases-2'    => __( 'Diseases Allergo', 'twentynineteen' ),
				'diseases-3'    => __( 'Diseases Lor', 'twentynineteen' ),
				'diseases-4'    => __( 'Diseases Therapy', 'twentynineteen' ),
				'diseases-5'    => __( 'Diseases Cardio', 'twentynineteen' ),
				'diseases-6'    => __( 'Diseases Neuro', 'twentynineteen' ),
				'diseases-7'    => __( 'Diseases Endo', 'twentynineteen' ),
				'simptom-1'     => __( 'Simptom Pulmo', 'twentynineteen' ),
				'simptom-2'     => __( 'Simptom Lor', 'twentynineteen' ),
				'simptom-3'     => __( 'Simptom Somno', 'twentynineteen' ),
				'simptom-4'     => __( 'Simptom Therapy', 'twentynineteen' ),
				'simptom-5'     => __( 'Simptom Cardio', 'twentynineteen' ),
				'simptom-6'     => __( 'Simptom Neuro', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'twentynineteen' ) : null,
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'twentynineteen' ) : null,
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '20181214', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '20181231', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

# disable feed
function itsme_disable_feed() {
    wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}



function add_excerpt_to_pages()
{
     add_post_type_support( 'page', 'excerpt' );
}

add_action('init', 'add_excerpt_to_pages');



add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );


# disable xml rpc
add_filter('xmlrpc_enabled', '__return_false');


# get root parent
function get_root_parent_id( $page_id ) {
    global $wpdb;
    $parent = $wpdb->get_var( "SELECT post_parent FROM $wpdb->posts WHERE post_type='page' AND post_status='publish' AND ID = '$page_id'" );
    if( $parent == 0 ) {
        return $page_id;
    } else {
        return get_root_parent_id( $parent );
    }
}


# add sidebar
function Program_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Program', 'integra' ),
            'id' => 'program-side-bar',
            'description' => __( 'Program Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Program_sidebar' );


# add sidebar
function Articledetail_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Articledetail', 'integra' ),
            'id' => 'articledetail-side-bar',
            'description' => __( 'Articledetail Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Articledetail_sidebar' );



# add sidebar
function Contact_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Contact', 'integra' ),
            'id' => 'contact-side-bar',
            'description' => __( 'Contact Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Contact_sidebar' );




# add sidebar
function About_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'About', 'integra' ),
            'id' => 'about-side-bar',
            'description' => __( 'About Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'About_sidebar' );



# add sidebar
function Pulmo_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Pulmo', 'integra' ),
            'id' => 'pulmo-side-bar',
            'description' => __( 'Pulmo Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Pulmo_sidebar' );



# add sidebar
function Allerg_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Allerg', 'integra' ),
            'id' => 'allerg-side-bar',
            'description' => __( 'Allerg Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Allerg_sidebar' );


# add sidebar
function Articles_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Articles', 'integra' ),
            'id' => 'articles-side-bar',
            'description' => __( 'Articles Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Articles_sidebar' );




# add sidebar
function Specs_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Specs', 'integra' ),
            'id' => 'specs-side-bar',
            'description' => __( 'Specs Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Specs_sidebar' );



# add sidebar
function Lor_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Lor', 'integra' ),
            'id' => 'lor-side-bar',
            'description' => __( 'Lor Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Lor_sidebar' );



# add sidebar
function Diag_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Diag', 'integra' ),
            'id' => 'diag-side-bar',
            'description' => __( 'Diag Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Diag_sidebar' );



# add sidebar
function Somno_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Somnology', 'integra' ),
            'id' => 'somno-side-bar',
            'description' => __( 'Somnology Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Somno_sidebar' );



# add sidebar
function Therapy_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Therapy', 'integra' ),
            'id' => 'therapy-side-bar',
            'description' => __( 'Therapy Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Therapy_sidebar' );




# add sidebar
function Cardio_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Cardio', 'integra' ),
            'id' => 'cardio-side-bar',
            'description' => __( 'Cardio Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Cardio_sidebar' );




# add sidebar
function Neuro_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Neuro', 'integra' ),
            'id' => 'neuro-side-bar',
            'description' => __( 'Neuro Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Neuro_sidebar' );



# add sidebar
function Endo_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Endo', 'integra' ),
            'id' => 'endo-side-bar',
            'description' => __( 'Endo Sidebar', 'integra' ),
        )
    );
}
add_action( 'widgets_init', 'Endo_sidebar' );




remove_filter( 'the_content', 'wpautop' );
#add_filter( 'the_content', 'wpautop' , 99 );
#add_filter( 'the_content', 'shortcode_unautop', 100 );





function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){ //Defines a default image
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}




function doctor_function($atts) {
    $name = $atts['name'];
    @$public = ($atts['public']>0)?$atts['public']:0;

    $dop = "";
    if(!$public){
        $dop = " AND post_status = 'publish' ";
    }

    global $wpdb;
    $query = $wpdb->get_results( $wpdb->prepare("SELECT * FROM $wpdb->posts WHERE  post_title LIKE '%s' ".$dop." LIMIT 1", '%'. $wpdb->esc_like( $name ) .'%') );

    $line = '';
    foreach( $query as $q ){

        $an = $q->post_excerpt;
        $custom = get_post_custom($q->ID);
        if(isset($custom['annotation'])) {
            $an =  $custom['annotation'][0];
        }

        $id = $q->ID;
        $line .= '
        <div class="doctor" id="doctor_'.$q->ID.'">
            <div class="inner-doc" style="background-image:url('.get_the_post_thumbnail_url($id).')" class="in-doctor">
                <a class="doc-name-href" rel="noopener norefferer" href="/team/'.$q->post_name.'">'.$q->post_title.'</a>
                <div class="doljnost">
                    <a class="doc-excerpt-href" rel="noopener norefferer" href="/team/'.$q->post_name.'">'.$an.'</a>
                </div>
            </div>
        </div>
        ';
    }

    return $line;
}

add_shortcode( 'doctor', 'doctor_function' );

