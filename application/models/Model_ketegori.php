<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ketegori extends CI_Model {


 //   function data($number,$offset){
	// 	return $query = $this->db->get('kategori_barang',$number,$offset)->result();		
	// }
	public function get()
	{
		$this->db->select('*');
		$this->db->from('kategori_barang');
		$this->db->order_by('id Desc');
		$query = $this->db->get();
		return $query;
		# code...
	}

	public function insert($kategori)
	{

		return $this->db->insert('kategori_barang',$kategori);
		# code...
	}

	public function update($kategori){
		
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('kategori_barang',$kategori);
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('kategori_barang');
		# code...
	}

	public function search_m($keyword)
	{
		$this->db->select('*');
		$this->db->from('kategori_barang');
		$this->db->like('nama_kategori',$keyword);
		return $this->db->get();
		
		# code...,
	}
	

}

/* End of file Model_ketegori.php */
/* Location: ./application/models/Model_ketegori.php */