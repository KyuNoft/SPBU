<!DOCTYPE html>
<html>
<head>
	<title>Struk penjualan Pershift</title>
</head>
<body>
<h2>Struk_penjualan_Pershift</h2>
<p><strong>Tambah Data</strong></p>

<form action="insert_struk_penjualan_pershift" method="post">
	Id Struk :
	<input type="text" name="id_struk" maxlength="10"><br/><br/>

	Tanggal Struk:
	<input type="date" name="tgl_struk"><br/><br/>

	Total :
	<input type="text" name="total"><br/><br/>

	<input type="submit" name="submit" value="Buat">
	<input type="button" value="Batal" onclick="javascript:history.go(-1);">	
</form>

</body>
</html>