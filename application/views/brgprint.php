<html>
	<head>
		<title>Laporan Donasi Barang</title>
		<link href="<?php echo base_url('assets/css/laporan.css') ?>" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="page">
		<div class="kop">
            <div class="header2"><br>
                <h2 style="text-align: center;">Laporan Donasi Barang RAME WEB</h2>
                <h4 style="text-align: center;"><?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?></h4>
            </div>
		</div>
		
            <div class="batas"></div>
            
		<table class="table" border="1px">
			<tr class="head">
				<td width="5">No. </td>
				<td width="100">Nama Pengirim</td>
				<td width="85">Nama Barang</td>
				<td>Jumlah Barang</td>
				<td>No. Telp</td>
				<td width="100">Email</td>
				<td width="40">Status</td>
			</tr>
			
			<?php
if( ! empty($donasi_barang)){
    $no = 1;
    foreach($donasi_barang as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nm_pengirim."</td>";
        echo "<td>".$data->nm_brg."</td>";
        echo "<td>".$data->jml_brg."</td>";
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