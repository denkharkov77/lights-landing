<?php
define( 'THEME_NAME', 'leon' );
define( 'THEME_VERSION', '1.0.0' );
define( 'MAIL_FOR_REQUESTS', 'leon.defence@gmail.com' );

/*
// define( 'EMAIL_DEFAULT', 'info@domain.com' );

// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО ВРЕМЕННО 
// require_once get_template_directory() . '/inc/my-own-jquery.php';

// удаляем стили Гуттенберга которые просто вообще не используем
require_once get_template_directory() . '/inc/remove-guttenberg-styles.php';

// Изменим `-scaled` размер (максимально допустимый размер) картинки по ширине/высоте
require_once get_template_directory() . '/inc/set-max-img-size.php';

require_once get_template_directory() . '/inc/add-custom-types.php';

// require_once get_template_directory() . '/inc/add-menu-link-class.php';

// require_once get_template_directory() . '/inc/my-widgets.php';

// require_once get_template_directory() . '/inc/theme-customize.php';

if( wp_doing_ajax() )
{
	require_once get_template_directory() . '/ajax/ajax.php';
}



///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
// Подключаем локализацию в самом конце подключаемых к выводу скриптов, чтобы скрипт
// 'twentyfifteen-script', к которому мы подключаемся, точно был добавлен в очередь на вывод.
// Заметка: код можно вставить в любое место functions.php темы
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

	// Первый параметр 'twentyfifteen-script' означает, что код будет прикреплен к скрипту с ID 'twentyfifteen-script'
	// 'twentyfifteen-script' должен быть добавлен в очередь на вывод, иначе WP не поймет куда вставлять код локализации
	// Заметка: обычно этот код нужно добавлять в functions.php в том месте где подключаются скрипты, после указанного скрипта
	wp_localize_script( 'jquery', 'myajax', 
		array(
			'url' 					=> admin_url( 'admin-ajax.php' ),
			// НЕЛЬЗЯ ТК СТОИТ ПЛАГИН СТРАНИЧНОГО КЕШИРОВАНИЯ И НОНСЕ БУДУТ УСТАРЕВАТЬ
			// 'nonce'					=> wp_create_nonce('rsol-myajax-nonce'),
			'str_thanks' 			=> esc_js( esc_html__( 'Спасибо, Ваша заявка принята', THEME_NAME ) ),
			// esc_attr из-за \' иначе на сайте выводит кавычку, тк esc_js экранирует кавычки в том числе...
			// 'str_call_you_later' 	=> esc_attr__( 'Незабаром зв\'яжемося з Вами:)', THEME_NAME ),
			'str_mail_error' 		=> esc_js( esc_html__( 'При отправлении письма возникла ошибка. Пожалуйста, попробуйте еще раз.', THEME_NAME ) ),
			'str_not_all_data' 		=> esc_js( esc_html__( 'Не все данные были переданы. Пожалуйста, попробуйте еще раз.', THEME_NAME ) ),
			'str_unknown_error' 	=> esc_js( esc_html__( 'Неизвестная ошибка. Пожалуйста, попробуйте еще раз.', THEME_NAME ) ),
		)
	);  
}



///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
add_action( 'after_setup_theme', 'leon_lang_theme_setup' );
function leon_lang_theme_setup()
{
	load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );
}
*/


///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
/*
add_action( 'widgets_init', 'leon_register_widgets' );
function leon_register_widgets()
{
	register_sidebar( array(
		'name'          => esc_html__( 'Бокова панель', THEME_NAME ),
		'id'            => "rsol-sidebar",
		// 'description'   => '',
		'class'         => 'rsol-sidebar',
		// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
		// 'after_widget'  => "</li>\n",
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => "</h2>\n",
	) );
}
*/

/*
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
add_action( 'after_setup_theme', 'leon_support' );

function leon_support()
{
	if( ! function_exists( 'add_theme_support' ) )
	{
		return;
	}

	add_theme_support( 'woocommerce' );

	add_theme_support( 'menus' );

	// основное меню в хедере и в футере
	register_nav_menu( 'main-menu', 'Главное меню' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	// add_theme_support('widgets');

	// Declare support for title theme feature.
	add_theme_support( 'title-tag' );

	// Declare support for selective refreshing of widgets.
	// add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
}

add_action( 'wp_enqueue_scripts', 'leon_scripts' );

function leon_scripts()
{
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css', array(), THEME_VERSION );
	wp_enqueue_style( 'global-style', get_template_directory_uri() . '/css/global.css', array(), THEME_VERSION );

	if( is_front_page() || is_home() || is_404() || is_search() )
	{
		wp_enqueue_style( 'homepage-style', get_template_directory_uri() . '/css/home-page.css', array(), THEME_VERSION );
	}

	if( is_page_template( 'tmpl-home.php' ) )
	{
		wp_enqueue_style( 'homepage-style', get_template_directory_uri() . '/css/home-page.css', array(), THEME_VERSION );
	}

	if( is_page_template( 'tmpl-partners.php' ) )
	{
		wp_enqueue_style( 'contactspage-style', get_template_directory_uri() . '/css/partners.css', array(), THEME_VERSION );
	}

	if( is_page_template( 'tmpl-price.php' ) )
	{
		wp_enqueue_style( 'contactspage-style', get_template_directory_uri() . '/css/price.css', array(), THEME_VERSION );
	}

	wp_enqueue_script( 'jq-scroll', get_template_directory_uri() . '/js/jquery.scrollTo-2.1.2.min.js', array('jquery'), THEME_VERSION );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/menu.js', array('jquery'), THEME_VERSION, true );
	wp_enqueue_script( 'typed', get_template_directory_uri() . '/js/typed.min.js', array('jquery'), THEME_VERSION, true );
	wp_enqueue_script( 'home-app', get_template_directory_uri() . '/js/home-app.js', array('jquery'), THEME_VERSION, true );
	wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js', array('jquery'), THEME_VERSION, true );

	// Добавляем атрибут defer к скриптам
	add_filter( 'script_loader_tag', 'leon_change_my_script', 10, 3 );
	function leon_change_my_script( $tag, $handle, $src )
	{
		return str_replace( ' src', ' defer src', $tag );
	}
}
*/
