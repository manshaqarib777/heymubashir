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
  require_once("init.php"); 

  $ratesrow = $core->getTrack_post();
  
  $historyrow = $core->getTrack_post_history(); 

?>
<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title><?php echo $lang['langs_01098'] ?> | <?php echo $core->site_name;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Courier DEPRIXA-Integral Web System">
        <meta name="author" content="Jaomweb">
        <meta name="description" content="">
        <!-- favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="uploads/favicon.png">
        <!-- Bootstrap -->
        <link href="<?php SITEURL ?>assets/theme_deprixa/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="<?php SITEURL ?>assets/theme_deprixa/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->               
        <link rel="stylesheet" href="<?php SITEURL ?>assets/theme_deprixa/css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="<?php SITEURL ?>assets/theme_deprixa/css/owl.theme.css"/> 
        <link rel="stylesheet" href="<?php SITEURL ?>assets/theme_deprixa/css/owl.transitions.css"/>  
        <!-- Main css --> 
        <link href="<?php SITEURL ?>assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Custom css -->
        <link rel="stylesheet" href="assets/shippment/css/style.css">

    </head>

<body>



<div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                   <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="'.SITEURL.'/uploads/'.$core->logo.'" alt="'.$core->site_name.'"  width="190" height="39"/>': $core->site_name;?></a>
                </div>                 
                <div class="buy-button">
                    <a href="sign-up.php" class="btn btn-light-outline rounded"><i class="mdi mdi-account-alert ml-3 icons"></i> <?php echo $lang['left112'] ?></a>
                </div><!--end login button-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
				<div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.php"><?php echo $lang['left111'] ?></a></li>
                        
                        <li><a href="tracking.php"><i class="mdi mdi-package-variant-closed"></i> <?php echo $lang['left113'] ?></a></li>
                        <li><a href="shipping.php"><i class="mdi mdi-package-variant-closed"></i> Add Shipping</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container" style="margin-top: 100px;">
        <div class="row mt-5 justify-content-center text-center prog-steps">
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
            <!-- 1 step -->
           <div class="col-md-2 col-lg-2 col-sm-2 p-0">
               <div>
                <img src="assets/shippment/images/1-done.png"  class="img-fluid">
                <div>
                    <p class="pt-2 digit color-green">1.
                        <i class="fa fa-check color-green" aria-hidden="true" style="font-size: 27px;"></i></p>
                </div>
                <div>
                    <p class="after-digit-title color-green">Information about the goods</p>
                </div>
                </div>
           </div>
           <!-- 2 step -->
           <div class="col-md-2 col-lg-2 col-sm-2 p-0 ">
            <div>
             <img src="assets/shippment/images/2-prog.png" class="img-fluid">
             <div>
                 <p class="pt-2 digit color">2.
                    <i class="fa fa-pencil color" aria-hidden="true" style="font-size: 27px;"></i>
                 </p>
             </div>
             <div>
                 <p class="after-digit-title color">Date</p>
             </div>
        </div>
        </div>
        <!-- 3 step -->
        <div class="col-md-2 col-lg-2 col-sm-2 p-0">
            <div>
             <img src="assets/shippment/images/3.png"  class="img-fluid">
             <div>
                 <p class="pt-2 digit">3.</p>
             </div>
             <div>
                 <p class="after-digit-title">Address</p>
             </div>
        </div>
        </div>
        <!-- 4 step -->
        <div class="col-md-2 col-lg-2 col-sm-2 p-0">
            <div>
                <img src="assets/shippment/images/4.png"  class="img-fluid">
                <div>
                    <p class="pt-2 digit">4.</p>
                </div>
                <div>
                    <p class="after-digit-title">Delivery options</p>
                </div>
             </div>
        </div>
        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
    </div>
        <!-- /end steps  row -->

    
        <div class="row mt-5">
            <!-- services dates -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="color font-28">SERVICES AND DATES</div>
            </div>
            <!-- div budgets -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-3">
                <div class="row mt-2">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <div class="card text-center rounded-0 summary-back">
                            <div class="card-body" id="divBudget">
                              <h5 class="card-title font-24">BUDGET</h5>
                              <img src="assets/shippment/images/service.png" class="budget" id="serviceshow">
                              <img src="assets/shippment/images/service-check.png" class="Myhide" id="servicehide">
                              <p>Within 72h<br><a href="#">more info</a></p>
                              <button class="btn btn-cargo btn-budget" id="budgetBtn">Budget</button>
                            </div>
                          </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <div class="card text-center rounded-0 summary-back">
                            <div class="card-body" id="divStandard">
                              <h5 class="card-title font-24">STANDARD</h5>
                              <img src="assets/shippment/images/service2.png" class="standard" id="service2show">
                              <img src="assets/shippment/images/service2-check.png" class="Myhide" id="service2hide">
                              <p>Within 24h<br><a href="#">more info</a></p>
                              <button class="btn btn-cargo btn-budget" id="standardBtn">Standard</button>
                            </div>
                          </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <div class="card text-center rounded-0 summary-back">
                            <div class="card-body" id="divExpress">
                              <h5 class="card-title font-24">EXPRESS</h5>
                              <img src="assets/shippment/images/service3.png" class="express" id="service3show">
                              <img src="assets/shippment/images/service3-check.png" class="Myhide" id="service3hide">
                              <p>Within 12h<br><a href="#">more info</a></p>
                              
                            </div>
                          </div>
                    </div>
                </div>
                <!-- /end divs budget -->
            <form action="data.php" method="POST" enctype="multipart/form-data">
                <!-- date forms -->
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <h2 class="font-21 color">Delivery date</h2>
                                <div class="row">
                                    <div class="col-12">
                                            <input type="hidden" name="service_type" id="service_type">
                                        <div class="form-group p-0">
                                            <label for="" class="cargo-label m-0">Pickup date</label>
                                                <input type="date" name="pickup_date"  
                                                class="form-control rounded-0 border-input" 
                                                placeholder="" aria-describedby="helpId" required="">
                                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                        </div>
                                        <div class="form-group p-0">
                                            <label for="" class="cargo-label m-0">Pickup time from</label>
                                            <select class="form-control border-input rounded-0" name="pickup_hour">
                                                 <option value="">---</option><option value="05:00">05:00</option><option value="05:15" selected="">05:15</option><option value="05:30">05:30</option><option value="05:45">05:45</option><option value="06:00">06:00</option><option value="06:15">06:15</option><option value="06:30">06:30</option><option value="06:45">06:45</option><option value="07:00">07:00</option><option value="07:15">07:15</option><option value="07:30">07:30</option><option value="07:45">07:45</option><option value="08:00">08:00</option><option value="08:15">08:15</option><option value="08:30">08:30</option><option value="08:45">08:45</option><option value="09:00">09:00</option><option value="09:15">09:15</option><option value="09:30">09:30</option><option value="09:45">09:45</option><option value="10:00">10:00</option><option value="10:15">10:15</option><option value="10:30">10:30</option><option value="10:45">10:45</option><option value="11:00">11:00</option><option value="11:15">11:15</option><option value="11:30">11:30</option><option value="11:45">11:45</option><option value="12:00">12:00</option><option value="12:15">12:15</option><option value="12:30">12:30</option><option value="12:45">12:45</option><option value="13:00">13:00</option><option value="13:15">13:15</option><option value="13:30">13:30</option><option value="13:45">13:45</option><option value="14:00">14:00</option><option value="14:15">14:15</option><option value="14:30">14:30</option><option value="14:45">14:45</option><option value="15:00">15:00</option><option value="15:15">15:15</option><option value="15:30">15:30</option><option value="15:45">15:45</option><option value="16:00">16:00</option><option value="16:15">16:15</option><option value="16:30">16:30</option><option value="16:45">16:45</option><option value="17:00">17:00</option><option value="17:15">17:15</option><option value="17:30">17:30</option><option value="17:45">17:45</option><option value="18:00">18:00</option><option value="18:15">18:15</option><option value="18:30">18:30</option><option value="18:45">18:45</option><option></option>
                                            </select>
                                        </div>
                                        <div class="form-group p-0">
                                            <label for="" class="cargo-label m-0">Pickup time until</label>
                                            <select class="form-control border-input rounded-0">
                                                 <option value="">---</option><option value="05:00">05:00</option><option value="05:15" selected="">05:15</option><option value="05:30">05:30</option><option value="05:45">05:45</option><option value="06:00">06:00</option><option value="06:15">06:15</option><option value="06:30">06:30</option><option value="06:45">06:45</option><option value="07:00">07:00</option><option value="07:15">07:15</option><option value="07:30">07:30</option><option value="07:45">07:45</option><option value="08:00">08:00</option><option value="08:15">08:15</option><option value="08:30">08:30</option><option value="08:45">08:45</option><option value="09:00">09:00</option><option value="09:15">09:15</option><option value="09:30">09:30</option><option value="09:45">09:45</option><option value="10:00">10:00</option><option value="10:15">10:15</option><option value="10:30">10:30</option><option value="10:45">10:45</option><option value="11:00">11:00</option><option value="11:15">11:15</option><option value="11:30">11:30</option><option value="11:45">11:45</option><option value="12:00">12:00</option><option value="12:15">12:15</option><option value="12:30">12:30</option><option value="12:45">12:45</option><option value="13:00">13:00</option><option value="13:15">13:15</option><option value="13:30">13:30</option><option value="13:45">13:45</option><option value="14:00">14:00</option><option value="14:15">14:15</option><option value="14:30">14:30</option><option value="14:45">14:45</option><option value="15:00">15:00</option><option value="15:15">15:15</option><option value="15:30">15:30</option><option value="15:45">15:45</option><option value="16:00">16:00</option><option value="16:15">16:15</option><option value="16:30">16:30</option><option value="16:45">16:45</option><option value="17:00">17:00</option><option value="17:15">17:15</option><option value="17:30">17:30</option><option value="17:45">17:45</option><option value="18:00">18:00</option><option value="18:15">18:15</option><option value="18:30">18:30</option><option value="18:45">18:45</option><option></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="cargo-label">
                                                Pickup at noon possible
                                                &nbsp;
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </label><br>
                                            <input type="radio" name="cargo_pickupatnoon" value="yes" checked="" >
                                            <label>&nbsp;Yes</label>
                                            <input class="ml-3" type="radio" name="cargo_pickupatnoon" value="no">
                                            <label>&nbsp;No</label>    
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- ------------------------------------------------------------------------------------------------------- -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <h2 class="font-21 color">DELIVERY DATE</h2>
                                <div class="row">
                                    <div class="col-12">
                                        
                                        <div class="form-group p-0">
                                            <label for="" class="cargo-label m-0">Delivery date</label>
                                                <input type="date" name="deliver_date"  
                                                class="form-control rounded-0 border-input" 
                                                placeholder="" aria-describedby="helpId" required>
                                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                        </div>
                                        <div class="form-group p-0">
                                            <label for="" class="cargo-label m-0">Delivery time from</label>
                                            <select class="form-control border-input rounded-0" name="delivery_hour">
                                                <option value="">---</option><option value="05:00">05:00</option><option value="05:15" selected="">05:15</option><option value="05:30">05:30</option><option value="05:45">05:45</option><option value="06:00">06:00</option><option value="06:15">06:15</option><option value="06:30">06:30</option><option value="06:45">06:45</option><option value="07:00">07:00</option><option value="07:15">07:15</option><option value="07:30">07:30</option><option value="07:45">07:45</option><option value="08:00">08:00</option><option value="08:15">08:15</option><option value="08:30">08:30</option><option value="08:45">08:45</option><option value="09:00">09:00</option><option value="09:15">09:15</option><option value="09:30">09:30</option><option value="09:45">09:45</option><option value="10:00">10:00</option><option value="10:15">10:15</option><option value="10:30">10:30</option><option value="10:45">10:45</option><option value="11:00">11:00</option><option value="11:15">11:15</option><option value="11:30">11:30</option><option value="11:45">11:45</option><option value="12:00">12:00</option><option value="12:15">12:15</option><option value="12:30">12:30</option><option value="12:45">12:45</option><option value="13:00">13:00</option><option value="13:15">13:15</option><option value="13:30">13:30</option><option value="13:45">13:45</option><option value="14:00">14:00</option><option value="14:15">14:15</option><option value="14:30">14:30</option><option value="14:45">14:45</option><option value="15:00">15:00</option><option value="15:15">15:15</option><option value="15:30">15:30</option><option value="15:45">15:45</option><option value="16:00">16:00</option><option value="16:15">16:15</option><option value="16:30">16:30</option><option value="16:45">16:45</option><option value="17:00">17:00</option><option value="17:15">17:15</option><option value="17:30">17:30</option><option value="17:45">17:45</option><option value="18:00">18:00</option><option value="18:15">18:15</option><option value="18:30">18:30</option><option value="18:45">18:45</option><option></option>
                                            </select>
                                        </div>
                                        <div class="form-group p-0">
                                            <label for="" class="cargo-label m-0">Delivery time until</label>
                                            <select class="form-control border-input rounded-0">
                                                <option value="">---</option><option value="05:00">05:00</option><option value="05:15" selected="">05:15</option><option value="05:30">05:30</option><option value="05:45">05:45</option><option value="06:00">06:00</option><option value="06:15">06:15</option><option value="06:30">06:30</option><option value="06:45">06:45</option><option value="07:00">07:00</option><option value="07:15">07:15</option><option value="07:30">07:30</option><option value="07:45">07:45</option><option value="08:00">08:00</option><option value="08:15">08:15</option><option value="08:30">08:30</option><option value="08:45">08:45</option><option value="09:00">09:00</option><option value="09:15">09:15</option><option value="09:30">09:30</option><option value="09:45">09:45</option><option value="10:00">10:00</option><option value="10:15">10:15</option><option value="10:30">10:30</option><option value="10:45">10:45</option><option value="11:00">11:00</option><option value="11:15">11:15</option><option value="11:30">11:30</option><option value="11:45">11:45</option><option value="12:00">12:00</option><option value="12:15">12:15</option><option value="12:30">12:30</option><option value="12:45">12:45</option><option value="13:00">13:00</option><option value="13:15">13:15</option><option value="13:30">13:30</option><option value="13:45">13:45</option><option value="14:00">14:00</option><option value="14:15">14:15</option><option value="14:30">14:30</option><option value="14:45">14:45</option><option value="15:00">15:00</option><option value="15:15">15:15</option><option value="15:30">15:30</option><option value="15:45">15:45</option><option value="16:00">16:00</option><option value="16:15">16:15</option><option value="16:30">16:30</option><option value="16:45">16:45</option><option value="17:00">17:00</option><option value="17:15">17:15</option><option value="17:30">17:30</option><option value="17:45">17:45</option><option value="18:00">18:00</option><option value="18:15">18:15</option><option value="18:30">18:30</option><option value="18:45">18:45</option><option></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="cargo-label">
                                               Delivery at noon possible?
                                               &nbsp;
                                               <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </label><br>
                                            <input type="radio" name="cargo_deliveryatnoon" value="yes" checked="">
                                            <label>&nbsp;Yes</label>
                                            <input class="ml-3" type="radio" name="cargo_deliveryatnoon" value="no">
                                            <label>&nbsp;No</label>    
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="cargo-label">
                                Flexible execution between pick-up and delivery date &nbsp;
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </label><br>
                            <input type="radio" name="cargo_flexible" value="yes" checked="">
                            <label>&nbsp;Yes</label>
                            <input class="ml-3" type="radio" name="cargo_flexible" value="no">
                            <label>&nbsp;No</label>    
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <a href="index.html"><input type="button" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                style="background-color:#f7f4f3; font-size: 18px; color: #899099;"
                                value="Back"></input></a>
                    </div>

                    <div class="col-6 text-right">
                        <input type="submit" name="step-4" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                            style="background-color: #E5005B; font-size: 18px;" value="Next"></input>
                    </div>
                </div>
            </form>


            </div>  <!--\8 x 8 colums-->
    
    



    
    
            <!-- summary portion -->
            <div class=" col-xs-12 col-md-12 col-lg-4 col-md-4">
                <div class="container summary-back p-4" style="font-size: 15px;">
                    <div class="row">
                        <div class="col-xs-12 col-xl-12">
                            <p class="color s-title">SUMMARY</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-xl-12">
                            <i class="fa fa-map-marker color-green icon-location" aria-hidden="true"></i>
                            <span id="pickLocation_show"></span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-xs-12 col-xl-12">
                            <i class="fa fa-map-marker color icon-location" aria-hidden="true"></i>
                            <span id="deliveryLocation_show"></span>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-8">
                            <img src="assets/shippment/images/s1.png"><span style="color: 1c2c3f;"><span id="cargo_distance_show"></span> Km</span>
                        </div>
                        <div class="">
                            <i class="fa fa-clock-o" style="font-size: 23px;" aria-hidden="true"><span id="cargo_time_show"></span></i>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-xs-6 col-xl-6">
                            <img src="assets/shippment/images/s2.png"> <span><span class="cargo_weight_show"></span> Kg</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-3">
                            <img src="assets/shippment/images/s3.png">
                        </div>
                        <div class="">
                            <span>Cargo Items: <span class="cargo_item_show">1</span><br>
                                <span class="cargo_length_show">length</span>: cm <span class="cargo_width_show">width</span>: cm <span class="cargo_height_show">height</span>: cm<br>
                                <span class="cargo_weight_show">weight</span>: kg</span>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-xs-12 col-xl-12" >
                            <p class="color s-title">COSTS</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-xl-12">
                            <p class="" style="border-bottom: dashed .5px #00A2AE;">+ 0.35 CHF Fuel surcharge: 1%</p>
                            <h1 style="border-bottom: solid .5px #00A2AE;"><span id="cargo_without_vat_show"></span></h1>
                            <p class="text-right">without VAT</p>
                            <h3><span id="cargo_vat_show"></span></h3>
                            <div style="width: 100%; height: 1px; background-color: #00A2AE;"></div>
                            <div style="width: 100%; height: 1px; background-color: #00A2AE; margin-top: 1px;"></div>
                            <p class="text-right mt-1">with VAT</p>
                        </div>
                    </div>
                </div>
                <!-- second row of summary main row 
                <div class="row mt-4">
                    <div class="col-xs-12 col-xl-12">
                        <div class="p-3 bussines-customer-div">
                            <b>Business customers</b> Business customers profit from our Basic-, Flex- or Licence models. 
                            With these models we cover your needs to 100%. You will find more information <a href="#">here</a>.
                        </div>
                    </div>
                </div>
                -->
            </div>
    </div><!--/main container end-->

        

    </script>
        <!-- javascript -->
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/jquery.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/bootstrap.bundle.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/jquery.easing.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/owl.carousel.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/owl.init.js"></script>
        <!-- Main Js -->
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/app.js"></script>
        <script>
          $(document).ready(function () {
            var settings = {
                  "url": "data.php",
                  "method": "POST",
                  "data":{
                    "id":"<?php echo $_SESSION['courier_id']; ?>",
                    "ajax-data": "ajax-data"
                  }
                }
            $.ajax(settings).done(function (response) {
                $("#pickLocation_show").html(response.pickLocation);
                $("#deliveryLocation_show").html(response.deliveryLocation);
                $("#cargo_distance_show").html(response.cargo_distance);
                $("#cargo_time_show").html(response.cargo_time);
                $("#cargo_vat_show").html(response.cargo_vat);
                $("#cargo_without_vat_show").html(response.cargo_without_vat);
                $(".cargo_item_show").html(response.total_item);
                $(".cargo_width_show").html(response.total_width);
                $(".cargo_height_show").html(response.total_height);
                $(".cargo_weight_show").html(response.total_weight);
                $(".cargo_length_show").html(response.total_length);

            });
            
        $("#budgetBtn").on('click',function(){
            $("#service_type").val('budget');
        // $("#serviceshow").hide();
        // $("#service2hide").hide();
        // $("#service2show").show();
        // $("#service3hide").hide();
        // $("#servicehide").show();
        // $("#service3show").show();
        // $("#service3hide").hide();
        // });
        // $("#divStandard").click(function(){
        // $("#serviceshow").hide();
        // $("#service2hide").hide();
        // $("#service2show").show();
        // $("#service3hide").hide();
        // $("#servicehide").show();
        // });

        $("#standardBtn").on("click",function(){
            $("#service_type").val('standerd');
        // $("#service2show").hide();
        // $("#service2hide").show();
        // $("#servicehide").hide();
        // $("#serviceshow").show();
        // $("#service3show").show();
        // $("#service3hide").hide();
        $("#cargo_vat_show").html($("#cargo_vat_show").html()+30);
        $("#cargo_without_vat_show").html($("#cargo_without_vat_show").html()+30);
        });

        $(document).on("click","#expressBtn",function(){
            alert('asas');
            $("#service_type").val('express');
        // $("#service3hide").show();
        // $("#service3show").hide();
        // $("#service1hide").show();
        // $("#serviceshow").hide();
        // $("#service2show").show();
        // $("#service2hide").hide();
        // $("#servicehide").hide();
        // $("#serviceshow").show();
        
        $("#cargo_vat_show").html($("#cargo_vat_show").html()+50);
        $("#cargo_without_vat_show").html($("#cargo_without_vat_show").html()+50);
        });

      });
    </script>
    </body>

</html>