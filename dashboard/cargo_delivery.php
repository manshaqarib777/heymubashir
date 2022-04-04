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
  if (!$user->logged_in)
  redirect_to("login.php");
  
  // if (!$user->is_Admin())
  //     redirect_to("login.php");
    
    $row = $user->getUserData();
    $roww = $user->getUserData();
    
    if (isset($_SESSION['courier_id'])) {
      $sql="SELECT * FROM `add_courier` WHERE id =".$_SESSION['courier_id'];
      $data = mysqli_query($con, $sql);
      $result = mysqli_fetch_array($data,MYSQLI_ASSOC);
    }
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
    <link href="../assets/theme_deprixa/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="../assets/theme_deprixa/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->               
        <link rel="stylesheet" href="../assets/theme_deprixa/css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="../assets/theme_deprixa/css/owl.theme.css"/> 
        <link rel="stylesheet" href="../assets/theme_deprixa/css/owl.transitions.css"/>  
        <!-- Main css --> 
        <link href="../assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Custom css -->
        <link rel="stylesheet" href="../assets/shippment/css/style.css">

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
                <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center text-center prog-steps">
            <!-- 1 step -->
            <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                    <img src="../assets/shippment/images/1-done.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit color-green">1.
                            <i class="fa fa-check" aria-hidden="true" style="font-size: 27px;"></i></p>
                    </div>
                    <div>
                        <p class="after-digit-title color-green"><?php echo $lang['courier1'] ?></p>
                    </div>
                </div>
            </div>

            <!-- 3 step -->
            <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                    <img src="../assets/shippment/images/2-donee.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit color-green">2.
                            <i class="fa fa-check" aria-hidden="true" style="font-size: 27px;"></i>
                        </p>
                    </div>
                    <div>
                        <p class="after-digit-title color-green"><?php echo $lang['courier2'] ?></p>
                    </div>
                </div>
            </div>
            <!-- 4 step -->
            <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                    <img src="../assets/shippment/images/3-done.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit color-green">3.
                            <i class="fa fa-check" aria-hidden="true" style="font-size: 27px;"></i>
                        </p>
                    </div>
                    <div>
                        <p class="after-digit-title color-green"><?php echo $lang['courier3'] ?></p>
                    </div>
                </div>
            </div>
            <!-- step 4 -->
            <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                    <img src="../assets/shippment/images/4-prog.png" class="img-fluid">
                    <div>
                        <p class="pt-2 digit color">4.
                            <i class="fa fa-pencil" aria-hidden="true" style="font-size: 27px;"></i>
                        </p>
                    </div>
                    <div>
                        <p class="after-digit-title color"><?php echo $lang['courier4'] ?></p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /end steps  row -->
        <form action="../data.php" method="POST" enctype="multipart/form-data">
            
        
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <h1 class="font-28 color"><?php echo $lang['courier75'] ?></h1>

                <div class="row">
                    <!-- First Column -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        <?php echo $lang['courier76'] ?> <i class="fa fa-info-circle"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['person_contact_no']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="person_contact_no" value="yes">
                                        <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                        <input class="ml-3" type="radio" <?php if(@$result['person_contact_no']=="no")
                                {
                                    echo "checked";
                                }?> name="person_contact_no" value="no">
                                        <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                    </div>
                                </div>

                                <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        <?php echo $lang['courier79'] ?> <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="" aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['truck_lift']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="truck_lift" value="yes">
                                        <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                        <input class="ml-3" type="radio" <?php if(@$result['truck_lift']=="no")
                                {
                                    echo "checked";
                                }?> name="truck_lift" value="no">
                                        <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                    </div>
                                </div>

                                <div class="col-12 py-2">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        <?php echo $lang['courier80'] ?> <i class="fa fa-info-circle"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['floor_pickup']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="floor_pickup" value="yes">
                                        <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                        <input class="ml-3" type="radio" <?php if(@$result['floor_pickup']=="no")
                                {
                                    echo "checked";
                                }?> name="floor_pickup" value="no">
                                        <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                    </div>
                                </div>

                                <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        <?php echo $lang['courier81'] ?></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['deposite_collection']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="deposite_collection" value="yes">
                                        <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                        <input class="ml-3" type="radio" <?php if(@$result['deposite_collection']=="no")
                                {
                                    echo "checked";
                                }?> name="deposite_collection" value="no">
                                        <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                    </div>
                                </div>

                                <div class="col-12 py-2">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        <?php echo $lang['courier82'] ?> <i class="fa fa-info-circle"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['deliver_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="deliver_goods" value="yes">
                                        <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                        <input class="ml-3" type="radio" <?php if(@$result['deliver_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="deliver_goods" value="no">
                                        <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                    </div>
                                </div>

                            </div>
                    </div>

                    <!-- End / -->

                    <!-- Second Colummn -->

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class=" row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color">
                                    <?php echo $lang['courier83'] ?> <i class="fa fa-info-circle" data-toggle="tooltip"
                                            data-placement="top" title="" aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['phone_notification']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="phone_notification" value="yes">
                                    <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                    <input class="ml-3" type="radio" <?php if(@$result['phone_notification']=="no")
                                {
                                    echo "checked";
                                }?> name="phone_notification" value="no">
                                    <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                </div>
                            </div>

                            <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color">
                                    <?php echo $lang['courier84'] ?> <i class="fa fa-info-circle" data-toggle="tooltip"
                                            data-placement="top" title="" aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['transport_insurance']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="transport_insurance" value="yes">
                                    <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                    <input class="ml-3" type="radio" <?php if(@$result['transport_insurance']=="no")
                                {
                                    echo "checked";
                                }?> name="transport_insurance" value="no">
                                    <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                </div>
                            </div>

                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color">
                                    <?php echo $lang['courier85'] ?> <i class="fa fa-info-circle"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['floor_delivery']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="floor_delivery" value="yes">
                                    <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                    <input class="ml-3" type="radio" <?php if(@$result['floor_delivery']=="no")
                                {
                                    echo "checked";
                                }?> name="floor_delivery" value="no">
                                    <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                </div>
                            </div>

                            <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                    <?php echo $lang['courier86'] ?><i class="fa fa-info-circle"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['driver_deposite_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="driver_deposite_goods" value="yes">
                                    <label>&nbsp;<?php echo $lang['courier77'] ?></label>
                                    <input class="ml-3" type="radio" <?php if(@$result['driver_deposite_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="driver_deposite_goods" value="no">
                                    <label>&nbsp;<?php echo $lang['courier78'] ?></label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- End / -->

                </div>







                <!-- Back & Next Buttons -->
                <div class="row mt-5 mb-4">

                    <div class="col-6">
                        <a href="cargo_address.php"><input type="button" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                style="background-color:#f7f4f3; font-size: 18px; color: #899099; clip-path: polygon(0 34%, 14% 0, 100% 0, 100% 100%, 0% 100%);"
                                value="<?php echo $lang['courier51'] ?>"></input></a>
                    </div>

                    <div class="col-6 text-right">
                        <input type="submit" name="step-6" value="Submit" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                            style="background-color: #E5005B; font-size: 18px;" value="<?php echo $lang['courier52'] ?>"></input>
                    </div>
                </div>
                <!-- End / -->



            </div>
            <!--8 X 8 Col-->


            <!-- 3rd main col Summary -->
            <div class=" col-xs-12 col-md-12 col-lg-4 col-md-4">
                <div class="container summary-back p-4" style="font-size: 15px;">
                    <div class="row">
                        <div class="col-xs-12 col-xl-12">
                            <p class="color s-title"><?php echo $lang['courier22'] ?></p>
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
                            <img src="../assets/shippment/images/s1.png"><span style="color: 1c2c3f;"><span id="cargo_distance_show"></span> Km</span>
                        </div>
                        <div class="">
                            <i class="fa fa-clock-o" style="font-size: 23px;" aria-hidden="true"><span id="cargo_time_show"></span></i>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-xs-6 col-xl-6">
                            <img src="../assets/shippment/images/s2.png"> <span><span class="cargo_weight_show"></span> Kg</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-3">
                            <img src="../assets/shippment/images/s3.png">
                        </div>
                        <div class="">
                            <span>Cargo Items: <span class="cargo_item_show">1</span><br>
                                <span class="cargo_length_show"><?php echo $lang['courier23'] ?></span>: cm <span class="cargo_width_show"><?php echo $lang['courier24'] ?></span>: cm <span class="cargo_height_show"><?php echo $lang['courier26'] ?></span>: cm<br>
                                <span class="cargo_weight_show"><?php echo $lang['courier27'] ?></span>: kg</span>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-xs-12 col-xl-12" >
                            <p class="color s-title"><?php echo $lang['courier28'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-xl-12">
                            <p class="" style="border-bottom: dashed .5px #01afee;"><?php echo $lang['courier29'] ?></p>
                            <h1 style="border-bottom: solid .5px #01afee;"><span id="cargo_without_vat_show"></span></h1>
                            <p class="text-right"><?php echo $lang['courier30'] ?></p>
                            <h3><span id="cargo_vat_show"></span></h3>
                            <div style="width: 100%; height: 1px; background-color: #01afee;"></div>
                            <div style="width: 100%; height: 1px; background-color: #01afee; margin-top: 1px;"></div>
                            <p class="text-right mt-1"><?php echo $lang['courier31'] ?></p>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        </form>


    </div>                   














            </div>
                    <script src="../assets/theme_deprixa/js/jquery.min.js"></script>
        <script src="../assets/theme_deprixa/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/theme_deprixa/js/jquery.easing.min.js"></script>
        <script src="../assets/theme_deprixa/js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="../assets/theme_deprixa/js/owl.carousel.min.js"></script>
        <script src="../assets/theme_deprixa/js/owl.init.js"></script>
        <!-- Main Js -->
        <script src="../assets/theme_deprixa/js/app.js"></script>
        <?php echo Core::doForm("processCourier");?>
        <script>
            $(document).ready(function () {
                var settings = {
                    "url": "../data.php",
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
            
            
            
            
            <?php include 'templates/footer_add_courier.php'; ?>
            