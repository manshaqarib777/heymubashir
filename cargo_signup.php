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
  require_once("data.php"); 
  //   if (!isset($_SESSION['courier_id']))
  // {
  //     die('Direct access to this location is not allowed.');
  // }

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
                   <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="'.SITEURL.'/uploads/'.$core->logo.'" alt="'.$core->site_name.'"  width="190" height="50"/>': $core->site_name;?></a>
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
                    <img src="assets/shippment/images/2-done.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit color">
                            <i class="fa fa-pencil" aria-hidden="true" style="font-size: 27px;"></i>
                        </p>
                    </div>
                    <div>
                        <p class="after-digit-title color">Login / Signup</p>
                    </div>
                </div>
            </div>
            <!-- 3 step -->
            <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                    <img src="assets/shippment/images/2.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit">2.</p>
                    </div>
                    <div>
                        <p class="after-digit-title">Date</p>
                    </div>
                </div>
            </div>
            <!-- 4 step -->
            <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                    <img src="assets/shippment/images/3.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit">3.</p>
                    </div>
                    <div>
                        <p class="after-digit-title">Address</p>
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


        <!-- Signup -->
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="summary-back p-4 mb-4">
                    <h1 class="color-green font-28">SIGNUP</h1>

                    <h1 style="font-size: 16px;">Create new shipper account:</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div id="msgholder2">
                            <?php print Filter::$showMsg;?>
                        </div>
                        <!-- First Row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group p-0">
                                    <label for="" class="cargo-label m-0 font-16" style="color: black;">Company /
                                        private
                                        customer
                                    </label>
                                    <select class="form-control border-input rounded-0"
                                        style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);" name="type">
                                        <option>---</option>
                                        <option style="font-size: 14px;">Company customer</option>
                                        <option style="font-size: 14px;">Private customer</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Second Row -->
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">Salutation </label>
                                <select class="form-control border-input rounded-0"
                                    style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);" name="gender">
                                    <option style="font-size: 14px;">Mr.</option>
                                    <option style="font-size: 14px;">Mrs.</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">User Name</label>
                                <input type="text" required name="username" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Third Row -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">First Name</label>
                                <input type="text" required name="fname" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="col-6">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">Last name</label>
                                <input type="text" name="lname" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Fourth Row -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">Address</label>
                                <input type="text" name="address" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId"
                                    style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);">
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Fifth Row -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">
                                    ZIP / Location</label>
                                <input type="search" name="postal" 
                                    class="form-control rounded-0 border-input login-border" placeholder=""
                                    aria-describedby="helpId"
                                    style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);">
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Sixth Row -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">Telephone</label>
                                <input type="number" name="phone" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="col-6">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">E-mail
                                    address</label>
                                <input type="email" name="email" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Seventh Row -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">Password</label>
                                <input type="password" name="pass" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId"
                                    style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);">
                            </div>
                            <div class="col-12">
                                <label for="" class="cargo-label m-0 font-16" style="color: black;">Password Confirmation</label>
                                <input type="password" name="pass2" 
                                    class="form-control rounded-0 border-input bg-transparent login-border"
                                    placeholder="" aria-describedby="helpId"
                                    style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);">
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Last Row -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                    <label for="" class="cargo-label m-0 font-16 ml-2" style="color: black;">Accept
                                        terms <a href="#" class="font-16 color">AGB</a></label>
                                </div>
                            </div>
                        </div>
                        <!-- End / -->

                        <!-- Button -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 col-xl-4">
                                <input name="locker" type="hidden" value="<?php echo generarCodigo(6); ?>" />
                                <input name="doRegister" type="hidden" value="1" />
                                <input type="submit" class="btn btn-cargo mt-1 w-100" name="next-3" style="background-color: #E5005B; font-size: 18px;"
                                    value="Sign up / Register"></input>
                            </div>
                        </div>
                        <!-- End / -->
                    </form>

                </div>

            </div>

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
                            <p class="" style="border-bottom: dashed .5px #01afee;">+ 0.35 CHF Fuel surcharge: 1%</p>
                            <h1 style="border-bottom: solid .5px #01afee;"><span id="cargo_without_vat_show"></span></h1>
                            <p class="text-right">without VAT</p>
                            <h3><span id="cargo_vat_show"></span></h3>
                            <div style="width: 100%; height: 1px; background-color: #01afee;"></div>
                            <div style="width: 100%; height: 1px; background-color: #01afee; margin-top: 1px;"></div>
                            <p class="text-right mt-1">with VAT</p>
                        </div>
                    </div>
                </div>
                <!-- second row of summary main row -->
                <div class="row mt-4">
                    <div class="col-xs-12 col-xl-12">
                        <div class="p-3 bussines-customer-div">
                            <b>Business customers</b> Business customers profit from our Basic-, Flex- or Licence models. 
                            With these models we cover your needs to 100%. You will find more information <a href="#">here</a>.
                        </div>
                    </div>
                </div>
            </div>


        </div>

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
            });
        </script>
    </body>

</html>