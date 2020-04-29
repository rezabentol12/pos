<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data_barang extends CI_Model {

	public function get()

	{   
		$this->db->select('*,foto');	
		$this->db->from('data_barang');
		$this->db->join('kategori_barang','data_barang.kategori_barang =kategori_barang.nama_kategori');
		$this->db->order_by('barang_id Desc');
		$query = $this->db->get();  
		return $query; 
	# code...
	}

	public function insert($data_barang)
	{
		return $this->db->insert('data_barang',$data_barang);
	# code...
	}

	public function update($data_barang){
		$this->db->where('barang_id',$this->input->post('barang_id'));
		return $this->db->update('data_barang',$data_barang);
	}
	public function Getdetail($whare){


		return $this->db->get_where('data_barang',['barang_id'=> $whare]);
	}
	

	public function hapus($id)
	{
		$this->db->where('barang_id',$id);
		return $this->db->delete('data_barang');
		# code...
	}

}

