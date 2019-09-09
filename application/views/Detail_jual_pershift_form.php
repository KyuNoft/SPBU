<title>SPBU</title>
<h3 align="center">Transaksi Penjulan PerShift</h3>
<?php
echo form_open('SPBU/detail_jual_pershift');
?>

<table border="1" align="center">
	<tr>
		<th>Masukkan Transaksi</th>
	</tr>
	<tr>
		<td>No Nota : <input type="text" name="no_nota" readonly value="<?php echo $nota;?>"></td>
	</tr>
	<tr>
		<td>BBM : <input list="BBM" name="nama_bbm" placeholder="Pilih BBM"></td>
	</tr>
	<tr>
		<td>Jumlah : <input type="text" name="jumlah" placeholder="Liter"></td>
	</tr>
	<tr>
		<td>
			<div align="center"><button type="submit" name="submit">Tambah</button></div>
		</td>
	</tr>
	<tr>
		<td>
			<p align="center"><?php echo anchor ('SPBU/pilih_nota', 'Pilih Nota');?></p>
		</td>
	</tr>
</table>
</form>

<table border="2" align="center">
	<tr><th colspan="9">Nota Penjualan</th></tr>
	<tr><th>No</th>
		<th>No Nota</th>
		<th>BBM</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
	<?php
	$no = 1;
	$total = 0;
	foreach ($djp as $d)
	{
		echo
		"<tr>
		<td>$no</td>
		<td>$d->no_nota</td>
		<td>$d->nama_bbm</td>
		<td>$d->jumlah Liter</td>
		<td>Rp. $d->subtotal</td>
		<td>".anchor('SPBU/hapus_detail_jual_pershift/'.$d->no_nota.'/'.$d->no_bbm.'/'.$d->jumlah, 'Hapus')."</td>
		</tr>";
		$total = $total+$d->subtotal;
		$no++;
	}
	?>
	<tr><td colspan="4"><p align="right">Total</p></td><td><?php echo 'Rp. '.$total;?></td></tr>
</table>
<?php 
if($total == 0){
	echo "<p align='center'>".anchor ('SPBU/selesai_djp', 'Simpan Transaksi')."</p><br>";
}
else{
    echo "<p align='center'>".anchor ('SPBU/selesai_djp/'.$d->no_nota.'/'.$total, 'Simpan Transaksi')."</p><br>";
}
?>

<datalist id="BBM">
	<?php
	foreach ($bbm as $b)
	{
		echo "<option value='$b->nama_bbm'>";
	}
	?>
</datalist>

<datalist id="Nota">
	<?php
	foreach ($nota as $n)
	{
		echo "<option value='$n->no_nota'>";
	}
	?>
</datalist>