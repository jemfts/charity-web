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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ramedashboard/css/animasi.css') ?>">
  </head>

  <body id="page-top" >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
      <div class="container" >
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('auth/login') ?>"> <img src=" <?php echo base_url('assets/ramedashboard/img/rame.png') ?> " width="30">&nbsp;RaMe</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('aboutus/index') ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('donation/index') ?>">Donasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('yayasan') ?>">Yayasan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('contact/index') ?>">Contact</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('auth/logout') ?>" class="nav-link js-scroll-trigger">Sign out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center d-flex" >

      <div class="container my-auto" >
        <div class="row" >
          <div class="col-lg-10 mx-auto">
            <h1 class="animated fadeInDown" style="color:white;" >
              <strong>RaMe</strong>
            </h1>
            <h2 class="animated fadeInDown" style="color:white;" >
              <strong>Bahagia Mereka Bahagia Kita Juga !</strong>
            </h2>
            <hr class="light" >
          </div>
          <div class="col-lg-8 mx-auto">
            <h4 style="color:white; " class="text-faded mb-5">Kekurangan mereka bukan keterbatasan, melainkan kelebihan yang mampu mendorong mereka melangkah lebih maju untuk meraih mimpi bukan terhentinya sebuah mimpi - Irsalina Idzni</h4><br>
            <a class="btn btn-primary btn-xl js-scroll-trigger animated pulse" href="<?php echo site_url('donation/index') ?>">Ayo Donasi !</a>
          </div>
        </div>
      </div>
    </header>

    <section id="about" style="padding-bottom: 90px;">
      <div class="container" >
        <div class="row" >
          <div class="col-lg-8 mx-auto text-center" >
            <h2 class="section-heading text-black">Daftarkan Yayasanmu!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4" style="color:black">Ingin mendapatkan solusi masalah dana atau butuh dana cepat untuk yayasan? Yuk segera daftarkan yayasan Anda sekarang juga! Dengan layanan donasi, kami salurkan dana untuk yayasan Anda</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo site_url('yayasan') ?>">Daftar Sekarang!</a>
          </div>   
        </div>
      </div>
    </section>     

    <section style="padding-top: 10px; padding-bottom: 10px; ">
      <hr class="batas">
    </section>
<!--     <section class="p-0" id="portfolio" style="border-bottom: 1px solid rgba(42, 60, 141, 0.3); border-color: rgba(42, 60, 141, 0.3);">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-4 col-sm-6">
            <div class="portfolio-box">
            <a  href="<?php echo site_url('yayasan1') ?>">
              <center><img class="img-fluid" src="<?php echo base_url('assets/ramedashboard/img/yayasan4.png') ?>" width="242" height="400" alt=""></center>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content"> -->
                  <!-- <div class="project-category text-faded">
                    Yayasan Sayap Ibu
                  </div> -->
                  <!-- <div class="project-name" style="color:white">
                    Yayasan Sayap Ibu
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <center><img class="img-fluid" src="<?php echo base_url('assets/ramedashboard/img/yayasan5.jpg') ?>" width="242" height="400" alt=""></center>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content"> -->
                  <!-- <div class="project-category text-faded">
                    Yayasan
                  </div> -->
                  <!-- <div class="project-name" style="color:white"> -->
                    <!-- Yayasan Difabel Mandiri
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <center><img class="img-fluid" src="<?php echo base_url('assets/ramedashboard/img/yayasan6.jpg') ?>" width="267" height="400" alt=""></center>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content"> -->
                  <!-- <div class="project-category text-faded">
                    Yayasan
                  </div> -->
                  <!-- <div class="project-name" style="color:white">
                    Yayasan Pembinaan Anak Cacat
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <center><img class="img-fluid" src="<?php echo base_url('assets/ramedashboard/img/yayasan7.jpg') ?>" width="335" height="400" alt=""></center>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content"> -->
                 <!--  <div class="project-category text-faded">
                    Yayasan
                  </div> -->
                  <!-- <div class="project-name" style="color:white">
                    Yayasan Sinar Pelangi
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <center><img class="img-fluid" src="<?php echo base_url('assets/ramedashboard/img/yayasan9.png') ?>" width="268" height="400" alt=""></center>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content"> -->
                 <!--  <div class="project-category text-faded">
                    Yayasan
                  </div> -->
                  <!-- <div class="project-name" style="color:white">
                    Yayasan Bhakti Luhur
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <center><img class="img-fluid" src="<?php echo base_url('assets/ramedashboard/img/yayasan1.png') ?>" width="258" height="400" alt=""></center>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content"> -->
                  <!-- <div class="project-category text-faded">
                    Yayasan
                  </div> -->
                  <!-- <div class="project-name" style="color:white">
                    Yayasan Permata Atjeh Peduli 
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <section id="services" style="border-bottom: 1px solid rgba(42, 60, 141, 0.3); border-color: rgba(42, 60, 141, 0.3); padding-top: 80px; padding-bottom: 90px; ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" >Why RaMe?</h2>
            <hr class="light">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-lock text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" >Aman</h3>
              <p > Data transaksi pendonasian terjamin kerahasiaannya.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-handshake-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" >Terpercaya</h3>
              <p >Data yayasan pada web kami dapat dipercaya keakuratannya.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-lightbulb-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" >Solusi</h3>
              <p> Memecahkan solusi dengan berbagi.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" >Social Web</h3>
              <p> Unjuk kepedulian kita kepada sesama untuk saling membantu.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    

<!--     <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </section> -->
    <section id="contact" style="background-color: #2A3C8D; padding-top: 60px; padding-bottom: 30px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading" style="color: white">Let's Get In Touch!</h2>
            <hr class="light my-4" >
            <p class="mb-5" style="color: white">Untuk info lebih lanjut, give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p style="color: white">+62801-2345-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com" style="color:white;">rameinajaweb@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
      <div class='widget HTML' data-version='1' id='HTML2' align="center">
<h2 class="section-heading" style="color: white">Follow Us!</h2>
<hr class="light my-4" >
<div class='widget-content'>
<ul class="social-icons icon-circle list-unstyled list-inline"> 
       <li> <a href="https://www.facebook.com/rame.web.90/" target="_blank"><i class="fa fa-facebook sr-contact" ></i></a></li> 
       
       <li> <a href="https://plus.google.com/u/2/101126773221456890523" target="_blank"><i class="fa fa-google-plus sr-contact" target="_blank"></i></a></li> 
       
       <li> <a href="https://www.instagram.com/rameweb/" target="_blank"><i class="fa fa-instagram sr-contact"></i></a></li>
  
       <li> <a href="https://www.twitter.com/rame_web/" targ et="_blank"><i class="fa fa-twitter sr-contact" target="_blank"></i></a></li>
    </ul>
<style>
.list-unstyled {
 padding-left: 0;
 list-style: none;
}
.list-inline li {
     display: inline-block;
    padding-right: 1px;
    padding-left: 1px;
    margin-bottom: 5px;
}
/*---- Genral classes end -------*/

/*Change icons size here*/
.social-icons .fa {
 font-size: 1.8em;
}
/*Change icons circle size and color here*/
.social-icons .fa {
 width: 48px;
 height: 48px;
 line-height: 48px;
 text-align: center;
 color: #FFF;
 color: rgba(255, 255, 255, 0.8);
 -webkit-transition: all 0.3s ease-in-out;
 -moz-transition: all 0.3s ease-in-out;
 -ms-transition: all 0.3s ease-in-out;
 -o-transition: all 0.3s ease-in-out;
 transition: all 0.3s ease-in-out;
}

.social-icons.icon-circle .fa{ 
 border-radius: 50%;
}
.social-icons.icon-rounded .fa{
 border-radius:5px;
}
.social-icons.icon-flat .fa{
 border-radius: 0;
}

.social-icons .fa:hover, .social-icons .fa:active {
 color: #FFF;
 -webkit-box-shadow: 1px 1px 3px #333;
 -moz-box-shadow: 1px 1px 3px #333;
 box-shadow: 1px 1px 3px #333; 
}

 

.social-icons .fa-facebook,.social-icons .fa-facebook-square{background-color:#3C599F;}   
.social-icons .fa-google-plus,.social-icons .fa-google-plus-square{background-color:#CF3D2E;} 
.social-icons .fa-instagram{background: radial-gradient(circle at 33% 100%, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF)} 
.social-icons .fa-twitter,.social-icons .fa-twitter-square{background-color:#32CCFE;} 
.social-icons .fa-youtube,.social-icons .fa-youtube-play,.social-icons .fa-youtube-square{background-color:#C52F30;}
</style>
</div>
<!-- <div class='clear'></div> -->
 </section>

    <!-- <footer style="background-color: #2A3C8D">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">

            <h2 class="section-heading" >Let's Get In Touch!</h2>
            <hr class="light my-4" >
            <p class="mb-5">Untuk info lebih lanjut, give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com" style="color:black;">rameinaja@xyz.com</a>
            </p>
          </div>
        </div>
      </div>
    </footer> -->

    <!-- <footer width="500" style="background-color: #2A3C8D">
      <div class="container">
        <div class="row" >
          <div class="col-lg-8 mx-auto text-center">
            <tr>
    <td class="footer" bgcolor="#44525f">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" class="footercopy">
                    &amp;reg; Someone, somewhere 2013<br/>
                    <a href="#"><font color="#ffffff">Unsubscribe</font></a> from this newsletter instantly
                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 20px 0 0 0;">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                <a href="http://www.facebook.com/">
                                    <img src="images/facebook.png" width="37" height="37" alt="Facebook" border="0" />
                                </a>
                            </td>
                            <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                <a href="http://www.twitter.com/">
                                    <img src="images/twitter.png" width="37" height="37" alt="Twitter" border="0" />
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
          </div>
        </div>
      </div>
    </footer> -->


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
