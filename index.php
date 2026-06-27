<?php
// Главный файл сборки лендинга GlowMaster
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowMaster — Мощные кастомные фонари ручной сборки для охоты и рыбалки</title>
    <!-- Подключаем скомпилированный CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/blocks.css">
    <link rel="stylesheet" href="css/effects.css">
<!-- new design 
<link rel="stylesheet" href="css/tech-base.css">
<link rel="stylesheet" href="css/tech-layout.css">
<link rel="stylesheet" href="css/tech-blocks.css">
-->
<link rel="stylesheet" href="css/nature-base.css">
<link rel="stylesheet" href="css/nature-layout.css">
<link rel="stylesheet" href="css/nature-blocks.css">

</head>
<body>

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
    include 'blocks/header.php';
    include 'blocks/hero.php';
    include 'blocks/about.php';
    include 'blocks/gallery.php';
    include 'blocks/video.php';
    include 'blocks/prices.php';
    include 'blocks/reviews.php';
    include 'blocks/order.php';
    include 'blocks/footer.php';
    ?>

    <!-- Подключаем JavaScript для анимации -->
    <script src="assets/js/script.js"></script>
</body>
</html>
