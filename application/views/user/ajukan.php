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

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="<?= base_url().'assets/vendor/datatables/dataTables.min.css' ?>">
</head>

<body>
	<nav>
		<div class=" logo">
			<a href="homeuser"><span class="saya">Saya <span class="mengadu">Mengadu</span></span></a>
		</div>
		<ul>
			<li><a href="homeuser">Halaman Depan</a></li>
			<li><a href="ajukan">Ajukan Pengaduan</a></li>
			<li><a href="profilku">Profilku</a></li>
			<li><a href="<?= base_url().'c_beranda/' ?>">Keluar</a></li>
		</ul>
	</nav>
	<div class="container">
		<br>
		<h3 style="text-align: center; font-weight: bold;">Ajukan Pengaduan</h3>
		<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addData">
			Tambah Data
		</button>

		<br><br>

		<table class="table table-bordered" id="manageTable">
			<thead>
				<tr class="table-info">
					<th>No</th>
					<th>Isi Laporan</th>
					<th>Gambar</th>
					<th>Alamat Pengaduan</th>
					<th>Tanggal Pengaduan</th>
				</tr>
			</thead>
		</table>

		<br><br>

		<!-- Modal -->
		<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addDataLabel">Tambah Data Pengaduan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url().'user/simpandata' ?>" method="post">
							<div class="form-group">
								<label for="nik">NIK</label>
								<input type="number" class="form-control" name="Nik" value="" disabled>
							</div>
							<div class="form-group">
								<label for="isi">Isi Laporan</label>
								<input type="text" class="form-control" name="Isi">
							</div>
							<div class="form-group">
								<input type="file" class="form-control-file" name="image">
								<small class="form-text text-muted">Masukkan bukti berupa gambar</small>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat Pengaduan</label>
								<textarea class="form-control" name="Alamat"
									placeholder="Masukkan Alamat Pengaduan(TKP)" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label for="tanggal">Tanggal Pengaduan</label>
								<input type="date" class="form-control" name="Tanggal">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan Data</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->
	</div>

</body>

<!-- Jquery -->
<!-- <script type="text/javascript" src="<?= base_url().'assets/js/jquery.min.js' ?>"></script> -->
<!-- Datatables JS -->
<script type="text/javascript" src="<?= base_url().'assets/vendor/datatables/dataTables.min.js' ?>"></script>

</html>
