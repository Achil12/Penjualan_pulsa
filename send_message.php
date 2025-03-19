<?php
function sendTelegramMessage($chat_id, $text) {
    $token = "<GANTI DENGAN TOKEN BOT ANDA>"; // Ganti dengan token bot Anda
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $text
    ];

    // Menggunakan cURL untuk mengirim request ke Telegram
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
?>
