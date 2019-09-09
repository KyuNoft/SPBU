<title>SPBU</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
<div class="div2">
<h1 align="center">Struk Penjualan</h1>
<?php
echo form_open('SPBU/struk_penjualan');
?>
<br>
<table border="2" align="center">
	<tr>
		<th>Masukkan Transaksi</th>
	</tr>
	<tr>
		<td align="center">ID Struk : <input type="text" name="id_struk" readonly value="<?php echo $id;?>"></td>
	</tr>
	<tr>
		<td>Tanggal : <input type="date" name="tgl_struk" value="<?php echo date('Y-m-d');?>"></td>
	</tr>
	<tr>
		<td align="center">BBM : <input list="BBM" name="nama_bbm" placeholder="Pilih BBM"></td>
	</tr>
	<tr>
		<td>Jumlah : <input type="text" name="jumlah_liter" placeholder="Liter"></td>
	</tr>
	<tr>
		<td>
				<div align="center"><button type="submit" name="submit">Cetak</button></div>
		</td>
	</tr>
</table>
</form>
</div>
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

<datalist id="BBM">
	<?php
	foreach ($bbm as $b)
	{
		echo "<option value='$b->nama_bbm'>";
	}
	?>
</datalist>