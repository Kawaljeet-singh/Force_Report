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
                                            <th>Company</th>
											<th>Invesment Sector</th>
											<th>Lead investors</th>
											<th>Financing Round</th>
											<th>Revenue</th>
											<th>Total Dept</th>
											<th>Valuation</th>
											<th>Min Invesment</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($investment as $dash) {
											echo	'<tr>
													<td>'.$dash->company_name.'</td>
													<td>'.getInvestSectorName($dash->invest_sector).'</td>
													<td>'.$dash->lead_invest.'</td>
													<td>'.$dash->company_financials.'</td>
													<td>'.$dash->revenue.'</td>
													<td>'.$dash->total_debt.'</td>
													<td>'.$dash->valuation.'</td>
													<td>'.$dash->min_invt.'</td>
													<td><a href="'.base_url('approve_investment/'.$dash->sell_key).'" class="approve-btn">Approve</a>
													<a href="'.base_url('decline_investment/'.$dash->sell_key).'" class="decline-btn">Decline</a></td>
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