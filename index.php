<!DOCTYPE HTML>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>OOP PHP - Modul 14</title>
</head>
<body>

<?php
// Menggunakan null coalescing operator (??) untuk mengecek input GET
$route = $_GET['r'] ?? '';

if ($route === 'persegi') {
    // Pastikan file ini ada agar tidak terjadi error fatal
    if (file_exists('persegi/formpersegi.php')) {
        require_once 'persegi/formpersegi.php';
    } else {
        echo "<p>Error: File formpersegi.php tidak ditemukan.</p>";
    }
} else {
    // Menampilkan menu jika tidak ada route yang dipilih
    echo "<a href='index.php?r=persegi'>Hitung Persegi Panjang</a>";
}
?>

</body>
</html>