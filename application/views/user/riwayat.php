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

    <!-- DataTables CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
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
    <h3 style="text-align: center; font-weight: bold;" >Riwayat Pengaduan</h3>

        <div class="table-responsive">
            <table id="data" class="table table-stripped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nik</td>
                        <td>Isi Laporan</td>
                        <td>Bukti</td>
                        <td>Alamat Pengaduan</td>
                        <td>Riwayat Pengaduan</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#data').DataTable();
    });
</script>
</html>