<style type="text/css">
	img.img-responsive {
    width: 50%;
    height: 290px;
/*    margin-right: 60px;*/
    margin-left: 150px;
	}
	div.kotak2{
/*	margin-top: 10px;*/
	/*margin-left: 10px;*/
	}
  div.button2{
  margin-top: 10px;

  }
  .card-text{
  margin-top: 10px;
  margin-right: 10px;
  margin-left: 10px;
  }
  #parent { 
display: flex;
 
}
 #narrow { 
width: 500px; 
padding-right: 10px;
} 
#wide { 
flex: 1;
width: 400px;
padding-right: 10px;

}
</style>
<!-- <h2><?php echo $detail['nama_yayasan'];?></h2>
<!-- <form method="post" action="<?php echo site_url('donation/tambah_uang');?>" method="post" accept-charset="utf-8"> -->
<!-- <div class="kotak2"> -->
<!-- <img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$detail['gambar']; ?>"/> -->
<!--  <h5>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></h5> -->
 <!-- <p class="card-text">
<strong> <u>Deskripsi</u></strong><br>
 <?php echo $detail['deskripsi'];?></p>
  <input type="hidden" name="id" value="<?php echo $detail['id_yayasan']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $detail['nama_yayasan']; ?>" />
  <input type="hidden" name="harga" value="<?php echo $detail['harga']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
  <input type="hidden" name="qty" value="1" />
   </div> --> 
  <!-- <div class="button2">
 <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Uang</button></div> -->
 <!-- <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Barang</button>
 <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Jasa</button> -->

<!--  </form> -->


<div id="parent" style="background-color: rgba(255,255,255,0);background-position: left top;background-repeat: no-repeat;padding-top:1px;padding-right:1px;padding-bottom:50px;padding-left:1px;width:100%;border-top-width:0px;border-bottom-width:0px;border-color:#3E9EEE;border-top-style:solid;border-bottom-style:solid;"> 
   <div id="wide" style="background-color: white; border: 1px solid #3E9EEE; border-radius:25px; padding: 1px; background-position: left top; background-repeat: no-repeat; background-size: cover; min-height: 954px; height: auto; margin-top:0px;margin-bottom:30px;width:50%; margin-right: 1%;" data-bg-url=""><h3 style="font-weight: 400;" data-fontsize="1" data-lineheight="48"><strong><span style="text-decoration: underline; text-align: center"><br><center><?php echo $detail['nama_yayasan'];?></center></span></strong></h3><br>
<!-- <form method="post" action="<?php echo site_url('donation/tambah_uang');?>" method="post" accept-charset="utf-8"> -->
<div class="kotak2">
<center></center><img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$detail['gambar']; ?>"/></center>
<!--  <h5>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></h5> -->
<center></center><p class="card-text">
<strong> <u>Deskripsi</u></strong><br>
 <?php echo $detail['deskripsi'];?></p></center>
  <input type="hidden" name="id" value="<?php echo $detail['id_yayasan']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $detail['nama_yayasan']; ?>" />
  <input type="hidden" name="jml" value="<?php echo $detail['jml']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
  <input type="hidden" name="qty" value="1" />
  <?php $this->cart->destroy() ?>
   </div></div>

   <div id="narrow" style="/*background-color: rgb(255, 255, 255);*/ /*border: 1px solid rgb(221, 221, 221);*/ /*padding: 40px; */background-position: left top; background-repeat: no-repeat; background-size: cover; min-height: 954px; height: auto; margin-top:0px;margin-bottom:30px;width:23%;" data-bg-url=""> <!-- <h3 style="font-weight: 400;" data-fontsize="22" data-lineheight="48"><strong><span style="text-decoration: underline; text-align: center"><center>Donasi</center></span></strong></h3> -->
        <div class="fusion-sep-clear"></div><div class="fusion-separator fusion-full-width-sep sep-single sep-solid" style="border-color:#3bafbf;border-top-width:2px;margin-left: auto;margin-right: auto;margin-top:0px;width:100%;max-width:100%;"></div>
<div class="table-2">
<table width="100%">
<tbody>
<tr>
  <form method="post" action="<?php echo site_url('donation/tambah_uang');?>" method="post" accept-charset="utf-8">
    <div class="kotak2">
<!-- <img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$detail['gambar']; ?>"/> -->
<!--  <h5>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></h5> -->
<!--  <p class="card-text">
<strong> <u>Deskripsi</u></strong><br> -->
 <!-- <?php echo $detail['deskripsi'];?></p> -->
  <input type="hidden" name="id" value="<?php echo $detail['id_yayasan']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $detail['nama_yayasan']; ?>" />
  <input type="hidden" name="jml" value="<?php echo $detail['jml']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
  <input type="hidden" name="qty" value="1" />
  </div>

  <div class="list-group">
            <a class="list-group-item" style="background-color: #3E9EEE; color: white"><strong>PILIH DONASI</strong></a>
            <button class="list-group-item" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Uang</button>
    </div>
  </form>
</tr>


<tr>
  <form method="post" action="<?php echo site_url('donation/tambah_brg');?>" method="post" accept-charset="utf-8">
    <div class="kotak2">
<!-- <img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$detail['gambar']; ?>"/> -->
<!--  <h5>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></h5> -->
<!--  <p class="card-text">
<strong> <u>Deskripsi</u></strong><br> -->
 <!-- <?php echo $detail['deskripsi'];?></p> -->
  <input type="hidden" name="id" value="<?php echo $detail['id_yayasan']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $detail['nama_yayasan']; ?>" />
  <input type="hidden" name="jml" value="<?php echo $detail['jml']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
  <input type="hidden" name="qty" value="1" />
 <?php $this->cart->destroy() ?>
  </div>
<div class="list-group">
<button class="list-group-item" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Barang</button>
</div>
<!--  <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Jasa</button> -->
  </form>
</tr>
          <tr>
          <form method="post" action="<?php echo site_url('donation/tambah_jasa');?>" method="post" accept-charset="utf-8">
<div class="kotak2">
<!-- <img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$detail['gambar']; ?>"/> -->
<!--  <h5>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></h5> -->
 <!-- <p class="card-text">
<strong> <u>Deskripsi</u></strong><br>
 <?php echo $detail['deskripsi'];?></p> -->
  <input type="hidden" name="id" value="<?php echo $detail['id_yayasan']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $detail['nama_yayasan']; ?>" />
  <input type="hidden" name="jml" value="<?php echo $detail['jml']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
  <input type="hidden" name="qty" value="1" />
   <?php $this->cart->destroy() ?>
   </div>
<!--  <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Uang</button>
 <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Barang</button> -->
<div class="list-group" >
<button class="list-group-item" type="submit" ><i class="glyphicon glyphicon-shopping-cart"></i> Donasi Jasa</button>
</form></div>

          </tbody>
          </table>
          <div class="fusion-sep-clear"></div>
        <div class="fusion-separator fusion-full-width-sep sep-single sep-solid" style="border-color:#3bafbf;border-top-width:2px;margin-left: auto;margin-right: auto;margin-top:0px;margin-bottom:30px;width:100%;max-width:100%;">
      </div>
        </div></div> 
</div>