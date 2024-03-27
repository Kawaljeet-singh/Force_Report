<!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">
  <div class="row">
<div class="col-7 col-md-4">
  <a href="<?php echo base_url()?>" class="logo me-auto">
    <img src="<?php echo base_url()?>/assets/img/logo.svg" alt="" class="img-fluid"></a>
</div>
<div class="col-5 col-md-4 d-md-none">
  <?php if($this->session->userdata('user_detail')==true ){?>
  <a href="<?php echo base_url('#family-meet-family');?>" class="f2f-btn scrollto mb-2 W-100 py-0 "><span>FAMILY MEET FAMILY</span></a>
  <a href="<?php echo base_url('dashboard?id=1');?>" class="submit-invest-btn mb-2 W-100 scrollto py-0"><span>DASHBOARD</span></a>
  
  <a href="<?php echo base_url('dashboard/logout');?>" class="appointment-btn W-100 scrollto py-0"><span>LOGOUT</span></a>
				  
  <?php }
  else 
  {?>
   <a href="<?php echo base_url('#family-meet-family');?>" class="f2f-btn scrollto scrollto W-100 mb-2 py-0"><span>FAMILY MEET FAMILY</span></a>
  <a href="<?php echo base_url('register');?>" class="submit-invest-btn scrollto W-100 mb-2 py-0"><span>REGISTER</span></a>
  <a href="<?php echo base_url('login');?>" class="appointment-btn scrollto W-100 py-0"><span>LOGIN</span></a>
  <?php }?>
</div>
 <div class="col-sm-8">
<div class="row">
  <div class="col-sm-12 text-align-right text-end d-none d-md-block">
  <?php if($this->session->userdata('user_detail')==true ){?>
    <a href="<?php echo base_url('#family-meet-family');?>" class="f2f-btn scrollto scrollto ms-5"><span class="d-none d-md-inline">FAMILY MEET FAMILY</span></a>
  <a href="<?php echo base_url('dashboard?id=1');?>" class="submit-invest-btn scrollto"><span class="d-none d-md-inline">DASHBOARD</span></a>

  <a href="<?php echo base_url('dashboard/logout');?>" class="appointment-btn scrollto"><span class="d-none d-md-inline">LOGOUT</span></a>
				  
  <?php }
  else 
  {?>
   <a href="<?php echo base_url('#family-meet-family');?>" class="f2f-btn scrollto "><span class="d-none d-md-inline">FAMILY MEET FAMILY</span></a>
  <a href="<?php echo base_url('register');?>" class="submit-invest-btn scrollto "><span class="d-none d-md-inline">REGISTER</span></a>
  <a href="<?php echo base_url('login');?>" class="appointment-btn scrollto "><span class="d-none d-md-inline">LOGIN</span></a>
  <?php }?>
  </div>
  <div class="col-sm-12  mt-3">
    <nav id="navbar" class=" navbar order-last order-lg-0 justify-content-end">
      <ul>
	  <li><a href="<?php echo base_url('about');?>"><span>About</span></a></li>
       
        <li class="dropdown"><a href="#"><span>Family Office Rankings</span> <i style="color:#E20971;font-size:20px;margin-left:20px" class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('size_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">SFO Ranking by Size of Investment</a></li>
            <li><a href="<?php echo base_url('number_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2')?>">SFO Ranking by Number of Investment</a></li>
            <li><a href="<?php echo base_url('size_of_investment/a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2')?>">MFO Ranking by Size of Investment</a></li>
            <li><a href="<?php echo base_url('number_of_investment/a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2')?>">MFO Ranking by Number of Investment</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Service Providers</span> <i style="color:#55AB33;font-size:20px;margin-left:20px" class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('firmdata/c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Family Office Law Firms</a></li>
            <li><a href="<?php echo base_url('firmdata/b965c326-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Accounting Firms</a></li>
            <li><a href="<?php echo base_url('firmdata/b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Due-Diligence Firms</a></li>
            <li><a href="<?php echo base_url('firmdata/b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Valuation Firms</a></li>
            
            
          </ul>
        </li>
        <li><a href="<?php echo base_url('sell');?>"><span>Sell Side</span></a></li>
        <li><a class="nav-link scrollto" href="<?php echo base_url('contact_us')?>">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</div>
  
 </div>
  </div>
    </div>
  </header><!-- End Header -->