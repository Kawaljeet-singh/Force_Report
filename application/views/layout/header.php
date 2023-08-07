<!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
  <div class="row">
<div class="col-sm-4 ">
  <a href="<?php echo base_url()?>" class="logo me-auto ">
    <img src="<?php echo base_url()?>/assets/img/logo.png" alt="" class="img-fluid"></a>

</div>
 <div class="col-sm-8 ">
<div class="row ">
  <div class="col-sm-12  text-align-right text-end">
  <?php if($this->session->userdata('user_detail')==true ){?>
  <a href="<?php echo base_url('dashboard');?>" class="submit-invest-btn scrollto "><span class="d-none d-md-inline">Dashboard</span></a>
  <a href="<?php echo base_url('dashboard/logout');?>" class="appointment-btn scrollto "><span class="d-none d-md-inline">Logout</span></a>
				  
  <?php }
  else 
  {?>
  <a href="<?php echo base_url('register');?>" class="submit-invest-btn scrollto "><span class="d-none d-md-inline">REGISTER</span></a>
  <a href="<?php echo base_url('login');?>" class="appointment-btn scrollto "><span class="d-none d-md-inline">LOGIN</span></a>
  <?php }?>
  </div>
  <div class="col-sm-12  mt-3">
    <nav id="navbar" class=" navbar order-last order-lg-0 justify-content-end">
      <ul>
	  <li><a href="<?php echo base_url('about');?>"><span>About</span></a></li>
       
        <li class="dropdown"><a href="#"><span>Family Office Rankings</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('size_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">SFO Ranking by Size of Investment</a></li>
            <li><a href="<?php echo base_url('number_of_investment/917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2')?>">SFO Ranking by Number of Investment</a></li>
            <li><a href="<?php echo base_url('size_of_investment/a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2')?>">MFO Ranking by size of investment</a></li>
            <li><a href="<?php echo base_url('number_of_investment/a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2')?>">MFO Ranking by Number of investment</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Services Providers</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('service/c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Law Firms</a></li>
            <li><a href="<?php echo base_url('service/b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Valuation Firms</a></li>
            <li><a href="<?php echo base_url('service/b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Due-Diligence Firms</a></li>
            <li><a href="<?php echo base_url('service/b965c326-f8ad-11ed-9f7d-3c7c3f5b04d2');?>">Top Accounting Firms</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('sell');?>"><span>Sell Side</span></a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</div>
  
 </div>
  </div>
    </div>
  </header><!-- End Header -->