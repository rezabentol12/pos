

</style>

<body >
  <div style="background-image: url(<?php echo base_url(); ?>img/login3.jpg); margin-top: -50px; height: 900px;  background- ">
 
    <div class="row justify-content-center " style="padding-top: 200px;">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card ml" style="  border:5px solid blue; background-color: black; opacity: 50%;   box-shadow: 60px 60px 60px 60px #333;" >
          <div class="card-body  mt-5 mb-5 ">

            <div class="row">
             
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4  mb-4" style="color: white;">Form login</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  
                  <form method="post" action="<?php echo site_url('Auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="username" >
                      <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                    <div class="form-group">
                     <input type="password" class="form-control form-control-user"name="password" placeholder="password" id="password1">
                     <input type="checkbox" id="password"> Show password
                   
                       <?php echo form_error('password','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                 
                  <button type="submit" class="btn btn-primary form-control">login</button>
                    
                  </form>
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="<?php echo site_url('registrasi/index') ?>" style="color: white;">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

    </div>
</div>


  



</html>
