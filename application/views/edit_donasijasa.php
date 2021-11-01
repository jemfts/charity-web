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
        Edit Donasi Jasa
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Donasi Jasa</li>
    </ol>
</section><br><br><br>
<div class="box-body">
    <div class="form-horizontal">
        <?php foreach($donasi_jasa as $u){ ?>
        <form action="<?php echo base_url('index.php/donasijasa_admin/update'); ?>" method="post">
            <div class="form-group">
                <label class="control-label col-xs-3" >Nama Lengkap</label>
                <div class="col-xs-9">
                    <input type="hidden" name="id_donasi_jasa" value="<?php echo $u->id_donasi_jasa ?>">
                    <input type="text" name="nm_lengkap" value="<?php echo $u->nm_lengkap ?>" style="width:335px;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Usia</label>
                <div class="col-xs-9">
                    <input type="text" name="usia" value="<?php echo $u->usia ?>" style="width:335px;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Alamat</label>
                <div class="col-xs-9">
                    <input type="text" name="alamat" value="<?php echo $u->alamat ?>" style="width:335px;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >No. Telp</label>
                <div class="col-xs-9">
                    <input type="text" name="no_telp" value="<?php echo $u->no_telp ?>" style="width:335px;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Pend. Akhir</label>
                <div class="col-xs-9">
                    <input type="text" name="pend_akhir" value="<?php echo $u->pend_akhir ?>" style="width:335px;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Email</label>
                <div class="col-xs-9">
                    <input type="text" name="email" value="<?php echo $u->email ?>" style="width:335px;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" ></label>
                <div class="col-xs-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.js') ?>" type="text/javascript"> </script>
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