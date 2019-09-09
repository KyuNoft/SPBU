<!DOCTYPE html>
<html>
<head>
	<title>Operator</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
</head>
<body background="<?php echo base_url("assets/img/Operator.jpg")?>" class="operator">
 <div class="div1">
 <fieldset>
<legend>Operator</legend>
<p><strong>Tambah Data Operator</strong></p>
<form action="insert_operator" method="post">
	Id Operator :
	<input type="text" name="id_operator" maxlength="10"><br/><br/>

	Nama Operator :
	<input type="text" name="nama_operator"><br/><br/>

	No Telpon :
	<input type="text" name="no_telp" maxlength="12"><br/><br/>

	Alamat :<br/>
	<textarea rows="4" cols="50" name="alamat">	</textarea><br/><br/>

	<input type="submit" name="submit" value="Buat">
	<input type="button" value="Batal" onclick="javascript:history.go(-1);">	
</form>
</fieldset>
</div>>

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