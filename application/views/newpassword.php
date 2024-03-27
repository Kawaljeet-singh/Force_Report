

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
				    <h2><?php if(isset($note)){echo $note;}?></h2>
					<h1>Forgot Password ?</h1>
					<p>Enter your email to reset password</p>
					<?php echo $this->session->flashdata('message');?>
				</div>
				<div class="col-sm-4 mt-2 text-center ">
				    <form method="post" id="resetPasswordForm" action="<?= base_url('resetpassword'); ?>">
                        <input type="hidden" name="token" value="<?= $token; ?>">
                       		  <div class="mb-3">
                        <input type="password" name="new_password" placeholder="New Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="confirm_password" placeholder="confirm password" required>
                        </div>
                        <button type="submit"  class="border-0 appointment-btn scrollto ">Reset Password</button>
                    </form>
                        <div id="successMessage" style="color: green;"></div>
                        <div id="errorMessage" style="color: red;"></div>
                    </div>
			</div>
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?php $this->load->view("layout/footer")?>
 <script>
 $(document).ready(function() {
    $('#resetPasswordForm').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission.

        // Get form data
        var formData = $(this).serialize();

        // Send an AJAX request
        $.ajax({
            type: 'POST',
            url: $('#resetPasswordForm').attr('action'),
            data: formData,
            success: function(response) {
                if (response.status === "success") {
                    $('#errorMessage').empty(); // Clear any previous error message
                    $('#successMessage').html(response.message);
                    
                } else {
                    $('#successMessage').empty(); // Clear any previous success message
                    $('#errorMessage').html(response.message);
                }
                  $('#resetPasswordForm input[type="password"]').val('');
                  
            },
            error: function() {
                $('#successMessage').empty(); // Clear any previous success message
                $('#errorMessage').html("An error occurred. Please try again.");
            }
        });
    });
});

 </script>
</body>
 