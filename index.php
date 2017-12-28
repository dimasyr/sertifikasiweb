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
    <form class="form-group mt-3" method="post" action="prosesHitung.php">
        <fieldset>
            <legend>Informasi Pembeli</legend>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" class="form-control" required>
            <label for="jenisKelamin">Jenis Kelamin: </label>
            <div class="form-check">
                <label class="form-check-label"><input type="radio" name="jenisKelamin" value="Pria"
                                                       class="form-check-input" required>Pria</label>
                <label class="form-check-label"><input type="radio" name="jenisKelamin" value="Wanita"
                                                       class="form-check-input" required>Wanita</label>
            </div>
        </fieldset>
        <fieldset class="mt-3">
            <div class="row">
                <div class="col">
                    <legend>Barang yang dibeli</legend>
                </div>
                <div class="col">Banyak barang</div>
            </div>
            <div class="form-check">
                <div class="row">
                    <div class="col">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox"
                                                               value="Coklat"
                                                               name="barang[]">Coklat</label>
                    </div>
                    <div class="col">
                        <input type="number" name="totalCoklat">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" value="Ayam"
                                                               name="barang[]">Ayam</label>
                    </div>
                    <div class="col">
                        <input type="number" name="totalAyam">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" value="Sarden"
                                                               name="barang[]">Sarden</label>
                    </div>
                    <div class="col">
                        <input type="number" name="totalSarden">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary font-weight-bold" value="Hitung Total Belanja">
        </fieldset>
    </form>
</div>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>