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
                                            <th>Company Name</th>
											<th>Description</th>
											<th>Financials</th>
											<th>Size of Request</th>
											<th>Investment</th>
											<th>action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($register_fo as $dash) {
										echo	'<tr>
												<td>'.$dash->company_name.'</td>
												<td>'.$dash->company_description.'</td>
												<td>'.$dash->company_financials.'</td>
												<td>'.$dash->size_of_req.'</td>
												<td>'.$dash->min_invt.'</td>
												<td><a href="" class="approve-btn">View</a>
												<a href="" class="edit-btn">Edit</a>
												<a href="'.base_url('decline_user/'.$dash->sell_id).'" class="decline-btn">Decline</a></td>
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