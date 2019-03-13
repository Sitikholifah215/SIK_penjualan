
<html lang="en">
<head>

	<!-- css -->
	    <!-- Bootstrap -->
        	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    	<!-- jQuery -->
        <!-- <script src="assets/js/jquery.js"></script> -->
        	<script src="<?=base_url()?>assets/js/jquery.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    	<!-- DataTable -->
        	<link href="<?=base_url()?>assets/DataTables/datatables.min.css" rel="stylesheet">
	<!-- /css -->

	<meta charset="utf-8">
	<title>Pemesanan Barang</title>

</head>
<body>
<!-- navbar -->

        <nav class="navbar navbar-inverse navbar-fixed-top">            
            <div class="container-fluid">   
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="<?php echo site_url() ?>/home/">
                    <strong>
                        <font color="white"> <img src="<?=base_url()?>/assets/img/ico.png" style="width: 40px;">Pt</font>
                    </strong>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                 
                <ul class="nav navbar-nav navbar-right" style="padding-right: 20px">
                    <li><a href="<?=site_url()?>/Homepagbug" ><span class=" glyphicon glyphicon-home"></span> BUG</a></li>
                    <li><a href="<?=site_url()?>/home/" ><span class=" glyphicon glyphicon-home"></span> Beranda</a></li>                    
                    <li><a href="<?=site_url()?>/tranksaksi/insert_transaksi" ><span class=" glyphicon glyphicon-picture"></span> Tranksaksi</a></li>
                    <li><a href="<?=site_url()?>/tranksaksi/detail_transaksi" ><span class=" glyphicon glyphicon-picture"></span> Detail Tranksaksi</a></li>
                    <li><a href="<?=site_url()?>/barang/insert_barang" ><span class=" glyphicon glyphicon-user"></span> Barang </a></li>
                    <!-- <li><a href="<?=site_url()?>/welcome/berita" ><span class=" glyphicon glyphicon-globe"></span> </a></li> -->
                    <li><a  href="#" ><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>  
                </ul>
            </div>

            </div>
        </nav>
<!-- /navbar -->

</body>
</html>