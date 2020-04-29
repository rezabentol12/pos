  <?php  foreach ($tampil_data->result() as $key ) {?>
    <div class="modal fade" id="exampleModal<?php echo $key->operator_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo form_open('user/data_operator/update'); ?>
            <input type="hidden" name="operator_id" class="form-control" value="<?php echo $key->operator_id ?>" >
            <div class="form-group">
              <label>nama lengkap</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $key->nama ?>" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Kategori Barang</label>
              <input type="text" name="username" class="form-control" value="<?php echo $key->username ?>"autocomplete="off">
              
            </div>
            <div class="form-group">
              <label>pasword</label>
              <input type="text" name="password" class="form-control" value="<?php echo $key->password?>"autocomplete="off">
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