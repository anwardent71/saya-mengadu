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
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="akun">
                            <div class="image img-cir img-120">
                                <img src="<?= base_url('assets/img/profil/').$masyarakat['image']; ?>" style="margin-left:50px; border-radius:50%; height:150px; width:150px;" alt="Masyarakat">
                            </div>
                            <br>
                            <h5 class="name"><?= $masyarakat['nama'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Edit Profil</h5>

                        <?= form_open_multipart('user/ubah_profil') ?>
                            <div class="form-group">
                                <label for="Nik">NIK</label>
                                <input type="text" class="form-control" name="Nik" id="Nik" value="<?= $masyarakat['nik'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $masyarakat['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" name="Username" id="Username" value="<?= $masyarakat['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" name="Password" id="Password" value="<?= $masyarakat['password'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="No_telp">Nomor Telepon</label>
                                <input type="text" class="form-control" name="No_telp" id="No_telp" value="<?= $masyarakat['no_telp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Image">Foto Profile</label>
                                <input type="file" class="form-control-file" name="Image" id="Image">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>