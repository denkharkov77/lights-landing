<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="header">
        <div class="container">
            <div class="header__logo">
                <?php 
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
                }
                ?>
            </div>
            <!-- Телефон можно менять через кастомные поля или виджеты. Пока выводится статикой, как в верстке -->
            <a href="tel:+380445000320" class="header__phone">+38 (044) 500-03-20</a>
        </div>
    </header>
