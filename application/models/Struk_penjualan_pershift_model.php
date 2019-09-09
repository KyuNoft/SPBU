<?php
class Struk_penjualan_pershift_model extends ci_model{

	function read_struk_penjualan_pershift(){
		$sql="SELECT * FROM struk_penjualan_pershift ORDER BY id_struk";
		$query = $this->db->query($sql);
		return $query->result() ;
	}
	function insert_struk_penjualan_pershift(){
		$sql=sprintf("INSERT INTO struk_penjualan_pershift VALUES('%s', '%s', %d)", $this->id_struk, $this->tgl_struk, $this->total);
		$this->db->query($sql);
	}
	function delete_struk_penjualan_pershift(){
		$sql=sprintf("DELETE FROM struk_penjualan_pershift WHERE id_struk = '%s'", $this->id_struk);
		$this->db->query($sql);
	}
	function update_struk_penjualan_pershift(){
		$sql=sprintf("UPDATE struk_penjualan_pershift SET tgl_struk = '%s', total = %d WHERE id_struk = '%s'", $this->tgl_struk, $this->total, $this->id_struk);
		$this->db->query($sql);
	}
	function list_struk_penjualan_pershift()
	{
		$q = "SELECT *
		      FROM struk_penjualan_pershift";
		return $this->db->query($q);
	}
	function get_one($id)
	{
		$parameter = array('id_struk_penjualan_pershift' => $id);
		return $this->db->get_where('struk_penjualan_pershift', $parameter);
	}
} 
?>