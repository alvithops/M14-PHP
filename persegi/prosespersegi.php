<?php
require_once 'PersegiPanjang.php';
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

$persegiPanjang = new PersegiPanjang($panjang, $lebar);

echo "Panjang: " . $panjang . "<br>";
echo "Lebar: " . $lebar . "<br>";
echo "Luas: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling: " . $persegiPanjang->hitungKeliling() . "<br>";