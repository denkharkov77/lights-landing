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
