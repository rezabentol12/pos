    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_auth extends CI_Model {

     public function cek_login()
     {
      $username=set_value('username');
      $password=set_value('password'); 
      $result=$this->db->where('username',$username)
      ->where('password',$password)
      ->limit(1)
      ->get('tb_user');

      if ($result->num_rows()>0) {
       return $result->row();

     }else{
       return array();
     }

   }

   public function get_al()
   {
     $this->db->select('*');
     $this->db->from('tb_user');
     $this->db->order_by('operator_id Desc');
     $query = $this->db->get();
     return $query;
     

   }

   public function logout($date,$id)
   {
     $this->db->where('operator_id',$id);
     return $this->db->update('tb_user', $date);
   }



   public function hapus($id)
   {
    $this->db->where('operator_id',$id);
    return $this->db->delete('tb_user');

  }


  public function insert($auth)
  {

    return $this->db->insert('tb_user',$auth);

  }

  public function update($auth){
   $this->db->where('operator_id',$this->input->post('operator_id'));
   return $this->db->update('tb_user',$auth);
 }
 
 public function cek($id)
 {
   $query   = 'SELECT * FROM tb_user WHERE operator_id = '.$id;
   return $this->db->query($query);

 }

 public function cek_register($username)
 {
  return $this->db->query("SELECT * FROM tb_user where username='$username'");
      # code...
}



}
