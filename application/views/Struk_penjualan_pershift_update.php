<html>
<head><title>Struk_penjualan_pershift</title></head>
<style type="text/css">
		fieldset {
			width: 40%;
			margin-left: 30%; 
			border-color: black;
		}
	</style>
<body bgcolor="skyblue">
<h2 align="center">Struk_penjualan_pershift</h2><fieldset>
<legend><p><strong>Update Data</strong></p></legend><pre>
<form action="update_struk_penjualan_pershift" method="post">
Id Struk : <input type ="text" name="id_struk" maxlength="10" readonly value="<?php echo $Struk_penjualan_pershift_model->id_struk;?>" /><br/>
Tanggal Struk : <input type ="date" name="tgl_struk" value="<?php echo $Struk_penjualan_pershift_model->tgl_struk;?>" /><br/>
Total : <input type ="text" name="total" value="<?php echo $Struk_penjualan_pershift_model->total;?>"/><br/>
    <input type ="submit" name="submit" value="Ubah">    <input type ="button" value="Batal" onclick="javascript:history.go(-1);"/>
</fieldset></pre>
</form>
</body>
</html>