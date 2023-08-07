<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container-fluid main-nav">

                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
                    <!-- DataTales Example -->
                   <form name="register_form" method="POST" action="">
			<div class="row justify-content-center">
			<div class="col-sm-12 col-md-8">
				<div class="row">
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="f_name" placeholder="First Name">
						  
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="l_name" placeholder="Last Name">
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="email" placeholder="User Email*">
						  </div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="phone" placeholder="Phone">
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="family_office" placeholder="Family Office">
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="firm_name" placeholder="Firm Name">
						</div>
						
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="password" class="form-control" id="formGroupExampleInput" name="password" placeholder="Password*">
						</div>	
					</div>	
					<div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <select class="form-control" name="sf">
                                    <option value="1">SFO</option>
                                    <option value="2">MFO</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <select name="country" class="countries form-control" id="countryId">
									<option value="">Select Country</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                <select name="state" class="states form-control" id="stateId">
									<option value="">Select State</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
								<select name="city" class="cities form-control" id="cityId">
									<option value="">Select City</option>
								</select>                                 
								 </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="amount" placeholder="Amount of Investment">
                              </div>
                           </div>
                            <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                              <input type="text" class="form-control"  name="sizeby" placeholder="Size of Investment">
                              </div>
                           </div>
					<div class="row mb-3" id="sectors">
						<div class="col-lg-12">
								<div class="col-sm-12 text-center my-5">
									<h1 style="color:#55AB33;">Investment Sector</h1>
								</div>
							</div>
						<?php foreach ($invest_sector as $inv)
						{
						?>
							<div class="col-sm-4 col-md-4 py-2">

								<input class="check" type="checkbox" name="sector_id[]"  value="<?php echo $inv->inv_ID;?>" >
								<label><?php echo $inv->inv_sector;?></label>
							</div>
						
						<?php }?>
						
							<div class="col-sm-12 text-center my-5" >
								<h1 style="color:#1FB8EF;">Stage of Investment</h1>
							</div>
						<div class="row mb-3" id="sectors">
							<?php foreach ($invest_stage as $inv)
							{
							?>
							<div class="col-sm-4 col-md-4 py-2">
								<input class="check" type="checkbox" name="sector_id[]" value="<?php echo $inv->inv_ID;?>" >
								<label><?php echo $inv->inv_sector;?></label>
							</div>
						
						<?php }?>
						</div>
						<div class="col-sm-12 text-center my-5" id="sectors">
							<h1 style="color:#FC9A0A;">Structure Of Investment</h1>
						</div>
						 
							<?php foreach ($invest_structure as $inv)
							{
							?>
							<div class="col-sm-4 py-2">
								<input class="check" type="checkbox" name="sector_id[]" value="<?php echo $inv->inv_ID;?>" >
								<label><?php echo $inv->inv_sector;?></label>
							</div>
						
						<?php }?>
					</div>
					 		<div class="col-sm-12  text-align-right text-center">
								<div class="message"></div>
								<input type="submit" class="appointment-btn scrollto border-0" value="Register">
							</div>	
				</div>
			</div>
		</div>
	</form>
</div>
				
<script>
	function checkRadioSelection() {
		var selectedRadioId = document.querySelector('input[name="register_type"]:checked').id;
		if (selectedRadioId === 'exampleRadios2' || selectedRadioId === 'exampleRadios3') {
			document.getElementById('sectors').classList.add('d-none');
		} else {
			document.getElementById('sectors').classList.remove('d-none');
		}
	}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function() {
  // Initialize form validation on the registration form
  $("form[name='register_form']").validate({
    // Specify validation rules
    rules: {
      f_name: "required",
      l_name: "required",
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        digits: true,
        maxlength: 10,
		minlength: 10
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#password"
      },
	  amount: {
        required: true,
        digits: true
         
      },
       sizeby: {
        digits: true
         
      },
      // Add more validation rules for other fields as needed
    },
    // Specify validation error messages
    messages: {
      f_name: "First Name can't be blank",
      l_name: "Last Name can't be blank",
      email: "Please enter a valid email address",
       phone: {
        required: "Phone number can't be blank",
        digits: "Please enter only digits",
         minlength: "Phone number must be exactly 10 digits",
        maxlength: "Phone number must be exactly 10 digits"
      },
      password: {
        required: "Please provide a password",
        minlength: "Password must be at least 6 characters long"
      },
      confirm_password: {
        required: "Please provide a password",
        minlength: "Password must be at least 6 characters long",
        equalTo: "Password do not match"
      },
	   amount: {
        required: "Amount can't be blank",
        digits: "Please enter only digits"
      },
       sizeby: {
        digits: "Please enter only digits"
      },
      // Add more error messages for other fields as needed
    },
    // Submit the form via AJAX if it is valid
    submitHandler: function(form, event) {
      // Prevent default form submission
      event.preventDefault();

              var formData = new FormData(form);
         
             // Send the Ajax request
             $.ajax({
               url: '<?php echo base_url('create_user');?>',
               type: 'POST',
               data: formData,
			   processData: false, // Prevent jQuery from automatically transforming the data into a query string
        contentType: false,
               dataType: 'json',
               success: function(response) {
                 if (response.success) {
                   // Display success message on the page
                   $('.message').text(response.message).addClass('success').removeClass('error');
                 } else {
                   // Display error message on the page
                   $('.message').text(response.message).addClass('error').removeClass('success');
                 }
               },
               error: function() {
                 // Display error message on the page
                 $('.message').text('An error occurred while submitting the form').addClass('error').removeClass('success');
               }
             });
    }
  });
});

</script>


                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>