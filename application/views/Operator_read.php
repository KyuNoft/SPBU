<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table {
			background-color: orange;
		}
		tr:nth-child(odd) {
			background-color: lightblue;
		}
		fieldset {
			width: 60%;
			margin-left: 25%; 
			border-color: black;
			margin-top: 10%;
		}
	</style>
	<title>Operator</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
</head>
<body bgcolor=skyblue>
	<fieldset>
<legend>List Data Operator</legend>
<table align="center" border="2">
<tr>
	<th width="100">Id Operator</th>
	<th width="100">Nama Operator</th>
	<th width="100">No Telpon</th>
	<th width="250">Alamat</th>
</tr>
<?php
foreach ($rows as $row) {
?>
<tr>
	<td align="center"><?php echo $row->id_operator;?></td>
	<td align="center"><?php echo $row->nama_operator;?></td>
	<td align="center"><?php echo $row->no_telp;?></td>
	<td align="center"><?php echo $row->alamat;?></td>
	<td align="center">
		<a href="update_operator/<?php echo $row->id_operator; ?>">Ubah</a>
	</td>
	<td align="center">
		<a href="delete_operator/<?php echo $row->id_operator; ?>">Hapus</a>
	</td>
</tr>
<?php
}
?>
</table>
</fieldset>
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