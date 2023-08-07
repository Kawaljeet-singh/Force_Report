<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container main-nav">

                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
                    <!-- DataTales Example -->
                    <form id="updateForm" action="<?php echo base_url('update_password')?>" method="POST">
						<div class="row">
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $user_detail->user_first_name?>" placeholder="First Name">
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $user_detail->user_last_name?>" placeholder="Last Name">
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" disabled class="text-dark form-control" id="email" name="email" value="<?php echo $user_detail->user_email?>" placeholder="User Email*">
						  </div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user_detail->user_phone?>" placeholder="Phone">
						</div>
					</div>	
						<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="password" class="form-control" id="password" name="password" placeholder="Password*">
						</div>	
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password*">
						</div>	
					</div>	
					</div>
					<div class="row justify-content-center mt-5">
					<div id="resultMessage"></div>
							<div class="col-sm-12  text-align-right text-center">
								<input type="submit" class="appointment-btn scrollto border-0" value="Update">
							</div>		
						</div>
					</form>
                </div>
                <!-- /.container-fluid -->
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script>
			$(document).ready(function() {
  $('#updateForm').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();

   
    // Check if password and confirm password match
    if (password !== confirmPassword) {
      $('#resultMessage').html('<p>Password and Confirm Password do not match.</p>');
      return;
    }

    // Additional validation checks can be added here if needed

    // Proceed with Ajax form submission
    $.ajax({
      url: $(this).attr('action'),
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        // Handle the response from the server
        $('#resultMessage').html('<p>' + response + '</p>');
      },
      error: function(xhr, textStatus, errorThrown) {
        // Handle errors, if any
        $('#resultMessage').html('<p>Error occurred. Please try again later.</p>');
      }
    });
  });
});

				</script>
   <?php $this->load->view('layout/dashboard_footer');?>