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
				<a href="<?php echo base_url('dashboard?id=1');?>" class="admin-login-btn">Sell Side Dashboard</a>
			</div>
		</div>
		<div class="col-sm-9 ">
			<div class="row">
			<div class="col-sm-12 col-md-9">
				<h1>Dashboard</h1>
				<h6>Welcome to your customized dashboard! </h5>
			</div>
				  <div class="col-sm-12 col-md-3   text-align-right text-end">
					<a href="<?php echo base_url('dashboard/logout');?>" class="appointment-btn scrollto "><span>Logout</span></a>
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
			<li class="nav-link <?php if($_GET['id']==1){echo 'active';}?>" id="v-table-home-tab" data-id="1"  data-bs-toggle="pill" data-bs-target="#v-table-dashboard" type="button" role="tab" aria-selected="true"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111017.png')?>"> Dashboard</li>
			<li class="nav-link <?php if($_GET['id']==2){echo 'active';}?>" id="v-table-profile-tab" data-id="2" data-bs-toggle="pill" data-bs-target="#v-table-green-light" type="button" role="tab"  aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111114.png')?>"> Your Green Lighting</li>
			<li class="nav-link <?php if($_GET['id']==3){echo 'active';}?>" id="v-table-messages-tab" data-id="3" data-bs-toggle="pill" data-bs-target="#v-table-co-investor" type="button" role="tab"  aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111124.png')?>"> Co-Investor</li>
			<li class="nav-link <?php if($_GET['id']==4){echo 'active';}?>" id="v-table-settings-tab" data-id="4" data-bs-toggle="pill" data-bs-target="#v-table-opportunities" type="button" role="tab" aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111132.png')?>"> Opportunities</li>
			<li class="nav-link <?php if($_GET['id']==5){echo 'active';}?>" id="v-table-settings-tab" data-id="5" data-bs-toggle="pill" data-bs-target="#v-table-settings" type="button" role="tab"  aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111215.png')?>"> Settings</li>
			<li class="nav-link <?php if($_GET['id']==6){echo 'active';}?>" id="v-table-settings-tab" data-id="6" data-bs-toggle="pill" data-bs-target="#v-table-logout" type="button" role="tab" aria-selected="false"><img style="height:30px" src="<?php echo base_url('assets/img/Screenshot 2023-06-29 111225.png')?>"> Logout</li>
			</ul>
			</div>
		  <div class="col-sm-9  tab-content" style="overflow-y:scroll" id="v-table-tabContent">
			<div class="tab-pane fade <?php if($_GET['id']==1){echo 'show active';}?> family-office" id="v-table-dashboard" role="tabpanel" >
			   <h1><span>Dashboard</span></h1>
				 <table id="example" class=" dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Invesment Sector</th>
								<th>Lead Investors</th>
								<th>Financing Round</th>
								<th>Revenue</th>
								<th>Total Debt</th>
								<th>Valuation</th>
								<th>Min Invesment</th>
								<th>Greenlight</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($all_data as $dash) {
						    	        $user=$this->Dashboard_model->get_user_detail($dash->inve_user_id);
						    	        if ($user != '')
						    	        {
						    	       $contactExists = checkcontact($this->session->userdata('user_detail')->user_key,$dash->inve_user_id);
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
                								<td><a class="submit-invest-btn" href="#" data-form-id="0" data-user-id="'.$user->user_id.'">Contact</a></td>
                							</tr>';
    						    	     }
						    	     }
						 }?>
						</tbody>
						
					</table>
			</div>
			<div class="tab-pane fade <?php if($_GET['id']==2){echo 'show active';}?> family-office" id="v-table-green-light" role="tabpanel">
			
			  <h1><span>Green Light</span></h1>
				 <table id="green-light" class=" dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Invesment Sector</th>
								<th>Lead Investors</th>
								<th>Financing Round</th>
								<th>Revenue</th>
								<th>Total Debt</th>
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
			<div class="tab-pane fade <?php if($_GET['id']==3){echo 'show active';}?> family-office" id="v-table-co-investor" role="tabpanel">
			    <h1><span>Family Meet Family</span></h1>
			<table id="co-investor" class="dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Investor</th>
								<th>Common Criteria</th>
								<th>Family office</th>
								<th>Firm Name</th>
								 <th>Greenlight</th>
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
							      
							        $query = $this->db->get_where('contact_user', array('cont_userid' => $user['user_id']));
                                        if ($query->num_rows() <= 0 ) {
            								echo '<tr>
            									<td>' . $username . '</td>
            								    <td>'.getInvestSectorName($dash->inv_user_sectorId).'</td>
            									<td>' . $user['user_family_office'] . '</td>
            									<td>' . $user['user_firm_name'] . '</td><td>';
            								
                                        
    									 if($user['anonymous'] == '1')
        							    {
        							       
        							    }
        							    else
        							    {
        							       echo '<a class="submit-invest-btn" href="#" data-form-id="0"  data-user-id="'.$user['user_id'] .'">Contact</a>';
        							    }
									echo '</td></tr>';
                                        }
							}
						
						}
						}
						?>
						</tbody>
						
					</table></div>
			<div class="tab-pane fade <?php if($_GET['id']==4){echo 'show active';}?> family-office" id="v-table-opportunities" role="tabpanel">
			    <h1><span>Opportunities</span></h1>
			 <table id="opportunities" class="dashboard-table " style="width:100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Invesment Sector</th>
								<th>Lead Investors</th>
								<th>Financing Round</th>
								<th>Revenue</th>
								<th>Total Debt</th>
								<th>Valuation</th>
								<th>Min Invesment</th>
								<th>Greenlight</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							
						foreach($opportunities as $dash) {
						    
						    $query = $this->db->get_where('contact_user', array('cont_form_id' => $dash->sell_id));

                            // Check if the query returned any rows
                            if ($query->num_rows() == 0 ) {
                    		echo	'<tr>
								<td>'.$dash->company_name.'</td>
								<td>'.getInvestSectorName($dash->invest_sector).'</td>
								<td>'.$dash->lead_invest.'</td>
								<td>'.$dash->company_financials.'</td>
								<td>'.$dash->revenue.'</td>
								<td>'.$dash->total_debt.'</td>
								<td>'.$dash->valuation.'</td>
								<td>'.$dash->min_invt.'</td>
								<td><a class="submit-invest-btn" href="#" data-form-id="'.$dash->sell_id.'" data-user-id="30">Contact</a></td>
                        	</tr>';
						 }
						 }?>
						</tbody>
					</table>
			</div>
			<div class="tab-pane fade <?php if($_GET['id']==5){echo 'show active';}?> family-office" id="v-table-settings" role="tabpanel"><form id="updateForm" action="<?php echo base_url('update_password')?>" method="POST">
					  <h1><span>Settings</span></h1>
					
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
						 <input type="password" class="form-control" id="password" name="password" placeholder="New Password*">
						</div>	
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0">
						 <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password*">
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
			<div class="tab-pane fade <?php if($_GET['id']==6){echo 'show active';}?> family-office" id="v-table-logout">
			    
			     <h1><span>Logout</span></h1>
			    Click to <a href="<?php echo base_url('logout')?>">logout</a>
			    
			    </div>
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

    var userId = $(this).data('user-id');
     var formId = $(this).data('form-id');
    var button = $(this); // Store the button element for later use

    // Make the AJAX request
    $.ajax({
      url: '<?php echo base_url('contact_user');?>', // Replace with the URL of your PHP function
      type: 'POST',
      data: {userId: userId, formId:formId}, // Pass the user ID as data
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
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const newUrl = '<?php echo base_url('dashboard?id=')?>' + id;

            history.pushState(null, null, newUrl);

            // Make an AJAX request to fetch new content based on the updated ID
            // You can use libraries like jQuery or fetch API
            // Example using fetch API:
            fetch(newUrl)
                .then(response => response.text())
                .then(data => {
                    // Update the content on your page with the fetched data
                    document.getElementById('content-container').innerHTML = data;
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });

            // Update active class for clicked link
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
            });
            this.classList.add('active');
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