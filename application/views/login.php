<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("layout/head")?>

<body>
  <?php $this->load->view("layout/header")?>

  

  <main id="main">

    <!-- ======= data-table ======= -->
    <section id="login" class="data-table">
      <div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 text-center">
				    <?php if(isset($note)){echo $note;}?>
					<h1>Login to Your Account</h1>
					<p>Enter your Force Report username and password</p>
					<?php echo $this->session->flashdata('message');?>
				</div>
				<div class="col-sm-4 mt-2 text-center ">
				    <?php 
				    $i=0;
				    if ($id != '')
				    {
				        $i=$id;
				    }
				    ?>
					<form class="row" action="<?php echo base_url('admin_login_check/'.$i)?>" method="post">
					  <div class="mb-3">
					  <input type="text" class="form-control" name="user_email"  placeholder="Enter email id">
					</div>
					<div class="mb-3">
					   <input type="password" class="form-control" name="user_password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                               
					</div>
					<div class="mb-3">
					  <input type="submit"  value="Login">
					</div>
					<div class="mb-3">
					  <a href="<?php echo base_url('ForgotPassword')?>">Forgot password?</a>	
					</div>
					<div class=" mb-3">
					  OR
					</div>
				
					</form>
						<div class="col-12">
					    <a href="<?php echo base_url('register');?>" class="submit-invest-btn scrollto "><span class="d-none d-md-inline">Register</span></a>
					    </div>
				</div>
			</div>
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  

</body>

</html>