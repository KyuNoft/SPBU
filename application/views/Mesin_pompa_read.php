<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table {
			background-color: #66ccff;
		}
		tr:nth-child(odd) {
			background-color: #e6ff99;
		}
	</style>
	<title>Mesin Pompa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
</head>
<body bgcolor="#80ff00">
	<div class="div2">
        <fieldset>
<legend>List Data Mesin Pompa</legend>
<table align="center" border="1">
<tr>
	<th width="100">No Pompa</th>
	<th width="100">BBM</th>
</tr>
<?php
foreach ($rows as $row) {
?>
<tr>
	<td align="center"><?php echo $row->no_pompa;?></td>
	<td align="center"><?php echo $row->nama_bbm;?></td>
	<td align="center">
		<a href="delete_mesin_pompa/<?php echo $row->no_pompa; ?>">Hapus</a>
	</td>
</tr>
<?php
}
?>
</table>
</fieldset>
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