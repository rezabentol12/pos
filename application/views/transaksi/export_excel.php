<table border="1">
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
                <td><?php echo $r->nama ?></td>
                <td><?php echo $r->total ?></td>
            </tr>
            <?php $no++; $total=$total+$r->total; } ?>
            <tr>
                <td colspan="3">Total</td>
                <td><?php echo $total;?></td>
            </tr>
        </tbody>
    </table>
</div>