<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksimodel extends CI_Model {


    public function get()
    {


     $query  ="SELECT td.id,td.qty,td.harga,b.nama_barang
     FROM transaksi as td,data_barang as b        
     WHERE b.barang_id=td.barang_id and td.status='0'
     order by td.id DESC";

     return $this->db->query($query);
    	// return $this->db->get('transaksi');
    	# code...
 }

 public function insert($transaksi)
 {
     return $this->db->insert('transaksi',$transaksi);
    	# code...
 }
 public function hapus($id)
 {
  $this->db->where('id',$id);
  return $this->db->delete('transaksi');
		# code...
}

public  function selesai_belanja($data)
{
    $this->db->insert('laporan',$data);
    $last_id=  $this->db->query("select transaksi_id from laporan order by transaksi_id desc")->row_array();
    $this->db->query("update transaksi set transaksi_id='".$last_id['transaksi_id']."' where status='0'");
    $this->db->query("update transaksi set status='1' where status='0'");

}
public function laporan_default()
{
    $query="SELECT t.tanggal_transaksi,o.nama,sum(td.harga*td.qty) as total
    FROM laporan as t,transaksi as td,tb_user as o
    WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id
    group by t.transaksi_id DESC";
    return $this->db->query($query);
}

public function laporan_periode($tanggal1,$tanggal2)
{
    $query="SELECT t.tanggal_transaksi ,o.nama,sum(td.harga*td.qty) as total
    FROM laporan as t,transaksi as td,tb_user as o
    WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id 
    and t.tanggal_transaksi between '$tanggal1' and '$tanggal2'
    group by t.transaksi_id";
    return $this->db->query($query);
}


}




/* End of file Transaksimodel.php */
/* Location: ./application/models/Transaksimodel.php */