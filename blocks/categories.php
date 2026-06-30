<?php
// Массив данных категорий для удобного управления контентом
$flashlight_categories = [
    [
        'id'    => 'tactical',
        'title' => 'Тактические фонари',
        'text'  => 'Мощные ударопрочные фонари для экстремальных условий, силовых структур и охоты. Оснащены быстродоступной кнопкой включения и стробоскопом.',
        'img'   => 'https://unsplash.com',
        'active'=> true
    ],
    [
        'id'    => 'tourist',
        'title' => 'Туристические и кемпинговые',
        'text'  => 'Фонари с широким углом рассеивания света, идеальные для освещения палаточного лагеря, стоянок и длительных ночных переходов.',
        'img'   => 'https://unsplash.com',
        'active'=> false
    ],
    [
        'id'    => 'headlamp',
        'title' => 'Налобные фонари',
        'text'  => 'Освобождают руки во время ремонта, бега, рыбалки или альпинизма. Надежное эластичное крепление и регулируемый угол наклона луча.',
        'img'   => 'https://unsplash.com',
        'active'=> false
    ],
    [
        'id'    => 'edc',
        'title' => 'Карманные (EDC) фонари',
        'text'  => 'Компактные и легкие модели на каждый день. Легко помещаются в карман, сумку или крепятся на ключи в качестве брелока.',
        'img'   => 'https://unsplash.com',
        'active'=> false
    ]
];
?>

<div class="catalog-section">
    <div class="container catalog-section__wrapper">
        
        <!-- Левая колонка: Список категорий -->
        <aside class="catalog-section__sidebar">
            <ul class="catalog-navigation">
                <?php foreach ($flashlight_categories as $cat): ?>
                    <li class="catalog-navigation__item">
                        <button class="catalog-navigation__btn <?php echo $cat['active'] ? 'is-active' : ''; ?>" 
                                data-target="<?php echo esc_attr($cat['id']); ?>">
                            <?php echo esc_html($cat['title']); ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <!-- Правая колонка: Контентная область -->
        <main class="catalog-section__content">
            <?php foreach ($flashlight_categories as $cat): ?>
                <article class="catalog-tab <?php echo $cat['active'] ? 'is-visible' : ''; ?>" 
                         id="tab-<?php echo esc_attr($cat['id']); ?>">
                    
                    <div class="catalog-tab__info">
                        <h3 class="catalog-tab__title"><?php echo esc_html($cat['title']); ?></h3>
                        <p class="catalog-tab__text"><?php echo esc_html($cat['text']); ?></p>
                        <button class="catalog-tab__btn">Смотреть каталог</button>
                    </div>
                    
                    <div class="catalog-tab__media">
                        <img src="<?php echo esc_url($cat['img']); ?>" alt="<?php echo esc_attr($cat['title']); ?>" class="catalog-tab__img">
                    </div>

                </article>
            <?php endforeach; ?>
        </main>

    </div>
</div>
