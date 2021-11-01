<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RaMe</title>
	  <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
	  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url()?>assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/jquery/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/ramedashboard/vendor/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/ramedashboard/vendor/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/ramedashboard/vendor/magnific-popup/magnific-popup.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/ramedashboard/css/creative.css') ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url()?>assets/asie/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
      <div class="container" >
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('auth/login') ?>"> <img src=" <?php echo base_url('assets/ramedashboard/img/rame.png') ?> " width="30">&nbsp;RaMe</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('donation/index') ?>">Donasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('yayasan') ?>">Yayasan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('auth/logout') ?>" class="nav-link js-scroll-trigger">Sign out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Fixed navbar -->
     <!--  <div class="container" -->
       <!--  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            < class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/logos.png"></a>
        </div> -->
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
            <li><a href="<?php echo base_url()?>page/tentang"><i class="glyphicon glyphicon-user"></i> Tentang</a></li>
            <li><a href="<?php echo base_url()?>page/cara_bayar"><i class="glyphicon glyphicon-briefcase"></i> Cara Bayar</a></li> -->
            <li><a href="<?php echo base_url()?>donation/tampil_cart"><i class="glyphicon glyphicon-shopping-cart"></i>  Keranjang Donasi</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    <!-- </nav> -->

    <!-- Begin page content -->
<div class="container">

<div class="row">

        <div class="col-lg-3">

          <div class="list-group">
          	<a class="list-group-item"><strong>KATEGORI</strong></a>
            <a href="<?php echo base_url()?>index.php/donation/index/" class="list-group-item">Semua</a>
          	<?php
		          	foreach ($kategori as $row) 
						{
			?>
            <a href="<?php echo base_url()?>index.php/donation/index/<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a>
            <?php
						}
			?>
          </div><br>

           <div class="list-group">
           <a href="<?php echo site_url('donation/tampil_cart')?>" class="list-group-item"><strong><i class="glyphicon glyphicon-shopping-cart"></i> KERANJANG DONASI</strong></a>
          <?php 
		  
		  	$cart= $this->cart->contents();

// If cart is empty, this will show below message.
			if(empty($cart)) {
				?>
                <a class="list-group-item">Donasi Kosong</a>
                <?php
			}
			else
				{
					$grand_total = 0;
					foreach ($cart as $item)
						{
							$grand_total+=$item['subtotal'];
				?>
                <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                <?php	
						}
				?>

                <?php		
				}
 ?>
			</div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

<div class="row">





