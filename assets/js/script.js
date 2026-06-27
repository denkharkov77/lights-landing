/**
 * GlowMaster - Интерактивные скрипты лендинга
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================================================
    // 1. АНИМАЦИЯ ПОДНЯТИЯ БЛОКОВ ПРИ СКРОЛЛЕ (INTERSECTION OBSERVER)
    // ==========================================================================
    const animatedSections = document.querySelectorAll('.animated-section');
    
    // Конфигурация триггера появления
    const observerOptions = {
        root: null,         // Отслеживаем элементы относительно окна браузера
        rootMargin: '0px',  // Без дополнительных отступов
        threshold: 0.15     // Анимация сработает, когда блок покажется на 15%
    };

    // Создаем наблюдатель за элементами страницы
    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Если блок зашел в зону видимости, добавляем CSS-класс активации
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Отключаем слежку за этим блоком, чтобы анимация сработала только 1 раз
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Запускаем слежку за каждым блоком, имеющим нужный класс
    animatedSections.forEach(section => {
        scrollObserver.observe(section);
    });


    // ==========================================================================
    // 2. ПЛАВНЫЙ НАВИГАЦИОННЫЙ СКРОЛЛ ПО ЯКОРЯМ
    // ==========================================================================
    const anchorLinks = document.querySelectorAll('nav a[href^="#"], .hero a[href^="#"]');

    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Отменяем стандартный резкий скачок

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Высота фиксированной шапки сайта, чтобы блок не заезжал под нее
                const headerOffset = document.querySelector('header').offsetHeight || 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                // Запускаем плавную прокрутку до вычисленной точки
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
