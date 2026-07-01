<?php
/**
 * Обработчик формы заказа. Отправляет данные напрямую в Telegram-чат
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Безопасная очистка данных от спама
    $type  = htmlspecialchars(strip_tags(trim($_POST['lantern_type'])));
    $name  = htmlspecialchars(strip_tags(trim($_POST['username'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['userphone'])));

    // =========================================================================
    // НАСТРОЙКИ TELEGRAM (Замените на ваши актуальные данные)
    // =========================================================================
    $bot_token = "1234567890:ABCdefGhIJKlmNoPQRsTUVwXyZ"; // Токен от @BotFather
    $chat_id   = "987654321";                             // ID из @userinfobot
    // =========================================================================

    // Формирование Markdown сообщения для Telegram
    $text = "🔔 *Новая заявка с сайта GlowMaster!*\n\n";
    $text .= "🔦 *Модель:* " . $type . "\n";
    $text .= "👤 *Имя клиента:* " . $name . "\n";
    $text .= "📞 *Телефон:* " . $phone . "\n";

    $url = "https://telegram.org" . $bot_token . "/sendMessage";
    
    $post_fields = [
        'chat_id'    => $chat_id,
        'text'       => $text,
        'parse_mode' => 'Markdown'
    ];

    // Отправка методом cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    // Страница благодарности
    echo "<div style='background:#121212; color:#fff; height:100vh; display:flex; flex-direction:column; justify-content:center; align-items:center; font-family:sans-serif;'>";
    echo "<h1 style='color:#ff6600;'>Заявка успешно отправлена!</h1>";
    echo "<p style='margin-top:10px; color:#aaa;'>Мастер свяжется с вами в ближайшее время.</p>";
    echo "<a href='index.php' style='margin-top:20px; color:#fff; background:#ff6600; padding:12px 25px; text-decoration:none; border-radius:4px; font-weight:bold; text-transform:uppercase;'>Вернуться на сайт</a>";
    echo "</div>";

} else {
    header("Location: index.php");
    exit();
}
?>
