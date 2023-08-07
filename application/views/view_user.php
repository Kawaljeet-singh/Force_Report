<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container-fluid main-nav">

                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
                    <!-- DataTales Example -->
            	<div class="row justify-content-center">
			<div class="col-sm-12 col-md-8">
				<div class="row justify-content-center my-5">
				 
				</div>
				
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
						 <h2><?php echo $user->user_firm_name?> </h2>
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
						 
								if(checkInvestment($user->user_id,$inv->inv_ID))
								{
									?>
									<div class="col-sm-4 col-md-4 py-2">
								<h3><?php echo $inv->inv_sector;?></h3>
								</div>
									<?php
								}
								 }?>
						
							<div class="col-sm-12 text-center my-5" >
								<h1 style="color:#1FB8EF;">Stage of Investment</h1>
							</div>
						 	<?php foreach ($invest_stage as $inv)
							{
							 
								if(checkInvestment($user->user_id,$inv->inv_ID))
								{
									?>
									<div class="col-sm-4 col-md-4 py-2">
									<h3><?php echo $inv->inv_sector;?></h3>
									</div>
									<?php
								}
							}?>
						 
						<div class="col-sm-12 text-center my-5" id="sectors">
							<h1 style="color:#FC9A0A;">Structure Of Investment</h1>
						</div>
							<?php foreach ($invest_structure as $inv)
							{
							 
								if(checkInvestment($user->user_id,$inv->inv_ID))
								{
									?>
									<div class="col-sm-4 col-md-4 py-2">
										<h3><?php echo $inv->inv_sector;?></h3>
									</div>
									<?php
								}
							 }?>
					</div>
					
				</div>
			</div>
		</div>
 
</div>
	
                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>