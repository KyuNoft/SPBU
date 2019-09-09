<html>
<head>
	<style type="text/css">
		fieldset {
			width: 30%;
			margin-left: 30%; 
			border-color: black;
		}
		h2 {
			margin-left: 42%;
			margin-top: 7%;
		}
	</style>
	<title>Operator</title></head>
<body bgcolor="skyblue">
<h2>Operator</h2>
<fieldset width=50%  height=70%>
<legend><p><strong>Update Data Operator</strong></p></legend>
<form action="update_operator" method="post">
	<pre>
Id operator   : <input type ="text" name="id_operator" maxlength="10" readonly value="<?php echo $Operator_model->id_operator;?>" /><br/>
Nama Operator : <input type ="text" name="nama_operator" value="<?php echo $Operator_model->nama_operator;?>" /><br/>
No Telpon     : <input type ="text" name="no_telp" maxlength="12" value="<?php echo $Operator_model->no_telp;?>"/><br/>
Alamat        : <br><textarea rows="4" cols="50" name="alamat" value="<?php echo $Operator_model->alamat;?>"></textarea><br/>
<input type ="submit" name="submit" value="Ubah">  <input type ="button" value="Batal" onclick="javascript:history.go(-1);"/>
</pre>
</fieldset>

</form>
</body>
</html>