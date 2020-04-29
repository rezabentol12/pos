
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
      <?php echo form_open('user/transaksi/simpan'); ?>
          <div class="form-group">
            <label>nama_barang</label>
            <select name="nama_barang" id="barang" class="form-control">
                <option>mie sedap goreng</option>
                <option>mie sedap goreng</option>
                <option>tas kertas</option>
                <option>nokia</option>

            </select>
          </div>
          <div class="form-group">
            <label>qty</label>
             <input type="text" name="qty" class="form-control" id="qtyy">
          </div>
            <input type="hidden" name="harga" id="total" class="form-control">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  onclick="subtotal()">Save changes</button>


      </div>
       </form>
    </div>
  </div>
</div>