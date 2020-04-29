<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Transaksimodel');
		if ($this->session->userdata('role_id')!=='2') {
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
		if(isset($_POST['submit']))
		{
			$tanggal1=  $this->input->post('tanggal1');
			$tanggal2=  $this->input->post('tanggal2');
			$data['record']=  $this->Transaksimodel->laporan_periode($tanggal1,$tanggal2);
			$this->load->view('partial_user/header');
			$this->load->view('partial_user/sidebar');
			$this->load->view('partial_user/navbar');
			$this->load->view('transaksi/laporan',$data);
			$this->load->view('partial_user/footer');

		}
		else
		{
			$data['record']=  $this->Transaksimodel->laporan_default();
			$this->load->view('partial_user/header');
			$this->load->view('partial_user/sidebar');
			$this->load->view('partial_user/navbar');
			$this->load->view('transaksi/laporan',$data);
			$this->load->view('partial_user/footer');
		}
	}

	public function cetak_pdf(){
		ob_start();
		// $data['record']=  $this->Transaksimodel->laporan_periode($tanggal1,$tanggal2);
		$data['record']=  $this->Transaksimodel->laporan_default();
		$this->load->view('transaksi/export_pdf', $data);
		$html = ob_get_contents();
		ob_end_clean();
		
		require_once('./assets2/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('transaksi.pdf', 'D');
	}

	public function export_excel(){

		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=transaksi.xls");
		$data['record']=$this->Transaksimodel->laporan_default();
		$this->load->view('transaksi/export_excel', $data);

		
	}

}


/* End of file laporan.php */
/* Location: ./application/controllers/user/laporan.php */