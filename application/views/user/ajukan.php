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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url().'assets/vendor/font-awesome-5/css/fontawesome-all.min.css' ?>">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="homeuser"><span class="saya">Saya <span class="mengadu">Mengadu</span></span></a>
        </div>
        <ul>
            <li><a href="homeuser">Home</a></li>
            <li><a href="ajukan">Ajukan Pengaduan</a></li>
            <li><a href="riwayat">Riwayat Pengaduan</a></li>
            <li><a href="">Profilku</a></li>
            <li><a href="<?= base_url().'c_beranda/' ?>">Keluar</a></li>
        </ul>
    </nav>
    <br><br>
    <div class="container">
        <h3 style="text-align: center; font-weight: bold;" >Ajukan Pengaduan</h3>

        <form action="<?= base_url().'user/simpandata' ?>" method="post">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" class="form-control" name="Nik" value="" disabled>
            </div>
            <div class="form-group">
                <label for="laporan">Isi Laporan</label>
                <input type="text" class="form-control" name="Isi" placeholder="masukkan isi laporan">
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="image">
                <small class="form-text text-muted">Masukkan bukti berupa gambar</small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Pengaduan</label>
                <textarea class="form-control" name="Alamat" placeholder="Masukkan Alamat Pengaduan(TKP)" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Pengaduan</label>
                <input type="date" class="form-control" name="Tanggal" >
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-danger"><i class="fas fa-eraser"></i> Ulang</button>
            </div>
        </form>
</body>
</html>
