<html>
	<head>
		<title>Laporan Data Yayasan</title>
		<link href="<?php echo base_url('assets/css/laporan.css') ?>" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="page">
		<div class="kop">
            <div class="header2"><br>
                <h2 style="text-align: center;">Laporan Data Yayasan RAME WEB</h2>
                <?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?>
            </div>
		</div>
		
            <div class="batas"></div>
            
		<table class="table" border="1px">
			<tr class="head">
				<td>No. </td>
				<td>Nama Yayasan</td>
				<td>Nama Penanggung Jawab</td>
				<td>Nama Pemohon</td>
				<td>Alamat</td>
				<td>No. Telp</td>
				<td>Email</td>
				<td>Status</td>
			</tr>
			
			<?php
if( ! empty($yayasan)){
    $no = 1;
    foreach($yayasan as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nm_yayasan."</td>";
        echo "<td>".$data->nm_penanggungjwb."</td>";
        echo "<td>".$data->nm_pemohon."</td>";
        echo "<td>".$data->alamat."</td>";
        echo "<td>".$data->no_telp."</td>";
        echo "<td>".$data->email."</td>";
        echo "<td>".$data->status."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
		</table>
		</div>
	</body>
</html>