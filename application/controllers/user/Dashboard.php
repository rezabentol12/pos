<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
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

  $data['tampil_data']=$this->Model_ketegori->get();

  $this->load->view('partial_user/header');
  $this->load->view('partial_user/sidebar');
  $this->load->view('partial_user/navbar');
  $this->load->view('template_user/user',$data);
  $this->load->view('template_user/inputan');
  $this->load->view('template_user/update');
  $this->load->view('template_user/delete');
  $this->load->view('partial_user/footer');
  

		// $this->load->view('partial_user/footer');
  
}

public function search()
{

 $cari=$this->input->post('cari');
 $data['tampil_data']=$this->Model_ketegori->search_m($cari);
 $this->load->view('partial_user/header');
 $this->load->view('partial_user/sidebar');
 $this->load->view('partial_user/navbar');
 $this->load->view('template_user/user',$data);
 $this->load->view('partial_user/footer');
    # code...
}


public function prosessimpan(){
 $nama_kategori=$this->input->post('nama_kategori');
 $foto=$_FILES['foto'];
            if ($foto='') {}else{
                     $config['upload_path']   ='./assets2/img';
                     $config['allowed_types']  ='jpg|png|jpeg';
                     $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto')) {
                     echo "upload gagal"; die();
           }else {
                    $foto=$this->upload->data('file_name');
              }
              }
$datasimpan=array('nama_kategori'=>$nama_kategori,'foto'=>$foto);
$save=$this->Model_ketegori->insert($datasimpan);
if ($save == true) {
  redirect('user/dashboard');
}else {
  echo "data gagal di seimpan";            
}
}


public function update(){
 $nama_kategori=$this->input->post('nama_kategori');
 $foto=$_FILES['foto'];
            if ($foto='') {}else{
                $config['upload_path']   ='./assets2/img';
                $config['allowed_types']  ='jpg|png|jpeg';
                $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto')) {
                echo "upload gagal"; die();
           }else {
                $foto=$this->upload->data('file_name');
            }
            }
$datasimpan=array('nama_kategori'=>$nama_kategori,'foto'=>$foto);
$save=$this->Model_ketegori->update($datasimpan);
if ($save == true) {
  redirect('user/dashboard');
               
}else {
  echo "data gagal di seimpan";
                 
}

}


public function delete($id)
{
  $this->Model_ketegori->hapus($id);
  redirect('user/dashboard');
          		# code...
}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/user/Dashboard.php */