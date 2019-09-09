<?php
class Detail_jual_pershift_model extends ci_model{

	function simpan_djp(){
		$no_nota     = $this->input->post('no_nota');
		$nama_bbm    = $this->input->post('nama_bbm');
		$jumlah      = $this->input->post('jumlah');
		$bbm         = $this->db->get_where('bbm', array('nama_bbm' => $nama_bbm))->row_array();
		$data        = array('no_nota'    => $no_nota,
	                         'no_bbm'     => $bbm['no_bbm'],
	                         'jumlah'     => $jumlah,
	                         'subtotal'   => $jumlah*$bbm['harga_bbm'],
		                     'status'     => '0');
		$this->db->insert('detail_jual_pershift', $data);
		$stok        = array('stok'       => $bbm['stok']-$jumlah);
		$this->db->update('bbm', $stok, array('no_bbm' => $bbm['no_bbm']));
	}
	function tampilkan_djp(){
		$q = "SELECT d.no_nota, b.nama_bbm, d.jumlah, d.subtotal, d.no_bbm
		      FROM detail_jual_pershift as d, bbm as b
		      WHERE b.no_bbm = d.no_bbm AND d.status = '0'";
		return $this->db->query($q);
	}
	function hapus_djp($no_nota,$no_bbm,$jumlah){
		$this->db->where('no_nota', $no_nota);
		$this->db->where('no_bbm', $no_bbm);
		$this->db->delete('detail_jual_pershift');
		$bbm  = $this->db->get_where('bbm', array('no_bbm' => $no_bbm))->row_array();
		$stok = array('stok' => $bbm['stok']+$jumlah);
		$this->db->update('bbm', $stok, array('no_bbm' => $bbm['no_bbm']));
	}
	function selesai_djp($id,$total){
		$total = array('total' => $total);
		$this->db->update('penjualan_pershift', $total, array('no_nota' => $id));
		$this->db->query("UPDATE detail_jual_pershift SET status = '1' WHERE status = '0'");
	}
}
?>