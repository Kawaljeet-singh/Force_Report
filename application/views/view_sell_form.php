<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container main-nav"> 
                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
                    <!-- DataTales Example -->
                   	<div class="row">
					<div class="col-sm-6 mb-4">
						
						<div class="form-check p-0"><p>Name of Company </p>
						 <h2><?php echo $sp->company_name?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						
						<div class="form-check p-0"><p>Company Description</p>
						 <h2><?php echo $sp->company_description?></h2> 
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Company Financials</p>
						 <h2><?php echo $sp->company_financials?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Management Description</p>
						 <h2><?php echo $sp->manage_desc?></h2> 
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Size of Requested Investment</p>
						 <h2><?php echo $sp->size_of_req?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Minimum Investment Amount</p>
						 <h2><?php echo $sp->min_invt?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Revenue</p>
						 <h2><?php echo $sp->revenue?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
					 
						<div class="form-check p-0"><p>EBITDA</p>
						 <h2><?php echo $sp->ebitd?></h2> 
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Enterprise Value</p>
						 <h2><?php echo $sp->enter_val?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Total Debt</p>
						 <h2><?php echo $sp->total_debt?></h2> 
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Total Funding to Date</p>
						 <h2><?php echo $sp->total_fund_date?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Valuation</p>
						 <h2><?php echo $sp->valuation?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Stage Of Investment</p>
						 <h2><?php echo getInvestSectorName($sp->stage_of_invest)?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Employees</p>
						 <h2><?php echo $sp->employees?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Existing Investors</p>
						 <h2><?php echo $sp->existing_invest?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Lead Investors</p>
						 <h2><?php echo $sp->lead_invest?></h2> 
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Recent Acquisitions</p>
						 <h2><?php echo $sp->recent_aq?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						 
						<div class="form-check p-0"><p>Competitors</p>
						 <h2><?php echo $sp->competitiors?></h2> 
						</div>
					</div>	
					<div class="col-sm-6 mb-4">
						<div class="form-check p-0"><p>Investment Sector</p>
						 <h2><?php echo getInvestSectorName($sp->invest_sector)?></h2> 
						</div>
					</div>
					<div class="col-sm-6 mb-4">
						
						<div class="form-check p-0"><p>Attestation </p>
						 <h2><?php echo $sp->attest?></h2> 
						</div>
					</div>
					
					  
						</div>  
</div> 
                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>