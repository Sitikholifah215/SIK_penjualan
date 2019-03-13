<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas Transaksi</title>
</head>
<body>

<div class="jumbotron">
	
</div>

<div class="container-fluid">
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading"><center>Transaksi</center></div>
				<div class="panel-body">
					<div class="row" style="margin-bottom: 3rem;">
						<div class="col-sm-6 col-md-6">
							<div class="form-group">
								<label for="kd_transaksi">Kode Transaksi</label>
								<input type="text" name="kd_transaksi" class="form-control" placeholder="Masukkan Kode Tranksaksi">
							</div>
							<!-- <div class="form-group">
								<label for="id_customer">id Customer</label>
								<input type="text" name="id_customer" class="form-control" placeholder="Masukkan Id Cust">
							</div> -->
							<div class="form-group">
								<label for="nama_customer">Nama Customer</label>
									<select class="form-control" id="hg_barang" name="hg_barang">
										<?php 
										foreach($barang as $row)
										{ 
											echo '<option value="'.$row->hg_barang.'">'.$row->hg_barang.'</option>';
										}
										?>						
									</select>
							</div>

							<div class="form-group">
								<label for="tanggal_transaksi">Tanggal Transaksi</label>
								<input type="date" id="tanggal_transaksi" name="tanggal_transaksi" class="form-control">
							</div>	

						</div>	
					<div class="col-sm-6 col-md-8">
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?> <br>	
</div>

<div class="container">
	<div class="panel panel-info">
	    <div class="panel-heading"><center>Detail Transaksi</center></div>
	    	<div class="panel-body">
	      
				<div class="row" style="margin-bottom: 3rem;">
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label for="kd_barang">Kode Barang / Nama Barang</label>
							<select class="form-control" id="kd_barang" name="kd_barang">
								<?php 
								foreach($dropdown as $row)
								{ 
									echo '<option value="'.$row->kd_barang.'">'.$row->kd_barang.'</option>';
								}
								?>						
							</select>
						</div>
				
						<div class="form-group">
							<label for="Harga_barang">Harga Barang</label>
							<input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control" placeholder="Harga Barang otomatis">
						</div>

						<div class="form-group">
							<label for="jumlah_barang">Jumlah Barang</label>
							<input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control" placeholder="Masukkan Jumlah Barang">
						</div>

						<div class="form-group">
							<label for="total_harga_barang">Total Harga </label>
							<input type="text" id="total_harga" name="total_harga" class="form-control" placeholder="Total harga otomatis ">
						</div>				
					</div>
				
					<div class="col-sm-6 col-md-8">
				</div>
			</div>
			<button type="submit_cart" class="btn btn-primary">Tambah</button> <br> <br>
			<div>
			<div class="container">
				<div class="row">
					<div class="col-6">
						<table id="example" class="table table-striped table-bordered" style="width:90%">
							<thead>
								<tr>
									<!-- <th>ID Transaksi</th>
									<th>KD Transaksi</th>
									<th>Tanggal Transaksi</th>
									<th>KD Customer</th> -->
									<th>KD Barang</th>
									<th>Satuan</th>
									<th>Jumlah</th>
									<th>Harga Satuan</th>
									<th>Total</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-2">
				<br>
				<label for="total_keseluruhan_barang">Total Keseluruhan</label>
				<input type="text" id="total_harga_barang" name="Total Keseluruhan" class="form-control" placeholder="Total Keseluruhan">
			</div>
			<div>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>		
				
				<?php echo form_close(); ?>
			<br><br>	
		</div>
</body>
</html>