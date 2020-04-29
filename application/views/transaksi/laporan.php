
<div class="col-md-12">
   <div class="card" style="margin-top: 80px;"> 
    <div class="row ml-3">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo form_open('user/laporan', array('class'=>'form-inline')); ?>
                    <div class="form-group">
                      
                        <input type="text" name="tanggal1" class="form-control" placeholder="Tanggal Mulai" id="tanggal" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2"> - </label>
                        <input type="text" name="tanggal2" class="form-control" placeholder="Tanggal Selesai" id="tanggal1" autocomplete="off">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Tampilkan</button>
                    <a href="<?php echo site_url('user/laporan/cetak_pdf') ?>" class="btn btn-success btn-sm">export pdf</a>
                    <a href="<?php echo site_url('user/laporan/export_excel') ?>" class="btn btn-info btn-sm">export excel</a>
                </form>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>



<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">

            <div class="card"> 
                <div class="card-body"> 

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
              
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Operator</th>
                                    <th>Total Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                    <tr class="gradeU">
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $r->tanggal_transaksi ?></td>
                                        <td><?php echo $r->nama?></td>
                                        <td>Rp.<?php echo number_format ($r->total) ?></td>
                                    </tr>
                                    <?php $no++; $total=$total+$r->total; } ?>
                                    <tr>
                                        <td colspan="3">Total</td>
                                        <td>Rp.<?php echo number_format($total) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
