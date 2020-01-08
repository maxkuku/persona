<?php



/* редирект со страницы аттачмента в корень */
function myprefix_redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		if ( $post && $post->post_parent ) {
			wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
			exit;
		} else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );








/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';

	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyseventeen' );

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

	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );

	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
		'bottom' => __( 'Bottom Menu', 'twentyseventeen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'      => 250,
		'height'     => 250,
		'flex-width' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', twentyseventeen_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'     => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'       => array(
			'home',
			'about'            => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact'          => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog'             => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'twentyseventeen' ),
				'file'       => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'twentyseventeen' ),
				'file'       => 'assets/images/sandwich.jpg',
			),
			'image-coffee'   => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'twentyseventeen' ),
				'file'       => 'assets/images/coffee.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'     => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods'  => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "top" location.
			'top'    => array(
				'name'  => __( 'Top Menu', 'twentyseventeen' ),
				'items' => array(
					'link_home',
					// Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "top" location.
			'bottom' => array(
				'name'  => __( 'Bottom Menu', 'twentyseventeen' ),
				'items' => array(
					#'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					#'page_about',
					#'page_blog',
					#'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name'  => __( 'Social Links Menu', 'twentyseventeen' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters Twenty Seventeen array of starter content.
	 *
	 * @since Twenty Seventeen 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}

add_action( 'after_setup_theme', 'twentyseventeen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twentyseventeen_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( twentyseventeen_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Twenty Seventeen content width of the theme.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'twentyseventeen_content_width', $content_width );
}

add_action( 'template_redirect', 'twentyseventeen_content_width', 0 );

/**
 * Register custom fonts.
 */
function twentyseventeen_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'twentyseventeen' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 *
 * @return array $urls           URLs to print for resource hints.
 */
function twentyseventeen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyseventeen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}

add_filter( 'wp_resource_hints', 'twentyseventeen_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'twentyseventeen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'twentyseventeen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'twentyseventeen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'twentyseventeen_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ), get_the_title( get_the_ID() ) )
	);

	return ' &hellip; ' . $link;
}

add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action( 'wp_head', 'twentyseventeen_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}

add_action( 'wp_head', 'twentyseventeen_pingback_header' );

/**
 * Display custom color CSS.
 */
function twentyseventeen_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
	?>
    <style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) {
		echo 'data-hue="' . $hue . '"';
	} ?>>
        <?php echo twentyseventeen_custom_colors_css(); ?>
    </style>
<?php }

add_action( 'wp_head', 'twentyseventeen_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'twentyseventeen-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
		wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
	wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentyseventeen-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$twentyseventeen_l10n = array(
		'quote' => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'twentyseventeen-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$twentyseventeen_l10n['expand']   = __( 'Expand child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['collapse'] = __( 'Collapse child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['icon']     = twentyseventeen_get_svg( array(
			'icon'     => 'angle-down',
			'fallback' => true
		) );
	}

	wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array $size Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 *
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			$sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}

add_filter( 'wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $html The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array $attr Array of the attributes for the image tag.
 *
 * @return string The filtered header image HTML.
 */
function twentyseventeen_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}

	return $html;
}

add_filter( 'get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 *
 * @return array The filtered attributes for the image markup.
 */
function twentyseventeen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}

add_filter( 'wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template( $template ) {
	return is_home() ? '' : $template;
}

add_filter( 'frontpage_template', 'twentyseventeen_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Seventeen 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 *
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyseventeen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}

add_filter( 'widget_tag_cloud_args', 'twentyseventeen_widget_tag_cloud_args' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 *
 * @staticvar int $instance
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 * @type string $order Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 * @type string $orderby The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 * @type int $id Post ID.
 * @type string $itemtag HTML tag to use for each image in the gallery.
 *                                    Default 'dl', or 'figure' when the theme registers HTML5 gallery support.
 * @type string $icontag HTML tag to use for each image's icon.
 *                                    Default 'dt', or 'div' when the theme registers HTML5 gallery support.
 * @type string $captiontag HTML tag to use for each image's caption.
 *                                    Default 'dd', or 'figcaption' when the theme registers HTML5 gallery support.
 * @type int $columns Number of columns of images to display. Default 3.
 * @type string|array $size Size of the images to display. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 * @type string $ids A comma-separated list of IDs of attachments to display. Default empty.
 * @type string $include A comma-separated list of IDs of attachments to include. Default empty.
 * @type string $exclude A comma-separated list of IDs of attachments to exclude. Default empty.
 * @type string $link What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */

remove_shortcode( 'gallery', 'gallery_shortcode' );
add_shortcode( 'gallery', 'gallery_shortcode_mine' );

function gallery_shortcode_mine( $attr ) {
	$post = get_post();

	static $instance = 0;
	$instance ++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}

	/**
	 * Filters the default gallery shortcode output.
	 *
	 * If the filtered output isn't empty, it will be used instead of generating
	 * the default gallery template.
	 *
	 * @since 2.5.0
	 * @since 4.2.0 The `$instance` parameter was added.
	 *
	 * @see gallery_shortcode()
	 *
	 * @param string $output The gallery output. Default empty.
	 * @param array $attr Attributes of the gallery shortcode.
	 * @param int $instance Unique numeric ID of this gallery shortcode instance.
	 */
	$output = apply_filters( 'post_gallery', '', $attr, $instance );
	if ( $output != '' ) {
		return $output;
	}

	$html5 = current_theme_supports( 'html5', 'gallery' );
	$atts  = shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		'itemtag'    => $html5 ? 'figure' : 'dl',
		'icontag'    => $html5 ? 'div' : 'dt',
		'captiontag' => $html5 ? 'figcaption' : 'dd',
		'columns'    => 3,
		'size'       => 'full',
		'include'    => '',
		'exclude'    => '',
		'link'       => ''
	), $attr, 'gallery' );

	$id = intval( $atts['id'] );

	if ( ! empty( $atts['include'] ) ) {
		$_attachments = get_posts( array(
			'include'        => $atts['include'],
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $atts['order'],
			'orderby'        => $atts['orderby']
		) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[ $val->ID ] = $_attachments[ $key ];
		}
	} elseif ( ! empty( $atts['exclude'] ) ) {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'exclude'        => $atts['exclude'],
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $atts['order'],
			'orderby'        => $atts['orderby']
		) );
	} else {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $atts['order'],
			'orderby'        => $atts['orderby']
		) );
	}

	if ( empty( $attachments ) ) {
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
		}

		return $output;
	}

	$itemtag    = tag_escape( $atts['itemtag'] );
	$captiontag = tag_escape( $atts['captiontag'] );
	$icontag    = tag_escape( $atts['icontag'] );
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) ) {
		$itemtag = 'dl';
	}
	if ( ! isset( $valid_tags[ $captiontag ] ) ) {
		$captiontag = 'dd';
	}
	if ( ! isset( $valid_tags[ $icontag ] ) ) {
		$icontag = 'dt';
	}

	$columns   = intval( $atts['columns'] );
	$itemwidth = $columns > 0 ? floor( 100 / $columns ) : 100;
	$float     = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$gallery_style = '';

	/**
	 * Filters whether to print default gallery styles.
	 *
	 * @since 3.1.0
	 *
	 * @param bool $print Whether to print default gallery styles.
	 *                    Defaults to false if the theme supports HTML5 galleries.
	 *                    Otherwise, defaults to true.
	 */
	if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
		$gallery_style = "
		<style type='text/css'>
			#{$selector} {
				margin: auto;
			}
			#{$selector} .gallery-item {
				float: {$float};
				margin-top: 10px;
				text-align: center;
				width: {$itemwidth}%;
			}
			#{$selector} img {
				border: 2px solid #cfcfcf;
			}
			#{$selector} .gallery-caption {
				margin-left: 0;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>\n\t\t";
	}

	$size_class  = sanitize_html_class( $atts['size'] );
	$gallery_div = "<div class='gal-wrap'>
<ul id='$selector' class='image-gallery service-slider top-galelry galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";


	/**
	 * Filters the default gallery shortcode CSS styles.
	 *
	 * @since 2.5.0
	 *
	 * @param string $gallery_style Default CSS styles and opening HTML div container
	 *                              for the gallery shortcode output.
	 */
	$output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

		$attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
		if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
			$image_output = wp_get_attachment_link( $id, $atts['size'], false, false, false, $attr );
		} elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
			$image_output = wp_get_attachment_image( $id, $atts['size'], false, $attr );
		} else {
			$image_output = wp_get_attachment_link( $id, $atts['size'], true, false, false, $attr );
		}
		$image_meta = wp_get_attachment_metadata( $id );
		$image_caption = wp_get_attachment_caption( $id );



		/*$newoutput = "<{$itemtag}><li>
		<div class=\"portfolio-item\">
			<span class=\"thumb-info thumb-info-lighten thumb-info-centered-icons\">
				<span class=\"thumb-info-wrapper\">";
		$link      = wp_get_attachment_url( $id );
		$alt       = get_post_meta( $id, '_wp_attachment_image_alt', true );
		$newoutput .= get_image_tag( $id, $alt, $alt, "full" );
		$newoutput .= "<span class=\"thumb-info-action\">
                        <a href=\"{$link}\" title=\"{$alt}\">
                        <span class=\"thumb-info-action-icon thumb-info-action-icon-light\">
							<i class=\"fa fa-search-plus\"></i>
						</span>
						</a>
					</span>
					";
			if($image_caption){
		$newoutput .= "<span class='caption'>" . ucfirst($image_caption) . "</span>";
                }
	$newoutput .= "
				</span>
			</span></div>
</li></{$itemtag}>";*/

		$link      = wp_get_attachment_url( $id );
		$alt       = get_post_meta( $id, '_wp_attachment_image_alt', true );

		$newoutput = "<{$itemtag}><li>
		<div class=\"portfolio-item\">
		<a href=\"{$link}\" title=\"{$alt}\" style='background-image: url(" . wp_get_attachment_url( $id ) . ")'>";
		$newoutput .= get_image_tag( $id, $alt, $alt, "thumbnail" );
		$newoutput .= "</a></div></li></{$itemtag}>";
		$output .= $newoutput;


		if ( ! $html5 && $columns > 0 && ++ $i % $columns == 0 ) {
			$output .= '<br style="clear: both" />';
		}
	}

	if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
		$output .= "
			<br style='clear: both' />";
	}

	$output .= "
		</div>\n";

	return $output;
}

add_shortcode( 'ballery', 'ballery_shortcode_mine' );

function ballery_shortcode_mine( $attr ) {
	$post = get_post();

	static $instance = 0;
	$instance ++;

	if ( ! empty( $attr['ids'] ) ) {
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}


	$output = apply_filters( 'post_gallery', '', $attr, $instance );
	if ( $output != '' ) {
		return $output;
	}

	$html5 = current_theme_supports( 'html5', 'gallery' );
	$atts  = shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		'itemtag'    => $html5 ? 'figure' : 'dl',
		'icontag'    => $html5 ? 'div' : 'dt',
		'captiontag' => $html5 ? 'figcaption' : 'dd',
		'columns'    => 3,
		'size'       => 'full',
		'include'    => '',
		'exclude'    => '',
		'link'       => ''
	), $attr, 'ballery' );

	$id = intval( $atts['id'] );

	if ( ! empty( $atts['include'] ) ) {
		$_attachments = get_posts( array(
			'include'        => $atts['include'],
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $atts['order'],
			'orderby'        => $atts['orderby']
		) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[ $val->ID ] = $_attachments[ $key ];
		}
	} elseif ( ! empty( $atts['exclude'] ) ) {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'exclude'        => $atts['exclude'],
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $atts['order'],
			'orderby'        => $atts['orderby']
		) );
	} else {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $atts['order'],
			'orderby'        => $atts['orderby']
		) );
	}

	if ( empty( $attachments ) ) {
		return '';
	}

	$itemtag    = tag_escape( $atts['itemtag'] );
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) ) {
		$itemtag = 'dl';
	}

	$columns   = intval( $atts['columns'] );
	$selector = "gallery-{$instance}";
	$size_class  = sanitize_html_class( $atts['size'] );

	$output = "<div class='ballery-wrap'>
    <ul id='$selector' class='image-ballery balleryid-{$id} ballery-columns-{$columns} ballery-size-{$size_class}'>";


	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

		$image_caption = wp_get_attachment_caption( $id );

		$newoutput = "<{$itemtag}>
        <li>
		<div class=\"portfolio-item\">
			<span class=\"thumb-info thumb-info-lighten thumb-info-centered-icons\">
				<span class=\"thumb-info-wrapper\">";
		$link      = wp_get_attachment_url( $id );
		$alt       = get_post_meta( $id, '_wp_attachment_image_alt', true );
		$newoutput .= get_image_tag( $id, $alt, $alt, "full" );
		$newoutput .= "<span class=\"thumb-info-action\">
                        <a href=\"{$link}\" title=\"{$alt}\">
                        <span class=\"thumb-info-action-icon thumb-info-action-icon-light\">
							<i class=\"fa fa-search-plus\"></i>
						</span>
						</a>
					</span>
				</span>";
		if($image_caption){
			$newoutput .= "<span class='caption'>" . ucfirst($image_caption) . "</span>";
		}
		$newoutput .= "
			</span>
			</div>
        </li>
        </{$itemtag}>";

		$output .= $newoutput;


		if ( ! $html5 && $columns > 0 && ++ $i % $columns == 0 ) {
			$output .= '<br style="clear: both" />';
		}
	}

	if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
		$output .= "
			<br style='clear: both' />";
	}

	$output .= "</ul></div>\n";

	return $output;
}



/*disable auto p*/
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


function free_function() {
	$r = '
    <div class="promo promo-light bottommargin text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
        <h3>Все готовые <span class="t-rotate color morphext"><span class="animated bounceIn">дизайн-макеты</span></span></h3>
        на свадьбу <a href="/primery-dizajn-maketov/" data-lightbox="ajax" class="button button-xlarge button-rounded">здесь</a>
    </div>';

	return $r;
}

add_shortcode( 'free', 'free_function' );


function block_6_function(){
    ob_start()?>
        <div class="six-cols-wrap">
			<?

			$links[] = ['/joker/', 'Джокер', '/images/joker.jpg'];
			$links[] = ['/tritix/', 'Тритикс', '/images/tritix.jpg'];
			$links[] = ['/brus/', 'Брус', '/images/brus.jpg'];
			$links[] = ['/3d/', '3D', '/images/3d.jpg'];
			$links[] = ['/zadnik-dlya-sceny/', 'Задник для сцены', '/images/zadnik.jpg'];
			$links[] = ['/nestandartnye-konstrukcii/', 'Нестандартные конструкции', '/images/nestandart.jpg'];

			$args = array( 'category' => 1, 'numberposts' => 26 );
			$myposts = get_posts( $args );
			$i=0;
			foreach( $myposts as $post ) :  setup_postdata($post);
				?>
                <div class="col_one_third post-id-<?=$post->ID?>">
                    <div class="feature-box media-box feature-cosmos" id="main-post-<?=$post->ID?>">
                        <div class="fbox-media fbounceIn animated">
                            <a href="<?=$links[$i][0]?>" title="<?=get_the_title()?>">
								<?=get_the_post_thumbnail( $post->ID, "full" );?>
                            </a>
                        </div>
                        <div class="fbox-desc">
                            <h3>
                                <a class="nott" href="<?=$links[$i][0]?>">
	                                <?=$links[$i][1]?></a>
                            </h3>
                            <p class="hidden-sm hidden-xs"><? the_content() ?><br>
                                <a class="button button-border button-rounded button-light button-mini noleftmargin button-reveal tright" href="<?=$links[$i][0]?>" title="<?=$links[$i][1]?>">
                                    <i class="icon-line-arrow-right"></i>
                                    <span>Подробнее</span></a>
                            </p>
                        </div>
                    </div>
                </div>
				<?php $i++;
			endforeach; ?>
			<? wp_reset_postdata()?>
        </div>
    <?return ob_get_clean();
}
add_shortcode( 'block_6', 'block_6_function' );

function action_function( $atts ) {
	$a = shortcode_atts( array(
		'header' => $atts['header'],
		'detail' => $atts['detail'],
		'img'    => $atts['img'],
	), $atts );
	ob_start(); ?>
    <div class="promo promo-light abs-header">
        <h3><?= $a['header'] ?></h3>
		<?
		if ( strlen( $a['img'] ) > 0 ) { ?>
            <div class="item-text"><img src="<?= $a['img'] ?>" alt="<?= $a['header'] ?>" class="item-img"/></div>
			<?
		} ?>
        <div class="item-text detail"><?= $a['detail'] ?></div>
    </div>
	<?
	return ob_get_clean();
}

add_shortcode( 'action', 'action_function' );


function personal_function( $atts ) {
	$a = shortcode_atts( array(
		'header' => $atts['header']
	), $atts );
	ob_start(); ?>
    <div class="personal">
        <h3><?= $a['header'] ?></h3>
        <div class="personal-wrap">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="team_people_one_img">
                            <img src="/images/icon1.png" alt="Менеджер" title="Менеджер">
                        </div>
                        <div class="team_people_one_text">
                            <p>
                                <strong>Персональный менеджер</strong>
                            </p>
                            Принимает и рассчитывает заказ, консультирует по всем вопросам, передаёт информацию
                            дизайнеру!
                        </div>
                    </div>
                    <div class="col">
                        <div class="team_people_one_img">
                            <img src="/images/icon2.png" alt="Дизайнер" title="Дизайнер">
                        </div>
                        <div class="team_people_one_text">
                            <p>
                                <strong>Дизайнер</strong>
                            </p>
                            Получает техническое задание, согласовывает дизайн-макет, передаёт файл на печать!
                        </div>
                    </div>
                    <div class="col">
                        <div class="team_people_one_img">
                            <img src="/images/icon3.png" alt="Печатник" title="Печатник">
                        </div>
                        <div class="team_people_one_text">
                            <p>
                                <strong>Печатник</strong>
                            </p>
                            Получает готовый файл от дизайнера и печатает на широкоформатном принтере, передаёт
                            постпечатнику!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="team_people_one_img">
                            <img src="/images/icon4.png" alt="Постпечатник" title="Постпечатник">
                        </div>
                        <div class="team_people_one_text">
                            <p>
                                <strong>Постпечатник</strong>
                            </p>
                            Получает отпечатанный материал, режет, проклеивает, проваривает, пробивает люверсы, передаёт
                            на склад!
                        </div>
                    </div>
                    <div class="col">
                        <div class="team_people_one_img">
                            <img src="/images/icon5.png" alt="Курьер" title="Курьер">
                        </div>
                        <div class="team_people_one_text">
                            <p>
                                <strong>Курьер</strong>
                            </p>
                            Забирает заказ со склада и доставляет по Вашему адресу в назначенное время!
                        </div>
                    </div>
                    <div class="col">
                        <div class="team_people_one_img">
                            <img alt="Руководитель компании" src="/images/icon6.png" title="Руководитель компании">
                        </div>
                        <div class="team_people_one_text">
                            <p>
                                <strong>Руководитель компании</strong>
                            </p>
                            Постоянно следит за бизнес-процессами компании и в курсе всех событий, в случае
                            возникновения сложных ситуаций подключается и решает их!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?
	return ob_get_clean();
}

add_shortcode( 'personal', 'personal_function' );

function prefs_function() {
	ob_start(); ?>
    <div class="preferences">
        <div class="row">
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img class="first" src="/images/icons8-clock-64.png" alt="срок изготовления" /><br>
                    <a href="#" rel="nofollow">6 часов</a>
                    <span>минимальный срок изготовления</span></div>
            </div>
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-sync-64.png" alt="стандартный цикл производства" /><br>
                    <a href="#" rel="nofollow">8 часов</a>
                    <span>стандартный цикл производства</span></div>
            </div>
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-midprice-64.png" alt="стоимость" /><br>
                    <a href="#" rel="nofollow">Стоимость</a>
                        <span>изготовления от 1000 рублей</div>
            </div>
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-conference-64.png" alt="персонал" /><br>
                    <a href="#" rel="nofollow">30 человек</a>
                <span>персонала работают для вас</span></div>
            </div>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-handshake-64.png" alt="партнеры" /><br>
                    <a href="#" rel="nofollow">Наши партнеры</a>
                    <span>известные мировые бренды!</span>
                </div>
            </div>
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-check-64.png" alt="баннеры в ТЦ" /><br>
                    <a href="#" rel="nofollow">Более 400</a>
                    <span>баннеров в торговых центрах Москвы</span>
                </div>
            </div>
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-truck-64.png" alt="доставка" /><br>
                    <a href="#" rel="nofollow">Доставим быстро</a>
                    <span>и аккуратно точно по адресу</span>
                </div>
            </div>
            <div class="feaut col-md-3 col-sm-4 col-xs-2">
                <div><img src="/images/icons8-design-64.png" alt="опыт" /><br>
                    <a href="#" rel="nofollow">15 лет</a>
                    <span>опыта помогают нам быть лучшими</span>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:10px"></div>
    </div>
	<? return ob_get_clean();
}

add_shortcode( 'prefs', 'prefs_function' );






function equipment_function() {
	ob_start(); ?>
    <div class="equipment">
        <div class="row">
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBRkI2QkI7IiBkPSJNMTE3LjE1Myw1MTJINjUuMDg1Yy00Ljc5LDAtOC42NzgtMy44NzktOC42NzgtOC42NzhzMy44ODgtOC42NzgsOC42NzgtOC42NzhoNTIuMDY4ICAgYzQuNzksMCw4LjY3OCwzLjg3OSw4LjY3OCw4LjY3OFMxMjEuOTQzLDUxMiwxMTcuMTUzLDUxMnoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBRkI2QkI7IiBkPSJNOTEuMTE5LDUxMmMtNC43OSwwLTguNjc4LTMuODc5LTguNjc4LTguNjc4VjQ2OC42MWMwLTQuNzk5LDMuODg4LTguNjc4LDguNjc4LTguNjc4ICAgczguNjc4LDMuODc5LDguNjc4LDguNjc4djM0LjcxMkM5OS43OTcsNTA4LjEyMSw5NS45MDksNTEyLDkxLjExOSw1MTJ6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojQUZCNkJCOyIgZD0iTTQ0Ni45MTUsNTEyaC01Mi4wNjhjLTQuNzksMC04LjY3OC0zLjg3OS04LjY3OC04LjY3OHMzLjg4OC04LjY3OCw4LjY3OC04LjY3OGg1Mi4wNjggICBjNC43OSwwLDguNjc4LDMuODc5LDguNjc4LDguNjc4QzQ1NS41OTMsNTA4LjEyMSw0NTEuNzA1LDUxMiw0NDYuOTE1LDUxMnoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBRkI2QkI7IiBkPSJNNDIwLjg4MSw1MTJjLTQuNzksMC04LjY3OC0zLjg3OS04LjY3OC04LjY3OFY0NjguNjFjMC00Ljc5OSwzLjg4OC04LjY3OCw4LjY3OC04LjY3OCAgIHM4LjY3OCwzLjg3OSw4LjY3OCw4LjY3OHYzNC43MTJDNDI5LjU1OSw1MDguMTIxLDQyNS42NzIsNTEyLDQyMC44ODEsNTEyeiIvPgo8L2c+CjxwYXRoIHN0eWxlPSJmaWxsOiMyMTJGM0Y7IiBkPSJNNDQ2LjkxNSw0MzMuODk4SDY1LjA4NVYyNi4wMDhDNjUuMDg1LDExLjY0Niw3Ni43MzEsMCw5MS4wOTMsMGgzMjkuODE1ICBjMTQuMzYyLDAsMjYuMDA4LDExLjY0NiwyNi4wMDgsMjYuMDA4djQwNy44OUg0NDYuOTE1eiIvPgo8Zz4KCTxyZWN0IHg9IjY1LjA4IiB5PSI0MzMuOSIgc3R5bGU9ImZpbGw6IzU1NkM4MjsiIHdpZHRoPSI1Mi4wNyIgaGVpZ2h0PSIzNC43MTIiLz4KCTxyZWN0IHg9IjE4Ni41OCIgeT0iMzQuNzEyIiBzdHlsZT0iZmlsbDojNTU2QzgyOyIgd2lkdGg9IjEzOC44NSIgaGVpZ2h0PSIzNC43MTIiLz4KCTxyZWN0IHg9IjE4Ni41OCIgeT0iMzY0LjQ4IiBzdHlsZT0iZmlsbDojNTU2QzgyOyIgd2lkdGg9IjEzOC44NSIgaGVpZ2h0PSIzNC43MTIiLz4KPC9nPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojODlBQUNDOyIgcG9pbnRzPSIzNjAuMTM2LDUyLjA2OCAzMjUuNDI0LDUyLjA2OCAzMjUuNDI0LDY5LjQyNCAxODYuNTc2LDY5LjQyNCAxODYuNTc2LDUyLjA2OCAgIDE1MS44NjQsNTIuMDY4IDEwOC40NzUsOTUuNDU4IDEwOC40NzUsMjUxLjY2MSAxMDguNDc1LDMzOC40NDEgMTUxLjg2NCwzODEuODMxIDE4Ni41NzYsMzgxLjgzMSAxODYuNTc2LDM2NC40NzUgMzI1LjQyNCwzNjQuNDc1ICAgMzI1LjQyNCwzODEuODMxIDM2MC4xMzYsMzgxLjgzMSA0MDMuNTI1LDMzOC40NDEgNDAzLjUyNSwyNTEuNjYxIDQwMy41MjUsOTUuNDU4ICIvPgo8Y2lyY2xlIHN0eWxlPSJmaWxsOiNERDM1MkU7IiBjeD0iMjU2IiBjeT0iMTczLjU2IiByPSI2OS40MiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjU2LDIxNi45NDljLTIzLjkyNSwwLTQzLjM5LTE5LjQ2NS00My4zOS00My4zOXMxOS40NjUtNDMuMzksNDMuMzktNDMuMzkgICBjNC43OSwwLDguNjc4LDMuODc5LDguNjc4LDguNjc4cy0zLjg4OCw4LjY3OC04LjY3OCw4LjY3OGMtMTQuMzUzLDAtMjYuMDM0LDExLjY4MS0yNi4wMzQsMjYuMDM0czExLjY4MSwyNi4wMzQsMjYuMDM0LDI2LjAzNCAgIHMyNi4wMzQtMTEuNjgxLDI2LjAzNC0yNi4wMzRjMC00Ljc5OSwzLjg4OC04LjY3OCw4LjY3OC04LjY3OHM4LjY3OCwzLjg3OSw4LjY3OCw4LjY3OCAgIEMyOTkuMzksMTk3LjQ4NCwyNzkuOTI1LDIxNi45NDksMjU2LDIxNi45NDl6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTMyNS40MjQsMzI5Ljc2M2gtODYuNzhjLTQuNzksMC04LjY3OC0zLjg3OS04LjY3OC04LjY3OHMzLjg4OC04LjY3OCw4LjY3OC04LjY3OGg4Ni43OCAgIGM0Ljc5LDAsOC42NzgsMy44NzksOC42NzgsOC42NzhTMzMwLjIxNCwzMjkuNzYzLDMyNS40MjQsMzI5Ljc2M3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjczLjM1NiwyOTUuMDUxaC04Ni43OGMtNC43OSwwLTguNjc4LTMuODc5LTguNjc4LTguNjc4czMuODg4LTguNjc4LDguNjc4LTguNjc4aDg2Ljc4ICAgYzQuNzksMCw4LjY3OCwzLjg3OSw4LjY3OCw4LjY3OFMyNzguMTQ2LDI5NS4wNTEsMjczLjM1NiwyOTUuMDUxeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0zMjUuNDI0LDI5NS4wNTFoLTE3LjM1NmMtNC43OSwwLTguNjc4LTMuODc5LTguNjc4LTguNjc4czMuODg4LTguNjc4LDguNjc4LTguNjc4aDE3LjM1NiAgIGM0Ljc5LDAsOC42NzgsMy44NzksOC42NzgsOC42NzhDMzM0LjEwMiwyOTEuMTcyLDMzMC4yMTQsMjk1LjA1MSwzMjUuNDI0LDI5NS4wNTF6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTIwMy45MzIsMzI5Ljc2M2gtMTcuMzU2Yy00Ljc5LDAtOC42NzgtMy44NzktOC42NzgtOC42NzhzMy44ODgtOC42NzgsOC42NzgtOC42NzhoMTcuMzU2ICAgYzQuNzksMCw4LjY3OCwzLjg3OSw4LjY3OCw4LjY3OFMyMDguNzIyLDMyOS43NjMsMjAzLjkzMiwzMjkuNzYzeiIvPgo8L2c+CjxyZWN0IHg9IjM5NC44NSIgeT0iNDMzLjkiIHN0eWxlPSJmaWxsOiM1NTZDODI7IiB3aWR0aD0iNTIuMDciIGhlaWdodD0iMzQuNzEyIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="/>
                    <br>Прокатный принтер для изготовления листовых деталей.
                </div>
            </div>
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cGF0aCBzdHlsZT0iZmlsbDojRTdFQ0VEOyIgZD0iTTM3MC43NTksNDk0LjM0NUgxNDEuMjQxYy05Ljc1NCwwLTE3LjY1NS03LjkwMS0xNy42NTUtMTcuNjU1bDAsMCAgYzAtOS43NTQsNy45MDEtMTcuNjU1LDE3LjY1NS0xNy42NTVoMjI5LjUxN2M5Ljc1NCwwLDE3LjY1NSw3LjkwMSwxNy42NTUsMTcuNjU1bDAsMCAgQzM4OC40MTQsNDg2LjQ0NCwzODAuNTEzLDQ5NC4zNDUsMzcwLjc1OSw0OTQuMzQ1eiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBRkI2QkI7IiBkPSJNMzAwLjEzOCwzNzkuNTg2aC04OC4yNzZjMCwzOS4wMzYtMTMuOTMsNzkuNDQ4LTUyLjk2Niw3OS40NDhoMTk0LjIwNyAgIEMzMTQuMDY4LDQ1OS4wMzQsMzAwLjEzOCw0MTguNjIyLDMwMC4xMzgsMzc5LjU4NnoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBRkI2QkI7IiBkPSJNNDQxLjM3OSwxNy42NTVINzAuNjIxSDI2LjQ5MkMxMS44NjQsMTcuNjU1LDAsMjkuNTE5LDAsNDQuMTQ3djI3My42NDZoNzAuNjIxaDEzMi40MTRoMTA1LjkzMSAgIGgxMzIuNDE0SDUxMlY0NC4xNDdjMC0xNC42MjctMTEuODY0LTI2LjQ5Mi0yNi40OTItMjYuNDkySDQ0MS4zNzl6Ii8+CjwvZz4KPHBhdGggc3R5bGU9ImZpbGw6I0U3RUNFRDsiIGQ9Ik00ODUuNTA4LDM4OC40MTRIMjYuNDkyQzExLjg2NCwzODguNDE0LDAsMzc2LjU0OSwwLDM2MS45MjJ2LTQ0LjEyOWg1MTJ2NDQuMTI5ICBDNTEyLDM3Ni41NDksNTAwLjEzNiwzODguNDE0LDQ4NS41MDgsMzg4LjQxNHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0FGQjZCQjsiIGQ9Ik0yODIuNDgzLDM2MS45MzFoLTUyLjk2NmMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOGMwLTQuODczLDMuOTU1LTguODI4LDguODI4LTguODI4aDUyLjk2NiAgYzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjhDMjkxLjMxLDM1Ny45NzYsMjg3LjM1NiwzNjEuOTMxLDI4Mi40ODMsMzYxLjkzMXoiLz4KPHJlY3QgeD0iMzUuMzEiIHk9IjUyLjk2NiIgc3R5bGU9ImZpbGw6IzI4Mzg0QzsiIHdpZHRoPSI0NDEuMzc5IiBoZWlnaHQ9IjI2NC44MjgiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0REMzUyRTsiIGQ9Ik0zMDAuMTM4LDI5MS4zMWMtMS41NzEsMC0zLjE0My0wLjQxNS00LjUzNy0xLjI2MkwyNTYsMjY2LjI5M2wtMzkuNjAxLDIzLjc1NSAgYy0yLjcyOCwxLjY0Mi02LjEyNiwxLjY4Ni04Ljg4OSwwLjExNWMtMi43NjMtMS41NjItNC40NzYtNC41MDItNC40NzYtNy42OFYxOTMuMjhjMC0zLjU4NCwyLjE3Mi02LjgxNSw1LjQ5MS04LjE3NCAgYzMuMzE5LTEuMzU5LDcuMTMzLTAuNTY1LDkuNjQsMS45OTVjMTAuMDYzLDEwLjI3NSwyMy40OTksMTUuOTM0LDM3LjgzNSwxNS45MzRzMjcuNzcyLTUuNjU4LDM3LjgyNi0xNS45MzQgIGMyLjUwNy0yLjU2OSw2LjMxMi0zLjM1NCw5LjY0LTEuOTk1YzMuMzI4LDEuMzUxLDUuNSw0LjU4Miw1LjUsOC4xNzR2ODkuMjAzYzAsMy4xNzgtMS43MTMsNi4xMTgtNC40NzYsNy42OCAgQzMwMy4xMzksMjkwLjkzMSwzMDEuNjM5LDI5MS4zMSwzMDAuMTM4LDI5MS4zMXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzczODNCRjsiIGQ9Ik00MzIuNTUyLDk3LjEwM2gtMzUuMzFjLTQuODczLDAtOC44MjgtMy45NTUtOC44MjgtOC44MjhjMC00Ljg3MywzLjk1NS04LjgyOCw4LjgyOC04LjgyOGgzNS4zMSAgYzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjhDNDQxLjM3OSw5My4xNDksNDM3LjQyNSw5Ny4xMDMsNDMyLjU1Miw5Ny4xMDN6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiMzNjZEQjY7IiBkPSJNMzYxLjkzMSw5Ny4xMDNoLTE3LjY1NWMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOGMwLTQuODczLDMuOTU1LTguODI4LDguODI4LTguODI4aDE3LjY1NSAgYzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjhDMzcwLjc1OSw5My4xNDksMzY2LjgwNCw5Ny4xMDMsMzYxLjkzMSw5Ny4xMDN6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiMyNUFFODg7IiBkPSJNMzc5LjU4NiwxMzIuNDE0aC0zNS4zMWMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOHMzLjk1NS04LjgyOCw4LjgyOC04LjgyOGgzNS4zMSAgYzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjhTMzg0LjQ1OSwxMzIuNDE0LDM3OS41ODYsMTMyLjQxNHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0VCQkExNjsiIGQ9Ik00MzIuNTUyLDEzMi40MTRoLTE3LjY1NWMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOHMzLjk1NS04LjgyOCw4LjgyOC04LjgyOGgxNy42NTUgIGM0Ljg3MywwLDguODI4LDMuOTU1LDguODI4LDguODI4UzQzNy40MjUsMTMyLjQxNCw0MzIuNTUyLDEzMi40MTR6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiM3MzgzQkY7IiBkPSJNMTY3LjcyNCwyNTZoLTM1LjMxYy00Ljg3MywwLTguODI4LTMuOTU1LTguODI4LTguODI4YzAtNC44NzMsMy45NTUtOC44MjgsOC44MjgtOC44MjhoMzUuMzEgIGM0Ljg3MywwLDguODI4LDMuOTU1LDguODI4LDguODI4QzE3Ni41NTIsMjUyLjA0NSwxNzIuNTk3LDI1NiwxNjcuNzI0LDI1NnoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzM2NkRCNjsiIGQ9Ik05Ny4xMDMsMjU2SDc5LjQ0OGMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOGMwLTQuODczLDMuOTU1LTguODI4LDguODI4LTguODI4aDE3LjY1NSAgYzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjhDMTA1LjkzMSwyNTIuMDQ1LDEwMS45NzYsMjU2LDk3LjEwMywyNTZ6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNFQkJBMTY7IiBkPSJNMTE0Ljc1OSwyOTEuMzFoLTM1LjMxYy00Ljg3MywwLTguODI4LTMuOTU1LTguODI4LTguODI4czMuOTU1LTguODI4LDguODI4LTguODI4aDM1LjMxICBjNC44NzMsMCw4LjgyOCwzLjk1NSw4LjgyOCw4LjgyOFMxMTkuNjMxLDI5MS4zMSwxMTQuNzU5LDI5MS4zMXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzI1QUU4ODsiIGQ9Ik0xNjcuNzI0LDI5MS4zMWgtMTcuNjU1Yy00Ljg3MywwLTguODI4LTMuOTU1LTguODI4LTguODI4czMuOTU1LTguODI4LDguODI4LTguODI4aDE3LjY1NSAgYzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjhTMTcyLjU5NywyOTEuMzEsMTY3LjcyNCwyOTEuMzF6Ii8+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6I0VEOEExOTsiIGQ9Ik0zOTcuMjQxLDI5MS4zMWMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOGMwLTE5LjQ3NC0xNS44MzctMzUuMzEtMzUuMzEtMzUuMzEgICBjLTQuODczLDAtOC44MjgtMy45NTUtOC44MjgtOC44MjhjMC00Ljg3MywzLjk1NS04LjgyOCw4LjgyOC04LjgyOGMxOS40NzQsMCwzNS4zMS0xNS44MzcsMzUuMzEtMzUuMzEgICBjMC00Ljg3MywzLjk1NS04LjgyOCw4LjgyOC04LjgyOGM0Ljg3MywwLDguODI4LDMuOTU1LDguODI4LDguODI4YzAsMTkuNDc0LDE1LjgzNywzNS4zMSwzNS4zMSwzNS4zMSAgIGM0Ljg3MywwLDguODI4LDMuOTU1LDguODI4LDguODI4YzAsNC44NzMtMy45NTUsOC44MjgtOC44MjgsOC44MjhjLTE5LjQ3NCwwLTM1LjMxLDE1LjgzNy0zNS4zMSwzNS4zMSAgIEM0MDYuMDY5LDI4Ny4zNTYsNDAyLjExNCwyOTEuMzEsMzk3LjI0MSwyOTEuMzF6IE0zODIuMzQ5LDIzOC4zNDVjNS44OTcsMy45MTksMTAuOTY0LDguOTk1LDE0Ljg5MiwxNC44OTIgICBjMy45MTktNS44OTcsOC45OTUtMTAuOTY0LDE0Ljg5Mi0xNC44OTJjLTUuODk3LTMuOTE5LTEwLjk2NC04Ljk5NS0xNC44OTItMTQuODkyQzM5My4zMjIsMjI5LjM1LDM4OC4yNDYsMjM0LjQyNSwzODIuMzQ5LDIzOC4zNDUgICB6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRUQ4QTE5OyIgZD0iTTExNC43NTksMTg1LjM3OWMtNC44NzMsMC04LjgyOC0zLjk1NS04LjgyOC04LjgyOGMwLTE5LjQ3NC0xNS44MzctMzUuMzEtMzUuMzEtMzUuMzEgICBjLTQuODczLDAtOC44MjgtMy45NTUtOC44MjgtOC44MjhjMC00Ljg3MywzLjk1NS04LjgyOCw4LjgyOC04LjgyOGMxOS40NzQsMCwzNS4zMS0xNS44MzcsMzUuMzEtMzUuMzEgICBjMC00Ljg3MywzLjk1NS04LjgyOCw4LjgyOC04LjgyOHM4LjgyOCwzLjk1NSw4LjgyOCw4LjgyOGMwLDE5LjQ3NCwxNS44MzcsMzUuMzEsMzUuMzEsMzUuMzFjNC44NzMsMCw4LjgyOCwzLjk1NSw4LjgyOCw4LjgyOCAgIGMwLDQuODczLTMuOTU1LDguODI4LTguODI4LDguODI4Yy0xOS40NzQsMC0zNS4zMSwxNS44MzctMzUuMzEsMzUuMzFDMTIzLjU4NiwxODEuNDI1LDExOS42MzEsMTg1LjM3OSwxMTQuNzU5LDE4NS4zNzl6ICAgIE05OS44NjYsMTMyLjQxNGM1Ljg5NywzLjkxOSwxMC45NjQsOC45OTUsMTQuODkyLDE0Ljg5MmMzLjkxOS01Ljg5Nyw4Ljk5NS0xMC45NjQsMTQuODkyLTE0Ljg5MiAgIGMtNS44OTctMy45MTktMTAuOTY0LTguOTk1LTE0Ljg5Mi0xNC44OTJDMTEwLjgzOSwxMjMuNDE4LDEwNS43NjMsMTI4LjQ5NCw5OS44NjYsMTMyLjQxNHoiLz4KPC9nPgo8cGF0aCBzdHlsZT0iZmlsbDojRUJCQTE2OyIgZD0iTTI1NiwyMjAuNjljLTM4LjkzOCwwLTcwLjYyMS0zMS42ODItNzAuNjIxLTcwLjYyMVMyMTcuMDYyLDc5LjQ0OCwyNTYsNzkuNDQ4ICBzNzAuNjIxLDMxLjY4Miw3MC42MjEsNzAuNjIxUzI5NC45MzgsMjIwLjY5LDI1NiwyMjAuNjl6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkRDN0I7IiBkPSJNMjU2LDE4NS4zNzljLTE5LjQ3NCwwLTM1LjMxLTE1LjgzNy0zNS4zMS0zNS4zMXMxNS44MzctMzUuMzEsMzUuMzEtMzUuMzFzMzUuMzEsMTUuODM3LDM1LjMxLDM1LjMxICBjMCw0Ljg3My0zLjk1NSw4LjgyOC04LjgyOCw4LjgyOHMtOC44MjgtMy45NTUtOC44MjgtOC44MjhjMC05LjczNy03LjkxOC0xNy42NTUtMTcuNjU1LTE3LjY1NSAgYy05LjczNywwLTE3LjY1NSw3LjkxOC0xNy42NTUsMTcuNjU1czcuOTE4LDE3LjY1NSwxNy42NTUsMTcuNjU1YzQuODczLDAsOC44MjgsMy45NTUsOC44MjgsOC44MjggIEMyNjQuODI4LDE4MS40MjUsMjYwLjg3MywxODUuMzc5LDI1NiwxODUuMzc5eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojQjUyMzIzOyIgZD0iTTI1NiwyNjYuMjkzbDguODI4LDUuMjk3di0zMy4yNDVjMC00Ljg3My0zLjk1NS04LjgyOC04LjgyOC04LjgyOHMtOC44MjgsMy45NTUtOC44MjgsOC44Mjh2MzMuMjQ1ICBMMjU2LDI2Ni4yOTN6Ii8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="/>
                    <br>Постоянный мониторинг производственного процесса.
                </div>
            </div>
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cGF0aCBzdHlsZT0iZmlsbDojQzZFMkY3OyIgZD0iTTQxNS43Nyw1MTJIODcuNDAyYy02LjgzMywwLTEyLjM2Ny01LjUzNS0xMi4zNjctMTIuMzY3Vjc5LjQ0OGgzNTMuMTAzdjQyMC4xODQgIEM0MjguMTM4LDUwNi40NjUsNDIyLjYwMyw1MTIsNDE1Ljc3LDUxMnoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzUzM0I3NTsiIGQ9Ik00NTQuNjIxLDg4LjI3Nkg1Ny4zNzlWMTcuNjczQzU3LjM3OSw3LjkxLDY1LjI4OSwwLDc1LjA1MiwwaDM2MS44OTYgIGM5Ljc2MywwLDE3LjY3Myw3LjkxLDE3LjY3MywxNy42NzNWODguMjc2eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMzhBMTc0OyIgZD0iTTMzOS44NjIsNDc2LjY5TDMzOS44NjIsNDc2LjY5Yy0yOS4yNTUsMC01Mi45NjYtMjMuNzExLTUyLjk2Ni01Mi45NjZWMzAwLjEzOCAgYzAtMjkuMjU1LDIzLjcxMS01Mi45NjYsNTIuOTY2LTUyLjk2NmwwLDBjMjkuMjU1LDAsNTIuOTY2LDIzLjcxMSw1Mi45NjYsNTIuOTY2djEyMy41ODYgIEMzOTIuODI4LDQ1Mi45NzksMzY5LjExNyw0NzYuNjksMzM5Ljg2Miw0NzYuNjl6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNFOTYzQkQ7IiBkPSJNMTA4LjI3LDQ2MS4xMDlMMTA4LjI3LDQ2MS4xMDljLTIwLjc4LTIwLjc4LTIwLjc4LTU0LjQ2NiwwLTc1LjI0Nmw4Ny43OS04Ny43OSAgYzIwLjc4LTIwLjc4LDU0LjQ2Ni0yMC43OCw3NS4yNDYsMGwwLDBjMjAuNzgsMjAuNzgsMjAuNzgsNTQuNDY2LDAsNzUuMjQ2bC04Ny43OSw4Ny43OSAgQzE2Mi43NDUsNDgxLjg4LDEyOS4wNSw0ODEuODgsMTA4LjI3LDQ2MS4xMDl6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGMzg2MDA7IiBkPSJNMjgwLjE0MywyNjYuOTAyTDI4MC4xNDMsMjY2LjkwMmMtMjAuNzgsMjAuNzgtNTQuNDY2LDIwLjc4LTc1LjI0NiwwbC04Ny43OTktODcuNzkgIGMtMjAuNzgtMjAuNzgtMjAuNzgtNTQuNDY2LDAtNzUuMjQ2bDAsMGMyMC43OC0yMC43OCw1NC40NjYtMjAuNzgsNzUuMjQ2LDBsODcuNzksODcuNzkgIEMzMDAuOTE1LDIxMi40MjcsMzAwLjkxNSwyNDYuMTIyLDI4MC4xNDMsMjY2LjkwMnoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzZBQ0VBMTsiIGQ9Ik0yODYuODk3LDQyMy43MjRjMCwyOS4yNTUsMjMuNzExLDUyLjk2Niw1Mi45NjYsNTIuOTY2czUyLjk2Ni0yMy43MTEsNTIuOTY2LTUyLjk2NnYtNjEuNzkzSDI4Ni44OTcgIFY0MjMuNzI0eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRjlBRkU0OyIgZD0iTTE1MC45NTIsMzQzLjE4MWwtNDIuNjgxLDQyLjY3M2MtMjAuNzgsMjAuNzgtMjAuNzgsNTQuNDY2LDAsNzUuMjQ2czU0LjQ2NiwyMC43OCw3NS4yNDYsMCAgbDQ2LjQ0Mi00Ni40NDJMMTUwLjk1MiwzNDMuMTgxeiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRTNEMTM1OyIgZD0iTTIwNC44ODgsMjY2LjkwMmMyMC43OCwyMC43OCw1NC40NjYsMjAuNzgsNzUuMjQ2LDBzMjAuNzgtNTQuNDY2LDAtNzUuMjQ2bC00NC4yMjYtNDQuMjM1ICBsLTcxLjQ4Niw3OS4wMDdMMjA0Ljg4OCwyNjYuOTAyeiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiM3MjVBOTY7IiBkPSJNMzU3LjUxNyw1Mi45NjZoLTQ0LjEzOGMtNC44NzMsMC04LjgyOC0zLjk0Ni04LjgyOC04LjgyOHMzLjk1NS04LjgyOCw4LjgyOC04LjgyOGg0NC4xMzggICBjNC44NzMsMCw4LjgyOCwzLjk0Niw4LjgyOCw4LjgyOFMzNjIuMzksNTIuOTY2LDM1Ny41MTcsNTIuOTY2eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzcyNUE5NjsiIGQ9Ik00NTQuNjIxLDM1LjMxaC01Mi45NjZjLTQuODczLDAtOC44MjgsMy45NDYtOC44MjgsOC44MjhzMy45NTUsOC44MjgsOC44MjgsOC44MjhoNTIuOTY2VjM1LjMxeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzcyNUE5NjsiIGQ9Ik01Ny4zNzksNTIuOTY2aDIxMS44NjJjNC44NzMsMCw4LjgyOC0zLjk0Niw4LjgyOC04LjgyOHMtMy45NTUtOC44MjgtOC44MjgtOC44MjhINTcuMzc5VjUyLjk2NnoiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>
                    <br>Цифровой контроль смешения красителей.
                </div>
            </div>
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ2NCA0NjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ2NCA0NjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cGF0aCBzdHlsZT0iZmlsbDojMjlBQkUyOyIgZD0iTTM2MCwzMTJoNjRjMTMuMjU1LDAsMjQtMTAuNzQ1LDI0LTI0VjExMmMwLTEzLjI1NS0xMC43NDUtMjQtMjQtMjRoLTMydjY0SDcyVjg4SDQwICBjLTEzLjI1NSwwLTI0LDEwLjc0NS0yNCwyNHYxNzZjMCwxMy4yNTUsMTAuNzQ1LDI0LDI0LDI0SDM2MHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0U2RTZFNjsiIGQ9Ik0xMDQsNDY0VjI3MmwwLDBoMjU2bDAsMHYxNjhjMCwxMy4yNTUtMTAuNzQ1LDI0LTI0LDI0SDEwNEwxMDQsNDY0eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojOTk5OTk5OyIgZD0iTTMzNiw0NjRMMzM2LDQ2NGMtMTMuMjU1LDAtMjQtMTAuNzQ1LTI0LTI0bDAsMHYtMjRINjR2MjRjMCwxMy4yNTUsMTAuNzQ1LDI0LDI0LDI0bDAsMEgzMzZ6Ii8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNFNkU2RTY7IiBwb2ludHM9IjEwNCwxMjAgMTA0LDAgMzEyLDAgMzYwLDQ4IDM2MCwxMjAgIi8+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzAwNzFCQzsiIGQ9Ik03MiwzMTJ2LTE2YzAtMTMuMjU1LDEwLjc0NS0yNCwyNC0yNGg4djQwSDcyeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzAwNzFCQzsiIGQ9Ik0zOTIsMzEydi0xNmMwLTEzLjI1NS0xMC43NDUtMjQtMjQtMjRoLTh2NDBIMzkyeiIvPgoJPHJlY3QgeD0iNzIiIHk9Ijg4IiBzdHlsZT0iZmlsbDojMDA3MUJDOyIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIi8+CjwvZz4KPHJlY3QgeD0iNzIiIHk9IjEyMCIgc3R5bGU9ImZpbGw6I0ZCQjAzQjsiIHdpZHRoPSIzMjAiIGhlaWdodD0iMzIiLz4KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzI5QUJFMjsiIHBvaW50cz0iMzEyLDAgMzEyLDQ4IDM2MCw0OCAiLz4KPHJlY3QgeD0iMzYwIiB5PSI4OCIgc3R5bGU9ImZpbGw6IzAwNzFCQzsiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIvPgo8cmVjdCB4PSI2NCIgeT0iMTc2IiBzdHlsZT0iZmlsbDojRjc5MzFFOyIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+CjxyZWN0IHg9Ijk2IiB5PSIxNzYiIHN0eWxlPSJmaWxsOiNGQkIwM0I7IiB3aWR0aD0iMTYiIGhlaWdodD0iMTYiLz4KPHJlY3QgeD0iMTI4IiB5PSIxNzYiIHN0eWxlPSJmaWxsOiNGMTVBMjQ7IiB3aWR0aD0iMTYiIGhlaWdodD0iMTYiLz4KPGc+Cgk8cmVjdCB4PSIxMzYiIHk9IjMwNCIgc3R5bGU9ImZpbGw6Izk5OTk5OTsiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIvPgoJPHJlY3QgeD0iMTY4IiB5PSIzMDQiIHN0eWxlPSJmaWxsOiM5OTk5OTk7IiB3aWR0aD0iMTYwIiBoZWlnaHQ9IjE2Ii8+Cgk8cmVjdCB4PSIxMzYiIHk9IjMzNiIgc3R5bGU9ImZpbGw6Izk5OTk5OTsiIHdpZHRoPSIxOTIiIGhlaWdodD0iMTYiLz4KCTxyZWN0IHg9IjEzNiIgeT0iMzY4IiBzdHlsZT0iZmlsbDojOTk5OTk5OyIgd2lkdGg9IjE5MiIgaGVpZ2h0PSIxNiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="/>
                    <br>Скоростное печатающее оборудование.
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGNDE4MTsiIGQ9Ik0yOTcuMTY1LDMyNC4zNjFjMCw1OS4zMjUsNDguMDkzLDEwNy40MTcsMTA3LjQxNywxMDcuNDE3UzUxMiwzODMuNjg2LDUxMiwzMjQuMzYxICBDNTEyLDI1Niw0MDQuNTgzLDgwLjIyMyw0MDQuNTgzLDgwLjIyM1MyOTcuMTY1LDI1NiwyOTcuMTY1LDMyNC4zNjF6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNNDA0LjU4MywzODkuMzEzYy02LjcwMSwwLTEyLjEzMy01LjQzMi0xMi4xMzMtMTIuMTMzczUuNDMyLTEyLjEzMywxMi4xMzMtMTIuMTMzICBjMjIuNDM2LDAsNDAuNjg4LTE4LjI1Miw0MC42ODgtNDAuNjg3YzAtNi43MDEsNS40MzItMTIuMTMzLDEyLjEzMy0xMi4xMzNzMTIuMTMzLDUuNDMyLDEyLjEzMywxMi4xMzMgIEM0NjkuNTM2LDM2MC4xNzYsNDQwLjM5OCwzODkuMzEzLDQwNC41ODMsMzg5LjMxM3oiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQ0U0NzsiIGQ9Ik0xNDguNTgzLDMyNC4zNjFjMCw1OS4zMjUsNDguMDkzLDEwNy40MTcsMTA3LjQxNywxMDcuNDE3czEwNy40MTctNDguMDkzLDEwNy40MTctMTA3LjQxNyAgQzM2My40MTcsMjU2LDI1Niw4MC4yMjMsMjU2LDgwLjIyM1MxNDguNTgzLDI1NiwxNDguNTgzLDMyNC4zNjF6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjU2LDM4OS4zMTNjLTYuNzAxLDAtMTIuMTMzLTUuNDMyLTEyLjEzMy0xMi4xMzNzNS40MzItMTIuMTMzLDEyLjEzMy0xMi4xMzMgIGMyMi40MzYsMCw0MC42ODgtMTguMjUyLDQwLjY4OC00MC42ODdjMC02LjcwMSw1LjQzMi0xMi4xMzMsMTIuMTMzLTEyLjEzM2M2LjcwMSwwLDEyLjEzMyw1LjQzMiwxMi4xMzMsMTIuMTMzICBDMzIwLjk1MiwzNjAuMTc2LDI5MS44MTUsMzg5LjMxMywyNTYsMzg5LjMxM3oiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzRFQjlGRjsiIGQ9Ik0wLDMyNC4zNjFjMCw1OS4zMjUsNDguMDkzLDEwNy40MTcsMTA3LjQxNywxMDcuNDE3czEwNy40MTctNDguMDkzLDEwNy40MTctMTA3LjQxNyAgYzAtNjguMzYtMTA3LjQxNy0yNDQuMTM4LTEwNy40MTctMjQ0LjEzOFMwLDI1NiwwLDMyNC4zNjF6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMTA3LjQxNywzODkuMzEzYy02LjcwMSwwLTEyLjEzMy01LjQzMi0xMi4xMzMtMTIuMTMzczUuNDMyLTEyLjEzMywxMi4xMzMtMTIuMTMzICBjMjIuNDM2LDAsNDAuNjg4LTE4LjI1Miw0MC42ODgtNDAuNjg3YzAtNi43MDEsNS40MzItMTIuMTMzLDEyLjEzMy0xMi4xMzNjNi43MDEsMCwxMi4xMzMsNS40MzIsMTIuMTMzLDEyLjEzMyAgQzE3Mi4zNzEsMzYwLjE3NiwxNDMuMjMzLDM4OS4zMTMsMTA3LjQxNywzODkuMzEzeiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>
                    <br>Влаго- и светостойкие компоненты.
                </div>
            </div>
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8cG9seWdvbiBzdHlsZT0iZmlsbDojODVDMjUwOyIgcG9pbnRzPSIxNzAuNjU5LDQ4LjUzMSAyMDcuMDU3LDI4MC4yNjUgMTcwLjY1OSw1MTIgMCw0NjMuNDY5IDAsMCAgIi8+Cgk8cG9seWdvbiBzdHlsZT0iZmlsbDojODVDMjUwOyIgcG9pbnRzPSI1MTIsNDguNTMxIDUxMiw1MTIgMzQxLjMyOSw0NjMuNDY5IDMxNy4wNjQsMjMxLjczNSAzNDEuMzI5LDAgICIvPgo8L2c+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNDOUQ0Njc7IiBwb2ludHM9IjM0MS4zMjksMCAzNDEuMzI5LDQ2My40NjkgMTcwLjY1OSw1MTIgMTcwLjY1OSw0OC41MzEgIi8+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzE3NDQ2MTsiIGQ9Ik0xMjIuMTM2LDQ0OS42NzFjLTEuMDk4LDAtMi4yMTUtMC4xNS0zLjMyNC0wLjQ2NmwtNzMuNTk5LTIwLjkyOSAgIGMtNi40NDUtMS44MzMtMTAuMTg0LTguNTQ0LTguMzUxLTE0Ljk4OWMxLjgzMi02LjQ0NSw4LjU0LTEwLjE4NSwxNC45ODktOC4zNTFsNzMuNTk5LDIwLjkyOSAgIGM2LjQ0NSwxLjgzMywxMC4xODQsOC41NDQsOC4zNTEsMTQuOTg5QzEzMi4yODMsNDQ2LjE5LDEyNy40MjEsNDQ5LjY3MSwxMjIuMTM2LDQ0OS42NzF6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMTc0NDYxOyIgZD0iTTEyMi4xMzYsMzg5LjAwN2MtMS4wOTgsMC0yLjIxNS0wLjE1LTMuMzI0LTAuNDY2bC03My41OTktMjAuOTI5ICAgYy02LjQ0NS0xLjgzMy0xMC4xODQtOC41NDQtOC4zNTEtMTQuOTg5YzEuODMyLTYuNDQ1LDguNTQtMTAuMTg3LDE0Ljk4OS04LjM1MWw3My41OTksMjAuOTI5ICAgYzYuNDQ1LDEuODMzLDEwLjE4NCw4LjU0NCw4LjM1MSwxNC45ODlDMTMyLjI4MywzODUuNTI2LDEyNy40MjEsMzg5LjAwNywxMjIuMTM2LDM4OS4wMDd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMTc0NDYxOyIgZD0iTTEyMi4xMzYsMzI4LjM0NGMtMS4wOTgsMC0yLjIxNS0wLjE1LTMuMzI0LTAuNDY2bC03My41OTktMjAuOTI5ICAgYy02LjQ0NS0xLjgzMy0xMC4xODQtOC41NDQtOC4zNTEtMTQuOTg5YzEuODMyLTYuNDQ1LDguNTQtMTAuMTg0LDE0Ljk4OS04LjM1MWw3My41OTksMjAuOTI5ICAgYzYuNDQ1LDEuODMzLDEwLjE4NCw4LjU0NCw4LjM1MSwxNC45ODlDMTMyLjI4MywzMjQuODYzLDEyNy40MjEsMzI4LjM0NCwxMjIuMTM2LDMyOC4zNDR6Ii8+Cgk8cG9seWdvbiBzdHlsZT0iZmlsbDojMTc0NDYxOyIgcG9pbnRzPSI0OC41MzEsNzQuNDY0IDQ4LjUzMSwyMzQuNjE2IDEyMi4xMywyNTUuNTQ1IDEyMi4xMyw5NS4zOTMgICIvPgo8L2c+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yMTkuMTg2LDEwNy41M2MtNS4yODYsMC0xMC4xNDctMy40ODEtMTEuNjY0LTguODE3Yy0xLjgzMy02LjQ0NiwxLjkwNi0xMy4xNTUsOC4zNTEtMTQuOTg5ICAgbDczLjYwOC0yMC45M2M2LjQ0Mi0xLjgzMywxMy4xNTUsMS45MDcsMTQuOTg5LDguMzUxYzEuODMzLDYuNDQ2LTEuOTA2LDEzLjE1NS04LjM1MSwxNC45ODlsLTczLjYwOCwyMC45MyAgIEMyMjEuNDAxLDEwNy4zNzksMjIwLjI4NSwxMDcuNTMsMjE5LjE4NiwxMDcuNTN6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTIxOS4xODYsNDQ5LjY3MmMtNS4yODYsMC0xMC4xNDctMy40ODEtMTEuNjY0LTguODE3Yy0xLjgzMy02LjQ0NiwxLjkwNi0xMy4xNTUsOC4zNTEtMTQuOTg5ICAgbDczLjYwOC0yMC45M2M2LjQ0Mi0xLjgzMywxMy4xNTUsMS45MDYsMTQuOTg5LDguMzUxYzEuODMzLDYuNDQ2LTEuOTA2LDEzLjE1NS04LjM1MSwxNC45ODlsLTczLjYwOCwyMC45MyAgIEMyMjEuNDAxLDQ0OS41MjEsMjIwLjI4NSw0NDkuNjcyLDIxOS4xODYsNDQ5LjY3MnoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjE5LjE4NiwzODkuMDA4Yy01LjI4NiwwLTEwLjE0Ny0zLjQ4MS0xMS42NjQtOC44MTdjLTEuODMzLTYuNDQ2LDEuOTA2LTEzLjE1NSw4LjM1MS0xNC45ODkgICBsNzMuNjA4LTIwLjkzYzYuNDQyLTEuODMzLDEzLjE1NSwxLjkwNiwxNC45ODksOC4zNTFjMS44MzMsNi40NDYtMS45MDYsMTMuMTU1LTguMzUxLDE0Ljk4OWwtNzMuNjA4LDIwLjkzICAgQzIyMS40MDEsMzg4Ljg1OCwyMjAuMjg1LDM4OS4wMDgsMjE5LjE4NiwzODkuMDA4eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yMTkuMTg2LDMyOC4zNDVjLTUuMjg2LDAtMTAuMTQ3LTMuNDgxLTExLjY2NC04LjgxN2MtMS44MzMtNi40NDYsMS45MDYtMTMuMTU1LDguMzUxLTE0Ljk4OSAgIGw3My42MDgtMjAuOTNjNi40NDItMS44MzIsMTMuMTU1LDEuOTA3LDE0Ljk4OSw4LjM1MWMxLjgzMyw2LjQ0Ni0xLjkwNiwxMy4xNTYtOC4zNTEsMTQuOTg5bC03My42MDgsMjAuOTMgICBDMjIxLjQwMSwzMjguMTk0LDIyMC4yODUsMzI4LjM0NSwyMTkuMTg2LDMyOC4zNDV6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTIxOS4xODYsMjY3LjY4MWMtNS4yODYsMC0xMC4xNDctMy40ODEtMTEuNjY0LTguODE3Yy0xLjgzMy02LjQ0NiwxLjkwNi0xMy4xNTYsOC4zNTEtMTQuOTg5ICAgbDczLjYwOC0yMC45M2M2LjQ0Mi0xLjgzMiwxMy4xNTUsMS45MDYsMTQuOTg5LDguMzUxYzEuODMzLDYuNDQ2LTEuOTA2LDEzLjE1NS04LjM1MSwxNC45ODlsLTczLjYwOCwyMC45MyAgIEMyMjEuNDAxLDI2Ny41MzEsMjIwLjI4NSwyNjcuNjgxLDIxOS4xODYsMjY3LjY4MXoiLz4KPC9nPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMxNzQ0NjE7IiBkPSJNNDYzLjQ3NSwxMDcuNTNjLTEuMDk4LDAtMi4yMTUtMC4xNS0zLjMyNC0wLjQ2NmwtNzMuNjA4LTIwLjkzMSAgIGMtNi40NDUtMS44MzMtMTAuMTg0LTguNTQ0LTguMzUxLTE0Ljk4OWMxLjgzMy02LjQ0NSw4LjU0MS0xMC4xODMsMTQuOTg5LTguMzUxbDczLjYwOCwyMC45MzEgICBjNi40NDUsMS44MzMsMTAuMTg0LDguNTQ0LDguMzUxLDE0Ljk4OUM0NzMuNjIyLDEwNC4wNDksNDY4Ljc2LDEwNy41Myw0NjMuNDc1LDEwNy41M3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMxNzQ0NjE7IiBkPSJNNDYzLjQ3NSwxNjguMTkzYy0xLjA5OCwwLTIuMjE1LTAuMTUtMy4zMjQtMC40NjZsLTczLjYwOC0yMC45MzEgICBjLTYuNDQ1LTEuODMzLTEwLjE4NC04LjU0NC04LjM1MS0xNC45ODljMS44MzMtNi40NDUsOC41NDEtMTAuMTgyLDE0Ljk4OS04LjM1MWw3My42MDgsMjAuOTMxICAgYzYuNDQ1LDEuODMzLDEwLjE4NCw4LjU0NCw4LjM1MSwxNC45ODlDNDczLjYyMiwxNjQuNzEyLDQ2OC43NiwxNjguMTkzLDQ2My40NzUsMTY4LjE5M3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMxNzQ0NjE7IiBkPSJNNDYzLjQ3NSwyMjguODU3Yy0xLjA5OCwwLTIuMjE1LTAuMTUtMy4zMjQtMC40NjZsLTczLjYwOC0yMC45MzEgICBjLTYuNDQ1LTEuODMzLTEwLjE4NC04LjU0NC04LjM1MS0xNC45ODljMS44MzMtNi40NDUsOC41NDEtMTAuMTgyLDE0Ljk4OS04LjM1MWw3My42MDgsMjAuOTMxICAgYzYuNDQ1LDEuODMzLDEwLjE4NCw4LjU0NCw4LjM1MSwxNC45ODlDNDczLjYyMiwyMjUuMzc2LDQ2OC43NiwyMjguODU3LDQ2My40NzUsMjI4Ljg1N3oiLz4KCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiMxNzQ0NjE7IiBwb2ludHM9IjM4OS44NjEsMjU2LjQ1NCAzODkuODYxLDQxNi42MDUgNDYzLjQ2OSw0MzcuNTM3IDQ2My40NjksMjc3LjM4NSAgIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="/>
                    <br>Удобная для транспортировки продукция.
                </div>
            </div>
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAxIDUxMi4wMDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDEgNTEyLjAwMTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM0RUI5RkY7IiBkPSJNMzQ3LjYwNiw2MS43NjdjLTUwLjAzOSwwLTI0NS4xNiwwLTI0NS4xNiwwdjM2Mi40MTFjMCwwLDE5NS4xMjEsMCwyNDUuMTYsMFYyNDIuOTczICBjNTAuMDM5LDAsOTAuNjAzLTQwLjU2NCw5MC42MDMtOTAuNjAzUzM5Ny42NDUsNjEuNzY3LDM0Ny42MDYsNjEuNzY3eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojOUFEN0ZGOyIgZD0iTTM0Ny42MDYsMjQyLjk3M0gxMDIuNjIxYzg0LjI1MSwwLDE1Mi41NSw5Mi43OTQsMTUyLjU1LDIwNy4yNjFoMjQ0Ljk4NSAgQzUwMC4xNTcsMzM1Ljc2Nyw0MzEuODU3LDI0Mi45NzMsMzQ3LjYwNiwyNDIuOTczeiIvPgo8Y2lyY2xlIHN0eWxlPSJmaWxsOiMzQjhCQzA7IiBjeD0iMTAyLjQ0NiIgY3k9IjE1Mi4zNjciIHI9IjkwLjYwMyIvPgo8Y2lyY2xlIHN0eWxlPSJmaWxsOiMxNzQ0NjE7IiBjeD0iMTAyLjQ0NiIgY3k9IjE1Mi4zNjciIHI9IjM1LjUzIi8+CjxjaXJjbGUgc3R5bGU9ImZpbGw6IzNCOEJDMDsiIGN4PSIxMDIuNDQ2IiBjeT0iMzMzLjU3MiIgcj0iOTAuNjAzIi8+CjxjaXJjbGUgc3R5bGU9ImZpbGw6IzE3NDQ2MTsiIGN4PSIxMDIuNDQ2IiBjeT0iMzMzLjU3MiIgcj0iMzUuNTMiLz4KPGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDExMjFDOyIgZD0iTTEwMi40NDYsMTA0Ljk5NmMtMjYuMTIyLDAtNDcuMzc0LDIxLjI1Mi00Ny4zNzQsNDcuMzc0czIxLjI1Miw0Ny4zNzQsNDcuMzc0LDQ3LjM3NCAgIHM0Ny4zNzQtMjEuMjUyLDQ3LjM3NC00Ny4zNzRTMTI4LjU2OCwxMDQuOTk2LDEwMi40NDYsMTA0Ljk5NnogTTEwMi40NDYsMTc2LjA1N2MtMTMuMDYxLDAtMjMuNjg3LTEwLjYyNi0yMy42ODctMjMuNjg3ICAgczEwLjYyNi0yMy42ODcsMjMuNjg3LTIzLjY4N3MyMy42ODcsMTAuNjI2LDIzLjY4NywyMy42ODdTMTE1LjUwNywxNzYuMDU3LDEwMi40NDYsMTc2LjA1N3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwMTEyMUM7IiBkPSJNMTAyLjQ0NiwyODYuMjAyYy0yNi4xMjIsMC00Ny4zNzQsMjEuMjUyLTQ3LjM3NCw0Ny4zNzRzMjEuMjUyLDQ3LjM3NCw0Ny4zNzQsNDcuMzc0ICAgczQ3LjM3NC0yMS4yNTIsNDcuMzc0LTQ3LjM3NFMxMjguNTY4LDI4Ni4yMDIsMTAyLjQ0NiwyODYuMjAyeiBNMTAyLjQ0NiwzNTcuMjYyYy0xMy4wNjEsMC0yMy42ODctMTAuNjI2LTIzLjY4Ny0yMy42ODcgICBjMC0xMy4wNjEsMTAuNjI2LTIzLjY4NywyMy42ODctMjMuNjg3czIzLjY4NywxMC42MjYsMjMuNjg3LDIzLjY4N0MxMjYuMTMzLDM0Ni42MzcsMTE1LjUwNywzNTcuMjYyLDEwMi40NDYsMzU3LjI2MnoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwMTEyMUM7IiBkPSJNNDY1LjAxNSwyOTYuNjU3Yy0xOC45NjctMjUuNzY5LTQxLjg3Ny00NC40NjMtNjYuOTgyLTU1LjEzOSAgIGMzMS4wMzUtMTcuNjI0LDUyLjAyLTUwLjk4LDUyLjAyLTg5LjE0OGMwLTU2LjQ4OS00NS45NTctMTAyLjQ0Ni0xMDIuNDQ2LTEwMi40NDZoLTI0NS4xNkM0NS45NTcsNDkuOTI0LDAsOTUuODgxLDAsMTUyLjM3ICAgYzAsMzkuMjQ3LDIyLjE4OCw3My40MDUsNTQuNjc1LDkwLjYwM0MyMi4xODgsMjYwLjE3MSwwLDI5NC4zMjcsMCwzMzMuNTc2YzAsNTYuNDg5LDQ1Ljk1NywxMDIuNDQ2LDEwMi40NDYsMTAyLjQ0NmgxMTUuODQyICAgYzYuNTQxLDAsMTEuODQzLTUuMzAyLDExLjg0My0xMS44NDRzLTUuMzAyLTExLjg0My0xMS44NDMtMTEuODQzaC01MC40MDJjMjIuNTk2LTE4LjgwNywzNy4wMDYtNDcuMTMxLDM3LjAwNi03OC43NTkgICBjMC02Ljk1OS0wLjctMTMuNzU3LTIuMDI5LTIwLjMzMWMyNS4wMDksMzUuMjkyLDQwLjQ2Niw4My42NzgsNDAuNDY2LDEzNi45ODljMCw2LjU0MSw1LjMwMiwxMS44NDMsMTEuODQzLDExLjg0M2gyNDQuOTg1ICAgYzYuNTQxLDAsMTEuODQzLTUuMzAyLDExLjg0My0xMS44NDNDNTEyLDM5Mi4zNjQsNDk1LjMxNCwzMzcuODI0LDQ2NS4wMTUsMjk2LjY1N3ogTTM0Ny42MDYsNzMuNjExICAgYzQzLjQyOCwwLDc4Ljc1OSwzNS4zMzIsNzguNzU5LDc4Ljc1OXMtMzUuMzMyLDc4Ljc1OS03OC43NTksNzguNzU5aC0xNzkuNzJjMjIuNTk2LTE4LjgwNywzNy4wMDYtNDcuMTMxLDM3LjAwNi03OC43NTkgICBzLTE0LjQxLTU5Ljk1Mi0zNy4wMDYtNzguNzU5SDM0Ny42MDZ6IE0yMy42ODcsMTUyLjM3YzAtNDMuNDI4LDM1LjMzMi03OC43NTksNzguNzU5LTc4Ljc1OXM3OC43NTksMzUuMzMyLDc4Ljc1OSw3OC43NTkgICBzLTM1LjMzMiw3OC43NTktNzguNzU5LDc4Ljc1OVMyMy42ODcsMTk1Ljc5OCwyMy42ODcsMTUyLjM3eiBNMTAyLjQ0Niw0MTIuMzM1Yy00My40MjgsMC03OC43NTktMzUuMzMyLTc4Ljc1OS03OC43NTkgICBzMzUuMzMyLTc4Ljc1OSw3OC43NTktNzguNzU5czc4Ljc1OSwzNS4zMzIsNzguNzU5LDc4Ljc1OVMxNDUuODc0LDQxMi4zMzUsMTAyLjQ0Niw0MTIuMzM1eiBNMjY2Ljc4Miw0MzguMzkgICBjLTIuMTE1LTUzLjQzOC0xOC41MjgtMTAzLjM4NS00Ni43NTItMTQxLjczMmMtMTIuNjQ2LTE3LjE4My0yNy4wNDYtMzEuMjI1LTQyLjY3OS00MS44NDJoMTcwLjI1NiAgIGM3NC43MjEsMCwxMzYuMDI2LDgxLjMxNywxNDAuNDUxLDE4My41NzRIMjY2Ljc4MnoiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>
                    <br>Рулонные материалы гарантируют желаемые размеры продукции.
                </div>
            </div>
            <div class="quip">
                <div>
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6IzRFQjlGRjsiIGQ9Ik0zNzguMjA4LDE2Mi44MDhoMTIyLjIwOFY4Ni45MzVjMC0yNS40ODQtMjAuODUxLTQ2LjMzNS00Ni4zMzUtNDYuMzM1SDU3LjkxOSAgYy0yNS40ODQsMC00Ni4zMzUsMjAuODUxLTQ2LjMzNSw0Ni4zMzV2NzUuODczaDEyMi4yMDhIMzc4LjIwOHoiLz4KPHBvbHlnb24gc3R5bGU9ImZpbGw6I0ZGQ0U0NzsiIHBvaW50cz0iMTMzLjc5MiwxMDEuNzA2IDEzMy43OTIsMzcwLjU2MyAyNTYsMzcwLjU2MyAzNzguMjA4LDI0OC4zNTUgMzc4LjIwOCwxMDEuNzA2ICIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRkZFQkI0OyIgZD0iTTM3OC4yMDgsMjQ4LjM1NWMwLDY3LjQ5OC01NC43MSwxMjIuMjA4LTEyMi4yMDgsMTIyLjIwOGMyMy44NjItMjMuODYyLDM1Ljc5NC01NS4xMzgsMzUuNzk0LTg2LjQxNCAgQzMyMy4wNywyODQuMTQ5LDM1NC4zNDYsMjcyLjIxOCwzNzguMjA4LDI0OC4zNTV6Ii8+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzAxMTIxQzsiIGQ9Ik00NTguNzE1LDc0Ljc3MmMtNi43MDcsMC0xMi4xNjMsNS40NTYtMTIuMTYzLDEyLjE2M3M1LjQ1NiwxMi4xNjMsMTIuMTYzLDEyLjE2MyAgIGM2LjcwNywwLDEyLjE2My01LjQ1NiwxMi4xNjMtMTIuMTYzUzQ2NS40MjIsNzQuNzcyLDQ1OC43MTUsNzQuNzcyeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzAxMTIxQzsiIGQ9Ik00NTguNzE1LDExNS44OTRjLTYuNzA3LDAtMTIuMTYzLDUuNDU2LTEyLjE2MywxMi4xNjNzNS40NTYsMTIuMTYzLDEyLjE2MywxMi4xNjMgICBjNi43MDcsMCwxMi4xNjMtNS40NTYsMTIuMTYzLTEyLjE2M1M0NjUuNDIyLDExNS44OTQsNDU4LjcxNSwxMTUuODk0eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzAxMTIxQzsiIGQ9Ik00NTQuMDgxLDM0LjgwOEg1Ny45MTlDMjUuOTgyLDM0LjgwOCwwLDYwLjc5MSwwLDkyLjcyN1YxNjguNmMwLDYuMzk4LDUuMTg3LDExLjU4NCwxMS41ODQsMTEuNTg0ICAgaDMwLjExOHYyNzMuODRIMTguNTM0Yy02LjM5NywwLTExLjU4NCw1LjE4Ni0xMS41ODQsMTEuNTg0czUuMTg3LDExLjU4NCwxMS41ODQsMTEuNTg0aDY5LjUwMmM2LjM5NywwLDExLjU4NC01LjE4NiwxMS41ODQtMTEuNTg0ICAgcy01LjE4Ny0xMS41ODQtMTEuNTg0LTExLjU4NEg2NC44Njl2LTI3My44NGg1Ny4zMzl2MTk2LjE3YzAsNi4zOTgsNS4xODcsMTEuNTg0LDExLjU4NCwxMS41ODRIMjU2ICAgYzczLjc3MywwLDEzMy43OTItNjAuMDE5LDEzMy43OTItMTMzLjc5MnYtNzMuOTYyaDU3LjMzOXYyNzMuODRoLTIzLjE2N2MtNi4zOTcsMC0xMS41ODQsNS4xODYtMTEuNTg0LDExLjU4NCAgIGMwLDYuMzk4LDUuMTg3LDExLjU4NCwxMS41ODQsMTEuNTg0aDY5LjUwMmM2LjM5NywwLDExLjU4NC01LjE4NiwxMS41ODQtMTEuNTg0YzAtNi4zOTgtNS4xODctMTEuNTg0LTExLjU4NC0xMS41ODRoLTIzLjE2NyAgIHYtMjczLjg0aDMwLjExOGM2LjM5NywwLDExLjU4NC01LjE4NiwxMS41ODQtMTEuNTg0VjkyLjcyN0M1MTIsNjAuNzkxLDQ4Ni4wMTgsMzQuODA4LDQ1NC4wODEsMzQuODA4eiBNMjUxLjA1NCwzNjQuNzdIMTQ1LjM3NiAgIFYxMTkuMDhoMjIxLjI0OVYyNDkuMmMtMjAuNDYzLDE4LjgzNC00Ni44NTEsMjkuMTU2LTc0LjgzMSwyOS4xNTZjLTYuMzk3LDAtMTEuNTg0LDUuMTg2LTExLjU4NCwxMS41ODQgICBDMjgwLjIxLDMxNy45MTksMjY5Ljg4OSwzNDQuMzA4LDI1MS4wNTQsMzY0Ljc3eiBNMjgyLjY3NiwzNjEuNTJjMTEuNTI1LTE4LjEzLDE4LjQ3NC0zOC43NjEsMjAuMjQ3LTYwLjQ1ICAgYzIxLjY4Ny0xLjc3NSw0Mi4zMTktOC43MjMsNjAuNDUtMjAuMjQ3QzM1My41MzEsMzIwLjQzMiwzMjIuMjg0LDM1MS42NzUsMjgyLjY3NiwzNjEuNTJ6IE00ODguODMzLDE1Ny4wMTdoLTk5LjA0MVYxMTkuMDhoMjMuMTY3ICAgYzYuMzk3LDAsMTEuNTg0LTUuMTg2LDExLjU4NC0xMS41ODRzLTUuMTg3LTExLjU4NC0xMS41ODQtMTEuNTg0SDk5LjA0MWMtNi4zOTcsMC0xMS41ODQsNS4xODYtMTEuNTg0LDExLjU4NCAgIHM1LjE4NywxMS41ODQsMTEuNTg0LDExLjU4NGgyMy4xNjd2MzcuOTM3SDIzLjE2N3YtNjQuMjljMC0xOS4xNjIsMTUuNTg5LTM0Ljc1MSwzNC43NTEtMzQuNzUxaDM5Ni4xNjMgICBjMTkuMTYyLDAsMzQuNzUxLDE1LjU4OSwzNC43NTEsMzQuNzUxVjE1Ny4wMTd6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="/>
                    <br>Плоттерная печать влагостойка и выдерживает длительную уличную эксплуатацию.
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:10px"></div>
    </div>
	<? return ob_get_clean();
}

add_shortcode( 'equipment', 'equipment_function' );







// Implement the Custom Options.
require get_template_directory() . '/options.php';







function nashe_oborudovanie_function() {
	ob_start(); ?>
    <h2 class="service-title">Наше оборудование</h2>
    <div class="service12 row-flex">
        <img class="stanok-img" src="/images/print_n.png" alt="Принтер Galaxy-d5" align="left">
		<p style="font-weight: bold;">
			Интерьерный ЭКОсольвентный принтер GALAXY 3,2 метра.
		</p>
        <ul class="unstyled">
            <li>2 печатные головы Epson DX5 с переменной каплей от 3 до 21 пиколитров.</li>
            <li>Максимальная ширина печати 3200 мм.</li>
            <li>Быстрая скорость печати в высоком разрешении 44 м<sup>2</sup>/час.</li>
            <li>Чернила/краски на водной основе экологичные без запаха.</li>
            <li>Высокая чёткость изображения при разрешении 720-1440dpi.</li>
        </ul>
    </div>
	<? return ob_get_clean();
}

add_shortcode( 'nashe_oborudovanie', 'nashe_oborudovanie_function' );





function add_more_pics_function( $atts ) {
	/*$a = shortcode_atts( array(
		'main' => $atts['main'],
		'ids' => $atts['ids'],
	), $atts );
	ob_start(); ?>
    <h2 class="service-title">Образцы макетов</h2>
    <div class="service12 examples row-flex">
        <?=wp_get_attachment_image( $a['main'], "full", false, array( "class" => 'big-image side alignleft' ) );?>
        <div>
        <p style="font-weight: bold;">
            Более 10 000 макетов для дизайна вашего пресс-волла!
        </p>
        <ul class="unstyled">
            <li>Профессионально выполненный макет под любые нужды!</li>
            <li>Лучшие дизайнеры учтут любые ваши пожелания!</li>
        </ul>
        </div>
        <div class="clear"></div>
        <div class="pics-block">
        <?php
            $a_ids = explode( ',', $a['ids'] );?>
            <div class="faq-grid">
                <div class="faq-col">
                    <div class="faq-item">
            <?
            foreach ( $a_ids as $i=>$pid ){
                if( $i > 0 && $i % 5 == 0 ){?>
                    </div>
                    <div class="faq-item">
                    <div class='pics-block-im-wrap side'>
                    <?$alt = get_post_meta($pid, '_wp_attachment_image_alt', true);?>
                        <a href='<?=wp_get_attachment_image_src($pid,"full", false)[0]?>' title="<?=$alt?>">
	                    <?=wp_get_attachment_image( $pid, "medium", false, array( "class" => 'add-image side' ) );?></a>
                    </div>
                <?}
                else{?>
                <?$alt = get_post_meta($pid, '_wp_attachment_image_alt', true);?>
                    <div class='pics-block-im-wrap'>
                        <a href='<?=wp_get_attachment_image_src($pid,"full", false)[0]?>' title="<?=$alt?>">
	                    <?=wp_get_attachment_image( $pid, "medium", false, array( "class" => 'add-image side' ) );?></a>
                    </div>
                <?}
            }
            ?>
                </div>
            </div>
            <!--a id="show_more" rel="noindex" onclick="getMore()">Показать еще</a-->
        </div>
    </div>
	<? return ob_get_clean();*/
}

add_shortcode( 'add_more_pics', 'add_more_pics_function' );




function order_function( $atts ) {
	$a = shortcode_atts( array(
		'header' => $atts['header'],
		'detail' => $atts['detail'],
	), $atts );
	ob_start(); ?>
    <div class="block-content-wrap clearfix block-teaser fluid-container">
        <div class="sc-maxwidth block-content">
            <div class="bow">
                <div class="item-content">
                    <div class="item-title"><?= $a['header'] ?></div>
                    <?$from = array('+74954092315','+7 (495) 409-23-15'); $to = array(get_option('phone'),get_option('phone'))?>
                    <?$i = str_replace($from, $to, $a['detail'])?>
                    <div class="item-text"><?= $i ?></div>
                </div>
                <div class="item-btn">
                    <button uk-toggle="target: #footer-modal" type="button" class="btn order-now gradiented">
                        <span><b></b>Оставьте заявку</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
	<?
	return ob_get_clean();
}

add_shortcode( 'order', 'order_function' );




function button_function(  ) {
	ob_start(); ?>
    <div class="button-wrap">
        <button uk-toggle="target: #footer-modal" type="button" class="btn order-now gradiented single">
            <span><b></b>Оставьте заявку</span>
        </button>
    </div>
	<?
	return ob_get_clean();
}

add_shortcode( 'button', 'button_function' );











function pwall_function() {
	ob_start(); ?>
    <div class="blk_section bg_type_imagesprint4">
        <div class="blk_container">
            <h2>Наши услуги</h2>
        </div>
        <div blk_class="blk_container" class="blk_container">
                <div class="l_float cell container_cell sortable_cell first_cell">
                    <img src="/images/icons8-arrows-sort-64.png" alt="Аренда конструкций" class="fadeIn">
                    <p>
                        <a href="/uslugi/arenda-press-vollov/" class="under"><span class="nowr">Аренда конструкций</span></a>
                        <br>
                        <span><strong>от 1500 руб.</strong></span>
                        <br>
                        <span>Пресс-волл<br>любых размеров на 1-3 дня</span>
                    </p>
                </div>
                <div class="l_float cell container_cell sortable_cell">
                    <img src="/images/icons8-ruble-64.png" alt="Изготовление конструкций" class="fadeIn">
                    <p>
                        <a href="/uslugi/izgotovlenie/" class="under"><span>Изготовление конструкций</span></a>
                        <br>
                        <span><strong>от 3500 руб.</strong></span>
                        <br>
                        <span>Пресс-волл <br>размером 2х2</span>
                    </p>
                </div>
                <div class="l_float cell container_cell sortable_cell">
                    <img src="/images/icons8-delivery-64.png" alt="Доставка, монтаж" class="fadeIn">
                    <p>
                        <a href="/uslugi/dostavka-montazh/" class="under">
                            <span>Доставка, монтаж<br>и демонтаж</span>
                        </a>
                        <br>
                        <span><strong>от 1500 руб.</strong></span>
                        <br>
                        <span>Конструкции <br>в день мероприятия</span>
                    </p>
                </div>
                <div class="l_float cell container_cell sortable_cell">
                    <img src="/images/icons8-system-information-64.png" alt="Разработка дизайн-макета" class="fadeIn">
                    <p>
                        <a href="/uslugi/pressvoll-dizain/" class="under">
                            <span>Разработка дизайн-макета</span>
                        </a>
                        <br>
                        <span><strong>от 700 руб.</strong></span>
                        <br>
                        <span>Разработка дизайн-макета
                            <br>баннерного полотна</span>
                        </span>
                    </p>
                </div>
                <div class="l_float cell container_cell sortable_cell last_cell">
                    <img src="/images/icons8-news-64.png" alt="Печать баннера" class="fadeIn">
                    <p style="text-align:center">
                        <a href="/uslugi/banner-press-wall/" class="under">
                            <span>Печать баннера</span>
                        </a>
                        <br>
                        <span><strong>от 1600 руб.</strong></span>
                        <br>
                        <span>Печать баннера<br>(720 dpi, 1440 dpi)</span>
                    </p>
                </div>
        </div>
    </div>
	<? return ob_get_clean();
}

add_shortcode( 'pwall', 'pwall_function' );








/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2017.01.21
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep            = '›'; // разделитель между "крошками"
	$sep_before     = '<span class="sep">'; // тег перед разделителем
	$sep_after      = '</span>'; // тег после разделителя
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$before         = '<span class="current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url( '/' );
	$link_before    = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link_after     = '</span>';
	$link_attr      = ' itemprop="item"';
	$link_in_before = '<span itemprop="name">';
	$link_in_after  = '</span>';
	$link           = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	$frontpage_id   = get_option( 'page_on_front' );
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$sep            = ' ' . $sep_before . $sep . $sep_after . ' ';
	$home_link      = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) {
			echo $wrap_before . $home_link . $wrap_after;
		}

	} else {

		echo $wrap_before;
		if ( $show_home_link ) {
			echo $home_link;
		}

		if ( is_category() ) {
			$cat = get_category( get_query_var( 'cat' ), false );
			if ( $cat->parent != 0 ) {
				$cats = get_category_parents( $cat->parent, true, $sep );
				$cats = preg_replace( "#^(.+)$sep$#", "$1", $cats );
				$cats = preg_replace( '#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats );
				if ( $show_home_link ) {
					echo $sep;
				}
				$l = $cats;
				$link = str_replace('/category/stati/','/kompaniya/statyi/',$l);
				echo $link;
			}
			if ( get_query_var( 'paged' ) ) {
				$cat = $cat->cat_ID;
				$l = $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ) ) . $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
				$link = str_replace('/category/stati/','/kompaniya/statyi/',$l);
				echo $link;
			} else {
				if ( $show_current ) {
					$l = $sep . $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
					$link = str_replace('/category/stati/','/kompaniya/statyi/',$l);
					echo $link;
				}
			}

		} elseif ( is_search() ) {
			if ( have_posts() ) {
				if ( $show_home_link && $show_current ) {
					echo $sep;
				}
				if ( $show_current ) {
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				}
			} else {
				if ( $show_home_link ) {
					echo $sep;
				}
				echo $before . sprintf( $text['search'], get_search_query() ) . $after;
			}

		} elseif ( is_day() ) {
			if ( $show_home_link ) {
				echo $sep;
			}
			echo sprintf( $link, get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) ) . $sep;
			echo sprintf( $link, get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ), get_the_time( 'F' ) );
			if ( $show_current ) {
				echo $sep . $before . get_the_time( 'd' ) . $after;
			}

		} elseif ( is_month() ) {
			if ( $show_home_link ) {
				echo $sep;
			}
			echo sprintf( $link, get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) );
			if ( $show_current ) {
				echo $sep . $before . get_the_time( 'F' ) . $after;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) {
				echo $sep;
			}
			if ( $show_current ) {
				echo $before . get_the_time( 'Y' ) . $after;
			}

		} elseif ( is_single() && ! is_attachment() ) {
			if ( $show_home_link ) {
				echo $sep;
			}
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object( get_post_type() );
				$slug      = $post_type->rewrite;
				printf( $link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name );
				if ( $show_current ) {
					echo $sep . $before . get_the_title() . $after;
				}
			} else {
				$cat  = get_the_category();
				$cat  = $cat[0];
				$cats = get_category_parents( $cat, true, $sep );
				if ( ! $show_current || get_query_var( 'cpage' ) ) {
					$cats = preg_replace( "#^(.+)$sep$#", "$1", $cats );
				}
				$cats = preg_replace( '#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats );
				$l = $cats;
				$link = str_replace('/category/stati/','/kompaniya/statyi/',$l);
				echo $link;
				if ( get_query_var( 'cpage' ) ) {
					echo $sep . sprintf( $link, get_permalink(), get_the_title() ) . $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) {
						echo $before . get_the_title() . $after;
					}
				}
			}

			// custom post type
		} elseif ( ! is_single() && ! is_page() && get_post_type() != 'post' && ! is_404() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				echo $sep . sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label ) . $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					echo $sep . $before . $post_type->label . $after;
				}
			}

		} elseif ( is_attachment() ) {
			if ( $show_home_link ) {
				echo $sep;
			}
			$parent = get_post( $parent_id );
			$cat    = get_the_category( $parent->ID );
			$cat    = $cat[0];
			if ( $cat ) {
				$cats = get_category_parents( $cat, true, $sep );
				$cats = preg_replace( '#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats );
				echo $cats;
			}
			printf( $link, get_permalink( $parent ), $parent->post_title );
			if ( $show_current ) {
				echo $sep . $before . get_the_title() . $after;
			}

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_current ) {
				echo $sep . $before . get_the_title() . $after;
			}

		} elseif ( is_page() && $parent_id ) {
			if ( $show_home_link ) {
				echo $sep;
			}
			if ( $parent_id != $frontpage_id ) {
				$breadcrumbs = array();
				while ( $parent_id ) {
					$page = get_page( $parent_id );
					if ( $parent_id != $frontpage_id ) {
						$breadcrumbs[] = sprintf( $link, get_permalink( $page->ID ), get_the_title( $page->ID ) );
					}
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse( $breadcrumbs );
				for ( $i = 0; $i < count( $breadcrumbs ); $i ++ ) {
					echo $breadcrumbs[ $i ];
					if ( $i != count( $breadcrumbs ) - 1 ) {
						echo $sep;
					}
				}
			}
			if ( $show_current ) {
				echo $sep . $before . get_the_title() . $after;
			}

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$tag_id = get_queried_object_id();
				$tag    = get_tag( $tag_id );
				echo $sep . sprintf( $link, get_tag_link( $tag_id ), $tag->name ) . $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					echo $sep . $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				}
			}

		} elseif ( is_author() ) {
			global $author;
			$author = get_userdata( $author );
			if ( get_query_var( 'paged' ) ) {
				if ( $show_home_link ) {
					echo $sep;
				}
				echo sprintf( $link, get_author_posts_url( $author->ID ), $author->display_name ) . $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) {
					echo $sep;
				}
				if ( $show_current ) {
					echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				}
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) {
				echo $sep;
			}
			if ( $show_current ) {
				echo $before . $text['404'] . $after;
			}

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link ) {
				echo $sep;
			}
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()









function preimuschestva_function() {
	ob_start(); ?>
    <div class="homes-icons-block-wrap">
        <div class="homes-icons-block sc-maxwidth">
            <div class="row">
                <div class="item col-sm-4">
                    <div class="item-icon col-sm-3"><img align="absmiddle" src="/images/icons8-ruble-64.png" alt="Иконка рубля в смысле Стоимость"></div>
                    <div class="item-content col-sm-9">
                        <div class="item-title">Стоимость</div>
                        <div class="item-text">Персональный подход к ценообразованию заказов для каждого клиента.</div>
                    </div>
                </div>
                <div class="item col-sm-4">
                    <div class="item-icon col-sm-3"><img align="absmiddle" src="/images/icons8-finger-up-64.png" alt="Иконка Палец вверх в смысле Качество"></div>
                    <div class="item-content col-sm-9">
                        <div class="item-title">Качество</div>
                        <div class="item-text">Благодаря инженерному составу сотрудников, на выходе получаем желаемый
                            результат.
                        </div>
                    </div>
                </div>
                <div class="item col-sm-4">
                    <div class="item-icon col-sm-3"><img align="absmiddle" src="/images/icons8-speed-64.png" alt="Иконка спидометра в смысле Скорости"></div>
                    <div class="item-content col-sm-9">
                        <div class="item-title">Оперативность</div>
                        <div class="item-text">Наличие нескольких производственных баз позволяет оперативно изготовить
                            заказ.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<? return ob_get_clean();
}

add_shortcode( 'preimuschestva', 'preimuschestva_function' );


add_filter( 'jpeg_quality', function ( $arg ) {
	return 100;
} );


remove_image_size('large');
remove_image_size('medium');


add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );


add_filter( 'get_custom_logo',  'custom_logo_url' );
function custom_logo_url ( $html ) {

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$url = network_site_url();
	$image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true);
	$html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
		esc_url( $url  ),
		wp_get_attachment_image( $custom_logo_id, 'full', false, array(
			'class'    => 'custom-logo',
		) )
	);
	return $html;
}