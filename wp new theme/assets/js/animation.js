/**
 * Скрипт плавного появления блоков при скролле (Fade-In-Up)
 */
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.animated-section');
    
    const options = {
        root: null, // Отслеживаем появление относительно экрана
        rootMargin: '0px',
        threshold: 0.15 // 15% блока должно зайти на экран для старта анимации
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Отключаем слежку за сработавшим элементом, чтобы анимация проигралась 1 раз
                observer.unobserve(entry.target);
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });
});
