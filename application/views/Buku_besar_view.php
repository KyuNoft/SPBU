<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
	</head>
	<body bgcolor="#9999ff">
		<h3 align='center'>Buku Besar <?php echo $dataakun['nama_akun'];?></h3>
		<center>
		<form method="POST" action="<?php echo site_url().'/SPBU/bukubesar';?>">
		  Pilih Akun: <select name="no_akun">
			<option value="#" disabled selected>Pilih Akun</option>
			<?php
				foreach($akun as $a){
					echo "<option value = ".$a['nama_akun'].">".$a['nama_akun']."</option>";
				}
			?>
		  </select>
		  <button type="submit">Submit</button>
		</form>
		<table Border ='1' bgcolor="#ffffcc">
			<tr align="center">
				<td>Tanggal</td>
				<td>Keterangan</td>
				<td>Debit</td>
				<td>Kredit</td>
				<td>Saldo</td>
			</tr>
			<?php
				echo "
					<tr>
						<td></td>
						<td>Saldo Awal</td>
						<td></td>
						<td></td>
						<td align='right'>Rp. ".($a['saldo_awal'])."</td>
					</tr>
					";
				$saldo = $dataakun['saldo_awal'];
				foreach($jurnal as $j){
					echo "
						<tr>
							<td>".$j['tgl_jurnal']."</td>
							<td>".$j['nama_akun']."</td>
						";
					if($j['posisi_dr_cr'] == 'd'){
						//if($dataakun['header_akun'] == d or $dataakun['header_akun'] == 5 or $dataakun['header_akun'] == 6){
                        if($dataakun['header_akun'] == 1 or $dataakun['header_akun'] == 5 or $dataakun['header_akun'] == 6){  
							$saldo = $saldo + $j['nominal'];
						}
						else{
							$saldo = $saldo - $j['nominal'];
						}
						echo "
							<td align='right'>Rp. ".($j['nominal'])."</td>
							<td></td>
							<td align='right'>Rp. ".($saldo)."</td>
						</tr>
						";
					}
					else{
						if($dataakun['header_akun'] == 1 or $dataakun['header_akun'] == 5 or $dataakun['header_akun'] == 6){
							$saldo = $saldo - $j['nominal'];
						}else{
							$saldo = $saldo + $j['nominal'];
						}
						echo "
							<td></td>
							<td align='right'>Rp. ".($j['nominal'])."</td>
							<td align='right'>Rp. ".($saldo)."</td>
						</tr>
						";
					}
				}
				echo "
					<tr>
						<td></td>
						<td>Saldo Akhir</td>
						<td></td>
						<td></td>
						<td align='right'>Rp. ".($saldo)."</td>
					</tr>
				";
			?>
		</table>
	</center>
	</body>
	<img src="<?php echo base_url("assets/img/logo.png");?>" class="logo">
    <ul class="nav1">
        <li class="nav2"><a href="#">Operator</a>
            <ul class="nav3">
                <li class="nav4"><a href="insert_operator">Tambah Operator</a></li>
                <li class="nav4"><a href="operator">Lihat Operator</a></li>
                <li class="nav4"><a href="jadwal_operator">Jadwal</a></li>
            </ul>
        </li>
        <li class="nav2"><a href="#">BBM</a>
            <ul>
                <li><a href="insert_bbm">Tambah BBM</a></li>
                <li><a href="bbm">Lihat Stok</a></li>
            </ul>
        </li>
        <li class="nav2"><a href="#">Mesin Pompa</a>
            <ul>
                <li><a href="insert_mesin_pompa">Tambah Pompa</a></li>
                <li><a href="mesin_pompa">Lihat Pompa</a></li>
            </ul>
        </li>
        <li class="nav2"><a href="#">Nota Penjualan</a>
            <ul>
                <li><a href="insert_penjualan_pershift">Tambah Nota</a></li>
                <li><a href="penjualan_pershift">Lihat Nota</a></li>
                <li><a href="pilih_nota">Isi Nota</a></li>
            </ul>
        </li>
        <li class="nav2"><a href="#">Struk Jual</a>
            <ul>
                <li><a href="struk_penjualan">Tambah Struk</a></li>
            </ul>
        </li>
        <li class="nav2"><a href="#">Laporan</a>
            <ul>
                <li><a href="jurnal">Jurnal</a></li>
                <li><a href="bukubesar">Buku Besar</a></li>
            </ul></li>
    </ul>
</html>