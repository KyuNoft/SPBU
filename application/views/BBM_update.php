<html>
<head>
<style type="text/css">
		fieldset {
			width: 40%;
			margin-left: 27%; 
			border-color: black;
		}
		h2 {
			margin-left: 45%;
			margin-top: 5%;
		}
	</style>
	<title>BBM</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
</head>
<body bgcolor="lightblue">
<h2>BBM</h2>
<fieldset>
<legend><p><strong>Update Data</strong></p></legend><pre>
<form action="update_bbm" method="post" align='center'>
No BBM   : <input type ="text" name="no_bbm" maxlength="10" readonly value="<?php echo $BBM_model->no_bbm;?>" /><br/>
Nama BBM : <input type ="text" name="nama" value="<?php echo $BBM_model->nama_bbm;?>" /><br/>
Harga    : <input type ="text" name="harga_bbm" value="<?php echo $BBM_model->harga_bbm;?>"/><br/>
Stok     : <input type ="text" name="stok" value="<?php echo $BBM_model->stok;?>"/><br/>
<input type ="submit" name="submit" value="Ubah">    <input type ="button" value="Batal" onclick="javascript:history.go(-1);"/>
</pre></fieldset>
</form>
</body>
</html>