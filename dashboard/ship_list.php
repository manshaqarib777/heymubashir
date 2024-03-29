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

  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');


?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<style type="text/css">
	.alert{
		margin-top:20px;
	}

	* {
	  box-sizing: border-box;
	}
</style>

<?php include 'templates/head_tab.php'; ?>

<?php 

	$courierrow = $core->getCourier_list(); 
	foreach ($courierrow as $key => $value) {
		$value->r_qnty=0;
		if (isset($value->combine_data)) {
			$value->combine_data=json_decode($value->combine_data);
			foreach ($value->combine_data as $key1 => $value1) {
				$value->r_qnty=$value->r_qnty+$value1->cargo_item;
			}
		}
	}

?>
<?php $courieremployeerow = $user->getCourieremployee_list(); ?>
<?php $onlinerow = $core->getCourier_list_online(); ?>
<?php $Costrowcourier = $core->getcosstotalcourier(); ?>
<?php $Costrowconsolidate = $core->getcosstotalconsolidate(); ?>
<?php $Costrowcouriermonth = $core->getcosstotalcouriermonth(); ?>
<?php $Costrowconsolidatemonth = $core->getcosstotalconsolidatemonth(); ?>

<!-- Sales chart -->
<!-- ============================================================== -->

<?php if($row->userlevel == 9){?>
	<!-- ============================================================== -->
	<!-- Sales chart -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="d-md-flex align-items-center">
						<div>
							<h4 class="card-title"><?php echo $lang['salesummary'] ?></h4>
							 <h5 class="card-subtitle"><?php echo $lang['left708'] ?></h5>
						</div>
					</div>
					<div class="row">
						<!-- column -->
						<div class="col-lg-6">
							<div class="row">
								<!-- column -->					
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="courier.php?do=list_courier"><span class="text-secondary display-5"><i class="mdi mdi-package-variant-closed"></i></a></span></div>
										<div><span><a  href="courier.php?do=list_courier"><?php echo $lang['count1'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total = $db->query("SELECT count(id) as total FROM add_courier WHERE act_status='1' AND con_status='0' AND status_novelty='0'")->fetch_object()->total; 
											print $total; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->						
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total7 = $db->query("SELECT count(id) as total7 FROM quote WHERE idquote='1'")->fetch_object()->total7;
										if ($total7 >= 1){ ?>
										<a  href="dash_quote.php?do=list_quote"><i class="mdi mdi-chart-line" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-chart-line"></i>
										<?php } ?>
										</div>
										<div><span><a  href="dash_quote.php?do=list_quote"><?php echo $lang['count2'] ?><br><font SIZE=1>>> <?php echo $lang['count3'] ?></font></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total8 = $db->query("SELECT count(id) as total8 FROM quote WHERE idquote='1'")->fetch_object()->total8; 
											print $total8; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->						
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total7 = $db->query("SELECT count(id) as total7 FROM quote WHERE idquote='3'")->fetch_object()->total7;
										if ($total7 >= 1){ ?>
										<a  href="dash_quote_approved.php?do=list_quote_approved"><i class="mdi mdi-chart-areaspline" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-chart-areaspline"></i>
										<?php } ?>
										</div>
										<div><span><a  href="dash_quote_approved.php?do=list_quote_approved"><?php echo $lang['count2'] ?><br><font SIZE=1>>> <?php echo $lang['count4'] ?></font></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total08 = $db->query("SELECT count(id) as total08 FROM quote WHERE idquote='3'")->fetch_object()->total08; 
											print $total08; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->					
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="pickup.php?do=list_pickup"><span class="text-secondary display-5"><i class="mdi mdi-clock-fast"></i></a></span></div>
										<div><span><a  href="pickup.php?do=list_pickup"><?php echo $lang['count5'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total3 = $db->query("SELECT count(id) as total3 FROM add_courier WHERE  status_pickup='1' AND id_pickup='1' AND status_novelty='0' AND status_courier='Pick up'")->fetch_object()->total3; 
											print $total3; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->				
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total1 = $db->query("SELECT count(id) as total1 FROM add_courier WHERE status_courier='Pending' AND act_status='0' AND status_novelty='0'")->fetch_object()->total1;
										if ($total1 >= 1){ ?>
										<a  href="dash_prealert.php?do=list_prealert"><i class="mdi mdi-bell-ring-outline" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-bell-off"></i>
										<?php } ?>
										</div>
										<div><span><a  href="dash_prealert.php?do=list_prealert"><?php echo $lang['count6'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total2 = $db->query("SELECT count(id) as total2 FROM add_courier WHERE status_courier='Pending' AND act_status='0' AND status_novelty='0'")->fetch_object()->total2; 
											print $total2; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="container.php?do=list_container"><span class="text-secondary display-5"><i class="mdi mdi-view-week"></i></a></span></div>
										<div><span><a  href="container.php?do=list_container"><?php echo $lang['count7'] ?></a></span>
											<h4 class="font-medium m-b-0"> 
											<?php
											$total4 = $db->query("SELECT count(id) as total4 FROM add_container WHERE act_status='3'")->fetch_object()->total4; 
											print $total4; //output value
											?></h4>
										</div>
									</div>
								</div>									
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="consolidate.php"><span class="text-secondary display-5"><i class="mdi mdi-dropbox"></i></a></span></div>
										<div><span><?php echo $lang['count8'] ?></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total4 = $db->query("SELECT count(id) as total4 FROM add_courier WHERE  act_status='1' AND con_status='0' AND status_novelty='0'")->fetch_object()->total4; 
											print $total4; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="shipping.php?do=delivered_consolidated"><span class="text-secondary display-5"><i class="mdi mdi-gift"></i></a></span></div>
										<div><span><a  href="shipping.php?do=delivered_consolidated"><?php echo $lang['count9'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total5 = $db->query("SELECT count(id) as total5 FROM consolidate WHERE  act_status='2'")->fetch_object()->total5; 
											print $total5; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total9 = $db->query("SELECT count(id) as total9 FROM custom_novelty WHERE status_novelty='Locked'")->fetch_object()->total9;
										if ($total9 >= 1){ ?>
										<a  href="customs_locked_packages.php"><i class="mdi mdi-layers-off" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-layers-off"></i>
										<?php } ?>
										</div>
										<div><span><a  href=""><?php echo $lang['count10'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total11 = $db->query("SELECT count(id) as total11 FROM custom_novelty WHERE status_novelty='Locked'")->fetch_object()->total11; 
											print $total11; //output value
											?></h4>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body border-top">
								<div class="row m-t-0 m-b-0">
									<!-- col -->
									<div class="col-6 col-sm-6 col-md-6">
										<div class="d-flex align-items-center">
											<div class="m-r-10"><span class="text-orange display-6"><i class="mdi mdi-wallet"></i></span></div>
											<div><span><?php echo $lang['currentsales'] ?></span>
												<h5 class="font-medium m-b-0"><?php echo $core->currency;?> <?php echo formato($Costrowcourier+$Costrowconsolidate); ?></h5>
											</div>
										</div>
									</div>						
									<!-- col -->
									<div class="col-6 col-sm-6 col-md-6 border-left">
										<div class="d-flex align-items-center">
											<div class="m-r-10"><span class="text-primary display-6"><i class="mdi mdi-currency-usd"></i></span></div>
											<div><span><?php echo $lang['flexcurrentsales'] ?></span>
												<h5 class="font-medium m-b-0"><?php echo $core->currency;?> <?php echo formato($Costrowcouriermonth+$Costrowconsolidatemonth); ?></h5>
											</div>
										</div>
									</div>
									<!-- col -->
								</div>	
							</div>
				
							<div class="card-body border-top">
								<a  class="waves-effects btn waves-effect waves-light btn-outline-info accent-4 m-b-7" href="shipping.php?do=billings"><i class="ti-stats-up"></i> <?php echo $lang['count11'] ?></a>
								&nbsp;
								
								<a  class="waves-effects btn waves-effect waves-light btn-outline-secondary accent-4 m-b-7" href="consolidate_list.php"><i class="ti ti-gift" style="color:#FF4D4D"></i> <?php echo $lang['count12'] ?></a>
								&nbsp;
								
								<a  class="waves-effects btn waves-effect waves-light btn-outline-dark accent-4 m-b-7" href="shipping.php?do=delivered"><i class="mdi mdi-package-variant"></i> <?php echo $lang['count13'] ?></a>
							</div>
						</div>
						<!-- column -->
						<div class="col-lg-6">
							<div class="row" ng-app="app">
								<!-- column -->	
								<div class="col-12" ng-controller="myCtrl">		
									<canvas ng-init="fetchsales()" id="dvCanvas"></canvas>
								</div>
							</div>
						</div>
						<!-- column -->
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	
	
	<?php }else if($row->userlevel == 2){?>
	
	<!-- ============================================================== -->
	<!-- Sales chart -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="d-md-flex align-items-center">
						<div>
							<h4 class="card-title"><?php echo $lang['salesummary'] ?></h4>
							 <h5 class="card-subtitle"><?php echo $lang['left708'] ?></h5>
						</div>
					</div>
					<div class="row">
						<!-- column -->
						<div class="col-lg-6">
							<div class="row">
								<!-- column -->					
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="courier.php?do=list_courier"><span class="text-secondary display-5"><i class="mdi mdi-package-variant-closed"></i></a></span></div>
										<div><span><a  href="courier.php?do=list_courier"><?php echo $lang['count1'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total = $db->query("SELECT count(id) as total FROM add_courier WHERE origin_off='".$row->name_off."' AND  act_status='1' AND con_status='0' AND status_novelty='0'")->fetch_object()->total; 
											print $total; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->											
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total7 = $db->query("SELECT count(id) as total7 FROM quote WHERE idquote='1'")->fetch_object()->total7;
										if ($total7 >= 1){ ?>
										<a  href="dash_quote.php?do=list_quote"><i class="mdi mdi-chart-line" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-chart-line"></i>
										<?php } ?>
										</div>
										<div><span><a  href="dash_quote.php?do=list_quote"><?php echo $lang['count2'] ?><br><font SIZE=1>>> <?php echo $lang['count3'] ?></font></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total8 = $db->query("SELECT count(id) as total8 FROM quote WHERE idquote='1'")->fetch_object()->total8; 
											print $total8; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->						
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total7 = $db->query("SELECT count(id) as total7 FROM quote WHERE idquote='3'")->fetch_object()->total7;
										if ($total7 >= 1){ ?>
										<a  href="dash_quote_approved.php?do=list_quote_approved"><i class="mdi mdi-chart-areaspline" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-chart-areaspline"></i>
										<?php } ?>
										</div>
										<div><span><a  href="dash_quote_approved.php?do=list_quote_approved"><?php echo $lang['count2'] ?><br><font SIZE=1>>> <?php echo $lang['count4'] ?></font></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total08 = $db->query("SELECT count(id) as total08 FROM quote WHERE idquote='3'")->fetch_object()->total08; 
											print $total08; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="pickup.php?do=list_pickup"><span class="text-secondary display-5"><i class="mdi mdi-clock-fast"></i></a></span></div>
										<div><span><a  href="pickup.php?do=list_pickup"><?php echo $lang['count5'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total3 = $db->query("SELECT count(id) as total3 FROM add_courier WHERE  origin_off='".$row->name_off."' AND status_pickup='1' AND id_pickup='1' AND status_novelty='0' AND status_courier='Pick up'")->fetch_object()->total3; 
											print $total3; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->			
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-5">
										<?php 
										$total1 = $db->query("SELECT count(id) as total1 FROM add_courier WHERE  status_courier='Pending' AND act_status='0' AND status_novelty='0'")->fetch_object()->total1;
										if ($total1 >= 1){ ?>
										<a  href="dash_prealert.php?do=list_prealert"><i class="mdi mdi-bell-ring-outline" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-bell-off"></i>
										<?php } ?>
										</div>
										<div><span><a  href="dash_prealert.php?do=list_prealert"><?php echo $lang['count6'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total2 = $db->query("SELECT count(id) as total2 FROM add_courier WHERE  status_courier='Pending' AND act_status='0' AND status_novelty='0'")->fetch_object()->total2; 
											print $total2; //output value
											?></h4>
										</div>
									</div>
								</div>		
								<!-- col -->	
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="container.php?do=list_container"><span class="text-secondary display-5"><i class="mdi mdi-view-week"></i></a></span></div>
										<div><span><a  href="container.php?do=list_container"><?php echo $lang['count14'] ?></a></span>
											<h4 class="font-medium m-b-0"> 
											<?php
											$total4 = $db->query("SELECT count(id) as total4 FROM add_container WHERE origin_off='".$row->name_off."' AND act_status='3'")->fetch_object()->total4; 
											print $total4; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="consolidate.php"><span class="text-secondary display-5"><i class="mdi mdi-dropbox"></i></a></span></div>
										<div><span><?php echo $lang['count8'] ?></span>
											<h3 class="font-medium m-b-0">
											<?php
											$total4 = $db->query("SELECT count(id) as total4 FROM add_courier WHERE  origin_off='".$row->name_off."' AND act_status='1' AND con_status='0' AND status_novelty='0'")->fetch_object()->total4; 
											print $total4; //output value
											?></h3>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a  href="shipping.php?do=delivered_consolidated"><span class="text-secondary display-5"><i class="mdi mdi-gift"></i></a></span></div>
										<div><span><a  href="shipping.php?do=delivered_consolidated"><?php echo $lang['count9'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total5 = $db->query("SELECT count(id) as total5 FROM consolidate WHERE  code_off='".$row->name_off."' AND act_status='2'")->fetch_object()->total5; 
											print $total5; //output value
											?></h4>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-5 col-sm-3 col-md-4">
									<div class="d-flex align-items-center">
										<div class="m-r-10"><span class="text-secondary display-6">
										<?php 
										$total9 = $db->query("SELECT count(id) as total9 FROM custom_novelty WHERE  status_novelty='Locked'")->fetch_object()->total9;
										if ($total9 >= 1){ ?>
										<a  href="customs_locked_packages.php"><i class="mdi mdi-layers-off" style="color:#fc6767"></i></a></span>
										<?php }else{ ?>
										<i class="mdi mdi-layers-off"></i>
										<?php } ?>
										</div>
										<div><span><a  href=""><?php echo $lang['count10'] ?></a></span>
											<h4 class="font-medium m-b-0">
											<?php
											$total11 = $db->query("SELECT count(id) as total11 FROM custom_novelty WHERE  status_novelty='Locked'")->fetch_object()->total11; 
											print $total11; //output value
											?></h4>
										</div>
									</div>
								</div>
							</div>							
							<br><br><br>
							<div class="card-body border-top">
								<a  class="waves-effects btn waves-effect waves-light btn-outline-secondary accent-4 m-b-7" href="consolidate_list.php"><i class="ti ti-gift" style="color:#FF4D4D"></i> <?php echo $lang['count12'] ?></a>&nbsp;
								
								<a  class="waves-effects btn waves-effect waves-light btn-outline-dark accent-4 m-b-7" href="shipping.php?do=delivered"><i class="mdi mdi-package-variant"></i> <?php echo $lang['count13'] ?></a>
							</div>
						</div>
						<!-- column -->
						<div class="col-lg-6">
							<div class="row" ng-app="appuser">
								<!-- column -->	
								<div class="col-12" ng-controller="myCtrl" ng-controller="myCtrl">		
									<canvas ng-init="fetchsales()" id="dvCanvas"></canvas>
								</div>
							</div>
						</div>											
						<!-- column -->
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<?php } ?>

	

<!-- ============================================================== -->
<!-- Table -->
<!-- ============================================================== -->
<div class="row">
	<?php if($row->userlevel == 9){?>
	<div class="col-12 col-sm-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-pills m-t-30 m-b-30">
					<li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false"><h5 class="card-title"><?php echo $lang['shipearrin'] ?></h5></a> </li>
					<li class="nav-item"> <a href="all_status.php?do=status_in_transit" class="nav-link"><h5 class="card-title"><?php echo $lang['left707'] ?></h5></a> </li>
				</ul>
				<div class="tab-content br-n pn">
					<div id="navpills-1" class="tab-pane active">
						<div class="row">
							<!-- Shipping List -->
							<div id="msgholder"></div>
							<div class="table-responsive">
								<table id="zero_config" class="table table-striped">
									<thead>
										<tr>
											<th><b><?php echo $lang['ltracking'] ?></b></th>
											<th><b><?php echo $lang['rreceiver'] ?></b></th>
											<th><b><?php echo $lang['qquantity'] ?></b></th>
											<th><b><?php echo $lang['dasha'] ?></b></th>
											<th><b><?php echo $lang['ddate'] ?></b></th>
											<th align='center'><b><?php echo $lang['count15'] ?></b></th>
											<th><b><?php echo $lang['sstatus'] ?></b></th>
											<th data-hide="all" align='center'><b><?php echo $lang['aaction'] ?></b></th>
										</tr>
									</thead>
									<tbody id="projects-tbl">
										<?php if(!$courierrow):?>
										<tr>
											<td colspan="9">
											<?php echo "
											<i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='160' /></i>
											</br>
											<p style='font-size: 20px; -webkit-font-smoothing: antialiased; color: #737373;' align='center'>".$lang['oohhship']."</p>
											<p style='font-size: 16px; -webkit-font-smoothing: antialiased; color: #999;' align='center'> ".$lang['ooohhship']."</p>
											",false;?>
											</td>
										</tr>
										<?php else: ?>
										<?php foreach ($courierrow as $row):?>	
										<tr class="card-hover">		
											<td><b><a  href="cargo_shipping.php?do=edit_courier&amp;cus_name=<?php echo $row->username;?>&amp;action=ship&amp;courier_id=<?php echo $row->id;?>"><?php echo $row->order_inv;?></a></b></td>
											<td  class="clients-rpt" style="text-align: left;"><?php echo $row->r_name;?></td>
											<td><?php echo $row->r_qnty;?></td>
											<td><?php echo $row->r_address;?> | <?php echo $row->r_pickupdetails;?></td>
											<td><?php echo $row->created;?></td>
											<td><a  href="view-google-maps.php?do=view-google-maps&amp;action=mapview&amp;id=<?php echo $row->id;?>" target="_blank"><input  type=image src="assets/images/icon_map.png" ></a></td>
											<td><span style="background: <?php echo $row->color; ?>;"  class="label label-large" ><?php echo $row->status_courier;?></span></td>
											<td>
												<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row->id;?>">
											  show details
											</button>
											<a  href="cargo_shipping.php?do=edit_courier&amp;cus_name=<?php echo $row->username;?>&amp;action=ship&amp;courier_id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooledit'] ?>"><i style="color:#343a40" class="ti-pencil"></i></a>
											<a  href="invoice/inv_ship1.php?do=inv_ship1&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolprint'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
											<a  href="invoice/inv_ship.php?do=inv_ship&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolprint'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
											<!--<a  href="invoice/label_ship.php?do=label_ship&amp;action=label&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toollabel'] ?>"><i style="color:#343a40" class="ti-bookmark-alt"></i></a>-->
											<a  href="status_shipment.php?do=status_shipment&amp;action=status&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolupdate'] ?>"><i style="color:#20c997" class="ti-reload"></i></a> 
											<a  href="deliver_shipment.php?do=deliver_shipment&amp;action=status&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooldeliver'] ?>"><i style="color:#2962FF" class="ti-package"></i></a>
											<a  id="item_<?php echo $row->id;?>" data-rel="<?php echo $row->s_name;?>" class="delete" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooldelete'] ?>"><i style="color:#343a40" class="ti-trash"></i></a>
											</td>
										</tr>
										<div class="modal fade" id="exampleModal<?php echo $row->id;?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Details</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<ul class="list-group">
													<li class="list-group-item"><strong><?php echo $lang['pickup_date'] ?></strong> <?php echo $row->pickup_date; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['pickup_hour'] ?></strong> <?php echo $row->pickup_hour; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['deliver_date'] ?></strong> <?php echo $row->deliver_date; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['delivery_hour'] ?></strong> <?php echo $row->delivery_hour; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['pickLocation'] ?></strong> <?php echo $row->pickLocation; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['deliveryLocation'] ?></strong> <?php echo $row->deliveryLocation; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['cargo_vat'] ?></strong> <?php echo $row->cargo_vat; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['cargo_without_vat'] ?></strong> <?php echo $row->cargo_without_vat; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['cargo_distance'] ?></strong> <?php echo $row->cargo_distance; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['cargo_time'] ?></strong> <?php echo $row->cargo_time; ?></li> 
													<?php foreach (json_decode($row->combine_data) as $key => $value) {
														echo '<li class="list-group-item"><strong>'.$lang['what'].'</strong> '.$value->what.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_item'].'</strong> '.$value->cargo_item.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_length'].'</strong> '.$value->cargo_length.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_width'].'</strong> '.$value->cargo_width.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_height'].'</strong> '.$value->cargo_height.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_weight'].'</strong> '.$value->cargo_weight.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_value'].'</strong> '.$value->cargo_value.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_title'].'</strong> '.$value->cargo_title.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_description'].'</strong> '.$value->cargo_description.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_goodsstacke'].'</strong> '.$value->cargo_goodsstacke.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['cargo_goodpackage'].'</strong> '.$value->cargo_goodpackage.'</li>';

													} ?>
													<li class="list-group-item"><strong><?php echo $lang['cargo_flexible'] ?></strong> <?php echo $row->cargo_flexible; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['cargo_deliveryatnoon'] ?></strong> <?php echo $row->cargo_deliveryatnoon; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['cargo_pickupatnoon'] ?></strong> <?php echo $row->cargo_pickupatnoon; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_country'] ?></strong> <?php echo $row->r_country; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['lastname'] ?></strong> <?php echo $row->lastname; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_lastname'] ?></strong> <?php echo $row->r_lastname; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['street'] ?></strong> <?php echo $row->street; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_street'] ?></strong> <?php echo $row->r_street; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['addresspickup'] ?></strong> <?php echo $row->addresspickup; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['pickupdetails'] ?></strong> <?php echo $row->pickupdetails; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_pickupdetails'] ?></strong> <?php echo $row->r_pickupdetails; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['refrence_no'] ?></strong> <?php echo $row->refrence_no; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_refrence_no'] ?></strong> <?php echo $row->r_refrence_no; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['access_restriction_limitation'] ?></strong> <?php echo $row->access_restriction_limitation; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['access_restriction_limitation_height'] ?></strong> <?php echo $row->access_restriction_limitation_height; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_access_restriction_limitation'] ?></strong> <?php echo $row->r_access_restriction_limitation; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_access_restriction_limitation_height'] ?></strong> <?php echo $row->r_access_restriction_limitation_height; ?></li>

													<?php foreach (json_decode($row->additional_data) as $key => $value) {
														echo '<li class="list-group-item"><strong>'.$lang['extra_company'].'</strong> '.$value->extra_company.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_name'].'</strong> '.$value->extra_name.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_lastname'].'</strong> '.$value->extra_lastname.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_lastname'].'</strong> '.$value->extra_lastname.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_address'].'</strong> '.$value->extra_address.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_location'].'</strong> '.$value->extra_location.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_phone'].'</strong> '.$value->extra_phone.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['extra_delivery_location'].'</strong> '.$value->extra_delivery_location.'</li>';
													} ?>
													<?php foreach (json_decode($row->additional_data) as $key => $value) {
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_company'].'</strong> '.$value->r_extra_company.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_name'].'</strong> '.$value->r_extra_name.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_lastname'].'</strong> '.$value->r_extra_lastname.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_lastname'].'</strong> '.$value->r_extra_lastname.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_address'].'</strong> '.$value->r_extra_address.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_location'].'</strong> '.$value->r_extra_location.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_phone'].'</strong> '.$value->r_extra_phone.'</li>';
														echo '<li class="list-group-item"><strong>'.$lang['r_extra_delivery_location'].'</strong> '.$value->r_extra_delivery_location.'</li>';
													} ?>
													<li class="list-group-item"><strong><?php echo $lang['company'] ?></strong> <?php echo $row->company; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['r_company'] ?></strong> <?php echo $row->r_company; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['person_contact_no'] ?></strong> <?php echo $row->person_contact_no; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['truck_lift'] ?></strong> <?php echo $row->truck_lift; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['floor_pickup'] ?></strong> <?php echo $row->floor_pickup; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['deposite_collection'] ?></strong> <?php echo $row->deposite_collection; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['deliver_goods'] ?></strong> <?php echo $row->deliver_goods; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['phone_notification'] ?></strong> <?php echo $row->phone_notification; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['transport_insurance'] ?></strong> <?php echo $row->transport_insurance; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['floor_delivery'] ?></strong> <?php echo $row->floor_delivery; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['driver_deposite_goods'] ?></strong> <?php echo $row->driver_deposite_goods; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['green_tree'] ?></strong> <?php echo $row->green_tree; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['shipment_type'] ?></strong> <?php echo $row->shipment_type; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['dangerous_goods'] ?></strong> <?php echo $row->dangerous_goods; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['un_number'] ?></strong> <?php echo $row->un_number; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['packaging_amount'] ?></strong> <?php echo $row->packaging_amount; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['dangerous_goods_points'] ?></strong> <?php echo $row->dangerous_goods_points; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['temprature_controlled_goods'] ?></strong> <?php echo $row->temprature_controlled_goods; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['temprature'] ?></strong> <?php echo $row->temprature; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['transport_company'] ?></strong> <?php echo $row->transport_company; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['transport_company_goods'] ?></strong> <?php echo $row->transport_company_goods; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['crane_required_picking'] ?></strong> <?php echo $row->crane_required_picking; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['crane_required_uploading'] ?></strong> <?php echo $row->crane_required_uploading; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['shipment_file'] ?></strong> <?php echo $row->shipment_file; ?></li>
													<li class="list-group-item"><strong><?php echo $lang['service_type'] ?></strong> <?php echo $row->service_type; ?></li>
												</ul>

								
												</div>
												<div class="modal-footer">
												<button  class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
											</div>
										</div>
										<?php endforeach;?>
										<?php unset($row);?>
										<?php endif;?>
									</tbody>	
								</table>
							</div>	
							<?php echo $pager->display_pages();?>
							<?php echo Core::doDelete("Delete Shipment","deleteCourier");?> 
							<!-- end Shipping List -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }else if($row->userlevel == 2){?>
	<div class="col-12 col-sm-12 col-md-12">
		<div class="card card-hover">
			<div class="card-body">
								<ul class="nav nav-pills m-t-30 m-b-30">
					<li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false"><h5 class="card-title"><?php echo $lang['shipearrin'] ?></h5></a> </li>
					<!--<li class="nav-item"> <a href="all_status.php?do=status_in_transit" class="nav-link" ><h5 class="card-title"><?php echo $lang['left707'] ?></h5></a> </li>-->
				</ul>
				<div class="tab-content br-n pn">
					<div id="navpills-1" class="tab-pane active">
						<div class="row">
							<!-- Shipping List -->
							<div id="msgholder"></div>
							<div class="table-responsive">
								<table id="zero_config" class="table table-striped">
									<thead>
										<tr>
											<th><b><?php echo $lang['ltracking'] ?></b></th>
											<th><b><?php echo $lang['rreceiver'] ?></b></th>
											<th><b><?php echo $lang['qquantity'] ?></b></th>
											<th><b><?php echo $lang['dasha'] ?></b></th>
											<th><b><?php echo $lang['ddate'] ?></b></th>
											<th align='center'><b><?php echo $lang['count15'] ?></b></th>
											<th><b><?php echo $lang['sstatus'] ?></b></th>
											<th><b><?php echo $lang['count16'] ?></b></th>
											<th data-hide="all" align='center'><b><?php echo $lang['aaction'] ?></b></th>
										</tr>
									</thead>
									<tbody id="projects-tbl">
										<?php if(!$courierrow):?>
										<tr>
											<td colspan="9">
											<?php echo "
											<i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='160' /></i>
											</br>
											<p style='font-size: 20px; -webkit-font-smoothing: antialiased; color: #737373;' align='center'>".$lang['oohhship']."</p>
											<p style='font-size: 16px; -webkit-font-smoothing: antialiased; color: #999;' align='center'> ".$lang['ooohhship']."</p>
											",false;?>
											</td>
										</tr>
										<?php else: ?>
										<?php foreach ($courierrow as $row):?>	
										<tr class="card-hover">		
											<td><b><a  href="cargo_shipping.php?do=edit_courier&amp;cus_name=<?php echo $row->username;?>&amp;action=ship&amp;courier_id=<?php echo $row->id;?>"><?php echo $row->order_inv;?></a></b></td>
											<td  class="clients-rpt" style="text-align: left;"><?php echo $row->r_name;?></td>
											<td><?php echo $row->r_qnty;?></td>
											<td><?php echo $row->r_address;?> | <?php echo $row->r_pickupdetails;?></td>
											<td><?php echo $row->created;?></td>
											<td><a  href="view-google-maps.php?do=view-google-maps&amp;action=mapview&amp;id=<?php echo $row->id;?>" target="_blank"><input  type=image src="assets/images/icon_map.png" ></a></td>
											<td><span style="background: <?php echo $row->color; ?>;"  class="label label-large" ><?php echo $row->status_courier;?></span></td>
											<td><?php echo $row->level;?></td>
											<td>
											<a  href="cargo_shipping.php?do=edit_courier&amp;cus_name=<?php echo $row->username;?>&amp;action=ship&amp;courier_id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooledit'] ?>"><i style="color:#343a40" class="ti-pencil"></i></a>
											<a  href="invoice/inv_ship1.php?do=inv_ship1&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolprint'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
											<a  href="invoice/inv_ship.php?do=inv_ship&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolprint'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
											<a  href="invoice/label_ship.php?do=label_ship&amp;action=label&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toollabel'] ?>"><i style="color:#343a40" class="ti-bookmark-alt"></i></a>
											<a  href="status_shipment.php?do=status_shipment&amp;action=status&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolupdate'] ?>"><i style="color:#20c997" class="ti-reload"></i></a> 
											<a  href="deliver_shipment.php?do=deliver_shipment&amp;action=status&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooldeliver'] ?>"><i style="color:#2962FF" class="ti-package"></i></a>
											</td>
										</tr>											
										<?php endforeach;?>
										<?php unset($row);?>
										<?php endif;?>
									</tbody>	
								</table>
							</div>	
							<?php echo $pager->display_pages();?>
							<?php echo Core::doDelete("Delete Shipment","deleteCourier");?> 
							<!-- end Shipping List -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
<script src="app.js"></script>
<script src="appuser.js"></script>
<script src="dist/js/stacktable.js"></script>
<script>
	$('table').stacktable();
</script>