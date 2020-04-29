<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  

  <div class="col-md-12">
   <div class="card" style="margin-top:100px;">
     <div class="card-body">
       <div id="notifications"><?php echo $this->session->flashdata('pesan'); ?></div> 
       <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
       <table class="table table-striped" id="dataTable">
         <thead>
           <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
          </button>

          <tr >
            <th>NO</th>
            <th>nama_lengakp</th>
            <th>username</th>
            <th>terakhir_login</th>  
            <th>status</th>    
            <th>action</th>
          </tr>
        </thead>

        <tbody>
         <?php $no=1; foreach ($tampil_data->result() as $key) {
                    # code...?>
                    <tr>
                     <td><?php  echo $no ; ?></td>     
                     <td><?php  echo $key->nama?> </td>
                     <td><?php  echo $key->username?> </td>
                     <td><?php  echo $key->terakhir_login?> </td>
                     <td><?php  echo $key->status?> </td>

                     <td>
                      <button type="button" class="btn  btn-sm btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->operator_id?>">
                       delete
                     </button>
                     <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal<?php  echo $key->operator_id ?>"> update
                     </button>
                   </td>       
                 </tr>
                 <?php $no++; } ?>
               </tbody>             
             </table>
           </div>
         </div>
       </div>


     </body>
     </html> 