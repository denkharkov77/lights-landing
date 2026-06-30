    <!-- Модальное окно с формой (Интеграция с плагином Contact Form 7) -->
    <div class="modal" id="consultationModal">
        <div class="modal__content">
            <span class="modal__close" id="closeModalBtn">&times;</span>
            
            <?php 
            // Для WordPress лучшим решением будет использование шорткода Contact Form 7.
            // Создайте форму в админке и замените ID ниже на ваш.
            if ( shortcode_exists( 'contact-form-7' ) ) {
                echo do_shortcode('[contact-form-7 id="123" title="Консультация"]');
            } else {
                // Резервный вариант: чистая HTML-форма, если плагин не установлен
                ?>
                <form class="modal__form" id="leadForm" action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>" method="POST">
                    <input type="hidden" name="action" value="send_consultation_form">
                    <input class="modal__input" type="text" name="username" placeholder="Ваше имя" required>
                    <input class="modal__input" type="tel" name="userphone" placeholder="Ваш телефон" required>
                    <input class="modal__input" type="email" name="useremail" placeholder="Ваш E-mail" required>
                    <button class="modal__submit" type="submit">Отправить заявку</button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> STUDY.UA. Все права защищены. Образование за рубежом.</p>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
