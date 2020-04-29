 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>


 <body>

  <div class="col-md-12">
   <div class="card" style="margin-top:100px;">
     <div class="card-body">
       <table  class="table table-striped" id="dataTable">
         <thead>
           <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
          </button>

          <tr >
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Foto</th> 
            <th>HARGA</th>
            <th>jumlah</th>
            <th>option</th>
             
           
           

          </tr>
        </thead>
        
        <tbody>
          <?php $no=1; foreach ($tampil_data->result() as $key) {
                    # code...?>
                    <tr>
                      <td><?php echo $no ; ?></td>     
                      <td><?php  echo $key->nama_barang?> </td>
                      <td><?php  echo $key->kategori_barang?> </td>
                      <td><img src="<?php echo base_url() ?>assets2/img/<?php echo $key->foto ?>" height="90px" width='90px;'> </td>
                      <td>Rp.<?php echo number_format($key->harga,0,'.','.')?> </td>
                      <td><?php  echo $key->jumlah?> </td>
                    
                      <td>
                       
                        <button type="button" class="btn  btn-sm btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->barang_id ?>">
                         delete
                       </button>
                       <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal<?php  echo $key->barang_id ?>">
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
      </body>
      </html>