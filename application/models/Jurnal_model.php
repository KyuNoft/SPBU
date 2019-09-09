<?php
class Jurnal_model extends ci_model{

	function GenerateJurnal($no_nota, $no_akun, $posisi_dr_cr, $total){
		$tgl = $this->db->get_where('penjualan_pershift', array('no_nota' => $no_nota))->row_array();
		$query = array(
			'no_nota'      => $no_nota,
			'no_akun'      => $no_akun,
			'tgl_jurnal'   => $tgl['tgl_nota'],
			'posisi_dr_cr' => $posisi_dr_cr,
			'nominal'      => $total);
		$this->db->insert('jurnal', $query);
	}
	function GetDataJurnal(){
		if(isset($_POST['tgl_awal'], $_POST['tgl_akhir'])){
			$this->db->where('tgl_jurnal>=', $_POST['tgl_awal']);
			$this->db->where('tgl_jurnal<=', $_POST['tgl_akhir']);
		}
		$this->db->select('j.no_akun, a.header_akun, j.tgl_jurnal, a.nama_akun, j.posisi_dr_cr, j.nominal');
		$this->db->from('jurnal as j');
		$this->db->join('akun as a', 'a.no_akun = j.no_akun');
		$this->db->order_by('no_nota');
		$this->db->order_by('no_akun');
		$query = $this->db->get();
		return $query->result_array();
	}
	function GetDataAkun(){
		return $this->db->get('akun')->result_array();
	}
	function GetSaldoAkun($no_akun){
		$this->db->where('no_akun', $no_akun);
		return $this->db->get('akun')->row_array();
	}
	function GetDataBukuBesar($no_akun){
		$this->db->where('j.no_akun', $no_akun);
		$this->db->select('j.no_akun, j.tgl_jurnal, a.nama_akun, j.posisi_dr_cr, j.nominal');
		$this->db->from('jurnal as j');
		$this->db->join('akun as a', 'a.no_akun = j.no_akun');
		$this->db->order_by('no_nota');
		$this->db->order_by('no_akun');
		$query = $this->db->get();
		return $query->result_array();
	}
}