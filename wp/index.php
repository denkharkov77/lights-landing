<?php get_header(); ?>

    <!-- Главный экран -->
    <section class="hero">
        <div class="container">
            <h1 class="hero__title"><?php bloginfo('name'); ?></h1>
            <p class="hero__subtitle"><?php bloginfo('description'); ?></p>
            <button class="hero__btn" id="openModalBtn">Записаться бесплатно</button>
        </div>
    </section>

    <!-- Блок преимуществ -->
    <section class="features">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Контент, написанный в админке WP (например, сетка преимуществ) выведется тут -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else : ?>
                <!-- Статический резервный вариант, если страница в админке пустая -->
                <div class="features__grid">
                    <div class="features__item">
                        <div class="features__icon">🎓</div>
                        <p class="features__text">Подбор из 550+ партнерских университетов и колледжей по всему миру</p>
                    </div>
                    <div class="features__item">
                        <div class="features__icon">📜</div>
                        <p class="features__text">Полное сопровождение: от сбора документов до получения визы</p>
                    </div>
                    <div class="features__item">
                        <div class="features__icon">💼</div>
                        <p class="features__text">Реальные стратегии финансирования обучения и получения стипендий</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php
// Выведет блок категорий из папки template-parts
get_template_part( 'template-parts/categories' );
?>

<?php get_footer(); ?>
