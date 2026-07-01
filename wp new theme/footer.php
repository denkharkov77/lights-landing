    <!-- Подвал сайта -->
    <footer>
        <div class="container" style="display: flex; flex-direction: column; gap: 15px; align-items: center;">
            <p>&copy; <?php echo date('Y'); ?> GlowMaster — Мастерская кастомного света. Ручная работа.</p>
            <p style="font-size: 0.8rem; margin-top: 5px; color: #444;">Все права защищены. Доставка по всей территории Украины.</p>
            <p style="font-size: 0.95rem; color: #aaa;">
                Связаться с мастером напрямую: 
                <!-- Кликабельный номер телефона в подвале -->
                <a href="tel:+380971112233" style="color: #ff6600; text-decoration: none; font-weight: bold; margin-left: 5px;">+38097 111 22 33</a>
            </p>
        </div>
    </footer>

    <!-- Подключаем JavaScript для анимации -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/quiz and faq.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/animation.js"></script>
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/categories.js"></script>

</body>
</html>