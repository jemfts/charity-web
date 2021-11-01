<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Donasi Uang
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Donasi</li>
        <li class="active">Uang</li>
    </ol>
</section>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <a href="<?php echo base_url()?>index.php/c_uangprint/cetakpdf" class="btn btn-sm btn-default btn-flat pull-right">Cetak</a>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Donatur</th>
                                    <th>Alamat</th>
                                    <th>Jumlah Donasi</th>
                                    <th>No. Telp</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = $this->uri->segment('3') + 1;
                                foreach($donasi_uang as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $u->nm_donatur ?></td>
                                    <td><?php echo $u->alamat ?></td>
                                    <td><?php echo number_format($u->jml_uang,0,",","."); ?></td>
                                    <td><?php echo $u->no_telp ?></td>
                                    <td><?php echo $u->email ?></td>
                                    <td><span class="label label-success"><?php echo $u->status ?></span></td>
                                    <td><?php echo anchor('donasiuang_admin/edit/'.$u->id_donasi_uang,'Edit'); ?></td>
                                    <td><?php echo anchor('donasiuang_admin/hapus/'.$u->id_donasi_uang,'Hapus'); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php echo $pagination; ?>
                    </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.js') ?>" rel="stylesheet" type="text/css" />
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>