<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Menambahkan icon pada title -->
    <link rel="shortcut icon" href="<?= base_url().'assets/img/logo.jpg' ?>">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url().'assets/vendor/bootstrap-4.5.2/css/bootstrap.min.css' ?>" rel="stylesheet">
    
    <!-- CSS-->
    <link rel="stylesheet" href="<?= base_url().'assets/css/styles.css' ?>">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="homeuser"><span class="saya">Saya <span class="mengadu">Mengadu</span></span></a>
        </div>
        <ul>
            <li><a href="homeuser">Halaman Depan</a></li>
            <li><a href="ajukan">Ajukan Pengaduan</a></li>
            <li><a href="profilku">Profilku</a></li>
            <li><a href="<?= base_url().'c_beranda/' ?>">Keluar</a></li>
        </ul>
    </nav>
    <br>
    <div class="container">
        <h5 style="text-align: center;">Video Animasi Tentang Pengaduan Masyarakat</h5>
        <video width="100%" height="100%" controls autoplay>
            <source src="<?= base_url().'assets/video/animasinya.mp4' ?>" type="video/mp4">
        </video>
    </div>
</body>
</html>