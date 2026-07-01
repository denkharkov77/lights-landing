document.addEventListener('DOMContentLoaded', () => {
    const navButtons = document.querySelectorAll('.catalog-navigation__btn');
    const catalogTabs = document.querySelectorAll('.catalog-tab');

    navButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Если кнопка уже активна — ничего не делаем
            if (button.classList.contains('is-active')) return;

            const targetId = button.getAttribute('data-target');
            const targetTab = document.getElementById(`tab-${targetId}`);

            // 1. Деактивируем текущую активную кнопку
            document.querySelector('.catalog-navigation__btn.is-active').classList.remove('is-active');
            
            // 2. Скрываем текущий видимый таб
            const currentTab = document.querySelector('.catalog-tab.is-visible');
            if (currentTab) {
                currentTab.classList.remove('is-visible');
            }

            // 3. Активируем новую кнопку
            button.classList.add('is-active');

            // 4. Показываем новый таб (анимация запускается через CSS за счет хака с Reflow)
            if (targetTab) {
                targetTab.classList.add('is-visible');
            }
        });
    });
});
