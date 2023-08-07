<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>css/sb-admin-2.css" rel="stylesheet">
   <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
   <link href="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav main-nav sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard')?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if($page == 'family_office_list'){echo 'active';}?>">
			
                <a class="nav-link collapsed" href="<?php echo base_url('family_office_list');?>">
                   
                    <span>New FO Registrations</span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'Service_provider'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('Service_provider');?>" >
                   
                    <span>New Service Provider </span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'Sell_user_list'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('Sell_user_list');?>">
                   
                    <span>New Sell Side Inclusion</span>
                </a>
            </li>

           
            <!-- Divider -->
            <hr class="sidebar-divider">
			<li class="nav-item <?php if($page == 'fo_registed'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('fo_registed');?>" >
                   
                    <span>Registered FO</span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'service_provider_registed'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('service_provider_registed');?>" >
                   
                    <span>Registered Service Providers</span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'sell_side_registed'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('sell_side_registed');?>" >
                   
                    <span>Registered Sell Sides</span>
                </a>
            </li>

          <!-- Divider -->
            <hr class="sidebar-divider">
			
			<li class="nav-item <?php if($page == 'pending_investment'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('pending_investment');?>" >
                   
                    <span>Pending Investments</span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'approved_investment'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('approved_investment');?>">
                   
                    <span>Approved investments</span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'manage_investment_sector'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('manage_investment_sector');?>" >
                   
                    <span>Manage investment sectors</span>
                </a>
            </li>
			<li class="nav-item <?php if($page == 'manage_investment_structure'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('manage_investment_structure');?>" >
                   
                    <span>Manage investment structures</span>
                </a>
            </li>
			
			<li class="nav-item <?php if($page == 'manage_investment_stage'){echo 'active';}?>">
                <a class="nav-link collapsed" href="<?php echo base_url('manage_investment_stage');?>">
                   
                    <span>Manage investment stages</span>
                </a>
            </li>
			
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if($page == 'settings'){echo 'active';}?>">
                <a class="nav-link" href="<?php echo base_url('settings');?>" >
                    <i class="fas fa-user-cog text-white"></i>
                    <span>Settings</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

           
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand main-nav topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
					<div class="col-sm-3 ">
									<a href="<?php echo base_url()?>" class="logo me-auto ">
										<img src="<?php echo base_url()?>/assets/img/logo.png" alt="" class="img-fluid">
									</a>
								
							</div>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

					

                    </ul>

                </nav>
                <!-- End of Topbar -->

