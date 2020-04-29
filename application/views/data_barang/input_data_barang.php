
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open('user/data_barang/simpan'); ?>
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control"autocomplete="off">
          </div>
          <div class="form-group">
            <label>Kategori Barang</label>
            <select class="form-control" name="kategori_barang" autocomplete="off">  
         <?php foreach ($tampil_kategori->result() as $key ) {  ?>
              <option value="<?php echo $key->nama_kategori; ?>"> <?php echo $key->nama_kategori; ?></option>
            <?php  }  ?>
            </select>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" id="uang" autocomplete="off">
          </div>
          <div class="form-group">
            <label>stok</label>
            <input type="number" name="jumlah" class="form-control">
          </div>
          
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>


      </div>
       </form>
    </div>
  </div>
</div>