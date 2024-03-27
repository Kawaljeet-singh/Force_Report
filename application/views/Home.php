<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("layout/head")?>

<body>
  <?php $this->load->view("layout/header")?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container-fluid">
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="<?php echo base_url()?>/assets/video/homevideo.mp4" type="video/mp4">
        </video>
      
        <!-- The header content -->
        <div class="container h-100">
          <div class="row">
            <div class="col-sm-6">
              <h1><span>Deal Flow</span> Through Transparency</h1>
              <p class="my-5">The most secure and contemporary database of investment seeking family offices in the U.S.</p>
              <a class="learn-btn mt-5" href="<?php echo ('about')?>">Learn More</a>
            </div>
          </div>
      </div>
    </div>
  </section><!-- End Hero -->
 
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="about-us">
      <div class="container content">
        <div class="row text-center justify-content-center">
          <div class="col-sm-12 col-md-10">
          <div class="col-sm-12">
           <h1> About <span style="color: #1FB8EF;">FORCE</span><span> Report </span></h1>
           <p>
               The FORCE Report is a ranking of family offices based on the size of their investments and the number of investments.  It is designed to bring our family offices the most pertinent information, investment opportunities, and to foster co-investment relationships.
           </p>
           <p> 
           The goal of the FORCE Report is to position family offices so that they get the most pertinent deal-flow possible based on the sectors they invest in, the amount of capital they like to deploy and the family offices they prefer to co-invest with.
           </p>
          </div>
          <div class="row">
          <div class="col-sm-12 col-lg-4   ">
            <div class="content content-1">
              <img class="img-fluid service-icon" src="<?php echo base_url()?>/assets/img/icon1.png">
              <h3>View Family Office Rankings</h3>
            </div>
          </div>
          <div class="col-sm-12 col-lg-4 content-second ">
            <div class="content content-2">
              <img class="img-fluid service-icon" src="<?php echo base_url()?>/assets/img/icon2.png">
              <h3>Submit Investment Opportunities</h3>
            </div>
          </div>
           <div class="col-sm-12 col-lg-4 ">
            <div class="content content-3">
              <img class="img-fluid service-icon" src="<?php echo base_url()?>/assets/img/icon3.png">
              <h3>Family Office Registration </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </section><!-- End Why Us Section -->
 <section id="family-meet-family" class="family-meet">
      <div class="container content">
        <div class="row text-center justify-content-center">
          <div class="col-sm-12 col-md-8 content">
           <h1>Family <span> Meet </span> Family</h1>
           <p>FORCE prides itself on creating meaningful relationships between family offices. These relationships enable the exchange of valuable insights, best practices, and investment opportunities, which lead to better-informed decisions. Ultimately, building bridges with other family offices can contribute to long-term sustainability and success, both financially and in terms of legacy preservation.</p>
           <a href="<?php echo base_url('login/3');?>" class="f2f-btn  scrollto W-100 ">Meet Co-Investors</span></a>
           </div>
      </div>
    </div>
      </div>
    </section><!-- End Why Us Section -->
    <!-- ======= family office ======= -->
    <section id="family-office" class="family-office">
      <div class="container">

        <div class="row ">
              <div class="col-12 col-md-6">
            <h1><span>Participating</span> <br>Single Family Office</h1>
          </div>
          <div class="col-12 col-md-6 text-end mt-auto p-2 mb-3">
            <a href="<?php echo base_url('register')?>" class="submit-invest-btn">Submit Investment Anonymously</a>
          </div>
         <div class="col-sm-12 mx-auto">
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item family-office-nav-tab" role="presentation">
              <button class="nav-tab active tab-button-single" data-url="<?php echo base_url('size_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" id="size-tab" data-bs-toggle="tab" data-bs-target="#size" type="button" role="tab" aria-controls="size" aria-selected="true">Family Office Rankings by Size of Investment</button>
            </li>
            <li class="nav-item family-office-nav-tab" role="presentation">
              <button class="nav-tab tab-button-single" id="investment-tab" data-url="<?php echo base_url('number_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" data-bs-toggle="tab" data-bs-target="#investment" type="button" role="tab" aria-controls="investment" aria-selected="false">Family Office Rankings by Number of Investments</button>
            </li>
           </ul>
          <div class="tab-content" id="myTabContent" style="overflow-y:scroll">
            <div class="tab-pane fade show active" id="size" role="tabpanel" aria-labelledby="size-tab">
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
               <?php foreach($sfo as $lf) {?>
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
                       <td>
                       <?php
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
                      <td><?php echo $lf->city.',&nbsp;'.$lf->state.',&nbsp;'.$lf->country?></td>
                      <td>$ <?php echo auto_format_amount($lf->amount)?></td>
                    </tr>
                <?php 
                }
                ?>    
              </tbody>
            </table></div>
            <div class="tab-pane fade" id="investment" role="tabpanel" aria-labelledby="investment-tab">
			<table class="table data-table text-center">
              <thead>
                <tr>
                  <th scope="col text-left">Family Office</th>
                  <th scope="col">Sector</th>
                  <th scope="col">Geographic Location</th>
                  <th scope="col">Total Number of Investments</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($sfo as $lf) {?>
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
                       <td>
                       <?php
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
                      <td><?php echo $lf->city.',&nbsp;'.$lf->state.',&nbsp;'.$lf->country?></td>
                      <td><?php echo $lf->sizeby?></td>
                    </tr>
                <?php 
                }
                ?>    
              </tbody>
            </table>
              </div>
          </div>
          
         </div>
         <div class="col-6 align-self-center">
         <img class="img-fluid d-none" src="<?php echo base_url()?>/assets/img/company.png">
        </div>
        <div class="col-6 text-end mt-auto p-2 mb-3">
          <a href="<?php echo base_url('size_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2');?>" id="dynamic-button-single" class="view-chat-btn">View Full Chart</a>
        </div>
          </div>
        </div>

      </div>
    </section><!-- End family office Section -->
<!-- ======= family office ======= -->
    <section id="family-office" class="family-office">
      <div class="container">

        <div class="row ">
          <div class="col-12 col-md-6">
            <h1><span>Participating</span> <br>Multi-Family Office</h1>
          </div>
          <div class="col-12 col-md-6 text-end mt-auto p-2 mb-3">
            <a href="<?php echo base_url('register')?>" class="submit-invest-btn">Submit Investment Anonymously</a>
          </div>
         <div class="col-sm-12 mx-auto">
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item family-office-nav-tab" role="presentation">
              <button class="nav-tab active tab-button-multi" data-url="<?php echo base_url('size_of_investment/a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2');?>" id="multi-size-tab" data-bs-toggle="tab" data-bs-target="#multi-size" type="button" role="tab" aria-controls="size" aria-selected="true">Multi-Family Office Rankings by Size of Investment</button>
            </li>
            <li class="nav-item family-office-nav-tab" role="presentation">
              <button class="nav-tab tab-button-multi" data-url="<?php echo base_url('number_of_investment/a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2');?>" id="multi-investment-tab" data-bs-toggle="tab" data-bs-target="#multi-investment" type="button" role="tab" aria-controls="investment" aria-selected="false">Multi-Family Office Rankings by Total Number of Investments</button>
            </li>
           </ul>
          <div class="tab-content" id="myTabContent" style="overflow-y:scroll">
            <div class="tab-pane fade show active" id="multi-size" role="tabpanel" aria-labelledby="size-tab">
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
                <?php foreach($mfo as $lf) {?>
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
							    <td>
                       <?php
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
                      <td><?php echo $lf->city.',&nbsp;'.$lf->state.',&nbsp;'.$lf->country?></td>
                      <td>$ <?php echo auto_format_amount($lf->amount)?></td>
                    </tr>
                <?php 
                }
                ?>   
              </tbody>
            </table></div>
            <div class="tab-pane fade" id="multi-investment" role="tabpanel" aria-labelledby="investment-tab">
			<table class="table data-table text-center">
              <thead>
                <tr>
                  <th scope="col text-left">Family Office</th>
                  <th scope="col">Sector</th>
                  <th scope="col">Geographic Location</th>
                  <th scope="col">Total Number of Investments</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($mfo as $lf) {?>
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
                      <td><?php $sectorIds = Investmentuser($lf->user_id);
                            if (!empty($sectorIds)) {
                                    echo getInvestSectorName(implode(', ', $sectorIds));
                                }  
                            ?>
                      </td>
                       <td><?php echo $lf->city.',&nbsp;'.$lf->state.',&nbsp;'.$lf->country?></td>
                      <td><?php echo $lf->sizeby?></td>
                    </tr>
                <?php 
                }
                ?>    
              </tbody>
            </table>
              </div>
          </div>
          
         </div>
         <div class="col-6 align-self-center">
         <img class="img-fluid d-none" src="<?php echo base_url()?>/assets/img/company.png">
        </div>
        <div class="col-6 text-end mt-auto p-2 mb-3">
          <a  href="<?php echo base_url('size_of_investment/a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" id="dynamic-button-multi" class="view-chat-btn">View Full Chart</a>
        </div>
          </div>
        </div>

      </div>
    </section><!-- End family office Section -->
    <!-- ======= Background Section ======= -->
    <section class="m-0 p-0">
      <div class="container-fluid p-0 m-0">
        <img class="img-fluid" src="<?php echo base_url()?>/assets/img/homeimage3.png">
       
      </div>
    </section><!-- End Background Section -->
<!-- ======= family office ======= -->
    <section id="family-office" class="family-office service-provider">
      <div class="container">

        <div class="row ">
          <div class="col-12 col-md-6">
            <h1><span>Participating</span> <br>Service Providers</h1>
          </div>
          <div class="col-12 col-md-6 text-end mt-auto p-2 mb-3">
            <a href="<?php echo base_url('register')?>" class="submit-invest-btn">Apply for Inclusion</a>
          </div>
         <div class="col-sm-12 mx-auto">
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item service-provider-nav-tab" role="presentation">
              <button class="nav-tab active tab-button-firm" id="law-tab" data-url="<?php echo base_url('firmdata/c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" data-bs-toggle="tab" data-bs-target="#law" type="button" role="tab" aria-controls="law" aria-selected="true">Top law firms</button>
            </li>
            <li class="nav-item service-provider-nav-tab" role="presentation">
              <button class="nav-tab tab-button-firm" id="account-tab" data-url="<?php echo base_url('firmdata/b965c326-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Top accounting firms</button>
            </li>
			<li class="nav-item service-provider-nav-tab" role="presentation">
              <button class="nav-tab tab-button-firm" id="valuation-tab" data-url="<?php echo base_url('firmdata/b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" data-bs-toggle="tab" data-bs-target="#valuation" type="button" role="tab" aria-controls="valuation" aria-selected="false">top valuation firms</button>
            </li>
			<li class="nav-item service-provider-nav-tab" role="presentation">
              <button class="nav-tab tab-button-firm" id="diligence-tab" data-url="<?php echo base_url('firmdata/b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2')?>" data-bs-toggle="tab" data-bs-target="#diligence" type="button" role="tab" aria-controls="diligence" aria-selected="false">top due-diligence firms</button>
            </li>
           </ul>
          <div class="tab-content" id="myTabContent" style="overflow-y:scroll">
            <div class="tab-pane fade show active" id="law" role="tabpanel" aria-labelledby="size-tab">
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
    usort($law_firm, function ($a, $b) {
        return $b->amount - $a->amount;
    });

    $rank = 1;
    foreach ($law_firm as $lf) {
        ?>
        <tr>
            <td><?php echo $rank; ?></td>
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
            <td><?php echo $lf->city . ',&nbsp;' . $lf->state . ',&nbsp;' . $lf->country; ?></td>
            <td>$ <?php echo auto_format_amount($lf->amount); ?></td>
        </tr>
        <?php
        $rank++; // Increment the rank for the next entry
    }
    ?>
               
              </tbody>
            </table></div>
            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="investment-tab">
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
    usort($account_firm, function ($a, $b) {
        return $b->amount - $a->amount;
    });

    $rank = 1;
    foreach ($account_firm as $lf) {
        ?>
        <tr>
            <td><?php echo $rank; ?></td>
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
            <td><?php echo $lf->city . ',&nbsp;' . $lf->state . ',&nbsp; ' . $lf->country; ?></td>
           <td>$ <?php echo auto_format_amount($lf->amount); ?></td>
        </tr>
        <?php
        $rank++; // Increment the rank for the next entry
    }
    ?>
                
              </tbody>
            </table>
              </div>
			  <div class="tab-pane fade" id="valuation" role="tabpanel" aria-labelledby="investment-tab">
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
    usort($value_firm, function ($a, $b) {
        return $b->amount - $a->amount;
    });

    $rank = 1;
    foreach ($value_firm as $lf) {
        ?>
        <tr>
            <td><?php echo $rank; ?></td>
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
            <td><?php echo $lf->city . ',&nbsp;' . $lf->state . ',&nbsp;' . $lf->country; ?></td>
           <td>$ <?php echo auto_format_amount($lf->amount); ?></td>
        </tr>
        <?php
        $rank++; // Increment the rank for the next entry
    }
    ?>
                  
              </tbody>
            </table>
              </div>
			  <div class="tab-pane fade" id="diligence" role="tabpanel" aria-labelledby="investment-tab">
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
                    usort($due_firm, function ($a, $b) {
                        return $b->amount - $a->amount;
                    });
                
                    $rank = 1;
                    foreach ($due_firm as $lf) {
                        ?>
                        <tr>
                            <td><?php echo $rank; ?></td>
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
                            <td><?php echo $lf->city . ',&nbsp;' . $lf->state . ',&nbsp;' . $lf->country; ?></td>
                          <td>$ <?php echo auto_format_amount($lf->amount); ?></td>
                        </tr>
                        <?php
                        $rank++; // Increment the rank for the next entry
                    }
                    ?>
              </tbody>
            </table>
              </div>
          </div>
          
         </div>
         <div class="col-6 align-self-center">
         <img class="img-fluid d-none" src="<?php echo base_url()?>/assets/img/company.png">
        </div>
        <div class="col-6 text-end mt-auto p-2 mb-3">
          <a href="<?php echo base_url('firmdata/c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2');?>" id="dynamic-button-firm" class="view-chat-btn">View Full Chart</a>
        </div>
          </div>
        </div>

      </div>
    </section><!-- End family office Section -->
    <!-- ======= Sell Side Section ======= -->
    <section id="services" class="services">
      <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
        <div class="row justify-content-center ">
          <div class="col-sm-10 col-md-9 text-center ">
            <h1><span>Sell-Side</span>
              Transactional Opportunities</h1>
              <p>Family Office Co-Investment Opportunities</p>
              <div class="d-flex-md justify-content-center">
              <a class="submit-invest-btn button my-2 W-100" href="<?php echo base_url('dashboard');?>?id=1">Browse All Deals</a> 
              <a class="view-chat-btn button my-2" href="<?php echo base_url('register');?>">Work With Us</a> 
            </div>
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- 
    <section id="Partner" class="Partner">
      <div class="container d-flex justify-content-left align-items-center" style="height: 50vh;">
          <div class="row">
            <div class="col-sm-12 col-md-8">
              <h1><span>Become A</span> Featured Partner</h1>
                <a href="<?php echo base_url('register');?>" class="view-chat-btn">Apply</a>
            </div>
          </div>  
      </div>
    </section> -->
   
  </main><!-- End #main -->

  <?php $this->load->view("layout/footer")?>
  <script>
  
// Get the tab buttons and dynamic button
const tabButtons = document.querySelectorAll('.tab-button-single');
const dynamicButtons = document.getElementById('dynamic-button-single');

// Add click event listener to each tab button
tabButtons.forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault();
    const url = button.dataset.url; // Get the URL from the data-url attribute
    dynamicButtons.href = url; // Set the button's URL 
  });
}); 



// Get the tab buttons and dynamic button
const tabButtonsm = document.querySelectorAll('.tab-button-multi');
const dynamicButtonsm = document.getElementById('dynamic-button-multi');

// Add click event listener to each tab button
tabButtonsm.forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault();
    const url = button.dataset.url; // Get the URL from the data-url attribute
    dynamicButtonsm.href = url; // Set the button's URL 
  });
}); 


// Get the tab buttons and dynamic button
const tabButtonmfr = document.querySelectorAll('.tab-button-firm');
const dynamicButtonmfr = document.getElementById('dynamic-button-firm');

// Add click event listener to each tab button
tabButtonmfr.forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault();
    const url = button.dataset.url; // Get the URL from the data-url attribute
    dynamicButtonmfr.href = url; // Set the button's URL 
  });
}); 

  </script>

</body>

</html>