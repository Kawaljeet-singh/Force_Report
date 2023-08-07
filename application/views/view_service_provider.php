<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container main-nav">

                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
                  	<div class="row">
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>First Name</p>
						 <h2><?php echo $user->user_first_name?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Last Name</p>
						 <h2><?php echo $user->user_last_name?> </h2>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Email</p>
						 <h2><?php echo $user->user_email?> </h2>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Phone</p>
						 <h2><?php echo $user->user_phone?> </h2>
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Family office Name</p>
						 <h2><?php echo $user->user_family_office?> </h2>
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Firm Name</p>
						 <h2><?php echo $user->user_firm_name?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Investment Sector</p>
						 <h2><?php echo getInvestSectorName($sp->inv_sec)?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Firm Description</p>
						  <h2><?php echo $sp->firm_desc?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Structure of Investment</p>
						 <h2><?php echo getInvestSectorName($sp->str_invest)?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Country</p>
						 <h2><?php echo $user->country?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>State</p>
						 <h2><?php echo $user->state?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>City</p>
						 <h2><?php echo $user->city?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Amount of Investment</p>
						 <h2><?php echo $user->amount?></h2>  
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Stage Of Investment</p>
						 <h2><?php echo getInvestSectorName($sp->stage_inv)?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Category</p>
						 <h2><?php echo getcategory($sp->category)?></h2> 
						</div>
					</div>
					 	
					 
					</div>
				 
</div>
 

                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>