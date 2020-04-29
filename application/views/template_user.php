<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <div class="card">
   <div class="card-body">
     <table  class="table table-striped">
       <thead>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Launch demo modal
       </button>

       <tr >
        <th>NO</th>
        <th>kategori produk</th>
        <th colspan="3">action</th>
      </tr>
    </thead>


    <?php foreach ($tampil_data->result() as $key) {
          					# code...?>
          					<thead>

                      <tr>
                       <td><?php echo $key->id ; ?></td>
                       <td></td>
                       <td><?php  echo $key->nama_kategori?> </td>
                        <td> <a href="<!-- <?php  echo site_url("admin/admin/tampil_update/$key->id")  ?>  --> " class="btn btn-primary">update</a> </td>
                       <td> <a href="<!-- <?php  echo site_url("admin/admin/hapus/$key->id")  ?>  --> " class="btn btn-danger">delete</a> </td>
                     </tr>
                   </thead>
                 <?php } ?>
               </table>
             </div>
           </div>
         </body>
         </html> -->