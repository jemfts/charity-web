<html>
	<head>
		<title>Laporan Donasi Uang</title>
		<link href="<?php echo base_url('assets/css/laporan.css') ?>" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="page">
		<div class="kop">
            <div class="header2"><br>
                <h2 style="text-align: center;">Laporan Donasi Uang RAME WEB</h2>
                <h4 style="text-align: center;"><?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?></h4>
            </div>
		</div>
		
            <div class="batas"></div>
            
		<table class="table" border="1px">
			<tr class="head">
				<td width="5">No. </td>
				<td width="100">Nama Donatur</td>
				<td width="50">Alamat</td>
				<td>Jumlah Donasi</td>
				<td>No. Telp</td>
				<td width="100">Email</td>
				<td width="40">Status</td>
			</tr>
			
			<?php
if( ! empty($donasi_uang)){
    $no = 1;
    foreach($donasi_uang as $cetak_uang){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$cetak_uang->nm_donatur."</td>";
        echo "<td>".$cetak_uang->alamat."</td>";
        echo "<td>".$cetak_uang->jml_uang."</td>";
        echo "<td>".$cetak_uang->no_telp."</td>";
        echo "<td>".$cetak_uang->email."</td>";
        echo "<td>".$cetak_uang->status."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
		</table>
		</div>
	</body>
</html>