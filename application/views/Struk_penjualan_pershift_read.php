<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table {
			background-color: lightblue;
		}
		tr:nth-child(odd) {
			background-color: skyblue;

		}
		fieldset {
			width: 50%;
			margin-left: 20%; 
			margin-top: 10%;
			border-color: black;
		}
	</style>
	<title>Struk_penjualan_pershift</title>
</head>
<body bgcolor=aqua><fieldset>
<legend><h2 align="center">List Data Struk_penjualan_pershift</h2></legend>
<p align="center"><a href="insert_struk_penjualan_pershift">Tambah</a></p>
<table align="center" border="1">
<tr>
	<th width="100">Id Struk</th>
	<th width="100">Tanggal Struk</th>
	<th width="100">Total</th>
</tr>
<?php
foreach ($rows as $row) {
?>
<tr>
	<td align="center"><?php echo $row->id_struk;?></td>
	<td align="center"><?php echo $row->tgl_struk;?></td>
	<td align="center"><?php echo $row->total;?></td>
	<td align="center">
		<a href="update_struk_penjualan_pershift/<?php echo $row->id_struk; ?>">Ubah</a>
	</td>
	<td align="center">
		<a href="delete_struk_penjualan_pershift/<?php echo $row->id_struk; ?>">Hapus</a>
	</td>
</tr>
<?php
}
?>
</table>
</fieldset>
</body>
</html>