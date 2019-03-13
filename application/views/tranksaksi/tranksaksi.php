
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas Transaksi</title>
</head>
<body>

	<div class="jumbotron">
		<h2>Tambah Tranksaksi!!</h2>
	</div>

	<div class="container-fluid">
				<div class="col-sm-6">
			<?php echo form_open('Tranksaksi/insert_transaksi');?>
			<?php echo validation_errors(); ?>
    		<?php  if(isset($error)){echo $error;} ?>
				<div class="form-group">
					<label for="kd_transaksi">Kode Transaksi</label>
					<input type="text" name="kd_transaksi" class="form-control" placeholder="Masukkan Kode Tranksaksi">
				</div>
				<div class="form-group">
					<label for="id_customer">id Customer</label>
					<input type="text" name="id_customer" class="form-control" placeholder="Masukkan Id Cust">
				</div>

				<div class="form-group">
					<label for="tanggal_transaksi">Tanggal Transaksi</label>
					<input type="date" id="tanggal_transaksi" name="tanggal_transaksi" class="form-control">
				</div>

				<div class="form-group">
					<label for="total_harga">Total Harga</label>
					<input type="text" id="total_harga" name="total_harga" class="form-control" placeholder="Masukkan Total Harga">
				</div>
				<button type="submit" class="btn btn-primary">Tambah</button>
				<?php echo form_close(); ?>
			<br><br>	
		</div>
	</div>
</body>
</html>