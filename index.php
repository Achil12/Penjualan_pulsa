<!--- 
//JANGAN DIHAPUS//
VERSI : BETA 
SN : HE6KE-7HOCC-3UCS1-BYA03-LDB7J
UUID : 0195b065-28ef-70f3-9d2d-7449b9284fc6
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Pulsa</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Penjualan Pulsa</h1>
            <p>Beli pulsa dengan mudah dan cepat!</p>
        </header>
        
        <section class="form-container">
            <form action="process.php" method="post">
                <!-- Pilihan Jenis Kartu -->
                <label for="card-type">Pilih Jenis Kartu:</label>
                <select id="card-type" name="card_type" required>
                    <option value="">Pilih Provider</option>
                    <option value="Telkomsel">Telkomsel</option>
                    <option value="Indosat">Indosat</option>
                    <option value="XL">XL</option>
                    <option value="Three">Three</option>
                    <option value="Smartfren">Smartfren</option>
                </select>

                <!-- Input Nomor HP -->
                <label for="phone-number">Nomor HP:</label>
                <input type="text" id="phone-number" name="phone_number" required placeholder="Contoh: 0812xxxxxxx">
                
                <!-- Input Nominal Pulsa -->
                <label for="nominal">Masukkan Nominal Pulsa (Rp):</label>
                <input type="number" id="nominal" name="nominal" required placeholder="Contoh: 5000, 10000">
                
                <!-- Pilihan Metode Pembayaran -->
                <label for="payment">Pilih Metode Pembayaran:</label>
                <select id="payment" name="payment" required>
                    <option value="">Pilih Metode Bayar</option>
                    <!--<option value="BCA">BCA</option>-->
                    <option value="Seabank">Seabank</option>
                    <option value="Gopay">Gopay</option>
                    <!--<option value="Shopeepay">Shopeepay</option>-->
                </select>
                
                <!-- Input Nomor Invoice -->
                <label for="invoice">Nomor Invoice:</label>
                <input type="text" id="invoice" name="invoice" required placeholder="Contoh: INV12345">
                
                <button type="submit" class="btn-submit">Beli Pulsa</button>
            </form>
        </section>
        
        <!-- Modal untuk menampilkan nomor rekening berdasarkan metode pembayaran -->
        <div id="payment-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Nomor Rekening Pembayaran</h2>
                <p id="account-number"></p>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="footer-container">
                <p>&copy; <span id="year"></span> Penjualan Pulsa. All rights reserved.</p>
                <br>
                <div class="social-media">
                    <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
