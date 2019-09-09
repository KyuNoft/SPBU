<html>
<head><title>Penjualan PerShift</title></head>
<style type="text/css">
		fieldset {
			width: 40%;
			margin-left: 30%; 
			border-color: black;
		}
	</style>
<body bgcolor="skyblue">
<h2 align="center">Penjualan PerShift</h2><fieldset>
<legend><p><strong>Update Data</strong></p></legend><pre>
<form action="update_penjualan_pershift" method="post">
Id Nota : <input type ="text" name="no_nota" maxlength="10" readonly value="<?php echo $Penjualan_pershift_model->no_nota;?>" /><br/>
Tanggal Nota : <input type ="date" name="tgl_nota" value="<?php echo $Penjualan_pershift_model->tgl_nota;?>" /><br/>
Total : <input type ="text" name="total" value="<?php echo $Penjualan_pershift_model->total;?>"/><br/>
    <input type ="submit" name="submit" value="Ubah"> <input type ="button" value="Batal" onclick="javascript:history.go(-1);"/>
</fieldset></pre>
</form>
</body>
</html>