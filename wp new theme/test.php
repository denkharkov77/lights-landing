<?php
// Главный файл сборки лендинга GlowMaster
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowMaster — Мощные кастомные фонари ручной сборки для охоты и рыбалки</title>
    <!-- Подключаем скомпилированный CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


  
    <!-- Контейнер с декоративными фоновыми элементами -->
    <div class="bg-shapes">
        <!-- Геометрические контуры -->
        <div class="shape s-circle-1"></div>
        <div class="shape s-square-1"></div>
        <div class="shape s-circle-2"></div>
        <div class="shape s-square-2"></div>
        <div class="shape s-triangle"></div>

        <!-- Размытые световые круги (Блобы) -->
        <div class="blob blob-orange b-1"></div>
        <div class="blob blob-white b-2"></div>
        <div class="blob blob-orange b-3"></div>
    </div>

    <!-- Шапка сайта -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">GLOW<span>MASTER</span></a>
            <nav>
                <a href="#about">Обо мне</a>
                <a href="#gallery">Галерея</a>
                <a href="#video">Видео</a>
                <a href="#prices">Цены</a>
                <a href="#reviews">Отзывы</a>
                <a href="#quiz">Подбор</a>
                <a href="#anatomy">Анатомия</a>
                <a href="#box">Комплект</a>
                <a href="#comparison">Сравнение</a>
                <a href="#faq">Вопросы</a>
                <!-- Кликабельный номер телефона в шапке -->
                <a href="tel:+380971112233" class="btn" style="padding: 7px 15px; font-size: 0.85rem; text-transform: none;">+38 (097) 111 22 33</a>

            </nav>
        </div>
    </header>


  <section class="hero">
    <div class="hero-content">
        <h1>Таежный свет ручной сборки</h1>
        <p>Неубиваемые кастомные фонари для охоты, рыбалки и экстремального туризма. Созданы вручную под ваши жесткие условия.</p>
        <a href="#order" class="btn">Консультация и заказ</a>
    </div>
</section>


  <section class="container animated-section" id="about">
    <h2 class="section-title">Оригинальный свет <span>от мастера</span></h2>
    <div class="about-content">
        <img src="https://picsum.photos" alt="Мастер за работой" class="about-img">
        <div class="about-text">
            <h3>Приветствую! Я Андрей — создатель фонарей GlowMaster.</h3>
            <p>Я сам заядлый охотник и прекрасно знаю, как подводит заводской китайский свет в самый неподходящий момент: клинят кнопки, промокают корпуса, а заявленные «тысячи люмен» тускнеют через 5 минут работы.</p>
            <p>Уже 6 лет в своей мастерской я вручную собираю надежные тактические и поисковые фонари. Каждый корпус точится из прочного дюраля, электроника паяется вручную с контролем тепла, а диоды закупаются только у проверенных брендов США и Японии.</p>
            <p>Мои фонари не боятся падений на камни, ледяной воды, отдачи 12 калибра и светят ровно столько, сколько нужно вам для выживания в дикой природе.</p>
        </div>
    </div>
</section>

  <section class="container animated-section" id="gallery">
    <h2 class="section-title">Процесс сборки <span>и готовые работы</span></h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Токарная обработка корпуса">
            <div class="gallery-desc">Вытачивание дюралевого корпуса под аккумуляторы 21700</div>
        </div>
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Пайка кастомного драйвера">
            <div class="gallery-desc">Пайка медных подложек и диодов Cree XHP70.3</div>
        </div>
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Готовый тактический фонарь">
            <div class="gallery-desc">Модификация «Охотник» с матовым защитным анодированием</div>
        </div>
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Тест герметичности фонаря">
            <div class="gallery-desc">Проверка двойных уплотнительных колец под давлением воды</div>
        </div>
    </div>
</section>

  <section class="video-section animated-section" id="video">
    <div class="container">
        <h2 class="section-title">Видео <span>с тестами в реальных условиях</span></h2>
        <div class="video-grid">
            <div class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://youtube.com" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Тест подствольного фонаря «Охотник» на живучесть (отдача 12 калибра)</h3>
                    <a href="https://youtube.com" target="_blank" class="video-link">Смотреть напрямую на YouTube →</a>
                </div>
            </div>
            <div class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://youtube.com" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Как теплый свет модели «Рыбак» пробивает глухой туман над рекой</h3>
                    <a href="https://youtube.com" target="_blank" class="video-link">Смотреть напрямую на YouTube →</a>
                </div>
            </div>
        </div>
    </div>
</section>


  <section class="container animated-section" id="prices">
    <h2 class="section-title">Стоимость <span>модификаций</span></h2>
    <div class="grid">
        <div class="price-card">
            <h3>Рыбак</h3>
            <p class="price-subtitle">Теплый свет для воды</p>
            <div class="price-value">от 4 500 ₽</div>
            <ul class="price-features">
                <li>Теплый светодиод (пробивает туман и взвесь)</li>
                <li>Влагозащита IP68 (до 2 метров в воду)</li>
                <li>Питание от выносливых 18650 / 21700</li>
                <li>Широкий заливной луч для лодки и берега</li>
            </ul>
            <a href="#order" class="btn btn-full">Выбрать модель</a>
        </div>
        <div class="price-card popular">
            <div class="badge">Хит продаж</div>
            <h3>Охотник</h3>
            <p class="price-subtitle">Дальнобойный подствольник</p>
            <div class="price-value">от 6 000 ₽</div>
            <ul class="price-features">
                <li>Концентрированный луч-«шило» (до 450 метров)</li>
                <li>Амортизация контактов (держит отдачу 12 калибра)</li>
                <li>Совместим с оружейной выносной кнопкой</li>
                <li>Авиационный ударопрочный дюралюминий</li>
            </ul>
            <a href="#order" class="btn btn-full">Выбрать модель</a>
        </div>
        <div class="price-card">
            <h3>Поисковик</h3>
            <p class="price-subtitle">Экстремальная автономность</p>
            <div class="price-value">от 8 500 ₽</div>
            <ul class="price-features">
                <li>До 4000 реальных Люмен (заменяет автофару)</li>
                <li>Кастомный драйвер с умным термоконтролем</li>
                <li>Кассета питания на 3 аккумулятора 21700</li>
                <li>До 24 часов работы на среднем режиме</li>
            </ul>
            <a href="#order" class="btn btn-full">Выбрать модель</a>
        </div>
    </div>
</section>

  <section class="container animated-section" id="reviews">
    <h2 class="section-title">Что говорят <span>охотники и рыбаки</span></h2>
    <div class="grid">
        <div class="review-card">
            <span class="review-author">Михаил Е. (г. Тверь)</span>
            <span class="review-meta">Модель «Охотник» • Охота на кабана</span>
            <p class="review-text">«Фонарь на 12 калибре стоит как литой уже второй сезон. Отдача мощная, но свет не моргает, контакты не отходят. Лупит ночью метров на 350 уверенно. Андрей, спасибо за качество!»</p>
        </div>
        <div class="review-card">
            <span class="review-author">Сергей «Карась»</span>
            <span class="review-meta">Модель «Рыбак» • Ночной спиннинг</span>
            <p class="review-text">«Брал теплый свет для лодки. В тумане над рекой обычный белый слепит стеной, а этот желтоватый пробивает отлично, всю корягу видно. Случайно уронил на глубину метра — достал, горит!»</p>
        </div>
        <div class="review-card">
            <span class="review-author">Алексей Д.</span>
            <span class="review-meta">Модель «Поисковик» • Спасательный отряд</span>
            <p class="review-text">«Используем в поисковых операциях в тайге. Фонарь сутками работает под дождем и грязью. Заряд держит честно, светит как прожектор электрички. Вещь неубиваемая.»</p>
        </div>
    </div>
</section>
<section class="container animated-section" id="order">
    <div class="form-section">
        <h2>Обсудить ваш фонарь</h2>
        <p>Я свяжусь с вами в мессенджере (WhatsApp / Telegram), помогу выбрать оптику, дальность луча и рассчитаю точную стоимость под ваши задачи.</p>
        
        <form action="send.php" method="POST">
            <select name="lantern_type" required>
                <option value="" disabled selected>Какая модель интересна?</option>
                <option value="Рыбак">«Рыбак» (от 4500 ₽)</option>
                <option value="Охотник">«Охотник» (от 6000 ₽)</option>
                <option value="Поисковик">«Поисковик» (от 8500 ₽)</option>
                <option value="Индивидуальный заказ">Нужен особый кастом</option>
            </select>
            <input type="text" name="username" placeholder="Ваше имя" required>
            <input type="tel" name="userphone" placeholder="Номер телефона для связи" required>
            <button type="submit" class="btn btn-submit">Отправить запрос мастеру</button>
        </form>
    </div>
</section>

  <section class="container animated-section" id="anatomy">
    <h2 class="section-title">Анатомия <span>надежного света</span></h2>
    <div class="anatomy-container">
        <div class="anatomy-text-side">
            <div class="anatomy-point">
                <h4>Сверхпроводящая медная подложка (SinkPAD)</h4>
                <p>Диод припаян напрямую к толстой медной пластине. Это исключает перегрев кристалла и продлевает его срок службы до 50 000 часов.</p>
            </div>
            <div class="anatomy-point">
                <h4>Ультра-прозрачное стекло с просветлением</h4>
                <p>Закаленное минеральное стекло с двухсторонним фиолетовым антибликовым напылением пропускает 98.5% светового потока без потерь.</p>
            </div>
            <div class="anatomy-point">
                <h4>Позолоченные силовые пружины</h4>
                <p>Внутренние контакты покрыты золотом для снижения сопротивления. Обладают повышенной жесткостью: свет не моргнет даже при выстреле.</p>
            </div>
        </div>
        <img src="https://picsum.photos" alt="Схема фонаря ручной сборки" class="about-img" style="max-width: 450px; flex: 1 1 350px;">
    </div>
</section>
<section class="container animated-section" id="box">
    <h2 class="section-title">Что вы получаете <span>в комплекте</span></h2>
    <div class="box-content">
        <img src="https://picsum.photos" alt="Комплектация кастомного фонаря" class="about-img" style="max-width: 500px; flex: 1 1 350px;">
        <ul class="box-list">
            <li><strong>Кастомный фонарь GlowMaster</strong> собранный, смазанный и протестированный лично мастером под давлением воды.</li>
            <li><strong>Премиальный аккумулятор (21700 или 18650)</strong> высокой емкости с реальными честными тестами на емкость (никакого дешевого Китая).</li>
            <li><strong>Зарядное устройство</strong> с контролем температуры батареи и автоматическим отключением при полном заряде.</li>
            <li><strong>Ударопрочный защитный кейс</strong> из ABS-пластика с мягким поролоновым ложементом для безопасной перевозки в багажнике или рюкзаке.</li>
            <li><strong>Темляк и ЗИП-комплект</strong>: парашютный регулируемый шнур на руку и 2 запасных силиконовых уплотнительных кольца.</li>
        </ul>
    </div>
</section>

  <section class="container animated-section" id="comparison">
    <h2 class="section-title">Кастом GlowMaster <span>против масс-маркета</span></h2>
    <div class="comp-table-wrapper">
        <table class="comp-table">
            <thead>
                <tr>
                    <th>Критерий сравнения</th>
                    <th style="color: #ff6600;">Мастерская GlowMaster</th>
                    <th>Заводской Китай (до 3000₽)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Материал и прочность корпуса</td>
                    <td class="our-product">Толстостенный авиационный дюраль. Выдерживает жесткую отдачу 12 калибра и падения на скалы.</td>
                    <td>Хрупкий силумин или тонкий пластик. Деформируется от ударов, резьба стирается за полгода.</td>
                </tr>
                <tr>
                    <td>Реальная гидрозащита</td>
                    <td class="our-product"><span class="comp-badge good">Честный IP68</span> Двойные силиконовые кольца, густая влагостойкая смазка на всех соединениях.</td>
                    <td>Номинальный IPX4. Одно тонкое сухое кольцо. Внутри появляется конденсат после обычного дождя.</td>
                </tr>
                <tr>
                    <td>Стабильность яркости</td>
                    <td class="our-product">Кастомный драйвер на медной подложке. Честная яркость без падения до полной разрядки батареи.</td>
                    <td>Яркость падает на 70% уже через 3-5 минут работы из-за перегрева платы и отсутствия термоконтроля.</td>
                </tr>
                <tr>
                    <td>Ремонтопригодность</td>
                    <td class="our-product">Полностью разборная модульная конструкция. Пожизненная гарантия на корпус от мастера.</td>
                    <td>Одноразовая запаянная конструкция. В случае поломки кнопки или диода — фонарь отправляется в мусорку.</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

  <section class="container animated-section" id="faq">
    <h2 class="section-title">Часто задаваемые <span>вопросы</span></h2>
    <div class="faq-wrapper">
        <div class="faq-item">
            <div class="faq-question">Выдержит ли фонарь отдачу 12 калибра?</div>
            <div class="faq-answer">
                <div class="faq-answer-content">Да, абсолютно. Модификация «Охотник» проектировалась специально как подствольник. В ней используются усиленные позолоченные пружины с двух сторон аккумулятора и кастомный драйвер с виброзащитным компаундом. Фонарь успешно тестировался на ружьях 12 калибра и нарезных карабинах крупных калибров (.30-06, 9.3х62).</div>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Какая предоставляется гарантия?</div>
            <div class="faq-answer">
                <div class="faq-answer-content">Я даю честную гарантию 2 года на электронику (светодиод, плата драйвера, кнопка управления) и пожизненную гарантию на целостность металлического корпуса. Если в течение двух лет что-то сломается не по вашей вине — я бесплатно отремонтирую или соберу новый модуль.</div>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Как осуществляется доставка по СНГ?</div>
            <div class="faq-answer">
                <div class="faq-answer-content">Отправка производится транспортной компанией СДЭК, Боксберри или Почтой. Перед отправкой каждый фонарь надежно упаковывается в защитный пластиковый кейс и плотную коробку. Клиенту предоставляется трек-номер для круглосуточного отслеживания посылки в режиме онлайн.</div>
            </div>
        </div>
    </div>
</section>

  <section class="container animated-section" id="quiz">
    <h2 class="section-title">Подберите фонарь <span>под ваши задачи</span></h2>
    <div class="card" style="max-width: 800px; margin: 0 auto;">
        <p style="text-align: center; margin-bottom: 30px; color: #aaa;">Выберите параметры, и система автоматически подберет идеальную оптику и светодиод.</p>
        <div class="quiz-steps">
            <!-- Шаг 1 -->
            <div class="quiz-step">
                <h4>1. Какое основное назначение фонаря?</h4>
                <div class="quiz-options">
                    <div class="quiz-radio">
                        <input type="radio" id="purpose_hunt" name="q_purpose" value="Охота" checked>
                        <label for="purpose_hunt" class="quiz-label">Охота (подствольный)</label>
                    </div>
                    <div class="quiz-radio">
                        <input type="radio" id="purpose_fish" name="q_purpose" value="Рыбалка">
                        <label for="purpose_fish" class="quiz-label">Рыбалка и лодка</label>
                    </div>
                    <div class="quiz-radio">
                        <input type="radio" id="purpose_search" name="q_purpose" value="Поиск">
                        <label for="purpose_search" class="quiz-label">Поисковый / Туризм</label>
                    </div>
                </div>
            </div>
            <!-- Шаг 2 -->
            <div class="quiz-step">
                <h4>2. Какая рабочая дальность луча вам необходима?</h4>
                <div class="quiz-options">
                    <div class="quiz-radio">
                        <input type="radio" id="dist_1" name="q_dist" value="До 150м" checked>
                        <label for="dist_1" class="quiz-label">До 150 метров (заливной)</label>
                    </div>
                    <div class="quiz-radio">
                        <input type="radio" id="dist_2" name="q_dist" value="300м">
                        <label for="dist_2" class="quiz-label">До 300 метров (универсал)</label>
                    </div>
                    <div class="quiz-radio">
                        <input type="radio" id="dist_3" name="q_dist" value="500м+">
                        <label for="dist_3" class="quiz-label">От 500 метров (шило)</label>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 10px;">
                <a href="#order" class="btn" id="quiz-submit-btn">Получить расчет сборки</a>
            </div>
        </div>
    </div>
</section>

  
      <!-- Подвал сайта -->
    <footer>
        <div class="container" style="display: flex; flex-direction: column; gap: 15px; align-items: center;">
            <p>&copy; <?php echo date('Y'); ?> GlowMaster — Мастерская кастомного света. Ручная работа.</p>
            <p style="font-size: 0.8rem; margin-top: 5px; color: #444;">Все права защищены. Доставка по всей территории Украины.</p>
            <p style="font-size: 0.95rem; color: #aaa;">
                Связаться с мастером напрямую: 
                <!-- Кликабельный номер телефона в подвале -->
                <a href="tel:+79991234567" style="color: #ff6600; text-decoration: none; font-weight: bold; margin-left: 5px;">+7 (999) 123-45-67</a>
            </p>
        </div>
    </footer>

    <?php 
    // Подключение логических блоков сайта
    include 'blocks/header.php';
    include 'blocks/hero.php';
    include 'blocks/about.php';
    include 'blocks/gallery.php';
    include 'blocks/video.php';
    include 'blocks/prices.php';
    include 'blocks/reviews.php';
    include 'blocks/order.php';
    include 'blocks/footer.php';
    ?>

    <!-- Подключаем JavaScript для анимации -->
    <script src="assets/js/animation.js"></script>

  <style>
    :root {
  --bg-main: #121212;
  --bg-card: rgba(26, 26, 26, 0.75);
  --bg-section-alt: rgba(22, 22, 22, 0.6);
  --primary: #ff6600;
  --primary-hover: #e05500;
  --text-main: #e0e0e0;
  --text-light: #ffffff;
  --text-muted: #aaa;
  --border-light: rgba(255, 102, 0, 0.1);
  --border-form: rgba(255, 102, 0, 0.2);
  --transition-fast: 0.3s ease;
  --transition-slow: 0.8s ease-out;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

body {
  background-color: var(--bg-main);
  color: var(--text-main);
  line-height: 1.6;
  scroll-behavior: smooth;
  position: relative;
  overflow-x: hidden;
}

section {
  padding: 80px 20px;
  position: relative;
  z-index: 2;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.section-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 50px;
  text-transform: uppercase;
  color: var(--text-light);
  letter-spacing: 1px;
}

.section-title span {
  color: var(--primary);
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}
/* Эффект стекла для карточек */
.card {
  background: var(--bg-card);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  padding: 30px;
  border-radius: 6px;
  border: 1px solid var(--border-light);
}

/* Обо мне */
.about-content { display: flex; align-items: center; gap: 40px; flex-wrap: wrap; }
.about-img { flex: 1 1 300px; max-width: 400px; border-radius: 6px; border: 2px solid var(--primary); position: relative; z-index: 3; }
.about-text { flex: 2 1 400px; background: rgba(20, 20, 20, 0.6); padding: 25px; border-radius: 8px; backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); }
.about-text h3 { color: var(--text-light); margin-bottom: 15px; }
.about-text p { margin-bottom: 15px; color: var(--text-muted); }

/* Фотогалерея */
.gallery-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
.gallery-item { position: relative; overflow: hidden; border-radius: 6px; border: 1px solid #2a2a2a; height: 250px; }
.gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s ease; }
.gallery-item:hover img { transform: scale(1.1); }
.gallery-desc { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0, 0, 0, 0.9)); padding: 15px; font-size: 0.9rem; color: var(--text-light); }

/* Видеогалерея */
.video-section { background: var(--bg-section-alt); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); }
.video-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 30px; }
.video-card { background: rgba(26, 26, 26, 0.8); border-radius: 6px; overflow: hidden; border: 1px solid #2a2a2a; }
.video-wrapper { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; }
.video-wrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; }
.video-info { padding: 20px; }
.video-info h3 { color: var(--text-light); font-size: 1.1rem; margin-bottom: 10px; }
.video-link { color: var(--primary); text-decoration: none; font-size: 0.9rem; font-weight: bold; display: inline-block; margin-top: 5px; }
.video-link:hover { text-decoration: underline; }

/* Цены */
.price-card { background: var(--bg-card); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); padding: 40px 30px; border-radius: 6px; border: 1px solid rgba(255, 255, 255, 0.05); text-align: center; position: relative; transition: var(--transition-fast); }
.price-card.popular { border-color: var(--primary); background: rgba(30, 30, 30, 0.85); box-shadow: 0 10px 30px rgba(255, 102, 0, 0.1); }
.price-card.popular .badge { position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary); color: var(--text-light); padding: 4px 15px; font-size: 0.8rem; font-weight: bold; border-radius: 20px; text-transform: uppercase; }
.price-value { font-size: 2rem; color: var(--primary); font-weight: bold; margin: 20px 0; }
.price-features { list-style: none; margin-bottom: 30px; text-align: left; color: var(--text-muted); }
.price-features li { margin-bottom: 10px; position: relative; padding-left: 20px; }
.price-features li::before { content: "✓"; color: var(--primary); position: absolute; left: 0; }

/* Отзывы */
.review-card { background: var(--bg-card); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); padding: 25px; border-radius: 6px; border-left: 4px solid var(--primary); }
.review-author { font-weight: bold; color: var(--text-light); margin-bottom: 5px; display: block; }
.review-meta { font-size: 0.85rem; color: var(--primary); margin-bottom: 15px; display: block; }
.review-text { color: #bbb; font-style: italic; }

/* Форма и Подвал */
.form-section { background: rgba(22, 22, 22, 0.85); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); max-width: 600px; margin: 0 auto; text-align: center; border-radius: 8px; border: 1px solid var(--border-form); }
form { display: flex; flex-direction: column; gap: 20px; margin-top: 30px; }
input, select { padding: 14px; background: #1a1a1a; border: 1px solid #333; border-radius: 4px; font-size: 1rem; color: var(--text-light); width: 100%; }
input:focus, select:focus { border-color: var(--primary); outline: none; }
footer { background: #0a0a0a; color: #666; text-align: center; padding: 30px 20px; font-size: 0.9rem; border-top: 1px solid #1a1a1a; position: relative; z-index: 2; }
/* Фоновый контейнер */
.bg-shapes {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  z-index: 1;
}

.shape {
  position: absolute;
  opacity: 0.04;
}

/* Размытые неоновые пятна */
.blob {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  -webkit-filter: blur(80px);
  opacity: 0.08;
  will-change: transform;
}

.blob-orange { background: var(--primary); width: 400px; height: 400px; }
.blob-white { background: #ffffff; width: 300px; height: 300px; }

/* Позиционирование фигур */
.s-circle-1 { border: 3px solid var(--primary); border-radius: 50%; width: 120px; height: 120px; top: 15%; left: 5%; }
.s-square-1 { border: 3px solid #fff; width: 80px; height: 80px; transform: rotate(45deg); top: 28%; right: 8%; }
.s-circle-2 { border: 2px solid #fff; border-radius: 50%; width: 200px; height: 200px; top: 48%; left: -50px; }
.s-square-2 { border: 3px solid var(--primary); width: 140px; height: 140px; transform: rotate(15deg); top: 65%; right: 4%; }
.s-triangle {
  width: 0; height: 0;
  border-left: 50px solid transparent;
  border-right: 50px solid transparent;
  border-bottom: 86px solid var(--primary);
  top: 82%; left: 8%; transform: rotate(-25deg);
}

.b-1 { top: 20%; right: 10%; }
.b-2 { top: 55%; left: 5%; }
.b-3 { top: 78%; right: 15%; }

/* Анимация поднятия блоков при прокрутке */
.animated-section {
  opacity: 0;
  transform: translateY(50px);
  transition: opacity var(--transition-slow), transform var(--transition-slow);
  will-change: opacity, transform;
}

.animated-section.is-visible {
  opacity: 1;
  transform: translateY(0);
}
/* Кнопки */
.btn {
  background: var(--primary);
  color: var(--text-light);
  padding: 15px 35px;
  text-decoration: none;
  border-radius: 4px;
  font-weight: bold;
  font-size: 1.1rem;
  border: none;
  cursor: pointer;
  transition: var(--transition-fast);
  text-transform: uppercase;
  display: inline-block;
  position: relative;
  z-index: 5;
}

.btn:hover {
  background: var(--primary-hover);
  transform: translateY(-2px);
}

/* Шапка и меню */
header {
  background: rgba(26, 26, 26, 0.85);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  padding: 20px;
  border-bottom: 2px solid var(--primary);
  position: sticky;
  top: 0;
  z-index: 1000;
}

.nav-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: var(--text-light);
  text-decoration: none;
  letter-spacing: 0.5px;
}

.logo span {
  color: var(--primary);
}

nav a {
  color: var(--text-light);
  margin-left: 20px;
  text-decoration: none;
  font-size: 0.95rem;
  transition: var(--transition-fast);
}

nav a:hover {
  color: var(--primary);
}

/* Главный экран Hero */
.hero {
  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("https://picsum.photos") no-repeat center/cover;
  min-height: 60vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 40px 20px;
  position: relative;
  z-index: 2;
}

.hero h1 {
  font-size: 2.8rem;
  margin-bottom: 15px;
  color: var(--text-light);
  text-transform: uppercase;
}

.hero p {
  font-size: 1.3rem;
  margin-bottom: 30px;
  max-width: 700px;
  color: #ccc;
}

@media (max-width: 600px) {
  .nav-container { flex-direction: column; gap: 15px; }
  nav a { margin: 0 10px; }
  .hero h1 { font-size: 2rem; }
}

    /* 1. Стили конструктора-квиза */
.quiz-steps { display: flex; flex-direction: column; gap: 25px; text-align: left; }
.quiz-step { background: rgba(20,20,20,0.5); padding: 25px; border-radius: 6px; border: 1px solid rgba(255,102,0,0.05); }
.quiz-step h4 { color: #fff; margin-bottom: 15px; font-size: 1.1rem; }
.quiz-options { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; }
.quiz-radio { position: relative; }
.quiz-radio input { position: absolute; opacity: 0; }
.quiz-label { display: block; padding: 15px; background: #1a1a1a; border: 1px solid #333; border-radius: 4px; cursor: pointer; transition: 0.3s; text-align: center; font-weight: bold; }
.quiz-radio input:checked + .quiz-label { border-color: #ff6600; color: #fff; background: rgba(255,102,0,0.1); box-shadow: 0 0 10px rgba(255,102,0,0.2); }

/* 2. Стили комплектации */
.box-content { display: flex; align-items: center; gap: 40px; flex-wrap: wrap; }
.box-list { list-style: none; flex: 1 1 400px; }
.box-list li { padding: 12px 0 12px 30px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.05); }
.box-list li::before { content: "📦"; position: absolute; left: 0; color: #ff6600; }
.box-list li strong { color: #fff; }

/* 3. Стили таблицы сравнения */
.comp-table-wrapper { overflow-x: auto; margin-top: 30px; }
.comp-table { width: 100%; border-collapse: collapse; min-width: 600px; background: rgba(20,20,20,0.6); backdrop-filter: blur(5px); }
.comp-table th, .comp-table td { padding: 15px 20px; text-align: left; border-bottom: 1px solid rgba(255,255,255,0.05); }
.comp-table th { background: #1a1a1a; color: #fff; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; }
.comp-table td:first-child { font-weight: bold; color: #fff; }
.comp-table td.our-product { background: rgba(255,102,0,0.03); color: #fff; border-left: 2px solid #ff6600; border-right: 2px solid #ff6600; }
.comp-badge { display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 0.8rem; font-weight: bold; }
.comp-badge.good { background: rgba(0,200,0,0.1); color: #00ff00; }
.comp-badge.bad { background: rgba(200,0,0,0.1); color: #ff3333; }

/* 4. Стили анатомии фонаря */
.anatomy-container { display: flex; align-items: center; gap: 40px; flex-wrap: wrap; }
.anatomy-text-side { flex: 1 1 400px; display: flex; flex-direction: column; gap: 20px; }
.anatomy-point { background: rgba(26,26,26,0.5); padding: 20px; border-radius: 6px; border-left: 3px solid #ff6600; }
.anatomy-point h4 { color: #fff; margin-bottom: 5px; }

/* 5. Стили FAQ (Аккордеон) */
.faq-wrapper { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px; }
.faq-item { background: #1a1a1a; border: 1px solid #2a2a2a; border-radius: 6px; overflow: hidden; }
.faq-question { padding: 20px; color: #fff; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: 0.3s; user-select: none; }
.faq-question:hover { background: rgba(255,102,0,0.05); }
.faq-question::after { content: "+"; font-size: 1.5rem; color: #ff6600; transition: 0.3s; }
.faq-item.active .faq-question::after { content: "−"; transform: rotate(180deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out; background: rgba(20,20,20,0.4); }
.faq-answer-content { padding: 20px; color: #aaa; border-top: 1px solid rgba(255,255,255,0.05); }

  </style>
  <script>
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

    // Скрипт для FAQ (Аккордеон)
const faqQuestions = document.querySelectorAll('.faq-question');
faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const item = question.parentElement;
        const answer = item.querySelector('.faq-answer');
        
        if (item.classList.contains('active')) {
            answer.style.maxHeight = null;
            item.classList.remove('active');
        } else {
            // Закрываем другие открытые вкладки (опционально)
            document.querySelectorAll('.faq-item.active').forEach(openItem => {
                openItem.querySelector('.faq-answer').style.maxHeight = null;
                openItem.classList.remove('active');
            });
            
            answer.style.maxHeight = answer.scrollHeight + "px";
            item.classList.add('active');
        }
    });
});

// Скрипт для связки квиза с формой заказа
const quizBtn = document.getElementById('quiz-submit-btn');
if(quizBtn) {
    quizBtn.addEventListener('click', () => {
        const purpose = document.querySelector('input[name="q_purpose"]:checked').value;
        const selectForm = document.querySelector('select[name="lantern_type"]');
        if(selectForm) {
            if(purpose === "Охота") selectForm.value = "Охотник";
            else if(purpose === "Рыбалка") selectForm.value = "Рыбак";
            else selectForm.value = "Поисковик";
        }
    });
}

  </script>
</body>
</html>
