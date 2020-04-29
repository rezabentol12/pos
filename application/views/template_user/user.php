 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>

   <div class="container"> 
    <div class="card " style="margin-top: 80px;"> 
      <div class="card-body ">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">Tambah Data </button>
            <thead>

              <tr>
                <th>NO</th>
                <th>kategori</th>
                <th>foto kategori</th>
                <th>Action</th>

              </tr>
            </thead>

            <tbody>

             <?php  $no=1; foreach ($tampil_data->result() as $key ) {?>

              <tr>
               <td><?php echo $no ?></td>         
               <td><?php  echo $key->nama_kategori?> </td>
               <td><img src="<?php echo base_url(); ?>assets2/img/<?php echo $key->foto ?>  " width="90px;" height="90px"></td>
               <td>
                 <button type="button" class="btn  btn-sm btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->id ?>">
                   delete
                 </button>
                 <button type="button" class="btn  btn-sm btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $key->id ?>">
                  update
                </button>
              </td> 
            </tr>
            <?php $no++; } ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div> 
</body>
</html>
