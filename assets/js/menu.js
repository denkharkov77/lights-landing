document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menuBtn');
    const sideMenu = document.getElementById('sideMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const body = document.body;

    // Автоматически добавляем индексный номер каждому пункту списка для CSS задержки
    const menuItems = sideMenu.querySelectorAll('ul li');
    menuItems.forEach((item, index) => {
        item.style.setProperty('--i', index);
    });

    // Функция открытия/закрытия меню
    const toggleMenu = () => {
        menuBtn.classList.toggle('is-active');
        sideMenu.classList.toggle('is-open');
        menuOverlay.classList.toggle('is-visible');
        body.classList.toggle('no-scroll'); // Блокировка прокрутки фона
    };

    menuBtn.addEventListener('click', toggleMenu);
    menuOverlay.addEventListener('click', toggleMenu);
});
