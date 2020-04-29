 <?php  foreach ($tampil_data->result() as $key ) {?>
<div class="modal fade" id="exampleModal<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('user/dashboard/update'); ?>

      <input type="hidden" name="id" class="form-control" value="<?php echo $key->id ?>" >
          <div class="form-group">
            <label>Nama kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="<?php echo $key->nama_kategori ?>" autocomplete="off" >
          </div> 
          <img src="<?php echo base_url() ?>assets2/img/<?php echo $key->foto ?>" height="90px" width="90px;">
          <input type="file" name="foto" value="<?php echo $key->foto;?>" >
         
       
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