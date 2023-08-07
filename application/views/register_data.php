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
                                            <th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Family Office</th>
											<th>Firm Name</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($register_data as $dash) {
										echo	'<tr>
												<td>'.$dash->user_first_name.' '.$dash->user_last_name.'</td>
												<td>'.$dash->user_email.'</td>
												<td>'.$dash->user_phone.'</td>
												<td>'.$dash->user_family_office.'</td>
												<td>'.$dash->user_firm_name.'</td>
												<td><a href="" class="approve-btn">View</a>
												<a href="" class="edit-btn">Edit</a>
												<a href="'.base_url('decline_user/'.$dash->user_key).'" class="decline-btn">Decline</a></td>
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