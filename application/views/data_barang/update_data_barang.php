  <?php  foreach ($tampil_data->result() as $key ) {?>
    <div class="modal fade" id="exampleModal<?php echo $key->barang_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo form_open('user/data_barang/update'); ?>
            <input type="hidden" name="barang_id" class="form-control" value="<?php echo $key->barang_id ?>" >
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control" value="<?php echo $key->nama_barang ?>" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Kategori Barang</label>

              <select name="kategori_barang" class="form-control" autocomplete="off">
                <?php  foreach ($tampil_kategori->
                  result() as $y) {   ?>
                    <option value="<?php echo $y->nama_kategori?>"                  
                      <?php if ( $key->kategori_barang==$y->nama_kategori ) {
                        echo 'selected','';
                      }else{
                        echo"";
                      } ?>> 
                      <?php echo $y->nama_kategori ?> </option>
                    <?php  } ?>

                  </select>

                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $key->harga ?>" autocomplete="off"  >
                </div>
                <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $key->jumlah ?>" autocomplete="off"  >
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
      <?php   } ?> 