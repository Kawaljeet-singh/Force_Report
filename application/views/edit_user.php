<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container-fluid main-nav">

                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
                    <!-- DataTales Example -->
                   <form method="POST" action="">
			<div class="row justify-content-center">
			<div class="col-sm-12 col-md-8">
				
				
				<div class="row">
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" value="<?php echo $user->user_first_name?>" name="f_name" >
						  
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" value="<?php echo $user->user_last_name?>" name="l_name" placeholder="Last Name">
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" disabled class="text-dark form-control" value="<?php echo $user->user_email?>" name="email" placeholder="User Email*">
						  </div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" value="<?php echo $user->user_phone?>" name="phone" placeholder="Phone">
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" value="<?php echo $user->user_family_office?>" name="family_office" placeholder="Family Office">
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="text" class="form-control" value="<?php echo $user->user_firm_name?>" name="firm_name" placeholder="Firm Name">
						</div>
						
					</div>
					 
					<div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <select class="form-control" name="sf">
                                    <option <?php if($user->sf == '1') {echo 'selected';}?> value="1">SFO</option>
                                    <option <?php if($user->sf == '2') {echo 'selected';}?> value="2">MFO</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <select name="country" class="countries form-control" id="countryId">
									<option value="<?php echo $user->country?>"><?php echo $user->country?></option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                <select name="state" class="states form-control" id="stateId">
									<option value="<?php echo $user->state?>"><?php echo $user->state?></option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
								<select name="city" class="cities form-control" id="cityId">
									<option value="<?php echo $user->city?>"><?php echo $user->city?></option>
								</select>                                 
								 </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control" value="<?php echo $user->amount?>" name="amount" placeholder="Amount of Investment">
                              </div>
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
								<input class="check" 
								<?php 
								if(checkInvestment($user->user_id,$inv->inv_ID))
								{echo "checked";}
								?> type="checkbox" name="sector_id[]"  value="<?php echo $inv->inv_ID;?>" >
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
								<input class="check" 
								<?php 
								if(checkInvestment($user->user_id,$inv->inv_ID))
								{echo "checked";}
								?> type="checkbox" name="sector_id[]"  value="<?php echo $inv->inv_ID;?>" >
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
							<div class="col-sm-4 col-md-4 py-2">
								<input class="check" 
								<?php 
								if(checkInvestment($user->user_id,$inv->inv_ID))
								{echo "checked";}
								?> type="checkbox" name="sector_id[]"  value="<?php echo $inv->inv_ID;?>" >
								<label><?php echo $inv->inv_sector;?></label>
							</div>
						
						<?php }?>
					</div>
					  <div class="col-sm-12 text-center">
                        <div class="message"></div>
						<input type="hidden" name="userkey" value="<?php echo $user->user_key?>">
						<input type="hidden" name="userid" value="<?php echo $user->user_id?>">
                        <input type="submit" value="Update" class="view-chat-btn">
                     </div>
				</div>
			</div>
		</div>
	</form>
</div>		
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
$(document).ready(function() {
  $('form').submit(function(e) {
    e.preventDefault();
    
    // Serialize the form data
    var formData = $(this).serialize();

    // Send the Ajax request
    $.ajax({
      url: '<?php echo base_url('update_user');?>',
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

                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>