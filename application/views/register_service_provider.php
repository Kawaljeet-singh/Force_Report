<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container-fluid main-nav">

                    <!-- Page Heading -->
                    <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   
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
                                        <?php foreach($register_data as $dash) {
										echo	'<tr>
												<td>'.$dash->user_firm_name.'</td>
												<td>'.getInvestSectorName($dash->inv_sec).'</td>
												<td>'.$dash->firm_desc.'</td>
												<td>'.$dash->amount.'</td>
												<td>'.getInvestSectorName($dash->stage_inv).'</td>
												<td>'.getcategory($dash->category).'</td>
												<td><a href="'.base_url('view_service_provider/'.$dash->user_key).'" class="approve-btn">View</a>
												<a href="'.base_url('edit_service_provider/'.$dash->user_key).'" class="edit-btn">Edit</a>
												<a href="'.base_url('delete_service/'.$dash->user_key).'" class="decline-btn">Decline</a></td>
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