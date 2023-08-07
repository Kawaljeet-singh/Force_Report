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
				<div class="col-sm-12 mt-5">
					<table class="table data-table text-center">
					  <thead>
						<tr>
						  <th scope="col text-left">Family Office</th>
						  <th scope="col">Sector</th>
						  <th scope="col">Geographic Location</th>
						  <th scope="col">Investment Size (Millions)</th>
						</tr>
					  </thead>
					  <tbody>
					 <?php foreach($sf as $lf) {?>
                    <tr>
                      <td><?php echo $lf->user_family_office?></td>
                      <td><?php echo $lf->user_firm_name?></td>
                      <td><?php echo $lf->country.','.$lf->state.','.$lf->city?></td>
                      <td><?php echo $lf->amount?></td>
                    </tr>
                    <?php 
                    }
                    ?>    
					  </tbody>
					</table>
					</div>
					 <div class="row mt-5">
					 <div class="d-flex justify-content-center">
					  <div class="p-2 bd-highlight"><a class="submit-invest-btn" href="<?php echo base_url('sell')?>">Request to Submit Sell Side Opportunity</a></div>
					  <div class="p-2 bd-highlight"><a class="view-chat-btn" href="">Submit Investment Anonymously</a></div>

					</div>
					 
					  <div class="col-sm-12 mt-5 text-center">
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