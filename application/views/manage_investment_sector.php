<?php $this->load->view('layout/dashboard_header');?>
  
                <!-- Begin Page Content -->
               <!-- Begin Page Content -->
                <div class="container-fluid main-nav">

                    <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 m-3 mt-5"><?php echo $title?></h1>
                        <a data-toggle="modal" data-target="#investmentModal" class="submit-invest-btn">
						<?php echo $button?></a>
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
                                        <?php foreach($investment as $dash) {
											echo	'<tr>
													<td>'.$dash->inv_sector.'</td>
													<td>
												<a data-toggle="modal" data-target="#investmentupdate-'.$dash->inv_key.'"  class="btn edit-btn">Edit</a>
												<a href="'.base_url('decline_sector/'.$dash->inv_key.'/'.$page).'" class="decline-btn">Delete</a></td>
											</tr>';
											 }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
				<div class="modal fade" id="investmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog border" role="document">
						<div class="modal-content main-nav">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add New Sector</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="form" method="POST">
								<div class="col-sm-6 mb-4">
									<div class="form-check p-0">
										<p>Add Sector</p>
										<input type="text" required class="form-control" name="invest_sector">
										<input type="hidden" class="form-control" name="inv_type" value="<?php echo $type;?>">
									</div>
								</div>
								<div class="message"></div>
								<input type="submit"  value="Submit" class="btn btn-success">
								<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
								</form>
							</div> 
						</div>
					</div> 
				</div>

				 <?php foreach($investment as $dash) {?>
					<div class="modal fade" id="investmentupdate-<?php echo $dash->inv_key;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog border" role="document">
							<div class="modal-content main-nav">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Update Sector</h5>
									<button class="close" type="button" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="updateform" method="POST">
									<div class="col-sm-6 mb-4">
										<div class="form-check p-0">
											 
											<input type="text" required class="form-control" value="<?php echo $dash->inv_sector;?>" name="invest_sector">
											<input type="hidden" class="form-control" name="inv_type" value="<?php echo $dash->inv_type;?>">
											<input type="hidden" class="form-control" name="inv_ID" value="<?php echo $dash->inv_key;?>">
										</div>
									</div>
									<div class="messages"></div>
									<input type="submit"  value="Update" class="btn btn-success">
									<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									</form>
								</div> 
							</div>
						</div> 
					</div>
					<?php } ?>
	
	
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
			$(document).ready(function() {
			  $('.form').submit(function(e) {
				e.preventDefault();
				
				// Serialize the form data
				var formData = $(this).serialize();

				// Send the Ajax request
				$.ajax({
				  url: '<?php echo base_url('add_invest_sector');?>',
				  type: 'POST',
				  data: formData,
				  dataType: 'json',
				  success: function(response) {
					if (response.success) {
					  // Display success message on the page
					  $('.message').text(response.message).addClass('success').removeClass('error');
					} else {
					  // Display error message on the page
					  $('.message').text(response.message).addClass('error').removeClass('success');
					}
				  },
				  error: function() {
					// Display error message on the page
					$('.message').text('An error occurred while submitting the form').addClass('error').removeClass('success');
				  }
				});
			  });
			});
			$(document).ready(function() {
  $('.modal-content').on('submit', '.updateform', function(e) {
    e.preventDefault();
    
    // Serialize the form data
    var formData = $(this).serialize();

    // Send the Ajax request
    $.ajax({
      url: '<?php echo base_url('update_invest_sector');?>',
      type: 'POST',
      data: formData,
      dataType: 'json',
      success: function(response) {
        if (response.success) {
          // Display success message on the page
          $('.messages').text(response.message).addClass('success').removeClass('error');
        } else {
          // Display error message on the page
          $('.messages').text(response.message).addClass('error').removeClass('success');
        }
      },
      error: function() {
        // Display error message on the page
        $('.messages').text('An error occurred while submitting the form').addClass('error').removeClass('success');
      }
    });
  });
});

			</script>
                <!-- /.container-fluid -->
   <?php $this->load->view('layout/dashboard_footer');?>