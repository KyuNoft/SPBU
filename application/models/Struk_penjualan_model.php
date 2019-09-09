<?php
class Struk_penjualan_model extends ci_model{

	function simpan_sp(){
		$id_struk     = $this->input->post('id_struk');
		$tgl_struk    = $this->input->post('tgl_struk');
		$nama_bbm     = $this->input->post('nama_bbm');
		$jumlah_liter = $this->input->post('jumlah_liter');
		$bbm          = $this->db->get_where('bbm', array('nama_bbm' => $nama_bbm))->row_array();
		$data         = array('id_struk'    => $id_struk,
	                         'tgl_struk'    => $tgl_struk,
	                         'jumlah_liter' => $jumlah_liter,
	                         'total'        => $jumlah_liter*$bbm['harga_bbm'],
		                     'no_bbm'       => $bbm['no_bbm'],
		                     'status'       => 'pending');
		$this->db->insert('struk_penjualan', $data);
		$stok         = array('stok'        => $bbm['stok']-$jumlah_liter);
		$this->db->update('bbm', $stok, array('no_bbm' => $bbm['no_bbm']));
	}
	function cetak_sp(){
		$this->db->query("UPDATE struk_penjualan SET status = 'cetak' WHERE status = 'pending'");
	}
	function get_idstruk() { 
        $q = $this->db->query("SELECT MAX(RIGHT(id_struk,3)) AS idmax FROM struk_penjualan");
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
        $kar = "S"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
}
?>