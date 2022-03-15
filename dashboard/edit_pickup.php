<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA -  Integrated Web system                                      *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: osorio2380@yahoo.es                                            *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************
// Turn off error reporting

  define("_VALID_PHP", true);
  require_once("../init.php");
  
  if (!$user->is_Admin())
      redirect_to("login.php");
	
	$roww = $user->getUserData();
	$row = $user->getUserData();
	
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../uploads/favicon.png">
	
    <title><?php echo $lang['left82'] ?> | <?php echo $core->site_name ?></title>
    <!-- This page plugin CSS -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

</head>

<body>

    <div id="main-wrapper">
		<!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        
		<?php include 'preloader.php'; ?>
		
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
	
        <?php include 'topbar.php'; ?>
		
        <!-- End Topbar header -->

		
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
 
		<?php include 'left_sidebar.php'; ?>
	

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
		
		<!-- General queries to the database  -->
		   
		<?php $row = Core::getRowByName(Users::uTable, $_GET["username"]); ?>	
		<?php $office = $core->getOffices(); ?>
		<?php $agencyrow = $core->getBranchoffices(); ?>
		<?php $courierrow = $core->getCouriercom(); ?>
		<?php $statusrow = $core->getStatus(); ?>
		<?php $packrow = $core->getPack(); ?>
		<?php $payrow = $core->getPayment(); ?>
		<?php $itemrow = $core->getItem(); ?>
		<?php $moderow = $core->getShipmode();?>
		<?php $driverrow = $user->getDrivers();?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title"><?php include("filter.php");?></h4>
						<?php echo $lang['add-title1'] ?> <b><?php echo $row->country;?>, <?php echo $row->city;?> - <?php echo $row->postal;?></b></br>
						<?php echo $lang['add-title2'] ?> <b><?php echo $row->fname;?> <?php echo $row->lname;?></b>
                    </div>
                </div>
				<?php include 'templates/head_courier.php'; ?>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
				<form id="admin_form" method="post">
                <div class="row">
					<div class="col-sm-12 col-lg-6">
						<div class="card">
							<div class="card-body">
							<h4 class="card-title"><?php echo $lang['left99'] ?></h4>
								<div class="row">
									<input type="hidden" name="id" value="<?php echo $_GET['courier_id'];?>">
									<div class="col-sm-12 col-md-6">
										<label for="inputname" class="control-label col-form-label"><?php echo $lang['langs_035'] ?></label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" style="color:#ff0000"><i class="fas fa-car"></i></span>
											</div>
											<input class="custom-select col-12" id="exampleFormControlSelect1" name="c_driver" list="browser" autocomplete="off" placeholder="--<?php echo $lang['left103'] ?>--">
												<datalist id="browser">
													<?php foreach ($driverrow as $row):?>
													<option value="<?php echo $row->username; ?>"><?php echo $row->fname; ?> <?php echo $row->lname; ?></option>
													<?php endforeach;?>
												</datalist>
										</div>
									</div>								
									<div class="col-sm-12 col-md-6">
										<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['left105'] ?> <i style="color:#ff0000" class="mdi mdi-clock-fast"></i></label>
										<div class="input-group">
											<input class="form-control" name="status_courier" value="Pick up" required="required" readonly>
										</div>
									</div>								                                     
								</div>
								
								
								<hr>
								<div class="form-actions">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-sm-12 col-md-12">
														<input type="hidden" name="r_addresspickup" class="search_addr">
														<input type="hidden" name="latitude" class="search_latitude">
														<input type="hidden" name="longitude" class="search_longitude">													
														<button type="submit" name="dosubmit" class="btn btn-success"> <i class="mdi mdi-clock-fast"></i>&nbsp; Edit Pickup</button>
														<a href="customerpickup_list.php" class="btn btn-dark"><i class="icon-action-undo"></i> <i class="icon-people"></i> <?php echo $lang['add-title47'] ?></a> 
													</div>
												</div>
											</div>
											<div class="col-md-6"> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				</form>
                <!-- End row -->
            </div>
			<?php echo Core::doForm("processPickup");?>

			<?php include 'templates/footer_add_courier.php'; ?>