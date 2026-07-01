<?php
// Главный файл сборки лендинга GlowMaster
get_header();
?>


    <!-- Декоративный фон из геометрических фигур -->
    <div class="bg-shapes">
        <div class="shape s-circle-1"></div>
        <div class="shape s-square-1"></div>
        <div class="shape s-circle-2"></div>
        <div class="shape s-square-2"></div>
        <div class="shape s-triangle"></div>
        <div class="blob blob-orange b-1"></div>
        <div class="blob blob-white b-2"></div>
        <div class="blob blob-orange b-3"></div>
    </div>

    <?php 
    // Подключение логических блоков сайта

    get_template_part ('blocks/hero');
    get_template_part ('blocks/anatomy');
    get_template_part ('blocks/box');
    get_template_part ('blocks/comparison');

    get_template_part ('blocks/faq');
    get_template_part ('blocks/prices');
    get_template_part ('blocks/quiz');
    get_template_part ('blocks/about');

    get_template_part ('blocks/gallery');
    get_template_part( 'blocks/video');
    get_template_part( 'blocks/prices');
    get_template_part ('blocks/reviews');

    get_template_part ('blocks/order');
    get_template_part ('blocks/categories');

get_footer();
