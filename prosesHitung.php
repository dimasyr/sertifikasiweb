<?php
session_start();

//menyimpan nama dan jenis kelamin pembeli
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['jenisKelamin'] = $_POST['jenisKelamin'];

//menyimpan list barang yang dibeli
$_SESSION['barang'] = $_POST['barang'];

//menyimpan total tiap barang yang dibeli
$_SESSION['totalCoklat'] = $_POST['totalCoklat'];
$_SESSION['totalAyam'] = $_POST['totalAyam'];
$_SESSION['totalSarden'] = $_POST['totalSarden'];

//untuk menyimpan total harga pembelian tiap barang
$_SESSION['hargaSatuan'] = [];

//deklarasi harga tiap barang
$_SESSION['hargaCoklat'] = 10000;
$_SESSION['hargaAyam'] = 20000;
$_SESSION['hargaSarden'] = 8000;

//untuk menyimpan total biaya pembelian
$_SESSION['totalSeluruh'] = 0;

//menghitung total harga tiap barang yang dibeli
foreach ($_SESSION['barang'] as $item) {
    if ($item == "Coklat") {
        array_push($_SESSION['hargaSatuan'], $_SESSION['totalCoklat'] * $_SESSION['hargaCoklat']);
    }
    if ($item == "Ayam") {
        array_push($_SESSION['hargaSatuan'], $_SESSION['totalAyam'] * $_SESSION['hargaAyam']);
    }
    if ($item == "Sarden") {
        array_push($_SESSION['hargaSatuan'], $_SESSION['totalSarden'] * $_SESSION['hargaSarden']);
    }
}

//menghitung total harga pembelian
foreach ($_SESSION['hargaSatuan'] as $detail) {
    $_SESSION['totalSeluruh'] += $detail;
}

header("location: totalBelanja.php");
?>