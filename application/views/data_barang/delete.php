 <?php  foreach ($tampil_data->result() as $key ) {?>
<div class="modal fade" id="exampleModalCenter<?php echo $key->barang_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">yakin mau di hapus</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo site_url("user/data_barang/delete/$key->barang_id") ?>"  class="btn btn-danger" >hapus</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>