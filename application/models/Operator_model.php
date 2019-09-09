<?php
class Operator_model extends ci_model{

	function read_operator(){
		$sql="SELECT * FROM operator ORDER BY id_operator ASC";
		$query = $this->db->query($sql);
		return $query->result() ;
	}
	function insert_operator(){
		$sql=sprintf("INSERT INTO operator VALUES('%s', '%s', '%s', '%s')", $this->id_operator, $this->nama_operator, $this->no_telp, $this->alamat);
		$this->db->query($sql);
	}
	function delete_operator(){
		$this->db->query('SET FOREIGN_KEY_CHECKS=0');
		$sql=sprintf("DELETE FROM operator WHERE id_operator = '%s'", $this->id_operator);
		$this->db->query($sql);
		$this->db->query('SET FOREIGN_KEY_CHECKS=1');
	}
	function update_operator(){
		$sql=sprintf("UPDATE operator SET nama_operator = '%s', no_telp = '%s', alamat = '%s' WHERE id_operator = '%s'", $this->nama_operator, $this->no_telp, $this->alamat, $this->id_operator);
		$this->db->query($sql);
	}
	function list_operator()
	{
		$q = "SELECT *
		      FROM operator";
		return $this->db->query($q);
	}
	function get_one($id)
	{
		$parameter = array('id_operator' => $id);
		return $this->db->get_where('operator', $parameter);
	}
	function jadwal_operator(){
		$query = "SELECT o.nama_operator, djo.jam_mulai, djo.jam_selesai
		          FROM operator as o, detail_jaga_operator as djo
		          WHERE o.id_operator = djo.id_operator
		          GROUP BY o.id_operator";
		return $this->db->query($query);
	}
} 
?>