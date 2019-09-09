<?php
class BBM_model extends ci_model{

	function read_bbm(){
		$sql="SELECT * FROM bbm ORDER BY no_bbm";
		$query = $this->db->query($sql);
		return $query->result() ;
	}
	function insert_bbm(){
		$sql=sprintf("INSERT INTO bbm VALUES('%s', '%s', %d, %d)", $this->no_bbm, $this->nama_bbm, $this->harga_bbm, $this->stok);
		$this->db->query($sql);
	}
	function delete_bbm(){
		$this->db->query('SET FOREIGN_KEY_CHECKS=0');
		$sql=sprintf("DELETE FROM bbm WHERE no_bbm = '%s'", $this->no_bbm);
		$this->db->query($sql);
		$this->db->query('SET FOREIGN_KEY_CHECKS=1');
	}
	function update_bbm(){
		$sql=sprintf("UPDATE bbm SET nama_bbm = '%s', harga_bbm = %d, stok = %d WHERE no_bbm = '%s'", $this->nama_bbm, $this->harga_bbm, $this->stok, $this->no_bbm);
		$this->db->query($sql);
	}
	function list_bbm()
	{
		$q = "SELECT * FROM bbm";
		return $this->db->query($q);
	}
	function get_one($id)
	{
		$parameter = array('no_bbm' => $id);
		return $this->db->get_where('bbm', $parameter);
	}
} 
?>