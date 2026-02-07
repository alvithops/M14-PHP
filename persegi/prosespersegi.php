<?php
require_once 'PersegiPanjang.php';
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

$persegiPanjang = new PersegiPanjang($panjang, $lebar);

