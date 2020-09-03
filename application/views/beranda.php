<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Menambahkan icon pada title -->
    <link rel="shortcut icon" href="<?= base_url().'assets/img/logo.jpg' ?>">

    <!-- CSS Buat Beranda -->
    <link rel="stylesheet" href="<?= base_url().'assets/css/ber.css' ?>">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <span class="saya">Saya <span class="mengadu">Mengadu</span></span>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="heading">Aplikasi Pengaduan Masyarakat Daerah</h1>
                <hr align="left" width="500">
                <p><b>Saya Mengadu</b> adalah sebuah aplikasi pelayanan masyarakat khususnya di wilayah Kota Depok, yang tujuan-nya agar para masyarakat mudah untuk membuat sebuah pengaduan </p>
                <a href="<?= base_url().'c_login/aksi_login2' ?>" class="btn btn-masuk">Masuk</a>
            </div>
            <div class="col-7">
                <img src="<?= base_url().'assets/img/kelompokk.jpg' ?>" alt="" class="img">
            </div>
        </div>
    </div>
</body>
</html>