<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Total Pembelian</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <h1>Informasi Pembelian</h1>
    </div>
    <div class="row">
        <div class="col-md-2"><h4>Nama</h4></div>
        <div class="col-md-3"><h4>: <?php echo $_SESSION['nama'] ?></h4></div>
    </div>
    <div class="row mb-4">
        <div class="col-md-2"><h4>Jenis Kelamin</h4></div>
        <div class="col-md-3"><h4>: <?php echo $_SESSION['jenisKelamin'] ?></h4></div>
    </div>
    <?php
    if (isset($_SESSION['barang'])) {
        $index = 0;
        foreach ($_SESSION['barang'] as $barang) {
            if ($barang == "Coklat") {
                ?>
                <div class="row">
                    <div class="col-md-2"><h4><?php echo $barang ?></h4></div>
                    <div class="col-md-2"><h4>@<?php echo $_SESSION['hargaCoklat'] ?></h4></div>
                    <div class="col-md-1"><h4>x <?php echo $_SESSION['totalCoklat'] ?></h4></div>
                    <div class="col-md-1">=</div>
                    <div class="col-md-2"><h4>Rp. <?php echo $_SESSION['hargaSatuan'][$index] ?></h4></div>
                </div>
                <?php
            }
            if ($barang == "Ayam") {
                ?>
                <div class="row">
                    <div class="col-md-2"><h4><?php echo $barang ?></h4></div>
                    <div class="col-md-2"><h4>@<?php echo $_SESSION['hargaAyam'] ?></h4></div>
                    <div class="col-md-1"><h4>x <?php echo $_SESSION['totalAyam'] ?></h4></div>
                    <div class="col-md-1">=</div>
                    <div class="col-md-2"><h4>Rp. <?php echo $_SESSION['hargaSatuan'][$index] ?></h4></div>
                </div>
                <?php
            }
            if ($barang == "Sarden") {
                ?>
                <div class="row">
                    <div class="col-md-2"><h4><?php echo $barang ?></h4></div>
                    <div class="col-md-2"><h4>@<?php echo $_SESSION['hargaSarden'] ?></h4></div>
                    <div class="col-md-1"><h4>x <?php echo $_SESSION['totalSarden'] ?></h4></div>
                    <div class="col-md-1">=</div>
                    <div class="col-md-2"><h4>Rp. <?php echo $_SESSION['hargaSatuan'][$index] ?></h4></div>
                </div>
                <?php
            }
            $index++;
        }
    }
    ?>
    <hr>
    <div class="row">
        <div class="col-md-2"><h4>Total harga</h4></div>
        <div class="col-md-2"></div>
        <div class="col-md-1"></div>
        <div class="col-md-1">=</div>
        <div class="col-md-2"><h4>Rp. <?php echo $_SESSION['totalSeluruh'] ?></h4></div>
    </div>
    <div class="row">
        <div class="col"><p><em>Tanggal <?php echo date("d/m/y") ?></em></p></div>
    </div>
    <div class="row">
        <div class="col"><a href="index.php" class="btn btn-primary font-weight-bold">Kembali ke Menu</a></div>
    </div>
</div>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>