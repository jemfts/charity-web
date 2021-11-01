<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RaMe</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/ramedashboard/vendor/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/ramedashboard/vendor/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/ramedashboard/vendor/magnific-popup/magnific-popup.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/ramedashboard/css/creative.css') ?>" rel="stylesheet">

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1350px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

#footer {
overflow:hidden;
text-align:center;
position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #3E9EEE;
   color: white;
   text-align: center;
}
 
#footer div.col {
width:32%;
display:inline-block;
padding:1% 0;
text-align:center;
color:white;
}
 
#footer div.col:last-child {border-right:none;}
 
#footer h2 {font:bold 18px Arial,Sans-Serif;margin:0px 0px 10px;}
 
#footer ul {margin:0px 0px;padding:0px 0px;overflow:hidden;color:white;}
 
#footer li {
margin:0px 0px;
padding:0px 0px;
color:white;

}

#parent { 
display: flex; 
}
 #narrow { 
width: 500px; 
padding-right: 30px;
} 
#wide { 
flex: 1;
width: 400px;
padding-right: 30px;
}
</style>
</head>

  <body id="page-top">

    <!-- Navigation -->
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
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('yayasan') ?>" >Yayasan</a>
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

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="<?php echo base_url('assets/ramedashboard/img/ysi/3.jpg') ?>" style="width:100%">
  </div>

  <div class="mySlides fade">
   <img src="<?php echo base_url('assets/ramedashboard/img/ysi/2.jpg') ?>" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="<?php echo base_url('assets/ramedashboard/img/ysi/4.jpg') ?>" style="width:100%">  
  </div>

  <div class="mySlides fade">
    <img src="<?php echo base_url('assets/ramedashboard/img/ysi/6.jpg') ?>" style="width:100%">  
  </div>

 <br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
</div>



<!-- <div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo base_url('assets/ramedashboard/img/ysi/1.jpg') ?>" style="width:100%">
  <div class="text">Yayasan Sayap Ibu</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo base_url('assets/ramedashboard/img/ysi/2.jpg') ?>" style="width:100%">
  <div class="text">Yayasan Sayap Ibu</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo base_url('assets/ramedashboard/img/ysi/3.jpg') ?>" style="width:100%">
  <div class="text">Yayasan Sayap Ibu</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<center> -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>

<!-- <h3><b><center>Yayasan Sayap Ibu</center></b></h3>
 <p align="center">Yayasan Sayap Ibu cabang provinsi Banten, adalah Penyantunan dan Rehabilitasi Anak Disabilitas Majemuk Terlantar, merupakan lembaga non profit dan non Pemerintah, yang diresmikan pada tanggal 1 Oktober 2005, berlokasi di GrahaBintaro, Tangerang Selatan.

Yayasan Sayap Ibu Cabang Provinsi Banten (YSI-Banten) berinduk pada Yayasan Sayap Ibu Pusat, yang telah berperan di masyarakat dalam menangani anak-anak balita terlantar sejak 25 Mei 1955.

YSI-Banten saat ini menampung 37 anak dalam panti (Periode 3 Tahun) dan di periode yang sama juga sudah lebih dari 440 anak disabilitas dari keluarga pra-sejahtera (binaan YSI-Banten yang masih tinggal bersama orang tua ataupun keluarga terdekatnya). Anak-anak kami penyandang disabilitas majemuk seperti Hydrocephallus, Microcephaly, Down Sydrome, Celebral Palsy, Autisme dan lainnya.
</p>
 <br><br><br><br> -->

<div id="parent" style="background-color: rgba(255,255,255,0);background-position: left top;background-repeat: no-repeat;padding-top:20px;padding-right:40px;padding-bottom:100px;padding-left:30px;border-top-width:0px;border-bottom-width:0px;border-color:#eae9e9;border-top-style:solid;border-bottom-style:solid;"> 
   <div id="wide" style="background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); padding: 40px; background-position: left top; background-repeat: no-repeat; background-size: cover; min-height: 954px; height: auto; margin-top:0px;margin-bottom:30px;width:50%; margin-right: 4%;" data-bg-url=""><h3 style="font-weight: 400;" data-fontsize="22" data-lineheight="48"><strong><span style="text-decoration: underline; text-align: center"><center>Yayasan Sayap Ibu Cabang Provinsi Banten</center></span></strong></h3><br>
<p align="justify">Yayasan Sayap Ibu cabang provinsi Banten, adalah Penyantunan &amp; Rehabilitasi Anak Disabilitas Majemuk Terlantar, merupakan lembaga non profit dan non Pemerintah, yang diresmikan pada tanggal 1 Oktober 2005, berlokasi di GrahaBintaro, Tangerang Selatan.</p>
<p align="justify">Yayasan Sayap Ibu Cabang Provinsi Banten (YSI-Banten) berinduk pada Yayasan Sayap Ibu Pusat, yang telah berperan di masyarakat dalam menangani anak-anak balita terlantar sejak 25 Mei 1955.</p>
<p align="justify">YSI-Banten saat ini menampung 37 anak dalam panti (Periode 3 Tahun) dan di periode yang sama juga sudah lebih dari 440 anak disabilitas dari keluarga pra-sejahtera (binaan YSI-Banten yang masih tinggal bersama orang tua ataupun keluarga terdekatnya). Anak-anak kami penyandang disabilitas majemuk seperti Hydrocephallus, Microcephaly, Down Sydrome, Celebral Palsy, Autisme dan lainnya.</p></div>
   <div id="narrow" style="background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); padding: 40px; background-position: left top; background-repeat: no-repeat; background-size: cover; min-height: 954px; height: auto; margin-top:0px;margin-bottom:30px;width:30%;" data-bg-url=""> <h3 style="font-weight: 400;" data-fontsize="22" data-lineheight="48"><strong><span style="text-decoration: underline; text-align: center"><center>Alamat</center></span></strong></h3>
        <div class="fusion-sep-clear"></div><div class="fusion-separator fusion-full-width-sep sep-single sep-solid" style="border-color:#3bafbf;border-top-width:2px;margin-left: auto;margin-right: auto;margin-top:0px;margin-bottom:30px;width:100%;max-width:100%;"></div>
          <div class="table-2">
          <table width="100%">
          <tbody>
          <tr>
          <td style="text-align: left;">Jl. Raya Graha Bintaro No. 33 B</td>
          <td style="text-align: right;"></td>
          </tr>
          <tr>
          <td style="text-align: left;">RT 004 RW 01</td>
          <td style="text-align: right;"></td>
          </tr>
          <tr>
          <td style="text-align: left;">Pondok Kacang Barat, Bintaro</td>
          <td style="text-align: right;"></td>
          </tr>
          <tr>
          <td style="text-align: left;">Tangerang Selatan</td>
          <td style="text-align: right;"></td>
          </tr>
          <tr>
          <td style="text-align: left;">Email : ysibintaro@sayapibubintaro.org</td>
          <td style="text-align: right;"></td>
          </tr>
          <tr>
          <td style="text-align: left;">Phone : 021-7331004</td>
          <td style="text-align: right;"></td>
          </tr>
          <tr>
          <td style="text-align: left;">Fax : 021-7331007</td>
          <td style="text-align: right;"></td>
          </tr>
          </tbody>
          </table>
          <div class="fusion-sep-clear"></div>
        <div class="fusion-separator fusion-full-width-sep sep-single sep-solid" style="border-color:#3bafbf;border-top-width:2px;margin-left: auto;margin-right: auto;margin-top:0px;margin-bottom:30px;width:100%;max-width:100%;">
        </div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0897040300138!2d106.68130021476925!3d-6.25191049547465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa5a6cba1cef%3A0x2a469208b031fc1!2sYayasan+Sayap+Ibu+Bintaro!5e0!3m2!1sid!2sid!4v1481923752509" width="300" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe><div class="fusion-clearfix"></div>
      </div>
        </div></div> 
</div>


<footer id="footer">
<div class="col" >
<ul>
    <a href="<?php echo site_url('donasiuang') ?>"><h2 style="color: white">Donasi Uang</h2><i class="fa fa-money fa-3x" style="color: white"></i></a>
    
</ul>
</div>
<div class="col" style="background-color:#318EDC">
<ul>
    <a href="<?php echo site_url('donasibarang') ?>"><h2 style="color: white">Donasi Barang</h2><i class="fa fa-gift fa-3x" style="color: white"></i></a>
    
</ul>
</div>
<div class="col">
<ul>
    <a href="<?php echo site_url('donasijasa') ?>"><h2 style="color: white">Donasi Jasa</h2><i class="fa fa-male fa-3x" style="color: white"></i></a>
    
</ul>
</div>
</footer>

   <!-- Bootstrap core JavaScript -->
    
<script src="<?php echo base_url('assets/ramedashboard/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/ramedashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/ramedashboard/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/ramedashboard/vendor/scrollreveal/scrollreveal.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/ramedashboard/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/ramedashboard/js/creative.min.js') ?>"></script>
</body>
</html>

