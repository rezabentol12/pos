
  <div class="col-md-12">
<div class="card" style="margin-top: 80px;">
<div class="row ml-5">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <?php echo form_open('user/transaksi/simpan', array('class'=>'form-horizontal')); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Barang</label>
          <div class="col-sm-10">
           <input list="barang" name="nama_barang" placeholder="masukan nama barang" class="form-control">

         </select>
       </div>
     </div>
     <div class="form-group">
      <label class="col-sm-2 control-label">Quantity</label>
      <div class="col-sm-10">
        <input type="text" name="qty" class="form-control" id="qtyy">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | <?php echo anchor('user/transaksi/selesai','Selesai',array('class'=>'btn btn-success btn-sm'))?>
      </div>
    </div>
  </form>
</div>
</div>
<datalist id="barang">
  <?php foreach ($barang->result() as $b) {
    echo "<option value='$b->nama_barang'>";
  } ?>
  
</datalist>

</div>
</div>
</div>
</div>

  <div class="col-md-12">
<div class="card ">
   <div class="card-body ml-5 shadow">
      
        <table  class="table table-striped">
         <thead>
          <tr >
            <th>NO</th>
            <th>nama_barang</th>
            <th>qty</th>
            <th>harga</th>    
            <th colspan="3">action</th>
          </tr>
        </thead>

        <?php  $total=0; foreach ($tampil_data->result() as $key) {
          					# code...?>
          					<thead>

                      <tr>
                       <td><?php echo $key->id ; ?></td>     
                       <td><?php  echo $key->nama_barang?> </td>
                       <td><?php  echo $key->qty?> </td>
                       <td>Rp. <?php echo number_format($key->harga) ?> </td>

                       <td>Rp. <?php echo number_format($key->qty*$key->harga) ?></td>
                       
                       <td>
                      <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->id ?>">
                       delete
                     </button>

                      </td>       
                    </tr>
                  </thead>
                  <?php $total=$total+($key->qty*$key->harga); } ?>
                  <tr class="gradeA">
                    <td colspan="4">T O T A L</td>
                    <td>Rp. <?php echo number_format($total);?></td>
                  </tr>


                </table>
              </div>
            </div>
          </div>
          