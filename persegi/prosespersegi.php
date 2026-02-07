<?php
require_once 'PersegiPanjang.php';

// 1. Validasi: Pastikan data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // 2. Ambil data dan pastikan formatnya angka (float/int)
    $panjang = isset($_POST['panjang']) ? (float)$_POST['panjang'] : 0;
    $lebar = isset($_POST['lebar']) ? (float)$_POST['lebar'] : 0;

    // 3. Ciptakan objek
    $pp = new PersegiPanjang();

    // 4. Set data ke properti
    $pp->panjang = $panjang;
    $pp->lebar = $lebar;

    // 5. Tampilkan hasil
    require_once 'tampilpersegi.php';

} else {
    // Jika diakses tanpa submit form, kembalikan ke halaman utama
    header("Location: ../index.php");
    exit;
}