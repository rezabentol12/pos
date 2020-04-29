<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dummy extends CI_Controller {

	function insert_dumy(){
        // jumlah data yang akan di insert
        $jumlah_data = 100;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
                "nama_kategori"  =>  "samin".$i,
                "foto"         =>  "i.jpg"
               );
            $this->db->insert('kategori_barang',$data); 
        }
        echo $i.' Data Berhasil Di Insert';
    }
    


}

/* End of file Data_dummy.php */
/* Location: ./application/controllers/Data_dummy.php */