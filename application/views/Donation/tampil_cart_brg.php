<h2>Donasi Barang</h2>
<form action="<?php echo site_url('donation/ubah_cart')?>" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
  <style type="text/css">
    img.img-responsive {
    width: 100%;
    height: 90px;
  </style>
<?php
	if ($cart= $this->cart->contents())
		{
 ?>
<p>Silahkan masukan jumlah donasi.</p>
<table class="table">
<tr id= "main_heading">
<td width="2%">No</td>
<td width="12%">Gambar</td>
<td width="33%">Yayasan</td>
<!-- <td width="17%">Harga</td> -->
<!-- <td width="20%">Donasi</td> -->
<td width="20%">Jumlah</td>
<td width="15%">Hapus</td>
</tr>
<?php
// Create form and send all values in "donation/update_cart" function.
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
?>
<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
<tr>
<td><?php echo $i++; ?></td>
<td><img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$item['gambar']; ?>"/></td>
<td><?php echo $item['name']; ?></td>
<!-- <td><?php echo number_format($item['price'], 0,",","."); ?></td> -->
<!-- <td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>"></td> -->
<td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>

<td><a href="<?php echo base_url()?>index.php/donation/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"> <i class="fa fa-close"></i> </a></td>

<?php endforeach; ?>

</tr>
<tr>
<!-- <td colspan="3"><b>Total Donasi: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td> -->
<td colspan="4" align="right">
<a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Donasi</a>
<button class='btn btn-sm btn-success'  type="submit">Update Donasi </button>
<a href="<?php echo site_url('donation/check_out_brg')?>"  class ='btn btn-sm btn-primary'>Check Out</a>
</tr>

</table>
<?php
		}
	else
		{
			echo "<br><br><h3>Keranjang Donasi masih kosong</h3>";	
		}	
?>
</form>


  <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo site_url('donation/hapus/all')?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
			Anda yakin mau mengosongkan Donation Cart?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-sm btn-default">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->