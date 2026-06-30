<?php
/**
 * Шаблон блока категорий фонариков для WordPress.
 * Размещается в папке темы: template-parts/categories.php
 */

// Динамический массив данных с путями внутри папки темы
$flashlight_categories = [
    [
        'id'    => 'tactical',
        'title' => 'Тактические фонари',
        'text'  => 'Мощные ударопрочные фонари для экстремальных условий, силовых структур и охоты. Оснащены быстродоступной кнопкой включения и стробоскопом.',
        'img'   => get_theme_file_uri( '/images/tactical.jpg' ),
        'active'=> true
    ],
    [
        'id'    => 'tourist',
        'title' => 'Туристические и кемпинговые',
        'text'  => 'Фонари с широким углом рассеивания света, идеальные для освещения палаточного лагеря, стоянок и длительных ночных переходов.',
        'img'   => get_theme_file_uri( '/images/tourist.jpg' ),
        'active'=> false
    ],
    [
        'id'    => 'headlamp',
        'title' => 'Налобные фонари',
        'text'  => 'Освобождают руки во время ремонта, бега, рыбалки или альпинизма. Надежное эластичное крепление и регулируемый угол наклона луча.',
        'img'   => get_theme_file_uri( '/images/headlamp.jpg' ),
        'active'=> false
    ],
    [
        'id'    => 'edc',
        'title' => 'Карманные (EDC) фонари',
        'text'  => 'Компактные и легкие модели на каждый день. Легко помещаются в карман, сумку или крепятся на ключи в качестве брелока.',
        'img'   => get_theme_file_uri( '/images/edc.jpg' ),
        'active'=> false
    ]
];
?>

<div class="categories-section">
    <div class="container categories-section__wrapper">
        
        <!-- Левая колонка: Список категорий -->
        <aside class="categories-section__sidebar">
            <ul class="categories-navigation">
                <?php foreach ( $flashlight_categories as $cat ) : ?>
                    <li class="categories-navigation__item">
                        <button class="categories-navigation__btn <?php echo $cat['active'] ? 'is-active' : ''; ?>" 
                                data-target="<?php echo esc_attr( $cat['id'] ); ?>">
                            <?php echo esc_html( $cat['title'] ); ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <!-- Правая колонка: Контентная область -->
        <main class="categories-section__content">
            <?php foreach ( $flashlight_categories as $cat ) : ?>
                <article class="categories-tab <?php echo $cat['active'] ? 'is-visible' : ''; ?>" 
                         id="tab-<?php echo esc_attr( $cat['id'] ); ?>">
                    
                    <div class="categories-tab__info">
                        <h3 class="categories-tab__title"><?php echo esc_html( $cat['title'] ); ?></h3>
                        <p class="categories-tab__text"><?php echo esc_html( $cat['text'] ); ?></p>
                        <button class="categories-tab__btn">Смотреть каталог</button>
                    </div>
                    
                    <div class="categories-tab__media">
                        <img src="<?php echo esc_url( $cat['img'] ); ?>" alt="<?php echo esc_attr( $cat['title'] ); ?>" class="categories-tab__img">
                    </div>

                </article>
            <?php endforeach; ?>
        </main>

    </div>
</div>
