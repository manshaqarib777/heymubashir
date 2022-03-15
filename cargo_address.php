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
            <div class="row justify-content-center text-center prog-steps">
                <!-- 1 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                    <div>
                        <img src="assets/shippment/images/1-done.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit color-green">1.
                                <i class="fa fa-check" aria-hidden="true" style="font-size: 27px;"></i></p>
                        </div>
                        <div>
                            <p class="after-digit-title color-green">Information about the goods</p>
                        </div>
                    </div>
                </div>
                <!-- 2 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0 ">
                    <div>
                        <img src="assets/shippment/images/2-donee.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit color-green">2.
                                <i class="fa fa-check color-green" aria-hidden="true" style="font-size: 27px;"></i>
                            </p>
                        </div>
                        <div>
                            <p class="after-digit-title color-green">Date</p>
                        </div>
                    </div>
                </div>
                <!-- 3 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                    <div>
                        <img src="assets/shippment/images/3-prog.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit color">3.
                                <i class="fa fa-pencil color" aria-hidden="true" style="font-size: 27px;"></i>
                            </p>

                        </div>
                        <div>
                            <p class="after-digit-title color">Address</p>
                        </div>
                    </div>
                </div>

                <!-- step 4 -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                    <div>
                        <img src="assets/shippment/images/4.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit">4.</p>
                        </div>
                        <div>
                            <p class="after-digit-title">Delivery options</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /end steps  row -->
<form action="data.php" method="POST">
            <div class="row mt-5">
                <!-- ADDRESSES Box 1 -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    
                        <h1 class="color-green font-28">ADDRESSS</h1>

                        <!-- First Row -->
                        <!-- First Column -->
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="color font-21">PICKUP ADDRESS</h1>
                                    </div>
                                    <div class="col-6">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-cargo rounded-0 font-14" data-toggle="modal"
                                            data-target=".bd-example-modal-lg" id="#address-book"
                                            style="background-color: #e5005b; clip-path: polygon(0% 0%, 90% 0, 100% 35%, 100% 100%, 0 100%);">
                                            <i class="fa fa-address-book font-16" aria-hidden="true"></i>
                                            Address book </button>
                                    </div>
                                </div>

                                <!-- Second Row -->
                                <div class="row mt-3 ">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">Company</label>
                                        <input type="text" name="company" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Third Row -->
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color">First
                                            Name</label>
                                        <input type="text" required name="s_name" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color">Last
                                            name</label>
                                        <input type="text" name="lastname" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fourth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">Street + house number</label>
                                        <input type="text" name="street" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fifth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Additional address line <span class="font-optional">(Optional)</span></label>
                                        <input type="text" name="address" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Sixth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Pickup location</label>
                                        <input type="text" name="addresspickup" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Seventh Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Phone number contact person <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="We need your phone number, so the driver can contact you if necessary " aria-hidden="true"></i></label>
                                        <input type="number" name="phone" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Eight Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            E-mail address contact person <span class="font-optional">(Optional)</span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="E-mail address for notificationslike tracking link, pickup driver information and proof of delivery" aria-hidden="true"></i></label>
                                        <input type="email" name="email" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                        <span style="font-size: 14px; color: rgba(28, 44,63,0.5);">
                                            Please enter the e-mail address of the contact person in the company, who will
                                            be notified for free by e-mail of the pickup.
                                        </span>
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 9th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Enter details of the pickup location <span class="font-optional">(Optional)</span>
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter special features for the pickup address.(e.g. office on the first floor)" aria-hidden="true"></i></label>
                                        <input type="text" name="pickupdetails" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 10th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Reference number shipper <span class="font-optional">(Optional)</span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="The refrence number is printed onto the delivery slip and the invoice." aria-hidden="true"></i></label>
                                        <input type="text" name="refrence_no" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->
                            </div>

                            <!-- Second Column -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="color font-21">DELIVERY ADDRESS</h1>
                                    </div>
                                    <div class="col-6">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-cargo rounded-0 font-14" data-toggle="modal"
                                            data-target=".bd-example-modal-lg" id="#address-book"
                                            style="background-color: #e5005b; clip-path: polygon(0% 0%, 90% 0, 100% 35%, 100% 100%, 0 100%);">
                                            <i class="fa fa-address-book font-16" aria-hidden="true"></i>
                                            Address book </button>
                                    </div>
                                </div>

                                <!-- Second Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">Company</label>
                                        <input type="text" name="r_company" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Third Row -->
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color">First
                                            Name</label>
                                        <input type="text" required name="r_name" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color">Last
                                            name</label>
                                        <input type="text" name="r_lastname" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fourth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">Street + house number</label>
                                        <input type="text" name="r_street" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fifth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Additional address line <span class="font-optional">(Optional)</span></label>
                                        <input type="text" name="r_address" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Sixth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Pickup location</label>
                                        <input type="text" name="r_addresspickup" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Seventh Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Phone number contact person <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="We need your phone number of the reciever, so the driver can contact the reciever if necessary " aria-hidden="true"></i></label>
                                        <input type="number" name="r_phone" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Eight Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            E-mail address contact person <span class="font-optional">(Optional)</span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="E-mail address for notifications like tracking link, pickup driver information and proof of delivery" aria-hidden="true"></i></label>
                                        <input type="email" name="r_email" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                        <span style="font-size: 14px; color: rgba(28, 44,63,0.5);">
                                            Please enter the e-mail address of the receiver’s contact person, who will be
                                            notified for free by e-mail of delivery.
                                        </span>
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 9th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Enter details of the pickup location <span class="font-optional">(Optional)</span>
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter special features for the pickup address.(e.g. office on the first floor)" aria-hidden="true"></i></label>
                                        <input type="text" name="r_pickupdetails" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 10th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                            Reference number shipper <span class="font-optional">(Optional)</span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="The refrence number is printed onto the delivery slip and the invoice." aria-hidden="true"></i></label>
                                        <input type="text" name="r_refrence_no" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <!-- End / -->


                            </div>
                            <!-- End / -->
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 font-21 color">
                                FURTHER INFORMATION ON PICK-UP / DELIVERY ADDRESS (OPTIONAL)
                            </div>
                        </div>
                        <div class="col-12 font-16 p-0">
                            If necessary, provide us with additional information such as restricted access or additional
                            pick-up
                            and delivery addresses for the transport order.
                        </div>

                        <!-- Additional Information -->
                        <div class="row">
                            <div class="col-12 text-right">
                                <input type="button" id="hide" class="btn btn-cargo mt-1 w-65 px-4" id="ButtonNext"
                                    style=" font-size: 17px; display: none; clip-path: polygon(0% 0%, 94% 0, 100% 36%, 100% 100%, 0 100%);"
                                    value="Hide additional Information"></input>

                                <input type="button" id="show" class="btn btn-cargo mt-1 w-65 px-4" id="ButtonNext"
                                    style=" font-size: 17px; clip-path: polygon(0% 0%, 94% 0, 100% 36%, 100% 100%, 0 100%);"
                                    value="Show additional Information"></input>
                            </div>

                        </div>

                        <!-- Additional informaton box which is display none and display on click additional information -->
                        <div id="additional-box" style="display: none;">
                            <div class="row mt-4">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  py-2">
                                    <h1 class="font-21">Access restriction for pickup</h1>
                                    <span class="font-16" style="color: #cccccc;">(Optional)</span>
                                    <br>
                                    <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                        <input type="button" id="#add1" data-toggle="modal" data-target=".add1-modal"
                                            class="btn btn-cargo mt-3 py-1 px-3" style=" font-size: 14px;" value="Add"></input>
                                    </div>
                                    <div class="row " id="add1inside">
                                        <div class="col-12">
                                            <div style="background-color: #e8f6f8; line-height: 5px;" class="p-0">
                                                <h1 class="font-21 pl-3 pt-4">ACCESS RESTRICTIONS</h1>
                                                <h1 class="font-16 pl-3">Are there any access restrictions (weight)?</h1>
                                                <p class="font-16 pl-3"><b>No restrictions</b></p>
                                                <h1 class="font-16 pl-3">Are there any access restrictions (height)?</h1>
                                                <p class="font-16 pl-3"><b>No restrictions</b></p>
                                                <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                                    <input type="button" id="#add1" data-toggle="modal"
                                                        data-target=".add1-modal" class="btn btn-cargo mr-4 py-1 px-3"
                                                        style=" font-size: 14px; background-color: #00A2AE;;"
                                                        value="Edit"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  py-2">
                                    <h1 class="font-21">Access restriction for delivery</h1>
                                    <span class="font-16" style="color: #cccccc;">(Optional)</span>
                                    <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                        <input type="button" id="#add2" data-toggle="modal" data-target=".add2-modal"
                                            class="btn btn-cargo mt-3 py-1 px-3" id="ButtonNext" style=" font-size: 14px;"
                                            value="Add"></input></a>
                                    </div>
                                    <div class="row" id="add2inside">
                                        <div class="col-12">
                                            <div style="background-color: #e8f6f8; line-height: 5px;" class="p-0">
                                                <h1 class="font-21 pl-3 pt-4">ACCESS RESTRICTIONS</h1>
                                                <h1 class="font-16 pl-3">Are there any access restrictions (weight)?</h1>
                                                <p class="font-16 pl-3"><b>No restrictions</b></p>
                                                <h1 class="font-16 pl-3">Are there any access restrictions (height)?</h1>
                                                <p class="font-16 pl-3"><b>No restrictions</b></p>
                                                <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                                    <input type="button" id="#add2" data-toggle="modal"
                                                        data-target=".add2-modal" class="btn btn-cargo mr-4 py-1 px-3"
                                                        style=" font-size: 14px; background-color: #00A2AE;;"
                                                        value="Edit"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- End / -->

                            <!-- Second Row & Column -->
                            <div class="row mt-4 py-5" style="border-bottom: 1px solid #00A2AE;">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 py-2">
                                    <h1 class="font-21">Add additional pickup location <span class="font-16"
                                            style="color: #cccccc;">(Optional)</span></h1>
                                    <h1 style="color:black;font-size: 14px;">Further loading point in the reverse of 10km of the
                                        first
                                        loading
                                        address</h1>
                                    <br>
                                    <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                        <input type="button" id="#add3" data-toggle="modal" data-target=".add3-modal"
                                            class="btn btn-cargo py-1 px-3 " id="ButtonNext" style=" font-size: 14px;"
                                            value="Add"></input>
                                    </div>

                                    <div class="row" id="add3inside">
                                        <div class="col-12">
                                            <div style="background-color: #e8f6f8;">
                                                <div class="p-3">
                                                    Company<br>
                                                    First Name: <br>
                                                    Last Name: <br>
                                                    Street: <span></span> <br>
                                                    Zip / Postal: <span></span> <br>
                                                    Telephone: <span></span>
                                                </div>
                                                <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                                    <a href="#" class="mr-2" id="remove3">Remove</a>
                                                    <input type="button" id="#add3" data-toggle="modal"
                                                        data-target=".add3-modal" class="btn btn-cargo mr-4 py-1 px-3"
                                                        style=" font-size: 14px; background-color: #00A2AE;;"
                                                        value="Edit"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  py-2">
                                    <h1 class="font-21">Add additional delivery location</h1>
                                    <span class="font-16" style="color: #cccccc;">(Optional)</span>
                                    <h1 style="color:black;font-size: 14px;">Further loading point in the reverse of 10km of the
                                        first
                                        loading
                                        address</h1>
                                    <br>
                                    <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                        <input type="button" id="#add4" data-toggle="modal"
                                                data-target=".add4-modal" class="btn btn-cargo py-1 px-3" id="ButtonNext"
                                                style=" font-size: 14px;" value="Add"></input>
                                    </div>

                                    <div class="row" id="add4inside">
                                        <div class="col-12">
                                            <div style="background-color: #e8f6f8;">
                                                <div class="p-3">
                                                    Company<br>
                                                    First Name: <br>
                                                    Last Name: <br>
                                                    Street: <span></span> <br>
                                                    Zip / Postal: <span></span> <br>
                                                    Telephone: <span></span>
                                                </div>
                                                <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                                    <a href="#" class="mr-2" id="remove4">Remove</a>
                                                    <input type="button" id="#add4" data-toggle="modal"
                                                        data-target=".add4-modal" class="btn btn-cargo mr-4 py-1 px-3"
                                                        style=" font-size: 14px; background-color: #00A2AE;;"
                                                        value="Edit"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!-- End / -->

                        </div>


                        <!-- Back & Next Buttons -->
                        <div class="row mt-5 mb-4">

                            <div class="col-6">
                                <a href="date.html"><input type="button" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                        style="background-color:#f7f4f3; font-size: 18px; color: #899099; clip-path: polygon(0 34%, 14% 0, 100% 0, 100% 100%, 0% 100%);"
                                        value="Back"></input></a>
                            </div>

                            <div class="col-6 text-right">
                                <input type="submit" name="step-5" value="step-5" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                    style="background-color: #E5005B; font-size: 18px;" value="Next"></input>
                            </div>
                        </div>
                        <!-- End / -->


                </div> <!-- 8 x 8 Col / -->




                <!-- 3rd main col Summary -->
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

                 <!-- Form /-->

            </div> <!-- 4 x 4 Main Col / -->
            <!-- Modal -->

<!-- Address Book Modal -->

<div class="modal fade bd-example-modal-lg" id="#address-book" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SEARCH ADDRESS
                </h5>
            </div>

                <div class="modal-body">
                    <!-- First Row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                            <label class="font-16 color">Name / Address / Location / Email</label>
                            <input type="text" class="form-control rounded-0 border-input bg-transparent login-border"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="col-2">
                            <input type="button" class="btn btn-cargo py-2 px-4 mt-4" id="ButtonNext"
                                style="background-color: #E5005B; font-size: 18px;" value="Search"></input>
                        </div>
                    </div>
                    <!-- End / -->

                    <!-- Second Row -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <p class="font-16"><b>No addresses at the moment.</b></p>
                            <p class="font-16">Do you have an existing customer base? You can
                                import your customer base
                                under <a href="#">into your
                                    Pickwings address book.</a></p>
                        </div>
                    </div>
                    <!-- End / -->
                </div>


        </div>
    </div>
</div>

<!-- Address Book Modal End / -->

<!-- Add1 Model -->

<div class="modal fade add1-modal" id="#add1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ACCESS RESTRICTION FOR PICKUP
                </h5>
            </div>
                <div class="modal-body">
                    <!-- First Row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1 class="font-21">ACCESS RESTRICTIONS</h1>
                            <label class="font-16 color">Is there an access restriction at the pickup location?</label>
                            <select class="form-control border-input rounded-0"
                                style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);" name="access_restriction_limitation">
                                <option style="font-size: 14px;">No restrictions</option>
                                <option style="font-size: 14px;">Small vehicles only (up to 3.5t)</option>
                                <option style="font-size: 14px;">Only trucks with no trailer (up to 18t)</option>
                            </select>
                        </div>
                    </div>
                    <!-- End / -->

                    <!-- Second Row -->
                    <div class="row mt-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label class="font-16 color">Is there a limitation in height at the pickup location?
                                <span class="font-optional">(Optional)</span></label>
                            <input type="text" class="form-control rounded-0 border-input bg-transparent" placeholder=""
                                aria-describedby="helpId" name="access_restriction_limitation_height">
                            <div class="font-optional">Indication in meters</div>
                        </div>
                    </div>
                    <!-- End / -->
                </div>
        </div>
    </div>
</div>

<!-- Add1 Model / -->



<!-- Add2 Model -->

<div class="modal fade add2-modal" id="#add2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ACCESS RESTRICTION FOR DELIVERY
                </h5>
            </div>
                <div class="modal-body">
                    <!-- First Row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1 class="font-21">ACCESS RESTRICTIONS</h1>
                            <label class="font-16 color">Is there an access restriction at the delivery
                                location?</label>
                            <select class="form-control border-input rounded-0"
                                style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);" name="r_access_restriction_limitation">
                                <option style="font-size: 14px;">No restrictions</option>
                                <option style="font-size: 14px;">Small vehicles only (up to 3.5t)</option>
                                <option style="font-size: 14px;">Only trucks with no trailer (up to 18t)
                                </option>
                            </select>
                        </div>
                    </div>
                    <!-- End / -->

                    <!-- Second Row -->
                    <div class="row mt-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label class="font-16 color">Is there a limitation in height at the delivery
                                location?
                                <span class="font-optional">(Optional)</span></label>
                            <input type="text" class="form-control rounded-0 border-input bg-transparent" placeholder=""
                                aria-describedby="helpId" name="r_access_restriction_limitation_height">
                            <div class="font-optional">Indication in meters</div>
                        </div>
                    </div>
                    <!-- End / -->
                </div>
        </div>
    </div>
</div>

<!-- Add2 Model / -->


<!-- Add3 Modal -->

<div class="modal fade add3-modal" id="#add3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD ADDITIONAL PICKUP LOCATION
                </h5>
            </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1 class="font-21">ADDITIONAL LOADING POINT</h1>
                            <div class="form-group">
                                <label class="font-16 color">Company</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="extra_company">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">First Name</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="extra_name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Last Name</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="extra_lastname">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Address</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="extra_address">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Zip / Location</label>
                                <input type="search" name="extra_location" id="pickLocation"
                                    class="form-control rounded-0 zip-input border-gray" placeholder=""
                                    aria-describedby="helpId" name="extra_zip">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Telephone</label>
                                <input type="number" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="extra_phone">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Enter details of the delivery location</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="extra_delivery_location">
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</div>

<!-- Add3 Modal End / -->


<!-- Add4 Modal -->

<div class="modal fade add4-modal" id="#add4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD ADDITIONAL PICKUP LOCATION
                </h5>
            </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1 class="font-21">ADDITIONAL UNLOADING POINT</h1>
                            <div class="form-group">
                                <label class="font-16 color">Company</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="r_extra_company">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">First Name</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="r_extra_name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Last Name</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="r_extra_lastname">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Address</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="r_extra_address">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Zip / Location</label>
                                <input type="search" name="r_extra_location" id="pickLocation"
                                    class="form-control rounded-0 zip-input border-gray" placeholder=""
                                    aria-describedby="helpId" name="r_extra_zip">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Telephone</label>
                                <input type="number" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="r_extra_phone">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label class="font-16 color">Enter details of the delivery location</label>
                                <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                    placeholder="" aria-describedby="helpId" name="r_extra_delivery_location">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn py-2 px-4 white-button" data-dismiss="modal" id="ButtonNext"
                        value="Close"></input>
                    <input type="button" class="btn py-2 px-4 btn-cargo" id="add4save" data-dismiss="modal" value="Save"></input>
                </div>


        </div>
    </div>
</div>
</form>
</div>







        

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
        $("#show").click(function () {
            $(this).hide();
            $("#hide").show();
            $("#additional-box").show();

        });
        $("#hide").click(function () {
            $(this).hide();
            $("#show").show();
            $("#additional-box").hide();

        });
    });
    
    
// 
$(document).ready(function(){
        $("#add1inside").hide();
        $("#add2inside").hide();
        $("#add3inside").hide();
        $("#add4inside").hide();

        $("#add1save").click(function (){
            $("#add1inside").show();
        });

        $("#add2save").click(function (){
            $("#add2inside").show();
        });
        $("#add3save").click(function (){
            $("#add3inside").show();
        });
        $("#add4save").click(function (){
            $("#add4inside").show();
        });

        $("#remove3").click(function (){
            $("#add3inside").hide();
        });
        $("#remove4").click(function (){
            $("#add4inside").hide();
        });
});



</script>
    </body>

</html>