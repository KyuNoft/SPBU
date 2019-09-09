<?php
class SPBU extends CI_controller{
	function __construct(){
		parent::__construct();
		$this->load->model(array('BBM_model','Operator_model','Penjualan_pershift_model','Mesin_pompa_model','Detail_jual_pershift_model','Struk_penjualan_model','Jurnal_model'));
	}
	function index(){
		$this->load->view('Home_view');
	}
	//BBM
	function bbm(){
		$rows = $this->BBM_model->read_bbm();
		$this->load->view('BBM_read', ['rows'=>$rows]);
	}
	function insert_bbm(){
		if (isset($_POST['submit'])) {
			$this->BBM_model->no_bbm    = $_POST['no_bbm'];
			$this->BBM_model->nama_bbm  = $_POST['nama_bbm'];
			$this->BBM_model->harga_bbm = $_POST['harga_bbm'];
			$this->BBM_model->stok      = $_POST['stok'];
			$this->BBM_model->insert_bbm();
			redirect('SPBU/insert_bbm');
		} else {
			$this->load->view('BBM_create', ['BBM_model'=>$this->BBM_model]);
		}
	}
    function update_bbm($id) {
		if (isset($_POST['submit'])) {
			$this->BBM_model->no_bbm    = $_POST['no_bbm'];
			$this->BBM_model->nama_bbm  = $_POST['nama'];
			$this->BBM_model->harga_bbm = $_POST['harga_bbm'];
			$this->BBM_model->stok      = $_POST['stok'];
			$this->BBM_model->update_bbm();
			redirect('SPBU/bbm');
			} else {
				$query = $this->db->query("SELECT * FROM bbm WHERE no_bbm = '$id'");
				$row =$query->row();
				$this->BBM_model->no_bbm    = $row->no_bbm;
				$this->BBM_model->nama_bbm  = $row->nama_bbm;
				$this->BBM_model->harga_bbm = $row->harga_bbm;
				$this->BBM_model->stok      = $row->stok;
				$this->load->view('BBM_update', ['BBM_model'=>$this->BBM_model]);
			}
		}
	function delete_bbm($id) {
			$this->BBM_model->no_bbm = $id;
			$this->BBM_model->delete_bbm();
			redirect('SPBU/bbm');
		}
		//Operator
	function operator(){
		$rows = $this->Operator_model->read_operator();
		$this->load->view('Operator_read', ['rows'=>$rows]);
	}
	function insert_operator(){
		if (isset($_POST['submit'])) {
			$this->Operator_model->id_operator   = $_POST['id_operator'];
			$this->Operator_model->nama_operator = $_POST['nama_operator'];
			$this->Operator_model->no_telp       = $_POST['no_telp'];
			$this->Operator_model->alamat        = $_POST['alamat'];
			$this->Operator_model->insert_operator();
			redirect('SPBU/insert_operator');
		} else {
			$this->load->view('Operator_create', ['Operator_model'=>$this->Operator_model]);
		}
	}
    function update_operator($id) {
		if (isset($_POST['submit'])) {
			$this->Operator_model->id_operator   = $_POST['id_operator'];
			$this->Operator_model->nama_operator = $_POST['nama_operator'];
			$this->Operator_model->no_telp       = $_POST['no_telp'];
			$this->Operator_model->alamat        = $_POST['alamat'];;
			$this->Operator_model->update_operator();
			redirect('SPBU/operator');
			} else {
				$query = $this->db->query("SELECT * FROM operator WHERE id_operator = '$id'");
				$row =$query->row();
				$this->Operator_model->id_operator   = $row->id_operator;
				$this->Operator_model->nama_operator = $row->nama_operator;
				$this->Operator_model->no_telp       = $row->no_telp;
				$this->Operator_model->alamat        = $row->alamat;
				$this->load->view('Operator_update', ['Operator_model'=>$this->Operator_model]);
			}
		}
	function delete_operator($id) {
			$this->Operator_model->id_operator = $id;
			$this->Operator_model->delete_operator();
			redirect('SPBU/operator');
		}
		//Penjualan PerShift
	function penjualan_pershift(){
		$rows = $this->Penjualan_pershift_model->read_penjualan_pershift();
		$this->load->view('penjualan_pershift_read', ['rows'=>$rows]);
	}
	function insert_penjualan_pershift(){
		if (isset($_POST['submit'])) {
			$this->Penjualan_pershift_model->no_nota  = $_POST['no_nota'];
			$this->Penjualan_pershift_model->tgl_nota = $_POST['tgl_nota'];
			$this->Penjualan_pershift_model->insert_penjualan_pershift();
			redirect('SPBU/insert_penjualan_pershift');
		} else {
			$data['id']    = $this->Penjualan_pershift_model->get_no_nota();
			$this->load->view('Penjualan_pershift_create', $data,['Penjualan_pershift_model'=>$this->Penjualan_pershift_model]);
		}
	}
    function update_penjualan_pershift($id) {
		if (isset($_POST['submit'])) {
			$this->Penjualan_pershift_model->no_nota  = $_POST['no_nota'];
			$this->Penjualan_pershift_model->tgl_nota = $_POST['tgl_nota'];
			$this->Penjualan_pershift_model->total    = $_POST['total'];
			$this->Penjualan_pershift_model->update_penjualan_pershift();
			redirect('SPBU/penjualan_pershift');
			} else {
				$query = $this->db->query("SELECT * FROM penjualan_pershift WHERE no_nota = '$id'");
				$row =$query->row();
				$this->Penjualan_pershift_model->no_nota  = $row->no_nota;
				$this->Penjualan_pershift_model->tgl_nota = $row->tgl_nota;
				$this->Penjualan_pershift_model->total    = $row->total;
				$this->load->view('Penjualan_pershift_update', ['Penjualan_pershift_model'=>$this->Penjualan_pershift_model]);
			}
		}
	function delete_penjualan_pershift($id) {
			$this->Penjualan_pershift_model->no_nota = $id;
			$this->Penjualan_pershift_model->delete_penjualan_pershift();
			redirect('SPBU/penjualan_pershift');
		}
		//Mesin Pompa
	function mesin_pompa(){
		$rows = $this->Mesin_pompa_model->read_pompa();
		$this->load->view('Mesin_pompa_read', ['rows'=>$rows]);
	}
	function insert_mesin_pompa(){
		if (isset($_POST['submit'])) {
			$this->Mesin_pompa_model->no_pompa = $_POST['no_pompa'];
			$this->Mesin_pompa_model->no_bbm   = $_POST['no_bbm'];
			$this->Mesin_pompa_model->insert_pompa();
			redirect('SPBU/insert_mesin_pompa');
		} else {
			$data['bbm'] = $this->BBM_model->list_bbm()->result();
			$this->load->view('Mesin_pompa_create', $data, ['Mesin_pompa_model'=>$this->Mesin_pompa_model,]);
		}
	}
	function delete_mesin_pompa($id) {
			$this->Mesin_pompa_model->no_pompa = $id;
			$this->Mesin_pompa_model->delete_pompa();
			redirect('SPBU/mesin_pompa');
		}
		//Detail Jual Pershift
	function pilih_nota(){
			$data['nota'] = $this->Penjualan_pershift_model->list_penjualan_pershift()->result();
			$this->load->view('Pilih_nota_form', $data);
		}
	function detail_jual_pershift(){
		if(isset($_POST['submit']))
		{
			$this->Detail_jual_pershift_model->simpan_djp();
			$data['nota']  = $_POST['no_nota'];
			$data['bbm']   = $this->BBM_model->list_bbm()->result();
			$data['djp']   = $this->Detail_jual_pershift_model->tampilkan_djp()->result();
			$this->load->view('Detail_jual_pershift_form', $data);
		}
		else
		{
			$data['nota']  = $_POST['no_nota'];
			$data['bbm']   = $this->BBM_model->list_bbm()->result();
			$data['djp']   = $this->Detail_jual_pershift_model->tampilkan_djp()->result();
			$this->load->view('Detail_jual_pershift_form', $data);
		}
	}
	function hapus_detail_jual_pershift(){
		$no_nota  = $this->uri->segment(3);
		$no_bbm   = $this->uri->segment(4);
		$jumlah   = $this->uri->segment(5);
		$this->Detail_jual_pershift_model->hapus_djp($no_nota,$no_bbm,$jumlah);
		$data['nota']  = $no_nota;
		$data['bbm']   = $this->BBM_model->list_bbm()->result();
	    $data['djp']   = $this->Detail_jual_pershift_model->tampilkan_djp()->result();
	    $this->load->view('Detail_jual_pershift_form', $data);
	}
	function selesai_djp($id,$total){
		$this->Detail_jual_pershift_model->selesai_djp($id,$total);

		//Masuk ke Jurnal
		$this->Jurnal_model->GenerateJurnal($id, '111', 'd', $total);
		$this->Jurnal_model->GenerateJurnal($id, '411', 'k', $total);
		redirect('SPBU/pilih_nota');
	}
	//Struk Penjualan
	function struk_penjualan(){
		if(isset($_POST['submit']))
		{
			$this->Struk_penjualan_model->simpan_sp();
			$data['id']     = $_POST['id_struk'];
			$data['tgl']    = $_POST['tgl_struk'];
			$data['bbm']    = $_POST['nama_bbm'];
			$data['jumlah'] = $_POST['jumlah_liter'];
			$bbm            = $this->db->get_where('bbm', array('nama_bbm' => $_POST['nama_bbm']))->row_array();
			$data['total']  = $bbm['harga_bbm']*$_POST['jumlah_liter']; 
			$this->load->view('Struk_penjualan_view', $data);
		}
		else
		{
			$data['id']    = $this->Struk_penjualan_model->get_idstruk();
			$data['bbm']   = $this->BBM_model->list_bbm()->result();
			$this->load->view('Struk_penjualan_form', $data);
		}
	}
	function cetak_sp(){
		$this->Struk_penjualan_model->cetak_sp();
		redirect('SPBU/struk_penjualan');
	}
	//Jadwal Operator
	function jadwal_operator(){
		$data['jadwal'] = $this->Operator_model->jadwal_operator()->result();
		$this->load->view('Operator_jadwal_view', $data);
	}
	//Jurnal
	public function jurnal(){
		$data['jurnal'] = $this->Jurnal_model->GetDataJurnal();
		$this->load->view('Jurnal_view', $data);
	}
	//Buku Besar
	public function bukubesar(){
		if(isset($_POST['no_akun'])){
			$no_akun = $_POST['no_akun'];
		}
		else{
			$no_akun = '111';
		}
		$data['akun']     = $this->Jurnal_model->GetDataAkun();
		$data['dataakun'] = $this->Jurnal_model->GetSaldoAkun($no_akun);
		$data['jurnal']   = $this->Jurnal_model->GetDataBukuBesar($no_akun);
		$this->load->view('Buku_besar_view', $data);
	}
}
?>