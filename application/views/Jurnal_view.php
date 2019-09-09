<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
	</head>
	<body bgcolor="#9999ff">
		<div>
			<h3 align ='center'>Jurnal Umum</h3>
			<center>
			  <form method ="POST" action="<?php echo site_url('SPBU/jurnal');?>">
					Tanggal Awal : <input type='date' name='tgl_awal'>
					Tanggal Akhir : <input type='date' name='tgl_akhir'>
				<button type="submit">Filter</button>
			  </form>
			</center>
			<center>
			<table border='1' bgcolor="#ffffcc" class="jurnal">
				<tr align="center">
					<td>Tanggal Jurnal</td>
					<td>Keterangan</td>
					<td>Ref</td>
					<td>Debit</td>
					<td>Kredit</td>
				</tr>
				<?php
					$total_debit = 0;
					$total_kredit = 0;
					$spasi = '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
					foreach($jurnal as $j){
						echo "
							<tr>
								<td>".$j['tgl_jurnal']."</td>
							";
						if($j['posisi_dr_cr'] == 'd'){
							echo "
								<td>".$j['nama_akun']."</td>
								<td>".$j['no_akun']."</td>
								<td align='right'>Rp. ".($j['nominal'])."</td>
								<td align='right'></td>
							</tr>
							";
							$total_debit = $total_debit + $j['nominal'];
						}
						else{
							echo "
								<td>".$spasi.$j['nama_akun']."</td>
								<td>".$j['no_akun']."</td>
								<td align='right'></td>
								<td align='right'>Rp. ".($j['nominal'])."</td>
							</tr>
							";
							$total_kredit = $total_kredit + $j['nominal'];
						}
					}
				?>
				<tr>
					<td colspan= 3>Total</td>
					<td align='right'><?php echo "Rp. ".($total_debit);?></td>
					<td align='right'><?php echo "Rp. ".($total_kredit);?></td>
				</tr>
			</table>
		</center>
		</div>
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