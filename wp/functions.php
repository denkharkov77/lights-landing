<?php
/**
 * Функции и настройки темы Study UA Consultation
 */

if ( ! function_exists( 'study_consult_setup' ) ) :
    function study_consult_setup() {
        // Добавляем поддержку кастомного логотипа в админке
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 150,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        // Автоматически генерировать тег <title> средствами WordPress
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'study_consult_setup' );

/**
 * Правильное подключение стилей и скриптов (через хуки)
 */
function study_consult_scripts() {
    // Подключаем главный файл стилей style.css
    wp_enqueue_style( 'study-consult-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Подключаем скрипт script.js (в конце страницы, перед </body>)
    wp_enqueue_script( 'study-consult-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

    // Передаем переменную пути для AJAX в JS, если потребуется в будущем
    wp_localize_script( 'study-consult-script', 'wpApiSettings', array(
        'root' => esc_url_raw( rest_url() ),
        'nonce' => wp_create_nonce( 'wp_rest' )
    ) );
}
add_action( 'wp_enqueue_scripts', 'study_consult_scripts' );

function enqueue_categories_assets() {
    // Подключение JS-скрипта категорий
    wp_enqueue_script( 
        'categories-script', 
        get_template_directory_uri() . '/js/categories.js', 
        array(), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_categories_assets' );


/**
 * Обработчик AJAX отправки формы для резервного варианта без плагинов
 */
function handle_consultation_form_ajax() {
    if ( ! isset($_POST['username']) || ! isset($_POST['userphone']) ) {
        wp_send_json_error('Ошибочные данные', 400);
    }

    $name  = sanitize_text_field($_POST['username']);
    $phone = sanitize_text_field($_POST['userphone']);
    $email = sanitize_email($_POST['useremail']);
    
    $to      = get_option('admin_email'); // отправляем на рабочий email администратора WP
    $subject = 'Новая заявка на консультацию';
    $message = "Имя: $name\nТелефон: $phone\nEmail: $email";
    
    $success = wp_mail($to, $subject, $message);
    
    if ($success) {
        wp_send_json_success('Письмо отправлено');
    } else {
        wp_send_json_error('Ошибка отправки', 500);
    }
}
// Регистрируем хуки обработчика для авторизованных и неавторизованных пользователей
add_action('wp_ajax_send_consultation_form', 'handle_consultation_form_ajax');
add_action('wp_ajax_nopriv_send_consultation_form', 'handle_consultation_form_ajax');
