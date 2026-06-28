<?php 
// Подключаем шапку сайта (мета-теги, фоновую геометрию и навигацию)
include 'header.php'; 
?>

<!-- БЛОК 1: Главный экран (Hero) -->
<section class="hero">
    <h1>Кастомне світло ручної збірки</h1>
    <p>Невбивні тактичні та пошукові ліхтарі для полювання, риболовлі та екстремального туризму. Інженерна збірка під ваші завдання з доставкою по Україні та Європі.</p>
    <a href="#order" class="btn">Консультація та замовлення</a>
</section>

<!-- БЛОК 2: Обо мне (История мастера) -->
<section class="container animated-section" id="about">
    <h2 class="section-title">Оригінальне світло <span>від майстра</span></h2>
    <div class="about-content">
        <img src="https://picsum.photos" alt="Мастер за работой" class="about-img">
        <div class="about-text">
            <h3>Вітаю! Я Андрій — творець ліхтарів GlowMaster.</h3>
            <p>Я сам запеклий мисливець і чудово знаю, як підводить заводське китайське світло в самий невідповідний момент: клинять кнопки, промокають корпуси, а заявлені «тисячі люмен» гаснуть через 5 хвилин роботи від перегріву.</p>
            <p>Уже 6 років у своїй майстерні я вручную збираю надійні ліхтарі. Кожен корпус точиться на ЧПУ-верстаті з міцного дюралю, електроніка паяється вручну з жорстким контролем тепла, а діоди закуповуються тільки у перевірених брендів США та Японії.</p>
            <p>Мої ліхтарі не бояться падіння на скелі, крижаної води, віддачі 12 калібру і світять рівно стільки, скільки потрібно для вашої безпеки на природі.</p>
        </div>
    </div>
</section>

<!-- ПОДКЛЮЧАЕМ МАРКЕТИНГОВЫЕ И ИНТЕРАКТИВНЫЕ БЛОКИ -->
<?php 
// БЛОК 3: Квиз-подбор параметров
include 'blocks/quiz.php'; 

// БЛОК 4: Анатомия фонаря (Технические особенности)
include 'blocks/anatomy.php'; 

// БЛОК 5: Что входит в комплект поставки
include 'blocks/box.php'; 

// БЛОК 6: Таблица сравнения с китайским масс-маркетом
include 'blocks/comparison.php'; 
?>

<!-- БЛОК 7: Фотогалерея процессов и готовых работ -->
<section class="container animated-section" id="gallery">
    <h2 class="section-title">Процес збірки <span>та готові роботи</span></h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Токарная обработка корпуса">
            <div class="gallery-desc">Виточування дюралевого корпусу під акумулятори 21700</div>
        </div>
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Пайка кастомного драйвера">
            <div class="gallery-desc">Пайка мідних підложок та оригінальних діодів Cree</div>
        </div>
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Готовый тактический фонарь">
            <div class="gallery-desc">Модифікація «Мисливець» із матовим анодуванням корпусу</div>
        </div>
        <div class="gallery-item">
            <img src="https://picsum.photos" alt="Тест герметичности фонаря">
            <div class="gallery-desc">Перевірка подвійних ущільнювальних кілець під тиском води</div>
        </div>
    </div>
</section>

<!-- БЛОК 8: Видеообзоры и тесты с YouTube -->
<section class="video-section animated-section" id="video">
    <div class="container">
        <h2 class="section-title">Відео <span>з тестами в реальних умовах</span></h2>
        <div class="video-grid">
            <div class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://youtube.com" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Тест підствольного ліхтаря «Мисливець» на живучість (віддача 12 калібру)</h3>
                    <a href="https://youtube.com" target="_blank" class="video-link">Дивитися на YouTube →</a>
                </div>
            </div>
            <div class="video-card">
                <div class="video-wrapper">
                    <iframe src="https://youtube.com" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Як тепле світло моделі «Рибалка» пробиває щільний туман над водою</h3>
                    <a href="https://youtube.com" target="_blank" class="video-link">Дивитися на YouTube →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- БЛОК 9: Стоимость базовых модификаций -->
<section class="container animated-section" id="prices">
    <h2 class="section-title">Вартість <span>модифікацій</span></h2>
    <div class="grid">
        <div class="price-card">
            <h3>Рибалка</h3>
            <p style="color: var(--text-muted);">Тепле світло для води та туману</p>
            <div class="price-value">від 2 200 ₴ / €50</div>
            <ul class="price-features">
                <li>Теплий світлодіод (ідеально для туману)</li>
                <li>Гідрозахист IP68 (занурення до 2 метрів)</li>
                <li>Живлення від акумуляторів 18650 / 21700</li>
                <li>Широкий заливний промінь світла</li>
            </ul>
            <a href="#order" class="btn" style="width:100%;">Обрати</a>
        </div>
        <div class="price-card popular">
            <div class="badge">Хит продажів</div>
            <h3>Мисливець</h3>
            <p style="color: var(--text-muted);">Далекобійний підствольник</p>
            <div class="price-value">від 2 900 ₴ / €65</div>
            <ul class="price-features">
                <li>Промінь-«шило» (впевнено до 450 метрів)</li>
                <li>Витримує жорстку віддачу 12 калібру</li>
                <li>Сумісний із виносною тактичною кнопкою</li>
                <li>Авіаційний міцний дюралюміній</li>
            </ul>
            <a href="#order" class="btn" style="width:100%;">Обрати</a>
        </div>
        <div class="price-card">
            <h3>Пошуківець</h3>
            <p style="color: var(--text-muted);">Екстремальна автономність</p>
            <div class="price-value">від 4 100 ₴ / €95</div>
            <ul class="price-features">
                <li>До 4000 реальних чесних Люмен</li>
                <li>Кастомний драйвер з термоконтролем</li>
                <li>Касета на 3 потужних акумулятора 21700</li>
                <li>До 24 годин роботи в середньому режимі</li>
            </ul>
            <a href="#order" class="btn" style="width:100%;">Обрати</a>
        </div>
    </div>
</section>

<!-- ПОДКЛЮЧАЕМ БЛОК 10: FAQ (Часто задаваемые вопросы) -->
<?php include 'blocks/faq.php'; ?>

<!-- БЛОК ПОЛУЧЕНИЯ ЗАЯВКИ (Контактная форма) -->
<section class="container animated-section" id="order">
    <div class="form-section" style="padding: 40px;">
        <h2 style="color: #fff; text-transform: uppercase;">Обговорити ваш ліхтар</h2>
        <p style="color: var(--text-muted); margin-top: 10px;">Я зв'яжуся з вами у зручному месенджері, розрахую точну вартість під ваші технічні вимоги.</p>
        
        <form action="send.php" method="POST">
            <select name="lantern_type" required>
                <option value="" disabled selected>Яка модель вас цікавить?</option>
                <option value="Рыбалка">«Рибалка» (від 2200 ₴)</option>
                <option value="Охота">«Мисливець» (від 2900 ₴)</option>
                <option value="Поиск">«Пошуківець» (від 4100 ₴)</option>
                <option value="Индивидуальный кастом">Потрібен особливий інженерний кастом</option>
            </select>
            <input type="text" name="username" placeholder="Ваше ім'я" required>
            <!-- Подсказка для ввода номера в международном формате -->
            <input type="tel" name="userphone" placeholder="Номер телефону з Viber/TG/WhatsApp (напр. +380...)" required>
            <button type="submit" class="btn">Надіслати запит майстру</button>
        </form>
    </div>
</section>

<?php 
// Подключаем подвал сайта (копирайт, дублирующий телефон и JS-скрипты)
include 'footer.php'; 
