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
    .form-box{  
     max-width: 500px;  
     position: relative;  
     margin-left: 5% auto;  
    }  

    .form-group{  
     width: 1000px;  
     margin-left: 25%;
     margin-right: 20%;
    } 

    .form-control{
      max-width: 600px;
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
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
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
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('donasi') ?>">Donasi</a>
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
    <br><br><!-- <br><h3><b><center>Silahkan Isi Data Donatur</center></b></h3> -->

<!-- <form action="." method="post">
        <noscript>You must <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> in your web browser in order to pay via Stripe.</noscript>

        <input 
            type="submit" 
            value="Pay with Stripe"
            data-key="PUBLISHABLE STRIPE KEY"
            data-amount="500"
            data-currency="cad"
            data-name="Example Company Inc"
            data-description="Stripe payment for $5"
            src="https://checkout.stripe.com/checkout.js"
        />

        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>
        $(document).ready(function() {
            $(':submit').on('click', function(event) {
                event.preventDefault();
                var $button = $(this),
                    $form = $button.parents('form');
                var opts = $.extend({}, $button.data(), {
                    token: function(result) {
                        $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                    }
                });
                StripeCheckout.open(opts);
            });
        });
        </script>
</form>
 -->
<div id="parent" style="background-color: rgba(255,255,255,0);background-position: left top;background-repeat: no-repeat;padding-top:20px;padding-right:40px;padding-bottom:100px;padding-left:30px;border-top-width:0px;border-bottom-width:0px;border-color:#eae9e9;border-top-style:solid;border-bottom-style:solid;"> 
   <div id="wide" style="background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); padding: 40px; background-position: left top; background-repeat: no-repeat; background-size: cover; min-height: 954px; height: auto; margin-top:0px;margin-bottom:30px;width:50%; margin-right: 4%;" data-bg-url="">
  <h3 style="font-weight: 400;" data-fontsize="22" data-lineheight="48"><strong><span style="text-decoration: underline; text-align: center">Donasi Form</span></strong></h3>
  <p>Silahkan isi form dibawah ini.</p>
  <div class="row">
  <div class="col-75" style="padding-left: 30px; padding-right: 30px">
    <div class="boxcontainer">
      <form action="<?php echo site_url('donasiuang/register') ?>" method="post">
      
        <div class="row">
          <div class="col-25" >
            <h3>Data Donatur</h3>
            <label class="control-label" for="nm_pengirim"><i class="fa fa-user"></i> Nama Pengirim</label>
            <input type="text" class="form-control" id="nm_pengirim" name="nm_pengirim" placeholder="Your Name" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('nm_pengirim'); ?></span>

            <label class="control-label" for="nm_brg"><i class="fa fa-gift"></i> Nama Barang</label>
            <input type="text" class="form-control" id="nm_brg" name="nm_brg" placeholder="Buku" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('nm_brg'); ?></span>

            <label class="control-label" for="jml_brg"><i class="fa fa-list"></i> Jumlah Barang</label>
            <input type="number" class="form-control" id="jml_brg" name="jml_brg" placeholder="10" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('jml_brg'); ?></span>

            <label class="control-label" for="pswd" ><i class="fa fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required=""  size="30">
            <span class="text-danger"><?php echo form_error('email'); ?></span>

            <label class="control-label" for="no_telp"><i class="fa fa-mobile-phone"></i> No. Telp</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Your Phone Number" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('no_telp'); ?></span>

          </div></div>
          </div>
        <input type="submit" value="Continue to checkout" class="btn btn-primary">
      </form>
    </div>
  </div>
  
</div>
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


<h2 style="padding-left: 150px; padding-right: 150px">Donasi Form</h2>
<p style="padding-left: 150px; padding-right: 150px">Silahkan isi form dibawah ini.</p>
<div class="row">
  <div class="col-75" style="padding-left: 150px; padding-right: 150px">
    <div class="boxcontainer">
      <form action="<?php echo site_url('donasiuang/register') ?>" method="post">
      
        <div class="row">
          <div class="col-25" >
            <h3>Data Donatur</h3>
            <label class="control-label" for="nm_donatur"><i class="fa fa-user"></i> Nama Donatur</label>
            <input type="text" class="form-control" id="nm_donatur" name="nm_donatur" placeholder="Your Name" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('nm_donatur'); ?></span>
            <label class="control-label" for="pswd" ><i class="fa fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required=""  size="30">
            <span class="text-danger"><?php echo form_error('email'); ?></span>
            <label class="control-label" for="alamat"><i class="fa fa-address-card-o"></i> Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Your Address" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('alamat'); ?></span>
            <label class="control-label" for="no_telp"><i class="fa fa-mobile-phone"></i> No. Telp</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Your Phone Number" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('no_telp'); ?></span>
            <label class="control-label" for="jml_uang"><i class="fa fa-money"></i> Jumlah Uang</label>
            <input type="number" class="form-control" id="jml_uang" name="jml_uang" placeholder="Rp 1.000.000" required=""  size="30">
            <span class="text-danger" ><?php echo form_error('jml_uang'); ?></span>

          </div>

          <!-- <div class="col-25">
            <h3>Pembayaran</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->
          
        </div>
        <input type="submit" value="Continue to checkout" class="btn btn-primary">
      </form>
    </div>
  </div>
  
</div>

<div class="row">
  <div class="col-75">
    <div class="boxcontainer">
      
        <div class="row">
          <div class="col-50">
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo site_url('donasiuang/register') ?>" method="post">  
         
<div class="form-group">
    <table class="table-form" border="0" width="100%" cellpadding="7" cellspacing="0">

        <tr>
            <td width="20%"><label class="control-label" for="nm_donatur">Nama Donatur</label></td>
            <td colspan="3"><input type="text" class="form-control" id="nm_donatur" name="nm_donatur" placeholder="Your Name" required=""  size="30"></td>
            <td><span class="text-danger" ><?php echo form_error('nm_donatur'); ?></span></td>
        </tr>
        
        <tr>
            <td valign="top"><label class="control-label" for="alamat">Alamat</label></td>
            <td valign="top" colspan="2">
                <textarea name="alamat"  type="text" class="form-control" id="alamat" cols="45" rows="5"  placeholder="Your Address" required="" ></textarea> 
            <td><span class="text-danger" ><?php echo form_error('alamat'); ?></span></td>
            
        </tr>
        <tr>
            <td><label class="control-label" for="pswd" >Email</label> </td>
            <td colspan="3"><input type="email" name="email" class="form-control" id="email" class="form" size="30" placeholder="" required=""></td>
            <td><span class="text-danger"><?php echo form_error('email'); ?></span></td>
        </tr>
        <tr>
            <td><label class="control-label" for="no_telp">No. HP</label></td>
            <td colspan="3"><input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="" required=""></td>
            <td><span class="text-danger"><?php echo form_error('no_telp'); ?></span></td>
        </tr>
        
        <tr>
            <td><label class="control-label" for="jml_uang">Jumlah Uang</label></td>
            <td colspan="3"><input type="number" class="form-control" id="jml_uang" name="jml_uang" placeholder="" required="" ></td>
            <td><span class="text-danger" ><?php echo form_error('jml_uang'); ?></span></td>
        </tr>
        
    </table>
</div >
<div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-primary">Submit</button>  
                    </div>  
                 </div>  
                </div> 
</form>

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