<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css")?>">
</head>

<fieldset class="struk">
	<legend>Struk</legend>
	<p>Id Struk &nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<?php echo $id;?></p><br>
	<p>Tanggal &nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<?php echo $tgl;?></p><br>
	<p>BBM &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<?php echo $bbm;?></p><br>
	<p>Jumlah &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<?php echo $jumlah." Liter";?></p><br><br>
	<p>Total &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<?php echo "Rp. ".$total;?></p><br>

		<h2 class="ucapan">Terimakasih</h2>
</fieldset>

<p align='center'><?php echo anchor ('SPBU/cetak_sp/', 'Selesai');?></p>