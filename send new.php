<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Безопасная очистка полученных данных формы
    $type  = htmlspecialchars(strip_tags(trim($_POST['lantern_type'])));
    $name  = htmlspecialchars(strip_tags(trim($_POST['username'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['userphone'])));

    // ========================================================
    // НАСТРОЙКИ TELEGRAM (Вставьте ваши актуальные токены)
    // ========================================================
    $bot_token = "1234567890:ABCdefGhIJKlmNoPQRsTUVwXyZ"; 
    $chat_id   = "987654321";                             
    // ========================================================

    // Формирование сообщения с поддержкой Markdown-разметки
    $text = "🌲 *Нове замовлення ліхтаря GlowMaster!*\n\n";
    $text .= "🔦 *Модифікація:* " . $type . "\n";
    $text .= "👤 *Ім'я клієнта:* " . $name . "\n";
    $text .= "📞 *Контактний телефон:* " . $phone . "\n";

    // Ссылка для работы с Telegram API
    $url = "https://telegram.org" . $bot_token . "/sendMessage";
    
    $post_fields = [
        'chat_id'    => $chat_id,
        'text'       => $text,
        'parse_mode' => 'Markdown'
    ];

    // Отправка через серверный cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    // Вместо вывода текста перенаправляем пользователя на европейскую страницу благодарности thanks.php
    header("Location: thanks.php");
    exit();

} else {
    // Защита от прямого открытия файла в браузере
    header("Location: index.php");
    exit();
}
?>
