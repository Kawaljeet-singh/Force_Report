

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
				<div class="col-sm-12 text-center">
				    
					<h1>Token Expired</h1>
				     <p>Sorry, the password reset token has expired. Please request a new token.</p>
				 
				</div>
				<div class="col-sm-4 mt-2 text-center ">
				  <a class="border-0 appointment-btn scrollto " href="<?php echo base_url('ForgotPassword')?>">Request a New Token</a>
                </div>
			</div>
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
 
  <?php $this->load->view("layout/footer")?>
 
</body>
 
 
