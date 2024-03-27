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
						  <th scope="col text-left">Family Office</th>
						  <th scope="col">Sector</th>
						  <th scope="col">Geographic Location</th>
						  <th scope="col">Investment Size</th>
						</tr>
					  </thead>
					  <tbody>
					 <?php foreach($sf as $lf) {?>
                    <tr>
                      <td><?php
                      if($lf->anonymous == '1')
							    {
							        echo "Anonymous";
							    }
							    else
							    {
							       echo $lf->user_family_office;
							    }
							    ?>
							    </td>
                       <td><?php
                      if($lf->anonymous == '1')
							    {
							        echo "Anonymous";
							    }
							    else
							    {
							        $sectorIds = Investmentuser($lf->user_id);
                                    if (!empty($sectorIds)) {
                                            echo getInvestSectorName(implode(', ', $sectorIds));
                                        }   
                   
							    }
							    ?>
							    </td>
                      <td><?php echo $lf->country.',&nbsp;'.$lf->state.',&nbsp;'.$lf->city?></td>
                     <td>$ <?php echo auto_format_amount($lf->amount); ?></td>
                    </tr>
                    <?php 
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