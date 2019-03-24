<!-- Bootstrap	 -->
<link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
<!-- script -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
<script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>	


<footer>
	<div class="navbar navbar-inverse navbar-fixed-bottom">
		<p> SI Penjualan</p>
	</div>	
</footer>

<script type="text/javascript">
		$(document).ready(function(){
			$('#barang').DataTable({
				"processing":true,
				"serverSide":true,
				"destroy": true,
				"lengthMenu":[[1,3,6,-1],[1,3,6,"All"]],
				"ajax":{
					url : "<?php echo site_url('barang/data_serverBarang') ?>",
					type : "POST"
				},
				"columnDefs":
				[
					{
						"targets":0,
						"data":"kd_barang",
					},
					{
						"targets":1,
						"data":"nama_barang",
					},
					{
						"targets":2,
						"data":"satuan",
					},
					{
						"targets":3,
						"data":"harga",
					},
					{
						"targets":4,
						"data":null,
						"searchable":false,
						"render":function(data,type,full,meta){
							return '<a href="<?=site_url()?>/barang/update_barang/'+data["id"]+'">Edit</a>'
						}
					},
					{
						"targets":5,
						"data":null,
						"searchable":false,
						"render":function(data,type,full,meta){
							return '<a href="<?=site_url()?>/barang/delete/'+data["id"]+'">Delete</a>'
						}
					},
				]
			});
		});
	</script>