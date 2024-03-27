<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("layout/head")?>

<body>
  <?php $this->load->view("layout/header")?>

  

  <main id="main">

    <!-- ======= data-table ======= -->
    <section id="register" class="data-table">
      <div class="container">
			<div class="row justify-content-center">
			<div class="col-sm-12 col-md-8">
				<div class="col-sm-12 mb-3 text-center">
					
					
					
					<h1>Service<span> Provider</span> Form</h1>
				
				</div>
			
					<form  action="" method="POST">
					<div class="row">
					<div class="col-sm-6 mb-4">
					    <h5>About Firm</h5>
						<div class="form-check p-0">
							<input type="text" class="form-control" id="formGroupExampleInput" name="firm_name" placeholder="Firm Name">
						</label>
						</div>
					</div>
						<div class="col-sm-6 mb-4">
						       <h5>About Client</h5>
						<div class="form-check p-0">
						 <select name="sector_of_invest">
							<option>Investment Sector</option>
							<?php foreach ($invest_sector as $inv)
							{
							?>
								<option value="<?php echo $inv->inv_ID;?>"><?php echo $inv->inv_sector;?></option>
							<?php }?>
						 </select>
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="firm_description" placeholder="Firm Description">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <select name="invest_structure">
							<option>Structure of Investment</option>
							<?php foreach ($invest_structure as $inv)
							{
							?>
								<option value="<?php echo $inv->inv_ID;?>"><?php echo $inv->inv_sector;?></option>
							<?php }?>
						 </select>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="country" placeholder="Country">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="state" placeholder="State">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="city" placeholder="City">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" id="formGroupExampleInput" name="amount" placeholder="Amount of Investment">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <select name="invest_stage">
							<option>Stage of investment</option>
							<?php foreach ($invest_stage as $inv)
							{
							?>
								<option value="<?php echo $inv->inv_ID;?>"><?php echo $inv->inv_sector;?></option>
							<?php }?>
						 </select>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <select name="category">
							<option>Category</option>
							<?php foreach ($category as $inv)
							{
							?>
								<option value="<?php echo $inv->page_id;?>"><?php echo $inv->page_title;?></option>
							<?php }?>
						 </select>
						</div>
					</div>
					<div class="row justify-content-center">
					<div class="col-sm-12 mb-4 text-center">
							<input type="submit"  value="Submit" class="view-chat-btn">
					</div>
					<div class="message"></div>
					</div>		
						<div class="col-sm-12 mt-5 text-center">
					 <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
					</div>
								
						
		
						
						</div>
						</form>
	</div>
									


				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('form').submit(function(e) {
    e.preventDefault();
    
    // Serialize the form data
    var formData = $(this).serialize();

    // Send the Ajax request
    $.ajax({
      url: '<?php echo base_url('submit_service');?>',
      type: 'POST',
      data: formData,
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
  });
});
</script>

      
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  

</body>

</html>