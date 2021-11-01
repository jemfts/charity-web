<!-- <h2>Daftar Yayasan</h2> -->
<?php
	foreach ($produk as $row) {
?>
<style type="text/css">
div.kotak {
    border: 1px solid #3E9EEE;
    margin-bottom: 10px;
    margin-top: 5px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 7px;
}

div.kotak:hover {
    border: 2px solid #3E9EEE;
    margin-bottom: 5px;
    margin-top: 5px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

div.kotak img {
    width: 100%;
    height: 250px;
}

</style>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak" style="background-color:#3E9EEE">
              <form method="post" action="<?php echo site_url('donation/tambah');?>" method="post" accept-charset="utf-8">
                <a href="<?php echo base_url();?>index.php/donation/detail_yayasan/<?php echo $row['id_yayasan'];?>"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/'.$row['gambar']; ?>"/></a>
                <!-- <div class="card-body"> -->
                  <center><h5 class="card-title">
                    <a href="<?php echo base_url();?>index.php/donation/detail_yayasan/<?php echo $row['id_yayasan'];?>" style="font-size: 15px; color: white;"><?php echo $row['nama_yayasan'];?></a>
                  </h5></center>
                  <!-- <h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5> -->
                 <!--  <p class="card-text"><?php echo $row['deskripsi'];?></p> -->
                <!-- </div> -->
                <!-- <div class="card-footer"> -->
                  <!-- <a href="<?php echo base_url();?>index.php/donation/detail_yayasan/<?php echo $row['id_yayasan'];?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-search"></i> Detail</a> --> 
                  
                  <input type="hidden" name="id" value="<?php echo $row['id_yayasan']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $row['nama_yayasan']; ?>" />
                  <input type="hidden" name="jml" value="<?php echo $row['jml']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <!-- <button type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i> Donasi</button> -->
                <!-- </div> -->
                </form>
              </div>
            </div>
<?php
	}
?>