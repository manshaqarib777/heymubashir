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
    if($result)
    {
        $additional_data=json_decode($result['additional_data'],true);
        $r_additional_data=json_decode($result['r_additional_data'],true);

    }
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
                <!-- 2 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0 ">
                    <div>
                        <img src="../assets/shippment/images/2-donee.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit color-green">2.
                                <i class="fa fa-check color-green" aria-hidden="true" style="font-size: 27px;"></i>
                            </p>
                        </div>
                        <div>
                            <p class="after-digit-title color-green"><?php echo $lang['courier2'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- 3 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                    <div>
                        <img src="../assets/shippment/images/3-prog.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit color">3.
                                <i class="fa fa-pencil color" aria-hidden="true" style="font-size: 27px;"></i>
                            </p>

                        </div>
                        <div>
                            <p class="after-digit-title color"><?php echo $lang['courier3'] ?></p>
                        </div>
                    </div>
                </div>

                <!-- step 4 -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                    <div>
                        <img src="../assets/shippment/images/4.png" class="img-fluid">
                        <div>
                            <p class="pt-2 digit">4.</p>
                        </div>
                        <div>
                            <p class="after-digit-title"><?php echo $lang['courier4'] ?></p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /end steps  row -->
<form action="../data.php" method="POST">
            <div class="row mt-5">
                <!-- ADDRESSES Box 1 -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    
                        <h1 class="color-green font-28"><?php echo $lang['courier53'] ?></h1>

                        <!-- First Row -->
                        <!-- First Column -->
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="color font-21"><?php echo $lang['courier54'] ?></h1>
                                    </div>
                                    <div class="col-6">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-cargo rounded-0 font-14" data-toggle="modal"
                                            data-target="#address-book-pickup"
                                            style="background-color: #e5005b; clip-path: polygon(0% 0%, 90% 0, 100% 35%, 100% 100%, 0 100%);">
                                            <i class="fa fa-address-book font-16" aria-hidden="true"></i>
                                            <?php echo $lang['courier55'] ?> </button>
                                    </div>
                                </div>

                                <!-- Second Row -->
                                <div class="row mt-3 ">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier56'] ?></label>
                                        <input type="text" name="company" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['company'];?>" id="company">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Third Row -->
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier57'] ?></label>
                                        <input type="text" required name="s_name" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['s_name'];?>" id="s_name">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier58'] ?></label>
                                        <input type="text" name="lastname" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['lastname'];?>" id="lastname">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fourth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier59'] ?></label>
                                        <input type="text" name="street" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['street'];?>" id="street">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier60'] ?></label>
                                        <input type="text" required name="city" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['city'];?>" id="city">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier61'] ?></label>
                                        <input type="text" name="country" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['country'];?>" id="country">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fifth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier62'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span></label>
                                        <input type="text" name="address" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['address'];?>" id="address">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Sixth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier64'] ?></label>
                                        <input type="text" name="addresspickup" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['addresspickup'];?>" id="addresspickup">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Seventh Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier65'] ?> <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="We need your phone number, so the driver can contact you if necessary " aria-hidden="true"></i></label>
                                        <input type="number" name="phone" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['phone'];?>" id="phone">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Eight Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier66'] ?> <span class="font-optional"><?php echo $lang['courier66'] ?></span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="E-mail address for notificationslike tracking link, pickup driver information and proof of delivery" aria-hidden="true"></i></label>
                                        <input type="email" name="email" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['email'];?>" id="email">
                                        <span style="font-size: 14px; color: rgba(28, 44,63,0.5);">
                                            <?php echo $lang['courier67'] ?>                                            
                                        </span>
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 9th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier68'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span>
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter special features for the pickup address.(e.g. office on the first floor)" aria-hidden="true"></i></label>
                                        <input type="text" name="pickupdetails" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['pickupdetails'];?>" id="pickupdetails">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 10th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier69'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="The refrence number is printed onto the delivery slip and the invoice." aria-hidden="true"></i></label>
                                        <input type="text" name="refrence_no" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['refrence_no'];?>" id="refrence_no">
                                    </div>
                                </div>
                                <!-- End / -->
                            </div>

                            <!-- Second Column -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="color font-21"><?php echo $lang['courier70'] ?></h1>
                                    </div>
                                    <div class="col-6">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-cargo rounded-0 font-14" data-toggle="modal"
                                            data-target="#address-book-deliver"
                                            style="background-color: #e5005b; clip-path: polygon(0% 0%, 90% 0, 100% 35%, 100% 100%, 0 100%);">
                                            <i class="fa fa-address-book font-16" aria-hidden="true"></i>
                                            <?php echo $lang['courier71'] ?> </button>
                                    </div>
                                </div>

                                <!-- Second Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier56'] ?></label>
                                        <input type="text" name="r_company" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_company'];?>" id="r_company">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Third Row -->
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier57'] ?></label>
                                        <input type="text" required name="r_name" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_name'];?>" id="r_name">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier58'] ?></label>
                                        <input type="text" name="r_lastname" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_lastname'];?>" id="r_lastname">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fourth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier59'] ?></label>
                                        <input type="text" name="r_street" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_street'];?>" id="r_street">
                                    </div>
                                </div>

                                                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier60'] ?></label>
                                        <input type="text" required name="r_city" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_city'];?>" id="r_city">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="cargo-label m-0 font-16 color"><?php echo $lang['courier61'] ?></label>
                                        <input type="text" name="r_country" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_country'];?>" id="r_country">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Fifth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier62'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span></label>
                                        <input type="text" name="r_address" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_address'];?>" id="r_address">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Sixth Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier64'] ?></label>
                                        <input type="text" name="r_addresspickup" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_addresspickup'];?>" id="r_addresspickup">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Seventh Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier65'] ?> <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="We need your phone number of the reciever, so the driver can contact the reciever if necessary " aria-hidden="true"></i></label>
                                        <input type="number" name="r_phone" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_phone'];?>" id="r_phone">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- Eight Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier66'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="E-mail address for notifications like tracking link, pickup driver information and proof of delivery" aria-hidden="true"></i></label>
                                        <input type="email" name="r_email" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_email'];?>" id="r_email">
                                        <span style="font-size: 14px; color: rgba(28, 44,63,0.5);">
                                        <?php echo $lang['courier72'] ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 9th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier68'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span>
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter special features for the pickup address.(e.g. office on the first floor)" aria-hidden="true"></i></label>
                                        <input type="text" name="r_pickupdetails" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_pickupdetails'];?>" id="r_pickupdetails">
                                    </div>
                                </div>
                                <!-- End / -->

                                <!-- 10th Row -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="" class="cargo-label m-0 font-16 color">
                                        <?php echo $lang['courier69'] ?> <span class="font-optional"><?php echo $lang['courier63'] ?></span> <i
                                                class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="The refrence number is printed onto the delivery slip and the invoice." aria-hidden="true"></i></label>
                                        <input type="text" name="r_refrence_no" 
                                            class="form-control rounded-0 border-input bg-transparent login-border"
                                            placeholder="" aria-describedby="helpId" value="<?php echo @$result['r_refrence_no'];?>" id="r_refrence_no">
                                    </div>
                                </div>
                                <!-- End / -->


                            </div>
                            <!-- End / -->
                        </div>

                        <div class="row mt-5 mb-4">

                            <div class="col-6">
                                <a href="cargo_date.php"><input type="button" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                        style="background-color:#f7f4f3; font-size: 18px; color: #899099; clip-path: polygon(0 34%, 14% 0, 100% 0, 100% 100%, 0% 100%);"
                                        value="<?php echo $lang['courier51'] ?>"></input></a>
                            </div>

                            <div class="col-6 text-right">
                                <input type="submit" name="step-5" value="Next" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                    style="background-color: #E5005B; font-size: 18px;" value="<?php echo $lang['courier52'] ?>"></input>
                            </div>
                        </div>

                </div> <!-- 8 x 8 Col / -->




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
                                <p class="" style="border-bottom: dashed .5px #00A2AE;"><?php echo $lang['courier29'] ?></p>
                                <h1 style="border-bottom: solid .5px #00A2AE;"><span id="cargo_without_vat_show"></span></h1>
                                <p class="text-right"><?php echo $lang['courier30'] ?></p>
                                <h3><span id="cargo_vat_show"></span></h3>
                                <div style="width: 100%; height: 1px; background-color: #00A2AE;"></div>
                                <div style="width: 100%; height: 1px; background-color: #00A2AE; margin-top: 1px;"></div>
                                <p class="text-right mt-1"><?php echo $lang['courier31'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Form /-->

            </div> <!-- 4 x 4 Main Col / -->
            <!-- Modal -->

<!-- Address Book Modal -->

<div class="modal fade bd-example-modal-lg" id="address-book-pickup" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['courier73'] ?>
                </h5>
            </div>

                <div class="modal-body">
                    <!-- First Row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                            <label class="font-16 color"><?php echo $lang['courier74'] ?></label>
                            <input type="text" class="form-control rounded-0 border-input bg-transparent login-border typeahead" placeholder="" aria-describedby="helpId" name="pickup_search" id=pickup_search>
                        </div>
                        <div class="col-2">
                            <input type="button" class="btn btn-cargo py-2 px-4 mt-4" id="pickup_search_btn"
                                style="background-color: #E5005B; font-size: 18px;" value="Search"></input>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="address-book-deliver" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['courier73'] ?>
                </h5>
            </div>

                <div class="modal-body">
                    <!-- First Row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                            <label class="font-16 color"><?php echo $lang['courier74'] ?></label>
                            <input type="text" class="form-control rounded-0 border-input bg-transparent login-border typeahead" placeholder="" aria-describedby="helpId" name="deliver_search" id="deliver_search">
                        </div>
                        <div class="col-2">
                            <input type="button" class="btn btn-cargo py-2 px-4 mt-4" id="deliver_search_btn"
                                style="background-color: #E5005B; font-size: 18px;" value="Search"></input>
                        </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
        <?php echo Core::doForm("processCourier");?>
        <script>
    $(document).ready(function () {

                var search_data = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '../data.php?query=%QUERY',
  remote: {
    url: '../data.php?query=%QUERY',
    wildcard: '%QUERY'
  }
});


        $('.typeahead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: search_data,

        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'usersList',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
            '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
            ],
            header: [
            '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (response) {
                return '<div class="list-group-item" style="cursor: pointer;">'+response+'</div>'
            }
        }
    });
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
        $("#pickup_search_btn").click(function (){
            if($("#pickup_search").val()!="")
            {
                $.ajax({
                  "url": "../data.php",
                  "method": "POST",
                  "data":{
                    "query": $("#pickup_search").val(),
                    "get_searched_data": "ajax-data"
                  }
                }).done(function (response) {
                    $("#s_name").val(response.s_name);
                    $("#address").val(response.address);
                    $("#phone").val(response.phone);
                    $("#email").val(response.email);
                    $("#lastname").val(response.lastname);
                    $("#street").val(response.street);
                    $("#addresspickup").val(response.addresspickup);
                    $("#pickupdetails").val(response.pickupdetails);
                    $("#refrence_no").val(response.refrence_no);
                    $("#company").val(response.company);
                    $("#city").val(response.city);
                    $("#country").val(response.country);


                    var additional_data ="";
                    if(response.additional_data)
                    {
                        additional_data =JSON.parse(response.additional_data);
                    
                    }
                    if(additional_data!="")
                    {
                        $("#extra_company").val(additional_data.extra_company);
                        $("#extra_name").val(additional_data.extra_name);
                        $("#extra_lastname").val(additional_data.extra_lastname);
                        $("#extra_address").val(additional_data.extra_address);
                        $("#extra_zip").val(additional_data.extra_zip);
                        $("#extra_phone").val(additional_data.extra_phone);
                        $("#extra_delivery_location").val(additional_data.extra_delivery_location);
                        
                    }
                        $("#address-book-pickup").modal("hide");
                    

                });
            }
        });
        $("#deliver_search_btn").click(function (){
            if($("#deliver_search").val()!="")
            {
                $.ajax({
                  "url": "../data.php",
                  "method": "POST",
                  "data":{
                    "query": $("#deliver_search").val(),
                    "get_searched_data": "ajax-data"
                  }
                }).done(function (response) {
                    console.log(response);

                    $("#r_name").val(response.r_name);
                    $("#r_lastname").val(response.r_lastname);
                    $("#r_email").val(response.r_email);
                    $("#r_address").val(response.r_address);
                    $("#r_addresspickup").val(response.r_addresspickup);
                    $("#r_phone").val(response.r_phone);
                    $("#r_street").val(response.r_street);
                    $("#r_pickupdetails").val(response.r_pickupdetails);
                    $("#r_refrence_no").val(response.r_refrence_no);
                    $("#r_company").val(response.r_company);
                    $("#r_city").val(response.r_city);
                    $("#r_country").val(response.r_country);


                    var r_additional_data ="";
                    if(response.r_additional_data)
                    {
                        r_additional_data =JSON.parse(response.r_additional_data);
                    
                    }
                    if(r_additional_data!=null)
                    {
                        $("#r_extra_company").val(r_additional_data.r_extra_company);
                        $("#r_extra_name").val(r_additional_data.r_extra_name);
                        $("#r_extra_lastname").val(r_additional_data.r_extra_lastname);
                        $("#r_extra_address").val(r_additional_data.r_extra_address);
                        $("#r_extra_zip").val(r_additional_data.r_extra_zip);
                        $("#r_extra_phone").val(r_additional_data.r_extra_phone);
                        $("#r_extra_delivery_location").val(r_additional_data.r_extra_delivery_location);
                    }
                        $("#address-book-deliver").modal("hide");
                    

                });    
            }
            



        });

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
            
            
            
            
            <?php include 'templates/footer_add_courier.php'; ?>
            