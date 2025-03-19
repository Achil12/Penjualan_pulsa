<?php
$message = isset($_GET['message']) ? $_GET['message'] : 'Terjadi kesalahan.';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hasil Pembelian</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <div class='container'>
        <h1>Hasil Pembelian</h1>
        <p>{$message}</p>
        <a href='index.php' class='btn-submit'>Kembali</a>
    </div>
</body>
</html>";
?>
