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
    img{
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
        
    }
    .masuk{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: blue;
        color: white;
        border-radius: 5px;
        font-weight: bold;
    }
    .masuk:hover{
        background: white;
        border: 1px solid;
        color: black;
    }
</style>
<body>
    <section class="form my-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-7">
                    <img src="<?= base_url().'assets/img/logo.jpg'?>" class="img-fluid" alt="Ini ada gambarnya">
                </div>
                <div class="col-lg-5 px-5 pt-5">
                    <h1 style="text-align: center;" class="font-weight-bold py-3">Saya Mengadu</h1>
                    <h6 style="text-align: center;">Silahkan masukkan akun anda</h6>

                    <?= $this->session->flashdata('message'); ?>

                    <form action="<?= base_url().'c_login/aksi_login2' ?>" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="Username" name="username" class="form-action my-3" style="text-align: center; height: 40px; width: 400px;">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Kata Sandi" name="password" class="form-action" style="text-align: center; height: 40px; width: 400px;">
                            </div>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Ingat Saya
                            </label>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="masuk mt-3 mb-4" style="width: 400px;">Masuk</button>
                            </div>
                        </div>
                        <a href="#">Lupa Password</a>
                        <p>Belum memiliki akun ? <a href="register">Daftar</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>