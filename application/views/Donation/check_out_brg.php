<!-- <h2>Konfirmasi Check Out</h2> -->
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
     width: 800px;  
     /*margin-left: 25%;*/
     margin-right: 50%;
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
</style>
<div class="kotak2">
<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
    {
        foreach ($cart as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
        // echo "<h4><b>Total Donasi: Rp.".number_format($grand_total,0,",",".")."</h4></b>";   
?>

<div class="row">
  <div class="col-75" style="padding-left: 10px; padding-right: 150px">
    <div class="boxcontainer">
      <form action="<?php echo site_url('donation/proses_order_brg') ?>" method="post">
      
        <div class="row">
          <div class="col-25" >
            <h3>Donasi Barang Form</h3>
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

          </div>
          </div>
           <div class="form-group  has-success has-feedback">
        <input type="submit" value="Donasi Sekarang" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>  
</div>
<br><br>


<!-- <form class="form-horizontal" action="<?php echo site_url('donasiuang/register')?>" method="post" name="frmCO" id="frmCO"> -->
<!--         <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama Donatur:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nm_donatur" id="nm_donatur" placeholder="Nama Lengkap">
            </div>
        </div> -->

        <!-- <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
         -->
        <!-- <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            </div>
        </div> -->
        <!-- <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="no_telp">Telp:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp">
            </div>
        </div> -->

        <!-- <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Jumlah Uang:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" name="jml_uang" id="jml_uang" placeholder="Jumlah Uang">
            </div>
        </div> -->
        
        <!-- <div class="form-group  has-success has-feedback">
 -->           <!--  <div class="col-xs-offset-3 col-xs-9"> -->
                <!-- <button type="submit" class="btn btn-primary">Proses Order</button> -->
            <!-- </div> -->
        <!-- </div> -->
<!--     </form> -->
    <?php
    }
    else
        {
            echo "<h5>Donasi masih kosong</h5>";    
        }
    ?>
</div>