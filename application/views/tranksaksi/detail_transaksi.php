
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
			<?php echo form_open('Tranksaksi/detail_transaksi');?>
			<?php echo validation_errors(); ?>
    		<?php  if(isset($error)){echo $error;} ?>
				<div class="form-group">
					<label for="kd_tansaksik">Kode Tranksaksi</label>
					<select class="form-control" id="kd_transaksi" name="kd_transaksi">
						<?php 
            			foreach($dropdown as $row)
            			{ 
              				echo '<option value="'.$row->kd_transaksi.'">'.$row->kd_transaksi.'</option>';
            			}
            			?>						
					</select>
				</div>
				<div class="form-group">
					<label for="kd_barang">Kode Barang</label>
					<select class="form-control" id="kd_barang" name="kd_barang">
						<?php 
            			foreach($barang as $row)
            			{ 
              				echo '<option value="'.$row->kd_barang.'">'.$row->kd_barang.'</option>';
            			}
            			?>						
					</select>
				</div>

				<div class="form-group">
					<label for="jumlah_barang">Jumlah Barang</label>
					<input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control" placeholder="Masukkan Jumlah Barang">
				</div>

				<div class="form-group">
					<label for="total_harga_barang">Total Harga Barang</label>
					<input type="text" id="total_harga_barang" name="total_harga_barang" class="form-control" placeholder="Masukkan Total Harga Barang">
				</div>
				<button type="submit" class="btn btn-primary">Tambah</button>
				<?php echo form_close(); ?>
			<br><br>	
		</div>
	</div>
</body>
</html>