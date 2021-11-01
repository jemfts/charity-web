<html>
	<head>
		<title>Laporan Donasi Jasa</title>
		<link href="<?php echo base_url('assets/css/laporan.css') ?>" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="page">
		<div class="kop">
            <div class="header2"><br>
                <h2 style="text-align: center;">Laporan Donasi Jasa RAME WEB</h2>
                <h4 style="text-align: center;"><?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?></h4>
            </div>
		</div>
		
            <div class="batas"></div>
            
		<table class="table" border="1px">
			<tr class="head">
				<td width="5">No. </td>
				<td width="100">Nama Lengkap</td>
				<td width="20">Usia</td>
				<td width="50">Alamat</td>
				<td>No. Telp</td>
				<td>Pend. Akhir</td>
				<td width="100">Email</td>
				<td width="40">Status</td>
			</tr>
			
			<?php
if( ! empty($donasi_jasa)){
    $no = 1;
    foreach($donasi_jasa as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nm_lengkap."</td>";
        echo "<td>".$data->usia."</td>";
        echo "<td>".$data->alamat."</td>";
        echo "<td>".$data->no_telp."</td>";
        echo "<td>".$data->pend_akhir."</td>";
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