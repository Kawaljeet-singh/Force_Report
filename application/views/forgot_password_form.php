

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
				   
        		   <form id="resetPasswordForm" method="post" class="row" action="<?php echo base_url('send_reset_link'); ?>">
    <input type="text" class="form-control mb-3" name="email" placeholder="Enter email">
    <button class="submit-invest-btn scrollto" type="submit">Reset Password</button>
</form>
<div id="messageContainer"></div>

				 
				</div>
			</div>
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    $('#messageContainer').html(response.message);
                    
                } else {
                    $('#messageContainer').html(response.message);
                }
                 $('#resetPasswordForm input[name="email"]').val('');
            },
            error: function() {
                $('#messageContainer').html("An error occurred. Please try again.");
            }
        });
    });
});

</script>


</body>

</html>