<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("layout/head")?>

<body>
  <?php $this->load->view("layout/header")?>

  

  <main id="main">

    <!-- ======= data-table ======= -->
    <section id="data-table" class="data-table">
      <div class="container ">
			<div class="row justify-content-center">
				<div class="col-sm-12 text-center">
					<h1><?php echo $data['title_one'];?> <span><?php echo $data['title_two'];?></span></h1>
				</div>
					<div class="col-sm-12 mt-5" style="overflow-y:scroll">
					<table class="table data-table text-center">
					  <thead>
						<tr>
                          <th scope="col text-left">Rank</th>
                          <th scope="col">Firm</th>
                          <th scope="col">Geographic Location</th>
                          <th scope="col">Amount of Investment</th>
                        </tr>
					  </thead>
					  <tbody>
					 <?php 
					  // Sort the $due_firm array by amount in descending order
                        usort($sf, function ($a, $b) {
                            return $b->amount - $a->amount;
                        });
                    
                        $rank = 1;
					 foreach($sf as $lf) {?>
                    <tr>
                        <td><?php echo $rank; ?></td>
                        <?php
                         $username = "";
							    if($lf->anonymous == '1')
							    {
							        $username = "Anonymous";
							    }
							    else
							    {
							       $username = $lf->user_firm_name ;
							    }
                        ?>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $lf->city . ',&nbsp;' . $lf->state . ',&nbsp;' . $lf->country; ?></td>
                       <td>$ <?php echo auto_format_amount($lf->amount); ?></td>
                    </tr>
                    <?php 
                     $rank++; 
                    }
                    ?>    
					  </tbody>
					</table>
					</div>
					<div class="row mt-5">
					 <div class="d-flex flex-md-row flex-column justify-content-center p-0 m-0">
					  <div class="bd-highlight p-md-2"><a class="submit-invest-btn my-2 W-100" href="<?php echo base_url('sell')?>">Request to Submit Sell Side Opportunity</a></div>
					  <div class="bd-highlight p-md-2"><a class="view-chat-btn my-2" href="<?php echo base_url('register')?>">Submit Investment Anonymously</a></div>

					</div>
					 
					  <div class="col-sm-12 mt-5 text-center d-none">
					 <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
					</div>
					 </div>
					
					
			</div>
			
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  

</body>

</html>