<?php
class Mesin_pompa_model extends ci_model{

	function read_pompa(){
		$sql="SELECT mp.no_pompa, b.nama_bbm
		      FROM mesin_pompa as mp, bbm as b
		      WHERE b.no_bbm = mp.no_bbm
		      ORDER BY no_pompa";
		$query = $this->db->query($sql);
		return $query->result() ;
	}
	function insert_pompa(){
		$sql=sprintf("INSERT INTO mesin_pompa VALUES('%s', '%s')", $this->no_pompa, $this->no_bbm);
		$this->db->query($sql);
	}
	function delete_pompa(){
		$this->db->query('SET FOREIGN_KEY_CHECKS=0');
		$sql=sprintf("DELETE FROM mesin_pompa WHERE no_pompa = '%s'", $this->no_pompa);
		$this->db->query($sql);
		$this->db->query('SET FOREIGN_KEY_CHECKS=1');
	}
	function list_pompa()
	{
		$q = "SELECT *
		      FROM mesin_pompa";
		return $this->db->query($q);
	}
	function get_one($id)
	{
		$parameter = array('no_pompa' => $id);
		return $this->db->get_where('mesin_pompa', $parameter);
	}
} 
?>