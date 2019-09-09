<?php
class Penjualan_pershift_model extends ci_model{

	function read_penjualan_pershift(){
		$sql="SELECT * FROM penjualan_pershift ORDER BY no_nota";
		$query = $this->db->query($sql);
		return $query->result() ;
	}
	function insert_penjualan_pershift(){
		$sql=sprintf("INSERT INTO penjualan_pershift VALUES('%s', '%s', %d)", $this->no_nota, $this->tgl_nota, $this->total);
		$this->db->query($sql);
	}
	function delete_penjualan_pershift(){
		$this->db->query('SET FOREIGN_KEY_CHECKS=0');
		$sql=sprintf("DELETE FROM penjualan_pershift WHERE no_nota = '%s'", $this->no_nota);
		$this->db->query($sql);
		$this->db->query('SET FOREIGN_KEY_CHECKS=1');
	}
	function update_penjualan_pershift(){
		$sql=sprintf("UPDATE penjualan_pershift SET tgl_nota = '%s', total = %d WHERE no_nota = '%s'", $this->tgl_nota, $this->total, $this->no_nota);
		$this->db->query($sql);
	}
	function list_penjualan_pershift()
	{
		$q = "SELECT *
		      FROM penjualan_pershift";
		return $this->db->query($q);
	}
	function get_one($id)
	{
		$parameter = array('no_nota' => $id);
		return $this->db->get_where('penjualan_pershift', $parameter);
	}
	function get_no_nota() { 
        $q = $this->db->query("SELECT MAX(RIGHT(no_nota,3)) AS idmax FROM penjualan_pershift");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1;
                if($tmp >= 10){
                $kd = sprintf("0".$tmp);
            }
            else{
            	$kd = sprintf("00".$tmp);
            }
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "001";
        }
        $kar = "N"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   }
}
?>