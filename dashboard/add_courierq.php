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

  define("_VALID_PHP", true);
  require_once("../init.php");
  
  if (!$user->is_Admin())
      redirect_to("login.php");
	
	$row = $user->getUserData();
	$roww = $user->getUserData();
	
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
	
    <title><?php echo $lang['add-courier'] ?> | <?php echo $core->site_name ?></title>
    <!-- This page plugin CSS -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<script type="text/javascript">
	 $(document).ready(function() {
	   $("#reset1").click(function() {
		 $("form")[0].reset();
	   });
	 });
	 </script>
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
	
        <!-- Page wrapper  -->
        <div class="page-wrapper">
		
		
			<?php  $rows = Core::getRowById(Core::cQuote, Filter::$id);?>
			<?php $office = $core->getOffices(); ?>
			<?php $agencyrow = $core->getBranchoffices(); ?>
			<?php $courierrow = $core->getCouriercom(); ?>
			<?php $statusrow = $core->getStatus(); ?>
			<?php $packrow = $core->getPack(); ?>
			<?php $payrow = $core->getPayment(); ?>
			<?php $itemrow = $core->getItem(); ?>
			<?php $moderow = $core->getShipmode();?>
			<?php $driverrow = $user->getDrivers();?>
			<?php $delitimerow = $core->getDelitime();?>
			
			<?php
			$suma=0;
			// total shipping cost
			$total=$rows->price_product+$rows->freight+$rows->handling;
			$total=number_format($total,2,'.','');
			$suma+=$total;
			
			?>
		
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title"><?php include("filter.php");?></h4>
						<?php echo $lang['add-title1'] ?> <b><?php echo $rows->country;?>, <?php echo $rows->city;?> - <?php echo $rows->postal;?></b></br>
						<?php echo $lang['add-title2'] ?> <b><?php echo $rows->s_name;?></b>
                    </div>
                </div>
				<?php include 'templates/head_courier.php'; ?>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
				<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form id="admin_form" method="post">
                                <div class="form-body">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-6" style="display:none">
											<div class="card-body">
												
												<div class="row">
													<div class="col-sm-12 col-md-4">
														<div class="form-group">
															<label for="inputname" class="control-label col-form-label">User Name</label>
															<input type="text" class="form-control is-valid" name="username" value="<?php echo $rows->username;?>" placeholder="User Name Here">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<div class="form-group">
															<label for="inputname" class="control-label col-form-label">Sender Name</label>
															<input type="text" class="form-control is-valid" name="s_name" value="<?php echo $rows->s_name;?>" placeholder="First Name Here">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<div class="form-group">
															<label for="inputEmail3" class="control-label col-form-label">Addres</label>
															<input type="text" class="form-control is-valid" name="address" value="<?php echo $rows->address;?>" placeholder="Address">
														</div>
													</div>
													<div class="col-sm-12 col-md-3">
														<div class="form-group">
															<label for="inputcontact" class="control-label col-form-label">Phone</label>
															<input type="number" class="form-control is-valid" name="phone" value="<?php echo $rows->phone;?>" placeholder="Phone">
														</div>
													</div>
													<div class="col-sm-12 col-md-3">
														<div class="form-group">
															<label for="inputEmail3" class="control-label col-form-label">Origin</label>
															<input type="text" class="form-control is-valid" name="country" value="<?php echo $rows->country;?>" placeholder="Origin">
														</div>
													</div>                                       
												</div>
												<div class="row"> 
													<div class="col-sm-12 col-md-3">
														<div class="form-group">
															<label for="inputcontact" class="control-label col-form-label">City</label>
															<input type="text" class="form-control is-valid" name="city" value="<?php echo $rows->city;?>" placeholder="City">
														</div>
													</div>
												
													<div class="col-sm-12 col-md-3">
														<div class="form-group">
															<label for="inputEmail3" class="control-label col-form-label">Postal Code</label>
															<input type="text" class="form-control is-valid" name="postal" value="<?php echo $rows->postal;?>" placeholder="Postal Code">
														</div>
													</div>
													<div class="col-sm-12 col-md-6">
														<div class="form-group">
															<label for="inputcontact" class="control-label col-form-label">Email</label>
															<input type="email" class="form-control is-valid" name="email" value="<?php echo $rows->email;?>" placeholder="Email">
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-md-6">
											<div class="card-body">
											
											<h4 class="card-title"><i class="mdi mdi-information-outline" style="color:#36bea6"></i> <?php echo $lang['add-title3'] ?></h4>
											<br>
											<!-- Collapse buttons -->
											<a class="btn waves-effect waves-light btn-xs btn-info btn-outline-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-align-left"></i> <?php echo $lang['left193'] ?></a>
												
												<div class="row">
													<div class="col-12 col-sm-6 col-md-6">
														<label for="inputname" class="control-label col-form-label"><?php echo $lang['add-title4'] ?></label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
															</div>
															<input type="text" class="form-control" id="searchnames"  name="r_name" value="<?php echo $rows->r_name;?>" placeholder="<?php echo $lang['left194'] ?>" autocomplete="off" required>
														</div>
													</div>
													<div class="col-12 col-sm-6 col-md-6">
														<div class="form-group">
															<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['add-title5'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1">@</span>
																</div>
																<input type="email" class="form-control" id="mail" name="r_email"  placeholder="<?php echo $lang['left195'] ?>" required>
															</div>
														</div>
													</div>
												</div>
												<!-- Collapsible element -->
												<div class="collapse" id="collapseExample">
													<div class="row">
														<div class="col-12 col-sm-6 col-md-6">
															<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title8'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="icon-phone"></i></span>
																</div>
																<input type="number" class="form-control"  name="r_phone"   placeholder="(+1) ##-#######">
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-6">
															<label for="inputcontact" class="control-label col-form-label" style="color:#ff0000"><b><?php echo $lang['add-title9'] ?></b></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="icon-screen-smartphone"></i></span>
																</div>
																<input type="number" class="form-control" id="phones" name="rc_phone" value="<?php echo $rows->r_phone;?>" placeholder="(+1) ##-#######">
															</div>
														</div>									                                     
													</div>
													<div class="row"> 
														<div class="col-12 col-sm-4 col-md-4">
															<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title10'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="icon-location-pin"></i></span>
																</div>
																<input type="text" class="form-control" id="zones" name="r_dest" value="<?php echo $rows->r_dest;?>" required="required">
															</div>
														</div>  
														<div class="col-12 col-sm-4 col-md-4">
															<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['add-title11'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="icon-map"></i></span>
																</div>
																<input type="text" class="form-control" id="citys" name="r_city" value="<?php echo $rows->r_city;?>">
															</div>
														</div>
													
														<div class="col-12 col-sm-4 col-md-4">
															<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title12'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="icon-pin"></i></span>
																</div>
																<input type="text" class="form-control" id="zips" name="r_postal" placeholder="<?php echo $lang['left198'] ?>">
															</div>
														</div>
													</div>
												</div>
												<!-- / Collapsible element -->

												<div class="row">
													<div class="col-12 col-sm-12 col-md-12">
														<label for="inputlname" class="control-label col-form-label"><?php echo $lang['add-title6'] ?></label>
														<div class="input-group mb-3">
															<div class="input-group-btn">
																<button class="btn btn-secondary get_map" type="submit">
																	<?php echo $lang['left199'] ?>
																</button>
															</div>
															<input type="text" class="form-control" id="search_location" value="<?php echo $rows->r_address;?>" placeholder="<?php echo $lang['left200'] ?>" required>
															<div class="input-group-prepend">
																<span class="input-group-text" id="basic-addon1"><i class="icon-direction"></i></span>
															</div>
														</div>
													</div>		
											
													<div class="col-12 col-sm-12 col-md-12">
														<div class="form-group">											
															<!-- display google map -->
															<div id="geomap" style="height: 200px"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="col-12 col-sm-6 col-md-6">
											<div class="card-body">
											<h4 class="card-title"><i class="mdi mdi-book-multiple" style="color:#36bea6"></i> <?php echo $lang['add-title13'] ?></h4>
											<br>
											<!-- Collapse buttons -->
											<a class="btn waves-effect waves-light btn-xs btn-info btn-outline-primary" data-toggle="collapse" href="#collapseExamples" aria-expanded="false" aria-controls="collapseExamples"><i class="fa fa-align-left"></i> <?php echo $lang['left193'] ?></a>
											
												<div class="row">
													<div class="col-12 col-sm-6 col-md-6">
														<div class="form-group">
															<label for="inputlname" class="control-label col-form-label"><?php echo $lang['left201'] ?> <i style="color:#ff0000" class="fas fas fa-building"></i></label>
															<input class="custom-select col-12" name="agency" placeholder="--<?php echo $lang['left202'] ?>--" list="browsersag" autocomplete="off" required="required">
															<datalist id="browsersag">
																<?php foreach ($agencyrow as $row):?>
																<option value="<?php echo $row->name_branch; ?>"><?php echo $row->name_branch; ?></option>
																<?php endforeach;?>
															</datalist>	
														</div>
													</div>
													
													<?php if($roww->userlevel == 9){?>
													<div class="col-12 col-sm-6 col-md-6">
														<label for="inputname" class="control-label col-form-label"><?php echo $lang['add-title14'] ?></label>
														<div class="input-group mb-3">
															<select class="custom-select col-12" id="exampleFormControlSelect1" name="origin_off" >
															<?php foreach ($office as $row):?>
																<option value="<?php echo $row->name_off; ?>"><?php echo $row->name_off; ?></option>
															<?php endforeach;?>
															</select>
														</div>
													</div>
													<?php }else if($roww->userlevel == 2){?>
													<div class="col-12 col-sm-6 col-md-6">
														<label for="inputname" class="control-label col-form-label"><?php echo $lang['add-title14'] ?></label>
														<div class="input-group mb-3">
															<input class="form-control" name="origin_off" value="<?php echo $user->name_off; ?>" readonly>
														</div>
													</div>
													<?php } ?>	
												</div>
												
												<!-- Collapsible element -->
												<div class="collapse" id="collapseExamples">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-4" style="display:none">
															<div class="form-group">
																<label for="inputname" class="control-label col-form-label">Staff Role*</label>
																<input type="text" class="form-control" name="level" value="<?php echo $user->username; ?>" placeholder="Staff Role" >
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-4">
															<div class="form-group">
																<label for="inputlname" class="control-label col-form-label"><?php echo $lang['add-title17'] ?> <i style="color:#ff0000" class="fas fa-boxes"></i></label>
																<input class="custom-select col-12" name="package" placeholder="--<?php echo $lang['left203'] ?>--" list="browsers1" autocomplete="off" required="required">
																<datalist id="browsers1">
																	<?php foreach ($packrow as $row):?>
																	<option value="<?php echo $row->name_pack; ?>"><?php echo $row->name_pack; ?></option>
																	<?php endforeach;?>
																</datalist>	
															</div>
														</div>
														<!--/span-->
														<div class="col-12 col-sm-4 col-md-4">
															<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['add-title18'] ?></label>
															<div class="input-group">
																<input class="custom-select col-12" name="courier" placeholder="--<?php echo $lang['left204'] ?>--" list="browsers2" autocomplete="off" required="required">
																<datalist id="browsers2">
																	<?php foreach ($courierrow as $row):?>
																	<option value="<?php echo $row->name_com; ?>"><?php echo $row->name_com; ?></option>
																	<?php endforeach;?>
																</datalist>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-4">
															<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title22'] ?></label>
															<div class="input-group mb-3">
																<input class="custom-select col-12" name="service_options" placeholder="--<?php echo $lang['left205'] ?>--" list="browsers3" autocomplete="off" required="required">
																<datalist id="browsers3">
																	<?php foreach ($moderow as $row):?>
																	<option value="<?php echo $row->ship_mode; ?>"><?php echo $row->ship_mode; ?></option>
																	<?php endforeach;?>
																</datalist>	
															</div>
														</div>
														
														<!--/span-->
													</div>
													<div class="row">
														<div class="col-12 col-sm-6 col-md-6">
															<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['add-title15'] ?></i></label>
															<div class="input-group">
																<div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
																		<div class="input-group-text"><i style="color:#ff0000" class="fa fa-calendar"></i></div>
																	</div>
																<input type='text' class="form-control" id='datetimepicker1' name="collection_courier" placeholder="--<?php echo $lang['left206'] ?>--" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['add-title16'] ?>" />
															</div>
														</div>
														<!--/span-->
														
														<div class="col-12 col-sm-6 col-md-6">
															<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title20'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="icon-clock"></i></span>
																</div>
																<input type="text" class="form-control" name="deli_time" placeholder="--<?php echo $lang['left207'] ?>--" list="browsersstatus" autocomplete="off" required="required">
																<datalist id="browsersstatus">
																	<?php foreach ($delitimerow as $rowe):?>
																	<option value="<?php echo $rowe->delitime; ?>"><?php echo $rowe->delitime; ?></option>
																	<?php endforeach;?>
																</datalist>
															</div>
														</div>
														<!--/span-->
													</div>
													
													<div class="row">
														<div class="col-12 col-sm-6 col-md-6">
															<label for="inputname" class="control-label col-form-label"><?php echo $lang['left208'] ?></label>
															<div class="input-group mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" style="color:#ff0000"><i class="fas fa-car"></i></span>
																</div>
																<input class="custom-select col-12" id="exampleFormControlSelect1" name="c_driver" list="browser" autocomplete="off" placeholder="--<?php echo $lang['left209'] ?>--">
																<datalist id="browser">
																	<?php foreach ($driverrow as $row):?>
																	<option value="<?php echo $row->username; ?>"><?php echo $row->fname; ?> <?php echo $row->lname; ?></option>
																	<?php endforeach;?>
																</datalist>
															</div>
														</div>	
														
														<!--/span-->
		
														<div class="col-12 col-sm-6 col-md-6">
															<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['add-title19'] ?> <i style="color:#ff0000" class="fas fa-shipping-fast"></i></label>
															<div class="input-group">
																<input class="custom-select col-12" name="status_courier" placeholder="--Seleccionar estado del envío--" list="browserstatus" autocomplete="off" required="required">
																<datalist id="browserstatus">
																	<?php foreach ($statusrow as $row):?>
																	<?php if($row->mod_style == 'Delivered'){?>
																	<?php }elseif($row->mod_style == 'Pending'){?>
																	<?php }elseif($row->mod_style == 'Rejected'){?>
																	<?php }elseif($row->mod_style == 'Pick up'){?>
																	<?php }elseif($row->mod_style == 'Picked up'){?>
																	<?php }elseif($row->mod_style == 'No Picked up'){?>
																	<?php }elseif($row->mod_style == 'Consolidate'){?>
																	<?php }else{ ?>
																	<option value="<?php echo $row->mod_style; ?>"><?php echo $row->mod_style; ?></option>
																	<?php } ?>
																	<?php endforeach;?>
																</datalist>
															</div>
														</div>	
														<!--/span-->
													</div>
													<!--/row-->
															
												</div>
												<hr>
												<div class="form-body">
													<div class="card-body bg-light">
														<div class="row"> 
															<div class="col-sm-12 col-md-12">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title27'] ?></label>
																<div class="input-group">
																	<input class="form-control" name="itemcat" placeholder="--Seleccionar categoria del paquete--" list="browsers4" autocomplete="off" required="required">
																	<datalist id="browsers4">
																		<?php foreach ($itemrow as $row):?>
																		<option value="<?php echo $row->name_item; ?>"><?php echo $row->name_item; ?></option>
																		<?php endforeach;?>
																	</datalist>
																</div>
															</div> 
															
															<div class="col-sm-12 col-md-12">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title32'] ?></label>
																<div class="input-group">
																	 <textarea class="form-control" rows="2" name="r_description" placeholder="<?php echo $lang['add-title33'] ?>"><?php echo $rows->name_product;?></textarea>
																</div>
															</div>
														</div>
													</div>					
												</div>	
											</div>
										</div>
									</div>
								</div>								
								
								<HR>							
								
								<div class="col-12 col-sm-12 col-md-12">
									<div class="card-body">
									<h4 class="card-title"><i class="fas fas fa-boxes" style="color:#36bea6"></i> <?php echo $lang['left212'] ?></h4>
										<div class="table-responsive">
											<table id="zero_config" class="table table-striped">
												<thead class="bg-darks border-0 text-white">
													<tr>
														<th style="width: 30%;" align='center'><b><?php echo $lang['left213'] ?></b></th>
														<th class='text-center'><b><?php echo $lang['left214'] ?></b></th>
														<th class='text-center'><b><?php echo $lang['left215'] ?></b></th>
														<th class='text-center'><b><?php echo $lang['left216'] ?></b></th>
														<th class='text-center'><b><?php echo $lang['left217'] ?></b></th>
														<th class='text-center'><b><?php echo $lang['left218'] ?></b></th>
														<th style="width: 10%;" class='text-center'><b><?php echo $lang['left219'] ?></b></th>
														<th class='text-center'></th>
													</tr>
												</thead>
												<tbody class='items'>
													
												</tbody>	
											</table>
											
											<?php $track = $courier->order_track();?>
											<?php $prefix = $courier->order_prefix();?>
											<?php $payrow = $core->getPayment(); ?>
											<div class="col-lg-12 col-xl-8">
												<div class="card card-hover">
													<div class="card-body">						
														<div class="row">
															<div class="col-12 col-sm-4 col-md-4">										
																<label for="inputcom" class="control-label col-form-label"><?php echo $lang['add-title24'] ?></label>
																<div class="input-group mb-3">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="basic-addon1" style="color:#ff0000"><?php echo $prefix;?></span>
																	</div>	
																	<input type="text" class="form-control" name="tracking" value="<?php echo $track;?>">
																</div>
															</div>
															
															<div class="col-sm-12 col-md-2">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['left237'] ?></label>
																<div class="input-group mb-3">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="basic-addon1"><i class="" style="color:#36bea6">$</i></span>
																	</div>
																	<input type="text" class="form-control" name="value_weight" id="precio_libra" onkeyup="calcular()" value="0">
																</div>
															</div>
															
															<div class="col-sm-12 col-md-2">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['left238'] ?></label>
																<div class="input-group mb-3">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="basic-addon1"><i class="" style="color:#36bea6">$</i></span>
																	</div>
																	<input type="text" class="form-control" name="c_handling" id="manejo" onkeyup="calcular()" value="<?php echo $core->c_handling;?>">
																</div>
															</div>
															<div class="col-sm-12 col-md-2">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title25'] ?></label>
																<div class="input-group mb-3">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="basic-addon1"><i class="fas fa-percent" style="color:#36bea6"></i></span>
																	</div>
																	<input type="text" class="form-control"  name="r_tax" id="impuesto" onkeyup="calcular()" value="<?php echo $core->tax;?>">
																</div>
															</div>
															<div class="col-sm-12 col-md-2">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title26'] ?></label>
																<div class="input-group mb-3">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="basic-addon1"><i class="fas fa-percent" style="color:#36bea6"></i></span>
																	</div>
																	<input type="text" class="form-control"  name="r_insurance" id="porcentaje_seguro" onkeyup="calcular()" value="<?php echo $core->insurance;?>">											
																</div>
															</div>
														
															<div class="col-sm-12 col-md-2" style="display:none">
																<label for="inputname" class="control-label col-form-label"><?php echo $lang['add-title43'] ?></label>
																<input class="form-control" name="r_curren" value="<?php echo $core->currency; ?>" >
															</div>
															<div class="col-sm-12 col-md-6">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['add-title23'] ?> <i style="color:#ff0000" class="fas fa-donate"></i></label>
																<div class="input-group mb-3">
																	<input class="custom-select col-12" name="pay_mode" placeholder="--<?php echo $lang['left243'] ?>--" list="browsersss" autocomplete="off" required="required">
																	<datalist id="browsersss">
																		<?php foreach ($payrow as $row):?>
																		<option value="<?php echo $row->met_payment; ?>"><?php echo $row->met_payment; ?></option>
																		<?php endforeach;?>
																	</datalist>
																</div>
															</div>

															<div class="col-sm-12 col-md-3">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['left239'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['left244'] ?> <?php echo $core->insurance;?> <?php echo $lang['add-title42'] ?>"></i></b></label>
																<div class="input-group">
																	<input type="text" class="form-control" name="r_custom"  id="declarado" onkeyup="calcular()" value="<?php echo $rows->price_product;?>">
																</div>
															</div>	
															
															<div class="col-sm-12 col-md-3" style="display:none">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['left240'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['left245'] ?> <?php echo $core->insurance;?> <?php echo $lang['add-title42'] ?>"></i></b></label>
																<div class="input-group">
																	<input type="text" class="form-control" name="l_price"  id="total_libra" value="0">
																</div>
															</div>
															<div class="col-sm-12 col-md-3" style="display:none">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['left241'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['left246'] ?> <?php echo $core->insurance;?> <?php echo $lang['add-title42'] ?>"></i></b></label>
																<div class="input-group">
																	<input type="text" class="form-control" name="total_tax"  id="total_impuesto" value="0">
																</div>
															</div>
															<div class="col-sm-12 col-md-3" style="display:none">
																<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['left241'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['left247'] ?>, <?php echo $core->insurance;?> <?php echo $lang['add-title42'] ?>"></i></b></label>
																<div class="input-group">
																	<input type="text" class="form-control" name="total_insurance"  id="tinsurance"  value="0">
																</div>
															</div>
															<div class="col-sm-12 col-md-3">
																<label for="inputname" class="control-label col-form-label"><?php echo $lang['add-title44'] ?> &nbsp; <b><?php echo $core->currency;?></b></label>
																<input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['add-title45'] ?>" name="r_costtotal" id="total_result" value="" >
															</div>																
														</div>	
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="col-12 col-sm-12 col-md-12">
									<div class="card-body">
									<h4 class="card-title"><?php echo $lang['left220'] ?></h4>
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group row">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="notifyClient" tabindex="0">
															<span class="custom-control-indicator"></span>
															<label><span><i class="ti-email" style="color:#01afee"></i>&nbsp; <?php echo $lang['left221'] ?></span></label>
														</label>
													</div>
												</div>
												
												<div class="col-md-6">
													<div class="form-actions">
														<div class="card-body">
															<div class="text-right">
																<input type="hidden" name="r_address" value="<?php echo $rows->r_address;?>" class="search_addr">
																<input type="hidden" name="latitude" value="<?php echo $rows->latitude;?>" class="search_latitude">
																<input type="hidden" name="longitude" value="<?php echo $rows->longitude;?>" class="search_longitude">
																<input type="hidden" name="id_quotes" value="<?php echo $rows->id;?>">
																<input type="hidden" name="latitude_history" class="search_latitude">
																<input type="hidden" name="longitude_history" class="search_longitude">														
																<button type="submit" name="dosubmit" class="btn btn-success"> <i class="mdi mdi-airplane-takeoff"></i>&nbsp; <?php echo $lang['left222'] ?></button>
																<a href="customer_list.php" class="btn btn-dark"> <?php echo $lang['add-title47'] ?></a> 
															</div>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>								
                            </form>
                    </div>
                </div>
                <!-- Row -->
				
				<form class="form-horizontal" name="save_item" id="save_item">
					<!-- Modal -->					
					<div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel1"><?php echo $lang['left223'] ?></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-sm-12 col-md-8">
										<div class="form-group">
											<label for="message-text" class="control-label"><?php echo $lang['left224'] ?></label>
											<textarea class="form-control" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['left225'] ?>" id="detail_description" name="detail_description" required><?php echo $rows->name_product;?></textarea>
											<input type="hidden" class="form-control" id="action" name="action"  value="ajax">
										</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<div class="form-group">
												<label for="inputlname" class="control-label col-form-label"><?php echo $lang['left226'] ?></label>
												<input type="number" class="form-control" name="detail_qnty" value="<?php echo $rows->quantity;?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['left227'] ?>"  required>
											</div>
										</div>
									</div>	
									
									<div class="row">
										<div class="col-sm-12 col-md-3">
											<div class="form-group">
												<label for="inputlname" class="control-label col-form-label"><?php echo $lang['left228'] ?></label>
												<input type="text" class="form-control" name="detail_weight" value="<?php echo $rows->weight_product;?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['add-title31'] ?>" required>
											</div>
										</div>
										<div class="col-sm-12 col-md-9">
											<label for="inputlname" class="control-label col-form-label"><?php echo $lang['add-title34'] ?> <i class="ti-package" style="color:#36bea6"></i> <?php echo $lang['add-title35'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['add-title36'] ?> / <?php echo $core->meter;?> = kg"></i></b></label>
											<div class="input-group">
												<!-- input box for Length -->
												<input type="number" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['add-title37'] ?>" class="form-control" name="detail_length" value="0" required>
												<div class="cross strong text__color-gray-darker text__size-smaller">&nbsp; x &nbsp;</div>
												<!-- input box for width -->
												<input type="number" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['add-title38'] ?>" class="form-control" name="detail_width" value="0" required>
												<div class="cross strong text__color-gray-darker text__size-smaller">&nbsp; x &nbsp;</div>
												<!-- input box for height -->
												<input type="number" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['add-title39'] ?>" class="form-control" name="detail_height" value="0" required>
											</div>
										</div>
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['left229'] ?></button>
									<button type="submit" class="btn btn-default"><?php echo $lang['left230'] ?></button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php echo Core::doForm("processCourierq");?>
                <!-- End row -->

				</div>
            </div>
			
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
			<script type="text/javascript" src="dist/js/centerwindows.js"></script>
			<script src="dist/js/alert_top.js"></script>	

			<script type="text/javascript">

				function show_items(){
					var parametros={"action":"ajax"};
					$.ajax({
						url:'ajax/add_itemss_courier.php',
						data: parametros,
						 beforeSend: function(objeto){
						 $('.items').html('Procesando espere...');
					  },
						success:function(data){
							$(".items").html(data).fadeIn('slow');
					}
					})
				}				

				function delete_item(id){
					$.ajax({
						type: "GET",
						url: "ajax/add_itemss_courier.php",
						data: "action=ajax&id="+id,
						 beforeSend: function(objeto){
							 $('.items').html('Procesando espere...');
						  },
						success: function(data){
							$(".items").html(data).fadeIn('slow');
						}
					});
				}
				
				$( "#save_item" ).submit(function( event ) {
					parametros = $(this).serialize();
					$.ajax({
						type: "POST",
						url:'ajax/add_itemss_courier.php',
						data: parametros,
						 beforeSend: function(objeto){
							 $('.items').html('Procesando espere...');
						  },
						success:function(data){
							$(".items").html(data).fadeIn('slow');
							$("#myModal").modal('hide');
						}
					})
					
				  event.preventDefault();
				})

					show_items();
						
						
			</script>	
			
			
			
			<?php include 'templates/footer_add_courier.php'; ?>
			