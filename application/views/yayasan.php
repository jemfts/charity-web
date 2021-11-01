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

    <style type="text/css">  
    div.kotak2{
        margin-right:300px; 
       /* margin-top: 10px;*/
        margin-left: 20px;
    }
    .form-box{  
     max-width: 500px;  
     position: relative;  
     margin-left: 5% auto;  
    }  

    .form-group{  
     width: 1000px;  
     /*margin-left: 25%;*/
     /*margin-right: 50%;*/
    } 

    .form-control{
      max-width: 800px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
     }

     body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.boxcontainer {
  background-color: #fff;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-left: 250px;

}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #3E9EEE;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
 

}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
     }
   </style>
  </head>

  <body id="page-top" style="background-color: #F4FAFF">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav2" >
      <div class="container" >
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('auth/login') ?>"> <img src=" <?php echo base_url('assets/ramedashboard/img/rame.png') ?> " width="30">&nbsp;RaMe</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
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
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('yayasan') ?>" >Yayasan</a>
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
    <br><br><br>
<center><?php echo $this->session->flashdata('msg'); ?></center>
 <div class="row" >
  <div class="col-75" style="padding-left: 10px;  padding-right: 250px;" >
    <div class="boxcontainer" >
      <form action="<?php echo site_url('yayasan/register') ?>" method="post">
      
        <div class="row">
          <div class="col-25" >
            <h3>Yayasan Form</h3>
            <p>Daftarkan yayasan Anda sekarang juga!
            </p>
            <label class="control-label" for="nm_yayasan"><i class="fa fa-building"></i> Nama Yayasan</label>
            <input type="text" class="form-control" id="nm_yayasan" name="nm_yayasan" placeholder="Nama Yayasan" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('nm_yayasan'); ?></span>

            <label class="control-label" for="nm_pemohon"><i class="fa fa-user"></i> Nama Pemohon</label>
            <input type="text" class="form-control" id="nm_pemohon" name="nm_pemohon" placeholder="Nama Pemohon" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('nm_pemohon'); ?></span>

            <label class="control-label" for="nm_penanggungjwb"><i class="fa fa-user"></i> Penanggung Jawab</label>
            <input type="text" class="form-control" id="nm_penanggungjwb" name="nm_penanggungjwb" placeholder="Penanggung Jawab" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('nm_penanggungjwb'); ?></span>

            <label class="control-label" for="alamat" ><i class="fa fa-address-card-o"></i> Alamat</label>
            <textarea name="alamat"  type="text" class="form-control" id="alamat" cols="100" rows="5"  placeholder="Your Address" required="" ></textarea>
            <span class="text-danger"><?php echo form_error('alamat'); ?></span><br>

            <label class="control-label" for="pswd" ><i class="fa fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required=""  size="30">
            <span class="text-danger"><?php echo form_error('email'); ?></span>

            <label class="control-label" for="no_telp"><i class="fa fa-mobile-phone"></i> No. Telp</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Your Phone Number" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('no_telp'); ?></span>
            <input type="submit" value="Daftar Sekarang" class="btn btn-primary">
          </div></div>
          </div>
      </form>
    </div>
  </div>
  <br>

   <!-- <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center" > 
         
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo site_url('yayasan/register') ?>" method="post">  
          <div class="row">  
           <div class="col-sm-6">  --> 
           <!--  <div class="form-group">  
                    <label class="control-label" for="nm_yayasan" >Nama Yayasan</label>  
                      <div >  
                        <input type="text" class="form-control" id="fname" name="nm_yayasan" placeholder="Nama Yayasan" required="">  
                        <span class="text-danger"><?php echo form_error('nm_yayasan'); ?></span>  
                      </div>   -->
                 <!--  </div>  
           </div>  
           <div class="col-sm-6">  --> 
           <!--  <div class="form-group">  
                    <label class="control-label" for="nm_pemohon" >Nama Pemohon</label>  
                      <div >  
                        <input type="text" class="form-control" id="nm_pemohon" name="nm_pemohon" placeholder="Nama Pemohon" required="">  
                        <span class="text-danger"><?php echo form_error('nm_pemohon'); ?></span>  
                      </div>  
                  </div>   -->
           <!-- </div>  
          </div>
          <div class="form-group">
          <div class="form-group">  
                  <label class="control-label" for="nm_yayasan" >Nama Yayasan</label>  
                    <div>  
                      <input type="nm_yayasan" class="form-control" id="nm_yayasan" name="nm_yayasan" placeholder="Nama Yayasan" required="" >  
                      <span class="text-danger" ><?php echo form_error('nm_yayasan'); ?></span>  
                    </div>  
                </div>
                </div>
                <div class="form-group">
          <div class="form-group">  
                  <label class="control-label" for="nm_pemohon" >Nama Pemohon</label>  
                    <div>  
                      <input type="nm_pemohon" class="form-control" id="nm_pemohon" name="nm_pemohon" placeholder="Nama Pemohon" required="" >  
                      <span class="text-danger" ><?php echo form_error('nm_pemohon'); ?></span>  
                    </div>  
                </div>
                </div>  
          <div class="form-group">
          <div class="form-group">  
                  <label class="control-label" for="nm_penanggungjwb" >Penanggung Jawab</label>  
                    <div>  
                      <input type="nm_penanggungjwb" class="form-control" id="nm_penanggungjwb" name="nm_penanggungjwb" placeholder="Penanggung Jawab" required="" >  
                      <span class="text-danger" ><?php echo form_error('nm_penanggungjwb'); ?></span>  
                    </div>  
                </div>
                </div>
          <div class="form-group">  
            <div class="form-group">  
                    <label class="control-label" for="alamat">Alamat</label>  
                      <div >  
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required=""
                        >  
                        <span class="text-danger"><?php echo form_error('alamat'); ?></span>  
                      </div>  
                  </div>  
           </div>  
          </div>  

          <div class="form-group">  
            <div class="form-group">  
                    <label class="control-label" for="no_telp" >No. Telp</label>  
                      <div >  
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telp" required="">  
                        <span class="text-danger"><?php echo form_error('no_telp'); ?></span>  
                      </div>  
                  </div>  
           </div>  
          </div>  

          <div class="form-group">
          <div class="form-group">  
                  <label class="control-label" for="email" >Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('email'); ?></span>  
                    </div>  
                </div>
                </div>

                <br>
               <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-primary">Submit</button>  
                    </div>  
                 </div>  
                </div>  
         </form>  
        </div> -->  
        <!-- <div class="panel-footer text-center">  
         <h5> <a href="login" class="text-center">I already have a membership</a></h5>  
        </div>  --> 
       <!-- </div>  
      </div>  
    </div>  
   </div>  
  </div> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
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
