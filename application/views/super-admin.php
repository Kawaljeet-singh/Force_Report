<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
                <div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                   </div>
                    <!-- DataTales Example -->
                    <div class="data-table ">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="dashboard-table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($subscribers as $dash) {
											echo	'<tr>
													<td>'.$dash->email.'</td>
													<td>
													<a href="'.base_url('decline_subscribe/'.$dash->sub_id).'" class="decline-btn">Delete</a></td>
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