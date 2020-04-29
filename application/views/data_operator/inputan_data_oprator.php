
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
        <?php echo form_open('user/data_operator/proses_simpan'); ?>
        <div class="form-group">
          <label>Nama lengkap</label>
          <input type="text" name="nama" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>username</label>
          <input type="text" name="username" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
          <label>password</label>
          <input type="password" name="password" class="form-control" autocomplete="off">
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