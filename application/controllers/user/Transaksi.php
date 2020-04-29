<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_data_barang');
		$this->load->model('Transaksimodel');
		if ($this->session->userdata('role_id')!='2') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				anda belum login
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/login');
		}
	}

	public function index()
	{

		$data['tampil_data']=$this->Transaksimodel->get();
		$data['barang']=$this->Model_data_barang->get();		
		// $ani['tampil_upadate']=$this->Model_data_barang->Getdetail($where);
		$this->load->view('partial_user/header');
		$this->load->view('partial_user/sidebar');
		$this->load->view('partial_user/navbar');
		$this->load->view('transaksi/transaksi',$data);
		$this->load->view('transaksi/input_transaksi');
		$this->load->view('transaksi/delete');
		// $this->load->view('data_barang/update_data_barang');
		$this->load->view('partial_user/footer');

		
	}

	public function simpan()
	{
		$nama_barang    =  $this->input->post('nama_barang');
		$qty            =  $this->input->post('qty');
		
		$idbarang       = $this->db->get_where('data_barang',array('nama_barang'=>$nama_barang))->row_array();
		$data           = array(
			'barang_id'  =>$idbarang['barang_id'],
			'qty'        =>$qty,
			'harga'      =>$idbarang['harga'],
			'status'     =>'0');
		$save = $this->Transaksimodel->insert($data);

		if ($save == true) {

			redirect('user/transaksi');
			# code...
		}else{
			echo "gagal disimpan";
		}
		# code...
	}

	public function hapus($id)
	{
		$this->Transaksimodel->hapus($id);
		redirect('user/transaksi','refresh');
		# code...
	}


	public function selesai()
	{
		$tanggal=date('Y-m-d');
		$user  =  $this->session->userdata('username');
		$id_op =  $this->db->get_where('tb_user',array('username'=>$user))->row_array();
		$data=array('operator_id'=>$id_op['operator_id'],'tanggal_transaksi'=>$tanggal);
		$this->Transaksimodel->selesai_belanja($data);
		redirect('user/transaksi');
	}


}
/* End of file Transaksi.php */
/* Location: ./application/controllers/user/Transaksi.php */
