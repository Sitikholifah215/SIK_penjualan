<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">

<section class="ajax">
	<div class="container">
		<div align="center">
			<h1>Data Barang</h1>
		</div>
		<hr>
		<div align="left">
			<a href="<?=site_url()?>/barang/insert_barang" ><span class=""></span> Tambah Barang</a>
		</div>
		<div class="panel">
			<div class="panel panel-default">			
				<div class="panelheading">Tabel Barang</div>
				<div class="panel-body">
					<table class="table table-striped " id="barang">
						<thead>
							<tr>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Satuan</th>
								<th>Harga/Satuan</th>
								<th>edit</th>
								<th>hapus</th>
							</tr>
						</thead>
						<tbody>						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
