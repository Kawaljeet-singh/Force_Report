<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container-fluid main-nav">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                        <a href="<?php echo base_url('add_service_provider');?>" class="submit-invest-btn">
						 Add New Service provider</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="data-table ">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="dashboard-table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Firm Name</th>
											<th>Investment Sector</th>
											<th>Firm Description</th>
											<th>Amount</th>
											<th>Stage of investment</th>
											<th>Category</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($service_provider as $dash) {
										echo	'<tr>
												<td>'.$dash->user_firm_name.'</td>
												<td>'.getInvestSectorName($dash->inv_sec).'</td>
												<td>'.$dash->firm_desc.'</td>
												<td>'.$dash->amount.'</td>
												<td>'.getInvestSectorName($dash->stage_inv).'</td>
												<td>'.getcategory($dash->category).'</td>
												<td><a href="'.base_url('approve_service/'.$dash->user_key ).'" class="approve-btn">Approve</a>
												<a href="'.base_url('decline_service/'.$dash->user_key).'" class="decline-btn">Decline</a></td>
											</tr>';
										 }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>