<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardType = $_POST['card_type']; // Jenis kartu
    $phoneNumber = $_POST['phone_number']; // Nomor HP
    $nominal = $_POST['nominal'];
    $payment = $_POST['payment'];
    $invoice = $_POST['invoice'];
    
    // Pastikan nominal yang dimasukkan adalah angka
    if (is_numeric($nominal) && $nominal > 0) {
        // Kirimkan ke API pulsa (misalnya, API pulsa penyedia)
        // Di sini kita bisa lakukan proses transaksi menggunakan API
        // Misalnya, kita anggap transaksi berhasil
        $message = "Pembelian pulsa sebesar Rp {$nominal} untuk nomor {$phoneNumber} berhasil!";
        
        // Menambahkan informasi pembayaran dan invoice ke dalam pesan
        $message .= "<br>Jenis Kartu: {$cardType}";
        $message .= "<br>Metode Pembayaran: {$payment}";
        if ($invoice) {
            $message .= "<br>Nomor Invoice: {$invoice}";
        }
        
        // Kirimkan pemberitahuan ke Telegram
        $chat_id = "<GANTI DENGAN CHAT ID ANDA>"; // Ganti dengan chat ID Anda
        $text = "Pembelian pulsa: Rp {$nominal} untuk nomor {$phoneNumber} berhasil!\n";
        $text .= "Jenis Kartu: {$cardType}\n";
        $text .= "Metode Pembayaran: {$payment}\n";
        if ($invoice) {
            $text .= "Nomor Invoice: {$invoice}\n";
        }
        
        // Fungsi kirim pesan ke Telegram
        include('send_message.php');
        sendTelegramMessage($chat_id, $text);
        
        // Arahkan ke halaman hasil
        header("Location: result.php?message=" . urlencode($message));
        exit();
    } else {
        // Jika nominal tidak valid
        echo "Nominal pulsa tidak valid.";
    }
}
?>
