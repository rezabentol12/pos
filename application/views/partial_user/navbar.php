<div class="main-panel">

  <nav class="navbar navbar-expand-lg  navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">

      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <?php if ($this->session->userdata('username')) { ?>
           <li class="nav-item">
            <div style="color: white;"><?php echo $this->session->userdata('username') ?></div></li>
           <li class=" nav-item ml-2">
            <a href="<?php echo site_url('Auth/logout');?>" style="color:white; ">logout</a></li>
         <?php } ?>
        
       </ul>
     </div>
   </div>
 </nav>

