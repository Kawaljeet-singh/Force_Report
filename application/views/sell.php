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
				<div class="col-sm-12 text-center">
					<h1 style="color:#1FB8EF;"> Investment</h1>
					<h3>Sell Side Portal Creation</h3>
					<p>Below please fill out your firm’s contact information for platform approval. We will be putting <br>
					this information through a due-diligence process that may require further consideration.</p>
				</div>
				<form>
				<div class="row">
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Name of the Firm">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Primary Contact">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Phone">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Physical Address">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Country of Origin">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Services Provided / Investment Banker">
						  </label>
						</div>
					</div>	
					<div class="col-sm-12 mb-4 text-center">
							<input type="submit"  value="Submit" class="view-chat-btn">
					
					</div>
			
					<div class="row text-center">
				
					
				
					<h6>Submit Sell Side Investment for Approval</h6>
					<p>By submitting this opportunity to be considered by our family offices you 
					acknowledge to the best of your ability that this investment is of highest integrity
					and suitable for our family office community.</p>
					</div>
				</div>
				</form>
					<form  action="" name="sell_form" method="POST">
					<div class="row">
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="company_name" placeholder="Name of Company (anonymous if needed)">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <textarea  name="company_description" placeholder="Company Description"></textarea>
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="company_financials" placeholder="Company Financials">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <textarea  name="manage_desc" placeholder="Management Description"></textarea>
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="size_of_req" placeholder="Size of Requested Investment">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="min_invt" placeholder="Minimum Investment Amount">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="revenue" placeholder="Revenue">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="ebitd" placeholder="EBITDA">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="enter_val" placeholder="Enterprise Value">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="total_debt" placeholder="Total Debt">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="total_fund_date" placeholder="Total Funding to Date">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  name="valuation" placeholder="Valuation">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <select name="stage_of_invest">
							<option>Stage Of Investment</option>
							<?php foreach ($invest_stage as $inv)
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
						 <input type="text" class="form-control" name="employees"  placeholder="Employees">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" name="existing_invest"  placeholder="Existing Investors">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" name="lead_invest"  placeholder="Lead Investors">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" name="recent_rq"  placeholder="Recent Acquisitions">
						  </label>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" name="competitiors"  placeholder="Competitors">
						  </label>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <select name="invest_sector">
							<option>Investment Sector</option>
							<?php foreach ($invest_sector as $inv)
							{
							?>
								<option value="<?php echo $inv->inv_ID;?>"><?php echo $inv->inv_sector;?></option>
							<?php }?>
						 </select>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control"  placeholder="Attestation / Choose File">
						  </label>
						</div>
					</div>
					
					<div class="row justify-content-center">
					<div class="col-sm-12 mb-4 text-center">
					    	<div class="message"></div>
							<input type="submit"  value="Submit" class="view-chat-btn">
					</div>
					
					</div>		
						<div class="col-sm-12 mt-5 text-center">
					
					 <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
					</div>
					</div>
					</form>
					</div>			
				</div>
			</div>
			
<script>
$(function() {
  // Initialize form validation on the registration form
  $("form[name='sell_form']").validate({
    // Specify validation rules
    rules: {
      company_name: "required",
      company_financials: "required",
     size_of_req: {
        required: true,
        digits: true,
      },
	  min_invt: {
        required: true,
        digits: true,
      },
	  revenue: {
        required: true,
        digits: true,
      },
	  enter_val: {
        required: true,
        digits: true,
      },
      // Add more validation rules for other fields as needed
    },
    // Specify validation error messages
    messages: {
      company_name: "Company Name can't be blank",
      company_financials: "Company Financials can't be blank",
        size_of_req: {
        required: "Size of investment can't be blank",
        digits: "Please enter only digits"
      },
	   min_invt: {
        required: "Enter Minimum investment",
        digits: "Please enter only digits"
      },
	   revenue: {
        required: "enter revenue",
        digits: "Please enter only digits"
      },
	   enter_val: {
        required: "Enter Value",
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
               url: '<?php echo base_url('sell_form');?>',
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

      
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  

</body>

</html>