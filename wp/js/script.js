document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('consultationModal');
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const nativeForm = document.getElementById('leadForm');

    // Логика открытия модального окна
    if (openBtn && modal) {
        openBtn.addEventListener('click', () => {
            modal.classList.add('is-active');
            document.body.style.overflow = 'hidden';
        });
    }

    // Закрытие по клику на крестик
    if (closeBtn && modal) {
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('is-active');
            document.body.style.overflow = '';
        });
    }

    // Закрытие по клику вне контента формы
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('is-active');
            document.body.style.overflow = '';
        }
    });

    // Интеграция с плагином Contact Form 7 (если он используется)
    document.addEventListener('wpcf7mailsent', (event) => {
        alert('Спасибо! Ваша заявка успешно отправлена.');
        if (modal) {
            modal.classList.remove('is-active');
            document.body.style.overflow = '';
        }
    }, false);

    // Логика отправки резервной стандартной формы через WordPress AJAX
    if (nativeForm) {
        nativeForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(nativeForm);
            
            try {
                const response = await fetch(nativeForm.action, {
                    method: 'POST',
                    body: formData
                });
                if (response.ok) {
                    alert('Заявка успешно отправлена менеджерам!');
                    nativeForm.reset();
                    modal.classList.remove('is-active');
                    document.body.style.overflow = '';
                } else {
                    alert('Ошибка сервера при отправке.');
                }
            } catch (error) {
                console.error('Ошибка:', error);
            }
        });
    }
});
