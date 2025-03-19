// Ambil elemen-elemen modal dan tombol close
const modal = document.getElementById('payment-modal');
const closeModal = document.getElementsByClassName('close')[0];
const paymentSelect = document.getElementById('payment');
const accountNumber = document.getElementById('account-number');

// Fungsi untuk menampilkan modal dengan nomor rekening
paymentSelect.addEventListener('change', function() {
    let paymentMethod = paymentSelect.value;

    if (paymentMethod === 'BCA') {
        accountNumber.textContent = 'Nomor Rekening BCA: 09xx-xxx-xx';
    } else if (paymentMethod === 'Seabank') {
        accountNumber.textContent = 'Nomor Rekening Seabank: 08xx-xxx-xx';
    } else if (paymentMethod === 'Gopay') {
        accountNumber.textContent = 'Gopay QR Code atau nomor: 0812-xxxx-xxxx';
    } else if (paymentMethod === 'Shopeepay') {
        accountNumber.textContent = 'Shopeepay QR Code atau nomor: 0896-xxxx-xxxx';
    }

    // Tampilkan modal
    modal.style.display = 'block';
});

// Klik tombol close untuk menutup modal
closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
});

// Klik di luar modal untuk menutup
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
