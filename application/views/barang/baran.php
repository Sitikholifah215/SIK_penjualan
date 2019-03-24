
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas Transaksi</title>
</head>
<body>

	<div class="jumbotron">
		<h2>Tambah Barang!!</h2>
	</div>

	<div class="container-fluid">
				<div class="col-sm-6">
			<?php echo form_open('Tranksaksi/insert_barang');?>
			<form >
				<div class="form-group">
					<label for="kd_barang">Kode Barang</label>
					<input type="text" name="kd_barang" class="form-control" placeholder="Masukkan Kode Barang">
				</div>
				<div class="form-group">
					<label for="nama_barang">Nama Barang</label>
					<input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
				</div>

				<div class="form-group">
					<label for="satuan">Satuan</label>
					<input type="text" id="satuan" name="satuan" class="form-control" placeholder="Masukkan Satuan">
				</div>

				<div class="form-group">
					<label for="harga/satuan">Harga / Satuan</label>
					<input type="text" id="harga/satuan" name="harga/satuan" class="form-control" placeholder="Masukkan Harga / Satuan">
				</div>
				<button type="submit" class="btn btn-primary">Tambah</button>
				<?php echo form_close(); ?>
			</form>	
			<br><br>	
		</div>
	</div>
</body>
</html>