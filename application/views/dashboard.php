<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("layout/head")?>

<body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
	  <div class="row">
			<div class="col-sm-3 ">
				<a href="<?php echo base_url()?>" class="logo me-auto ">
					<img src="<?php echo base_url()?>/assets/img/logo.png" alt="" class="img-fluid">
				</a>
			<div class="col-sm-12  mt-3 text-end">
				<a href="<?php echo base_url('login');?>" class="admin-login-btn">Admin dashboard</a>
			</div>
		</div>
		<div class="col-sm-9 ">
			<div class="row">
			<div class="col-sm-12 col-md-9">
				<h1>Dashboard</h1>
				<h6>Welcome to your customized dashboard!</h5>
			</div>
				  <div class="col-sm-12 col-md-3   text-align-right text-end">
					<a href="<?php echo base_url('dashboard/logout');?>" class="appointment-btn scrollto "><span class="d-none d-md-inline">Logout</span></a>
				  </div>
			</div>
		</div>
	  </div>
    </div>
  </header><!-- End Header -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  

  <main id="main">

    <!-- ======= data-table ======= -->
    <section id="dashboard" class="data-table">
		<div class="container">
		    <div class="row justify-content-center ">
		       
		 
		  <div class="col-sm-3 nav dashboard-tab   nav-table " id="v-table-tab" role="tablist" aria-orientation="vertical">
			
			<ul class="navbar-dash">
			<li class="nav-link active" id="v-table-home-tab" data-bs-toggle="pill" data-bs-target="#v-table-dashboard" type="button" role="tab" aria-selected="true"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111017.png')?>"> Dashboard</li>
			<li class="nav-link" id="v-table-profile-tab" data-bs-toggle="pill" data-bs-target="#v-table-green-light" type="button" role="tab"  aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111114.png')?>"> Your Green Lightning</li>
			<li class="nav-link" id="v-table-messages-tab" data-bs-toggle="pill" data-bs-target="#v-table-co-investor" type="button" role="tab"  aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111124.png')?>"> Co-Investor</li>
			<li class="nav-link" id="v-table-settings-tab" data-bs-toggle="pill" data-bs-target="#v-table-opportunities" type="button" role="tab" aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111132.png')?>"> Opportunities</li>
			<li class="nav-link" id="v-table-settings-tab" data-bs-toggle="pill" data-bs-target="#v-table-settings" type="button" role="tab"  aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111215.png')?>"> Settings</li>
			<li class="nav-link" id="v-table-settings-tab" data-bs-toggle="pill" data-bs-target="#v-table-logout" type="button" role="tab" aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111225.png')?>"> Logout</li>
			</ul>
			</div>
		  <div class="col-sm-9  tab-content" id="v-table-tabContent">
			<div class="tab-pane fade show active" id="v-table-dashboard" role="tabpanel" >
			 
				 <table id="example" class=" dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Invesment Sector</th>
								<th>Lead investors</th>
								<th>Financing Round</th>
								<th>Revenue</th>
								<th>Total Dept</th>
								<th>Valuation</th>
								<th>Min Invesment</th>
								<th>Greenlight</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($all_data as $dash) {
						    	       $contactExists = checkcontact($this->session->userdata('user_detail')->user_key,$dash->inv_user_id);
						    	     if (!$contactExists) {
     			                	echo	'<tr>
								<td>'.$dash->company_name.'</td>
								<td>'.getInvestSectorName($dash->invest_sector).'</td>
								<td>'.$dash->lead_invest.'</td>
								<td>'.$dash->company_financials.'</td>
								<td>'.$dash->revenue.'</td>
								<td>'.$dash->total_debt.'</td>
								<td>'.$dash->valuation.'</td>
								<td>'.$dash->min_invt.'</td>
								<td><a class="submit-invest-btn" href="#" data-user-id="'.$dash->inv_user_id.'">Contact</a></td>
							</tr>';
						    	     }
						 }?>
						</tbody>
						
					</table>
			</div>
			<div class="tab-pane fade" id="v-table-green-light" role="tabpanel">
			
			
				 <table id="green-light" class=" dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Invesment Sector</th>
								<th>Lead investors</th>
								<th>Financing Round</th>
								<th>Revenue</th>
								<th>Total Dept</th>
								<th>Valuation</th>
								<th>Min Invesment</th>
								<th>Greenlight</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($green_light as $dash) {
					
						echo	'<tr>
								<td>'.$dash->company_name.'</td>
								<td>'.getInvestSectorName($dash->invest_sector).'</td>
								<td>'.$dash->lead_invest.'</td>
								<td>'.$dash->company_financials.'</td>
								<td>'.$dash->revenue.'</td>
								<td>'.$dash->total_debt.'</td>
								<td>'.$dash->valuation.'</td>
								<td>'.$dash->min_invt.'</td>
								<td><p class="appointment-btn">Requested</p></td>
							</tr>';
						 }?>
						</tbody>
						
					</table>
			</div>
			<div class="tab-pane fade" id="v-table-co-investor" role="tabpanel">
			<table id="co-investor" class="dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Investor</th>
								<th>Invesment Sector</th>
								 
								<th>Family office</th>
								<th>Firm Name</th>
								 
							</tr>
						</thead>
						<tbody>
						<?php 
							
						foreach ($co_investor as $dash) {
							$user = getInvestorName($dash->inv_secId);
						if ($user) {
							if ($user['user_id'] != $this->session->userdata('user_detail')->user_id )
							{
							     $username = "";
							    if($user['anonymous'] == '1')
							    {
							        $username = "Anonymous";
							    }
							    else
							    {
							       $username = $user['user_first_name'] .' '. $user['user_last_name'];
							    }
								echo '<tr>
									<td>' . $username . '</td>
									<td>' . $user['user_last_name'] . '</td>
									 
									<td>' . $user['user_family_office'] . '</td>
									<td>' . $user['user_firm_name'] . '</td>
									<!-- Add other table cells here -->
								</tr>';
							}
						}
						}
						?>
						</tbody>
						
					</table></div>
			<div class="tab-pane fade" id="v-table-opportunities" role="tabpanel">
			 <table id="opportunities" class="dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Invesment Sector</th>
								<th>Lead investors</th>
								<th>Financing Round</th>
								<th>Revenue</th>
								<th>Total Dept</th>
								<th>Valuation</th>
								<th>Min Invesment</th>
								<th>Greenlight</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							
						foreach($opportunities as $dash) {
						echo	'<tr>
								<td>'.$dash->company_name.'</td>
								<td>'.getInvestSectorName($dash->invest_sector).'</td>
								<td>'.$dash->lead_invest.'</td>
								<td>'.$dash->company_financials.'</td>
								<td>'.$dash->revenue.'</td>
								<td>'.$dash->total_debt.'</td>
								<td>'.$dash->valuation.'</td>
								<td>'.$dash->min_invt.'</td>
								<td><a class="submit-invest-btn" href="#" data-user-id="'.$dash->inv_user_id.'">Contact</a></td>

							</tr>';
						 }?>
						</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="v-table-settings" role="tabpanel"><form id="updateForm" action="<?php echo base_url('update_password')?>" method="POST">
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
					</form></div>
			<div class="tab-pane fade" id="v-table-logout">are you sure to ? <a href="<?php echo base_url('logout')?>">logout</a></div>
		  </div>
	 

		</div>
			 

		</div>
      
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  <script>
  
  $(document).ready(function() {
    $('#example').DataTable({
      // Search customization
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
      }
    });

    // Custom CSS for search bar
    var searchWrapper = $('.dataTables_filter');
    searchWrapper.addClass('custom-search-style');
	
  }); 
  $(document).ready(function() {
    $('#green-light').DataTable({
      // Search customization
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
      }
    });

    // Custom CSS for search bar
    var searchWrapper = $('.dataTables_filter');
    searchWrapper.addClass('custom-search-style');
	
  }); 
  $(document).ready(function() {
    $('#opportunities').DataTable({
      // Search customization
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
      }
    });

    // Custom CSS for search bar
    var searchWrapper = $('.dataTables_filter');
    searchWrapper.addClass('custom-search-style');
	
  });
   $(document).ready(function() {
    $('#co-investor').DataTable({
      // Search customization
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
      }
    });

    // Custom CSS for search bar
    var searchWrapper = $('.dataTables_filter');
    searchWrapper.addClass('custom-search-style');
	
  });
  $(document).ready(function() {
  $('.submit-invest-btn').click(function(e) {
    e.preventDefault(); // Prevent the default click behavior

    var userId = $(this).data('user-id'); // Get the user ID from the data attribute
    var button = $(this); // Store the button element for later use

    // Make the AJAX request
    $.ajax({
      url: '<?php echo base_url('contact_user');?>', // Replace with the URL of your PHP function
      type: 'POST',
      data: {userId: userId}, // Pass the user ID as data
      success: function(response) {
        // Update the button text and disable it
        button.text('Sent');
        button.addClass('disabled');
      },
      error: function() {
        // Handle error if necessary
      }
    });
  });
});

</script>
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
<style>
  /* Custom CSS for search bar */
  .custom-search-style {
    float: right;
    margin-top: 10px;
  }

  .custom-search-style input {
    border-radius: 5px;
	background-color:#000;
    padding: 5px;
  }
</style>

</body>

</html>