    
</div>
</div>

<script src="<?php echo base_url();?>assets2/vendor/jquery/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url();?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets2/js/sb-admin-2.min.js"></script>

<script src="<?php echo base_url();?>assets2/vendor/datatables/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url();?>assets2/js/demo/datatables-demo.js"></script>
<script src="<?php echo base_url();?>assets2/js/jquery.mask.min.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script >
  $(function() {
    $("#tanggal").datepicker({
      dateFormat: 'yy/mm/dd'
      
    });
    $("#tanggal1").datepicker({
      dateFormat: 'yy/mm/dd'
      
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $( '#uang' ).mask('000.000.000', {reverse: true});
   $( '#harga' ).mask('000.000.000', {reverse: true});

 })

</script>



</body>
</html>
