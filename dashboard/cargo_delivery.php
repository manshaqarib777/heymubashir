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
                        <p class="after-digit-title color-green">Information about the goods</p>
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
                        <p class="after-digit-title color-green">Date</p>
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
                        <p class="after-digit-title color-green">Address</p>
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
                        <p class="after-digit-title color">Delivery options</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /end steps  row -->
        <form action="../data.php" method="POST" enctype="multipart/form-data">
            
        
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <h1 class="font-28 color">CHOICE DELIVERY OPTIONS</h1>

                <div class="row">
                    <!-- First Column -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                            Phone number contact person <i class="fa fa-info-circle"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['person_contact_no']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="person_contact_no" value="yes">
                                        <label>&nbsp;Yes</label>
                                        <input class="ml-3" type="radio" <?php if(@$result['person_contact_no']=="no")
                                {
                                    echo "checked";
                                }?> name="person_contact_no" value="no">
                                        <label>&nbsp;No</label>
                                    </div>
                                </div>

                                <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                            Truck with lift necessary <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="" aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['truck_lift']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="truck_lift" value="yes">
                                        <label>&nbsp;Yes</label>
                                        <input class="ml-3" type="radio" <?php if(@$result['truck_lift']=="no")
                                {
                                    echo "checked";
                                }?> name="truck_lift" value="no">
                                        <label>&nbsp;No</label>
                                    </div>
                                </div>

                                <div class="col-12 py-2">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                            Floor pickkup at the shipper <i class="fa fa-info-circle"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['floor_pickup']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="floor_pickup" value="yes">
                                        <label>&nbsp;Yes</label>
                                        <input class="ml-3" type="radio" <?php if(@$result['floor_pickup']=="no")
                                {
                                    echo "checked";
                                }?> name="floor_pickup" value="no">
                                        <label>&nbsp;No</label>
                                    </div>
                                </div>

                                <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                            Are the goods deposited for collection?</label>
                                        <br>
                                        <input type="radio" <?php if(@$result['deposite_collection']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="deposite_collection" value="yes">
                                        <label>&nbsp;Yes</label>
                                        <input class="ml-3" type="radio" <?php if(@$result['deposite_collection']=="no")
                                {
                                    echo "checked";
                                }?> name="deposite_collection" value="no">
                                        <label>&nbsp;No</label>
                                    </div>
                                </div>

                                <div class="col-12 py-2">
                                    <div class="form-group">
                                        <label for="" class="cargo-label m-0 py-1 font-16 color">
                                            Deliver goods neutralized? <i class="fa fa-info-circle"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                aria-hidden="true"></i></label>
                                        <br>
                                        <input type="radio" <?php if(@$result['deliver_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="deliver_goods" value="yes">
                                        <label>&nbsp;Yes</label>
                                        <input class="ml-3" type="radio" <?php if(@$result['deliver_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="deliver_goods" value="no">
                                        <label>&nbsp;No</label>
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
                                        Phone notification receiver <i class="fa fa-info-circle" data-toggle="tooltip"
                                            data-placement="top" title="" aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['phone_notification']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="phone_notification" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['phone_notification']=="no")
                                {
                                    echo "checked";
                                }?> name="phone_notification" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>

                            <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        Transport insurance <i class="fa fa-info-circle" data-toggle="tooltip"
                                            data-placement="top" title="" aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['transport_insurance']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="transport_insurance" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['transport_insurance']=="no")
                                {
                                    echo "checked";
                                }?> name="transport_insurance" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>

                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color">
                                        Floor delivery at the receiver <i class="fa fa-info-circle"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['floor_delivery']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="floor_delivery" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['floor_delivery']=="no")
                                {
                                    echo "checked";
                                }?> name="floor_delivery" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>

                            <div class="col-12 py-2" style="background-color: #f9fdfd;">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                        Can the driver deposit the goods at the receiver?<i class="fa fa-info-circle"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            aria-hidden="true"></i></label>
                                    <br>
                                    <input type="radio" <?php if(@$result['driver_deposite_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="driver_deposite_goods" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['driver_deposite_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="driver_deposite_goods" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- End / -->

                </div>

                <!-- Tree Box -->
                <!--<div class="row">-->
                <!--    <div class="col-12" style="background-color: #cde1a1;">-->
                <!--        <div class="row">-->
                <!--            <div class="col-10 mt-4">-->
                <!--                <h1 class="font-16" style="font-weight: bold;">Green-Tree-Button (We plant a tree for-->
                <!--                    you)</h1>-->
                <!--                <h1 class="font-16 mt-3">With your support of CHF 1.00 for this-->
                <!--                    shipment, make an important contribution to the preservation of our nature.<i-->
                <!--                        class="fa fa-info-circle color" data-toggle="tooltip" data-placement="top"-->
                <!--                        title="We need your phone number, so the driver can contact you if necessary " aria-hidden="true"></i></h1>-->

                <!--                <input class="mb-4" type="radio" -->
                                <?php  
                                // if(@$result['green_tree']=="yes")
                                // {
                                //     echo "checked";
                                // }
                                ?> 
                                <!--checked name="green_tree" value="yes">-->
                                <!--<label>&nbsp;Yes</label>-->
                                <!--<input class="ml-3 mb-3" type="radio" -->
                                <?php
                                // if(@$result['green_tree']=="no")
                                // {
                                //     echo "checked";
                                // }
                                ?> 
                <!--                name="green_tree" value="no">-->
                <!--                <label>&nbsp;No</label>-->
                <!--            </div>-->


                <!--            <div class="col-2">-->
                <!--                <img src="../assets/shippment/images/tree.svg" alt="" width="50" class="ml-4 mt-4">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- End / -->



                <!--<div class="row mt-4">-->
                <!--    <div class="col-12">-->
                <!--        <h1 class="font-21 color">MORE DELIVERY INFORMATION (OPTIONAL)</h1>-->
                <!--        <h1 class="font-16">Would you like further helpful delivery options such as-->
                <!--            additional support-->
                <!--            personnel for-->
                <!--            your shipment?</h1>-->
                <!--    </div>-->
                <!--</div>-->


                <!-- Additional Information -->
                <!--<div class="row">-->
                <!--    <div class="col-12 text-right">-->

                <!--        <input type="button" id="show" class="btn btn-cargo mt-1 w-65 px-4"-->
                <!--            style=" font-size: 17px; clip-path: polygon(0% 0%, 94% 0, 100% 36%, 100% 100%, 0 100%);"-->
                <!--            value="Select additional delivery options">-->

                <!--        <input type="button" id="hide" class="btn btn-cargo mt-1 w-65 px-4"-->
                <!--            style=" font-size: 17px; display: none; clip-path: polygon(0% 0%, 94% 0, 100% 36%, 100% 100%, 0 100%);"-->
                <!--            value="Hide additional delivery options"></input>-->
                <!--    </div>-->
                <!--</div>-->





                <div id="additionalDeliveryOption">
                    <!-- First Row & Column -->

                    <div class="row mt-4">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  py-2">

                            <h1 class="font-21">Support personnel <span class="font-16"
                                    style="color: #cccccc;">(Optional)</span> </h1>

                            <h1 class="font-14 text-dark">Do you wish additional support personnel?</h1>
                            <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                <input type="button" id="#add1" data-toggle="modal" data-target=".add1-modal"
                                    class="btn btn-cargo mt-3 py-1 px-3 s-100" style=" font-size: 14px;"
                                    value="Add"></input>
                            </div>

                            <div class="row" id="add1inside">
                                <div class="col-12">
                                    <div style="background-color: #e8f6f8; line-height: 5px;" class="p-0">
                                        <h1 class="pl-3 pt-4" style="font-size: 18px;">HELPER FOR LOADING</h1>
                                        <h1 class="font-16 pl-3">Does the transport company have to provide a second
                                            helper for the loading of the goods?
                                            <span> </span>
                                        </h1>

                                        <h1 class="pl-3 pt-4" style="font-size: 18px;">HELPER FOR UNLOADING</h1>
                                        <h1 class="font-16 pl-3">Does the transport company have to provide a
                                            second helper for unloading the goods?
                                            <span> </span>
                                        </h1>

                                        <div class="text-right py-2 mt-4" style="border-bottom: solid 1px #00A2AE;">
                                            <input type="button" id="#add1" data-toggle="modal"
                                                data-target=".add1-modal" class="btn btn-cargo mr-4 py-1 px-3 s-100"
                                                style=" font-size: 14px; background-color: #00A2AE;;"
                                                value="Edit"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Row & Column End / -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  py-2 mt-3">

                            <h1 class="font-21">Crane vehicle <span class="font-16"
                                    style="color: #cccccc;">(Optional)</span> </h1>

                            <h1 class="font-14 text-dark">Is a crane necessary for pickup or delivery?</h1>
                            <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                <input type="button" id="#add2" data-toggle="modal" data-target=".add2-modal"
                                    class="btn btn-cargo mt-3 py-1 px-3 s-100" style=" font-size: 14px;"
                                    value="Add"></input>
                            </div>

                            <div class="row" id="add2inside">
                                <div class="col-12">
                                    <div style="background-color: #e8f6f8; line-height: 5px;" class="p-0">
                                        <h1 class="pl-3 pt-4" style="font-size: 18px;">LOADING WITH CRANE</h1>
                                        <h1 class="font-16 pl-3">Is a crane required for loading?
                                            <span> </span>
                                        </h1>

                                        <h1 class="pl-3 pt-4" style="font-size: 18px;">UNLOAD WITH CRANE</h1>
                                        <h1 class="font-16 pl-3">Is a crane required for unloading?
                                            <span> </span>
                                        </h1>

                                        <div class="text-right py-2 mt-4" style="border-bottom: solid 1px #00A2AE;">
                                            <input type="button" id="#add2" data-toggle="modal"
                                                data-target=".add2-modal" class="btn btn-cargo mr-4 py-1 px-3 s-100"
                                                style=" font-size: 14px; background-color: #00A2AE;;"
                                                value="Edit"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Second Row & Column End /-->


                        <!-- Third Row & Column End -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  py-2 mt-3">

                            <h1 class="font-21">Upload shipment documents <span class="font-16"
                                    style="color: #cccccc;">(Optional)</span> </h1>

                            <h1 class="font-14 text-dark">Would you like to add your own documents to the shipment?</h1>
                            <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                <input type="button" id="#add3" data-toggle="modal" data-target=".add3-modal"
                                    class="btn btn-cargo mt-3 py-1 px-3 s-100" style=" font-size: 14px;"
                                    value="Add"></input>
                            </div>

                            <div class="row" id="add3inside">

                                <div class="col-12">
                                    <div style="background-color: #e8f6f8;">
                                        <table>
                                            <tr>
                                                <td width="300">
                                                    <h1 class="font-16 p-3" style="font-weight: bold;">Document type
                                                    </h1>

                                                </td>
                                                <td width="300">
                                                    <h1 class="font-16 p-3" style="font-weight: bold;">Filename
                                                    </h1>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--Third Row & Column End /-->


                        <!-- Fourth Row & Column End / -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  py-2 mt-3">

                            <h1 class="font-21">Information for dangerous goods <span class="font-16"
                                    style="color: #cccccc;">(Optional)</span> </h1>

                            <h1 class="font-14 text-dark">Do you ship dangerous goods? Please provide us with the
                                necessary information.</h1>
                            <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                <input type="button" id="#add4" data-toggle="modal" data-target=".add4-modal"
                                    class="btn btn-cargo mt-3 py-1 px-3 s-100" style=" font-size: 14px;"
                                    value="Add"></input>
                            </div>

                            <div class="row" id="add4inside">
                                <div class="col-12">
                                    <div style="background-color: #e8f6f8; line-height: 1px;" class="p-0">
                                        <h1 class="pl-3 pt-4" style="font-size: 16px; font-weight: bold;">Cargo item 1:
                                        </h1>
                                        <p class="pl-3 pt-4" style="font-size: 16px;">UN number: <span></span></p>
                                        <p class="pl-3 pt-4" style="font-size: 16px;">Packaging unit / Amount:
                                            <span></span> </p>
                                        <p class="pl-3 pt-4" style="font-size: 16px;">Dangerous goods points:
                                            <span></span> </p>
                                        <div class="text-right py-2 mt-4" style="border-bottom: solid 1px #00A2AE;">
                                            <input type="button" id="#add4" data-toggle="modal"
                                                data-target=".add4-modal" class="btn btn-cargo mr-4 py-1 px-3 s-100"
                                                style=" font-size: 14px; background-color: #00A2AE;;"
                                                value="Edit"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Fourt Row & Column End /-->

                        <!-- Fifth Row & Column End  -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  py-2 mt-3">

                            <h1 class="font-21">Information about temperature controlled goods <span class="font-16"
                                    style="color: #cccccc;">(Optional)</span> </h1>

                            <h1 class="font-14 text-dark">Under which temperature specification (e.g. for food)
                                should
                                the goods be transported?</h1>
                            <div class="text-right py-2" style="border-bottom: solid 1px #00A2AE;">
                                <input type="button" id="#add5" data-toggle="modal" data-target=".add5-modal"
                                    class="btn btn-cargo mt-3 py-1 px-3 s-100" style=" font-size: 14px;"
                                    value="Add"></input>
                            </div>

                            <div class="row" id="add5inside">
                                <div class="col-12">
                                    <div style="background-color: #e8f6f8; line-height: 5px;" class="p-0">
                                        <p class="pl-3 pt-4" style="font-size: 16px;">The goods have to be temperature
                                            controlled: <span></span></p>
                                        <p class="pl-3 pt-4" style="font-size: 16px;">Temperature: <span></span> </p>

                                        <div class="text-right py-2 mt-4" style="border-bottom: solid 1px #00A2AE;">
                                            <input type="button" id="#add5" data-toggle="modal"
                                                data-target=".add5-modal" class="btn btn-cargo mr-4 py-1 px-3 s-100"
                                                style=" font-size: 14px; background-color: #00A2AE;;"
                                                value="Edit"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Fifth Row & Column End /-->

                    </div>
                    <!-- Main End / -->

                </div>
                <!-- additionalDeliveryOption Div End / -->

                <!-- Back & Next Buttons -->
                <div class="row mt-5 mb-4">

                    <div class="col-6">
                        <a href="cargo_address.php"><input type="button" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                                style="background-color:#f7f4f3; font-size: 18px; color: #899099; clip-path: polygon(0 34%, 14% 0, 100% 0, 100% 100%, 0% 100%);"
                                value="Back"></input></a>
                    </div>

                    <div class="col-6 text-right">
                        <input type="submit" name="step-6" value="Submit" class="btn btn-cargo py-2 px-5" id="ButtonNext"
                            style="background-color: #E5005B; font-size: 18px;" value="Next"></input>
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



        </div>

        <div class="modal fade add3-modal" id="#add3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">UPLOAD SHIPMENT DOCUMENTS
                    </h5>
                </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h1 class="font-21">UPLOAD SHIPMENT DOCUMENTS</h1>
                                <div class="form-group">
                                    <label class="font-16 color">Document type</label>
                                    <select class="form-control border-input rounded-0"
                                        style="clip-path: polygon(0% 0%, 97% 0, 100% 52%, 100% 100%, 0 100%);" name="shipment_type">
                                        <option  style="font-size: 14px;">---</option>
                                        <option  style="font-size: 14px;" <?php if($result['shipment_type']=="Own delivery slip")
                                {
                                    echo "selected";
                                }?>>Own delivery slip</option>
                                        <option  style="font-size: 14px;" <?php if($result['shipment_type']=="Document for dangerous goods")
                                {
                                    echo "selected";
                                }?>>Document for dangerous goods</option>
                                        <option  style="font-size: 14px;" <?php if($result['shipment_type']=="Picture of the goods")
                                {
                                    echo "selected";
                                }?>>Picture of the goods</option>
                                        <option  style="font-size: 14px;" <?php if($result['shipment_type']=="Other document")
                                {
                                    echo "selected";
                                }?>>Other document</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Second Row -->
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label class="font-16 color">Shipment document</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shipment_file">
                                    <span class="font-optional">The following file types are possible: pdf, jpg, png,
                                        txt. (Max. file size:
                                        5MB)</span>
                                </div>
                            </div>
                        </div>
                        <!-- End / -->
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn py-2 px-4 white-button" data-dismiss="modal" id=""
                            value="Close"></input>
                        <input type="button" class="btn py-2 px-4 btn-cargo" data-dismiss="modal" id="add3save"
                            value="Save"></input>
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
                    <h5 class="modal-title" id="exampleModalLabel">INFORMATION FOR DANGEROUS GOODS
                    </h5>
                </div>

                
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h1 class="font-21">INFORMATION FOR DANGEROUS GOODS</h1>
                                <h1 class="font-16">CARGO ITEM 1: <span> </span></h1>
                                <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                    Is cargo item dangerous goods?</label>
                                <br>
                                <input type="radio" <?php if(@$result['dangerous_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="dangerous_goods" value="yes">
                                <label>&nbsp;Yes</label>
                                <input class="ml-3" type="radio" <?php if(@$result['dangerous_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="dangerous_goods" value="no">
                                <label>&nbsp;No</label>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label class="font-16 color">UN number</label>
                                    <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                        placeholder="" aria-describedby="helpId" name="un_number" value="<?php echo @$result['un_number'];?>">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label class="font-16 color">Packaging unit / Amount</label>
                                    <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                        placeholder="" aria-describedby="helpId" name="packaging_amount" value="<?php echo @$result['packaging_amount'];?>">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label class="font-16 color">Dangerous goods points</label>
                                    <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                        placeholder="" aria-describedby="helpId" name="dangerous_goods_points" value="<?php echo @$result['dangerous_goods_points'];?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn py-2 px-4 white-button" data-dismiss="modal" id=""
                            value="Close"></input>
                        <input type="button" class="btn py-2 px-4 btn-cargo" data-dismiss="modal" id="add4save"
                            value="Save"></input>
                    </div>
               

            </div>
        </div>
    </div>

    <!-- Add4 Modal End / -->


    <!-- Add5 Modal -->

    <div class="modal fade add5-modal" id="#add5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">INFORMATION ABOUT TEMPERATURE CONTROLLED GOODS
                    </h5>
                </div>

                
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h1 class="font-21">TEMPERATURE CONTROLLED GOODS</h1>
                                <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                    Is it required to transport the goods temperature controlled?</label>
                                <br>
                                <input type="radio" <?php if(@$result['temprature_controlled_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="temprature_controlled_goods" value="yes">
                                <label>&nbsp;Yes</label>
                                <input class="ml-3" type="radio" <?php if(@$result['temprature_controlled_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="temprature_controlled_goods" value="no">
                                <label>&nbsp;No</label>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label class="font-16 color">Temperature in degrees Celcius</label>
                                    <input type="text" class="form-control rounded-0 border-input bg-transparent"
                                        placeholder="" aria-describedby="helpId" name="temprature" value="<?php echo @$result['temprature'];?>">
                                    <span class="font-optional">Please note that for chilled goods below 0 degrees,
                                        enter the sign „-„.</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn py-2 px-4 white-button" data-dismiss="modal" id=""
                            value="Close"></input>
                        <input type="button" class="btn py-2 px-4 btn-cargo" data-dismiss="modal" id="add5save"
                            value="Save"></input>
                    </div>


            </div>
        </div>
    </div>



    <!-- Add1 Model -->

    <div class="modal fade add1-modal" id="#add1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">HELPER</h5>
                </div>

                    <div class="modal-body">
                        <!-- First Row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                        Does the transport company have to provide a second helper for the loading of
                                        the goods?</label>
                                    <br>
                                    <input type="radio" <?php if(@$result['transport_company']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="transport_company" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['transport_company']=="no")
                                {
                                    echo "checked";
                                }?> name="transport_company" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>
                        </div>
                        <!-- End / -->
                        <hr>
                        <!-- Second Row -->
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                        Does the transport company have to provide a second helper for unloading the
                                        goods?</label>
                                    <br>
                                    <input type="radio" <?php if(@$result['transport_company_goods']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="transport_company_goods" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['transport_company_goods']=="no")
                                {
                                    echo "checked";
                                }?> name="transport_company_goods" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>
                        </div>
                        <!-- End / -->
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn py-2 px-4 white-button" data-dismiss="modal" id=""
                            value="Close"></input>
                        <input type="button" class="btn py-2 px-4 btn-cargo" data-dismiss="modal" id="add1save"
                            value="Save"></input>
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
                    <h5 class="modal-title">CRANE VEHICLE</h5>
                </div>

                    <div class="modal-body">
                        <!-- First Row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                        Is a crane required for picking up?</label>
                                    <br>
                                    <input type="radio" <?php if(@$result['crane_required_picking']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="crane_required_picking" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['crane_required_picking']=="yes")
                                {
                                    echo "checked";
                                }?> name="crane_required_picking" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>
                        </div>
                        <!-- End / -->
                        <hr>
                        <!-- Second Row -->
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="" class="cargo-label m-0 py-1 font-16 color" style="font-size: 15px;">
                                        Is a crane required for unloading?</label>
                                    <br>
                                    <input type="radio" <?php if(@$result['crane_required_uploading']=="yes")
                                {
                                    echo "checked";
                                }?> checked name="crane_required_uploading" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" <?php if(@$result['crane_required_uploading']=="yes")
                                {
                                    echo "checked";
                                }?> name="crane_required_uploading" value="no">
                                    <label>&nbsp;No</label>
                                </div>
                            </div>
                        </div>
                        <!-- End / -->
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn py-2 px-4 white-button" data-dismiss="modal" id=""
                            value="Close"></input>
                        <input type="button" class="btn py-2 px-4 btn-cargo" data-dismiss="modal" id="add2save"
                            value="Save"></input>
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
                $("#additionalDeliveryOption").hide();
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
            
            $("#show").click(function () {
                $(this).hide();
                $("#hide").show();
                $("#additionalDeliveryOption").show();

            });
            $("#hide").click(function () {
                $(this).hide();
                $("#show").show();
                $("#additionalDeliveryOption").hide();

            });
        });



</script>    
            
            
            
            
            <?php include 'templates/footer_add_courier.php'; ?>
            