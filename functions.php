<?php

define("TAILWIND_CLASSES", "mb-7 rotate-3 overflow-hidden gap-6 max-w-xs px-2.5 lg:max-w-none lg:pl-20 lg:order-first lg:row-span-2 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12 sm:px-8 mt-24 md:mt-28 mx-auto w-full max-w-7xl lg:px-8 relative px-4 lg:px-12 max-w-2xl lg:max-w-5xl max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2 mb-4");
define('NAKED_VERSION', 1.0);

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if (!isset($content_width))
	$content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support('automatic-feed-links');

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus(
	array(
		'primary' => __('Primary Menu', 'naked'), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars()
{
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title' => ''
	));
}

// adding sidebars to Wordpress (these are created in functions.php)
add_action('widgets_init', 'naked_register_sidebars');

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()
{
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('theme-switcher.js', get_stylesheet_directory_uri() . '/scripts/theme-switcher.js');
	wp_enqueue_script('mobile-nav.js', get_stylesheet_directory_uri() . '/scripts/mobile-nav.js');

}
add_action('wp_enqueue_scripts', 'naked_scripts'); // Register this fxn and allow Wordpress to call it automatcally in the header

// Updated filter to support "item_class" parameter for wp_nav_menu
function add_additional_class_on_li($classes, $item, $args, $depth) {
    if (isset($args->item_class)) {
        $classes[] = $args->item_class;
    }
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 4);


function add_google_fonts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

function social_icon_svg_shortcode($atts)
{
	// Define default values
	$atts = shortcode_atts(
		array(
			'name' => '',
			'vertical' => false,
		),
		$atts,
		'social_icon'
	);

	// Define the SVG icons
	$icons = array(
		'pinterest' => '<svg class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-ej-gold" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C6.477,2,2,6.477,2,12c0,4.237,2.636,7.855,6.356,9.312c-0.087-0.791-0.167-2.005,0.035-2.868 c0.182-0.78,1.172-4.971,1.172-4.971s-0.299-0.599-0.299-1.484c0-1.391,0.806-2.428,1.809-2.428c0.853,0,1.265,0.641,1.265,1.408 c0,0.858-0.546,2.141-0.828,3.329c-0.236,0.996,0.499,1.807,1.481,1.807c1.777,0,3.143-1.874,3.143-4.579 c0-2.394-1.72-4.068-4.177-4.068c-2.845,0-4.515,2.134-4.515,4.34c0,0.859,0.331,1.781,0.744,2.282 c0.082,0.099,0.093,0.186,0.069,0.287c-0.076,0.316-0.244,0.995-0.277,1.134c-0.043,0.183-0.145,0.222-0.334,0.133 c-1.249-0.582-2.03-2.408-2.03-3.874c0-3.154,2.292-6.052,6.608-6.052c3.469,0,6.165,2.472,6.165,5.776 c0,3.447-2.173,6.22-5.189,6.22c-1.013,0-1.966-0.527-2.292-1.148c0,0-0.502,1.909-0.623,2.378 c-0.226,0.868-0.835,1.958-1.243,2.622C9.975,21.843,10.969,22,12,22c5.522,0,10-4.478,10-10S17.523,2,12,2z"></path></svg>',
		'instagram' => '<svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-ej-gold"><path d="M12 3c-2.444 0-2.75.01-3.71.054-.959.044-1.613.196-2.185.418A4.412 4.412 0 0 0 4.51 4.511c-.5.5-.809 1.002-1.039 1.594-.222.572-.374 1.226-.418 2.184C3.01 9.25 3 9.556 3 12s.01 2.75.054 3.71c.044.959.196 1.613.418 2.185.23.592.538 1.094 1.039 1.595.5.5 1.002.808 1.594 1.038.572.222 1.226.374 2.184.418C9.25 20.99 9.556 21 12 21s2.75-.01 3.71-.054c.959-.044 1.613-.196 2.185-.419a4.412 4.412 0 0 0 1.595-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.374-1.226.418-2.184.044-.96.054-1.267.054-3.711s-.01-2.75-.054-3.71c-.044-.959-.196-1.613-.419-2.185A4.412 4.412 0 0 0 19.49 4.51c-.5-.5-1.002-.809-1.594-1.039-.572-.222-1.226-.374-2.184-.418C14.75 3.01 14.444 3 12 3Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.421.163.72.358 1.036.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67-.163.421-.358.72-.673 1.036a2.79 2.79 0 0 1-1.035.673c-.317.123-.794.27-1.671.31-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.789 2.789 0 0 1-1.036-.673 2.79 2.79 0 0 1-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.421.358-.72.673-1.036.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.95-.043 1.234-.052 3.637-.052Z"></path><path d="M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-7.622a4.622 4.622 0 1 0 0 9.244 4.622 4.622 0 0 0 0-9.244Zm5.884-.182a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z"></path></svg>',
		'goodreads' => '<svg class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-ej-gold" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path d="M 16 3 C 11.589 3 8 7.262 8 12.5 C 8 17.738 11.589 22 16 22 C 18.39 22 20.533 20.742672 22 18.763672 L 22 22 C 22 24.757 19.309 27 16 27 C 13.545 27 11.432859 25.764 10.505859 24 L 8.3378906 24 C 9.3238906 26.887 12.383 29 16 29 C 20.411 29 24 25.859 24 22 L 24 4 L 22 4 L 22 6.2363281 C 20.533 4.2573281 18.39 3 16 3 z M 16 5 C 19.309 5 22 8.364 22 12.5 C 22 16.636 19.309 20 16 20 C 12.691 20 10 16.636 10 12.5 C 10 8.364 12.691 5 16 5 z"></path></svg>',
		'etsy' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-ej-gold"><path d="M384 348c-1.8 10.8-13.8 110-15.5 132-117.9-4.3-219.9-4.7-368.5 0v-25.5c45.5-8.9 60.6-8 61-35.3 1.8-72.3 3.5-244.1 0-322-1-28.5-12.1-26.8-61-36v-25.5c73.9 2.4 255.9 8.6 363-3.8-3.5 38.3-7.8 126.5-7.8 126.5H332C320.9 115.7 313.2 68 277.3 68h-137c-10.3 0-10.8 3.5-10.8 9.8V241.5c58 .5 88.5-2.5 88.5-2.5 29.8-1 27.6-8.5 40.8-65.3h25.8c-4.4 101.4-3.9 61.8-1.8 160.3H257c-9.2-40.1-9.1-61-39.5-61.5 0 0-21.5-2-88-2v139c0 26 14.3 38.3 44.3 38.3H263c63.6 0 66.6-25 98.8-99.8H384z" /></svg>',
		'email' => '<svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-ej-gold"><path fill-rule="evenodd" d="M6 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6Zm.245 2.187a.75.75 0 0 0-.99 1.126l6.25 5.5a.75.75 0 0 0 .99 0l6.25-5.5a.75.75 0 0 0-.99-1.126L12 12.251 6.245 7.187Z"></path></svg>'
	);

	$links = array(
		'pinterest' => 'https://www.pinterest.com/edenjoybrown/',
		'instagram' => 'https://www.instagram.com/eden.joy.writes/',
		'goodreads' => 'https://www.goodreads.com/user/show/126564904-eden-joy',
		'etsy' => 'https://www.etsy.com/shop/StoryTreasuresShop?ref=shop_sugg_market',
		'email' => 'mailto:edenjoybwrites@gmail.com?subject=Saying+Hello!'
	);

	$labels = array(
		'pinterest' => 'Follow me on Pinterest',
		'instagram' => 'Follow on Instagram',
		'goodreads' => 'Add me on Goodreads',
		'etsy' => 'Checkout my Etsy store',
		'email' => 'edenjoybwrites@gmail.com'
	);

	$content = '<a class="{{cssClass}}" href="' . ($links[$atts['name']] ?? '') . '" aria-label="' . ($labels[$atts['name']] ?? '') . '" target="_blank" rel="noopener noreferrer">' . ($icons[$atts['name']] ?? '') . '</a>';

	if (!$atts['vertical']) {
		$content = str_replace('{{cssClass}}', 'inline-block group -m-1 p-1', $content);
		return $content;
	} else {
		$content = str_replace('{{cssClass}}', 'group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500', $content);
		$content = str_replace('</svg>', '</svg><span class="ml-4">' . ($labels[$atts['name']] ?? '') . '</span>', $content);
		return $content;
	}
}

function social_icons_svg_shortcode($atts)
{
	$atts = shortcode_atts(
		array(
			'names' => 'pinterest,instagram,goodreads,etsy,email',
		),
		$atts,
		'social_icons'
	);

	$allNames = explode(',', $atts['names']);

	$content = '<ul role="list" class="mt-9">';
	foreach ($allNames as $name) {
		$content .= '<li class="flex mt-4 last:mt-8 last:border-t last:border-zinc-100 last:pt-8 last:dark:border-zinc-700/40">';
		$content .= social_icon_svg_shortcode(array('name' => $name, 'vertical' => true));
		$content .= '</li>';
	}
	$content .= '</ul>';

	return $content;
}

add_shortcode('social_icon', 'social_icon_svg_shortcode');
add_shortcode('social_icons', 'social_icons_svg_shortcode');

function container_shortcode($atts, $content = null)
{
	// Set default attributes
	$atts = shortcode_atts(
		array(
			'tag' => 'div',             // Default container tag
			'class' => 'custom-container' // Default CSS class
		),
		$atts,
		'container'
	);

	// Sanitize tag to prevent unsafe input
	$allowed_tags = array('div', 'section', 'article', 'aside', 'span');
	$tag = in_array(strtolower($atts['tag']), $allowed_tags) ? $atts['tag'] : 'div';

	// Return the wrapper with processed content
	return '<' . esc_attr($tag) . ' class="' . esc_attr($atts['class']) . '">' . do_shortcode($content) . '</' . esc_attr($tag) . '>';
}

// Register the shortcode
add_shortcode('container', 'container_shortcode');

function register_custom_gallery_block()
{
	wp_register_script(
		'custom-gallery-block',
		get_template_directory_uri() . '/blocks/custom-gallery/block.js',
		array('wp-blocks', 'wp-editor', 'wp-components', 'wp-i18n', 'wp-element')
	);

	register_block_type('custom/gallery-block', array(
		'editor_script' => 'custom-gallery-block',
		'render_callback' => 'custom_gallery_render_callback',
		'attributes' => array(
			'images' => array(
				'type' => 'array',
				'default' => array(),
				'items' => array('type' => 'object'),
			),
		),
	));
}

function custom_gallery_render_callback($attributes)
{
	if (empty($attributes['images'])) {
		return '<p>No images selected.</p>';
	}

	$output = '<div class="h-[20rem] md:h-[24rem]">';
	$output .= '<div class="h-[20rem] md:h-[24rem] w-full absolute left-0">';
	$output .= '<div class="mt-16 sm:mt-20">';
	$output .= '<div class="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8">';
	$index = 0;
	foreach ($attributes['images'] as $image) {
		$rotateClass = '-rotate-2';
		if ($index % 2 == 0) {
			$rotateClass = 'rotate-2';
		}
		$output .= '<div class="relative aspect-9/10 w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 ' . $rotateClass . '">';
		$output .= '<img loading="lazy" width="3744" height="5616" decoding="async"
					class="absolute inset-0 h-full w-full object-cover" sizes="(min-width: 640px) 18rem, 11rem" src="' . esc_url($image['url']) . '" alt="" />';
		$output .= '</div>';
		$index++;
	}
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}

add_action('init', 'register_custom_gallery_block');