<?php
require_once 'PersegiPanjang.php';
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

//ciptakan objek dr kelas PersegiPanjang
$pp = new PersegiPanjang();
//isi data form ke properti
$pp->panjang = $panjang;
$pp->lebar = $lebar;

//tampilkan hasil
require
