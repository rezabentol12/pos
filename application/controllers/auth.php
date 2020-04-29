<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_auth');
		//Do your magic here
	}


	public function login()
	{
		$this->form_validation->set_rules('username','Username','required',['required'=>'wajib di isi']);
		$this->form_validation->set_rules('password','Password','required',['required'=>'wajib di isi']);


		if ($this->form_validation->run() == FALSE) {
			# code...

			$this->load->view('assets/header');
			$this->load->view('form_login');

			$this->load->view('assets/footer');
			

		}else {
			$auth=$this->Model_auth->cek_login();
			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					username atau password salah
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('auth/login');
			}else{

				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);
				$this->session->set_userdata('operator_id',$auth->operator_id);

				if ($auth->role_id == 2) {
				  $login=$this->db->where('username',$auth->username);
			      $this->db->update('tb_user',array('status'=>'masuk','terakhir_login'=>date('Y-m-d h:i:s')),$login);
			      redirect('user/dashboard');
				}if($auth->role_id == 1){
					$login=$this->db->where('username',$auth->username);
			      $this->db->update('tb_user',array('status'=>'masuk','terakhir_login'=>date('Y-m-d h:i:s')),$login);
			      redirect('user/Home');

				}
			}
		}
		
	}

	public function Logout()
	{

		if ($this->session->userdata('operator_id')) {
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('username',$this->session->userdata('username'));
		$this->db->update('tb_user',array('status'=>'keluar','terakhir_login'=>date('Y-m-d h:i:s')));
		
		$this->session->sess_destroy('operator_id');
		redirect('auth/login');

	}
		# code...
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */