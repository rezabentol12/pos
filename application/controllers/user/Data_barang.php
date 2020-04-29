<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_data_barang');
		$this->load->model('Model_ketegori');	
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
		$data['tampil_data']=$this->Model_data_barang->get();
		$anu['tampil_kategori']=$this->Model_ketegori->get();		
		// $ani['tampil_upadate']=$this->Model_data_barang->Getdetail($where);
		$this->load->view('partial_user/header');
		$this->load->view('partial_user/sidebar');
		$this->load->view('partial_user/navbar');
		$this->load->view('data_barang/data_barang',$data);
		$this->load->view('data_barang/input_data_barang',$anu);
		$this->load->view('data_barang/update_data_barang',$anu);
		$this->load->view('data_barang/delete');
		$this->load->view('partial_user/footer');

		
	}



	public function simpan()
	{

		$nama_barang=$this->input->post('nama_barang');
		$kategori_barang=$this->input->post('kategori_barang');
		$harga=$this->input->post('harga');	
		$harga=str_replace('.','',$harga );
		$jumlah=$this->input->post('jumlah');
		$datasimpan=array('nama_barang'=>$nama_barang,'kategori_barang'=>$kategori_barang,'harga'=>$harga,'jumlah'=>$jumlah);
		$save=$this->Model_data_barang->insert($datasimpan);
		if ($save== true) {
			redirect('user/data_barang');
          	# code...
		}else{
			echo "gagal diSIMPAN";
		}

		# code...
	}


	public function update()
	{

		$nama_barang=$this->input->post('nama_barang');
		$kategori_barang=$this->input->post('kategori_barang');
		$harga=$this->input->post('harga');
		$harga=str_replace('.','',$harga );
		$jumlah=$this->input->post('jumlah');
		$datasimpan=array('nama_barang'=>$nama_barang,'kategori_barang'=>$kategori_barang,'harga'=>$harga,'jumlah'=>$jumlah);
		$save=$this->Model_data_barang->update($datasimpan);
		if ($save== true) {
			redirect('user/data_barang');
          	# code...
		}else{
			echo "gagal diSIMPAN";
		}

		# code...
	}

	public function delete($id)
	{
		$this->Model_data_barang->hapus($id);
		redirect('user/data_barang');
		# code...
	}

}

/* End of file Data_barang.php */
/* Location: ./application/controllers/user/Data_barang.php */ 