<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Operator extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_auth');
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
		$data['tampil_data']=$this->Model_auth->get_al();		
		// $ani['tampil_upadate']=$this->Model_data_barang->Getdetail($where);
		$this->load->view('partial_user/header');
		$this->load->view('partial_user/sidebar');
		$this->load->view('partial_user/navbar');
		$this->load->view('data_operator/data_operator',$data);
		$this->load->view('data_operator/inputan_data_oprator');
		$this->load->view('data_operator/update');
		$this->load->view('data_operator/delete');
		$this->load->view('partial_user/footer');
		# code...
	}


	public function hapus($id)
	{
		$cek=$this->Model_auth->cek($id);     
		$record = $cek->row(); 
		if ($record->status == "masuk") {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Oppss</h4>
				<p>Akun anda tidak bisa di hapus karena anda sedang login</p>
				</div>');   
			redirect('user/data_operator'); 
		}else{
			$this->Model_auth->hapus($id);
			redirect('user/data_operator');	
		}
		
	}

	public function proses_simpan()
	{

		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$sql = $this->Model_auth->cek_register($username);
		$cek_username = $sql->num_rows();
		if ($cek_username > 0) {
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-danger">
				<h4>Oppss</h4>
				<p>username anda sudah ada</p>
				</div>');   
			redirect('user/data_operator');
		}else{

			$datasimpan=array('nama'=>$nama,'username'=>$username,'password'=>$password,'role_id'=>2,'status'=>"keluar");
			$save=$this->Model_auth->insert($datasimpan);
			if ($save == true) {
				redirect('user/data_operator');
    	# code...
			}else{
				echo "gagal disimpan";
			}
		}

		# code...
	}

	public function update()
	{

		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$datasimpan=array('nama'=>$nama,'username'=>$username,'password'=>$password,'role_id'=>2);
		$save=$this->Model_auth->update($datasimpan);
		if ($save == true) {
			redirect('user/data_operator');
    	# code...
		}else{
			echo "gagal disimpan";
		}

		# code...
	}







}


/* End of file data_operator.php */
/* Location: ./application/controllers/user/data_operator.php */