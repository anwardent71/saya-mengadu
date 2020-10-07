<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Boostrap CSS -->
    <link href="<?= base_url().'assets/vendor/bootstrap-4.5.2/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Menambahkan icon pada title -->
    <link rel="shortcut icon" href="<?= base_url().'assets/img/logo.jpg'?>">
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        background: aquamarine;
    }
    .row{
        background: white;
        border-radius: 25px;
        box-shadow: 12px 12px 22px grey;
    }
    .daftar{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: green;
        color: white;
        border-radius: 5px;
        font-weight: bold;
    }
    .daftar:hover{
        background: white;
        border: 1px solid;
        color: black;
    }

    .banner {
        background-color: aquamarine;
    }
</style>
<body>
    <section class="form my-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-7 banner">
                    <img src="<?= base_url().'assets/img/logo.jpg'?>" class="img-fluid" alt="Ini ada gambarnya">
                </div>
                <div class="col-lg-5 px-5 pt-5">
                    <h1 style="text-align: center;" class="font-weight-bold py-3">Daftar Akun</h1>
                    <?= form_open_multipart('c_login/register') ?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="number"  placeholder="NIK" name="Nik" class="form-action my-2" style="text-align: center; height: 30px; width: 400px;" value="<?= set_value('Nik') ?>">
                                <small class="text-danger"><?= form_error('Nik') ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text"  placeholder="Nama Sesuai KTP" name="Nama" class="form-action my-2" style="text-align: center; height: 30px; width: 400px;" value="<?= set_value('Nama') ?>">
                                <small class="text-danger"><?= form_error('Nama') ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text"  placeholder="Username" name="Username" class="form-action my-3" style="text-align: center; height: 30px; width: 400px;" value="<?= set_value('Username') ?>">
                                <small class="text-danger"><?= form_error('Username') ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password"  placeholder="Kata Sandi" name="Password" class="form-action my-3" style="text-align: center; height: 30px; width: 400px;" value="<?= set_value('Password') ?>">
                                <small class="text-danger"><?= form_error('Password') ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="number"  placeholder="Nomor Telepon" name="No_telp" class="form-action my-3" style="text-align: center; height: 30px; width: 400px;" value="<?= set_value('No_telp') ?>">
                                <small class="text-danger"><?= form_error('No_telp') ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="file" class="form-control-file" name="image" id="image">
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="daftar mt-3 mb-4" style="width: 400px;">Daftar Sekarang</button>
                            </div>
                        </div>
                        <p> Sudah Memiliki Akun ? <a href="aksi_login2"> Masuk</a></p>
                    <? form_close() ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>