  <script src="<?php echo base_url();?>assets2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?php echo base_url();?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

  
  <script src="<?php echo base_url();?>assets2/js/sb-admin-2.min.js"></script>


  <script src="<?php echo base_url();?>assets2/vendor/chart.js/Chart.min.js"></script>

  
  <script src="<?php echo base_url();?>assets2/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url();?>assets2/js/demo/chart-pie-demo.js"></script>
  <script> 	
  	$(document).ready(function(){		
		$('#password').click(function(){
			if($(this).is(':checked')){
				$('#password1').attr('type','text');
			}else{
				$('#password1').attr('type','password');
			}
		});
	});
  </script>
 
</body>

</html>
