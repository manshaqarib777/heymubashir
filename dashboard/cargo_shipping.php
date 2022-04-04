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

if (isset($_GET['courier_id'])) {
  $sql="SELECT * FROM `add_courier` WHERE id =".$_GET['courier_id'];
  $data = mysqli_query($con, $sql);
  $result = mysqli_fetch_array($data,MYSQLI_ASSOC);
}

if (isset($_SESSION['courier_id']) && !isset($_GET['do'])) {
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
            <div class="row mt-5 justify-content-center text-center prog-steps">
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
                <!-- 1 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                 <div>
                    <img src="../assets/shippment/images/1.png"  class="img-fluid">
                    <div>
                        <p class="pt-2 digit" style="color: #01afee;" >1.
                            <i class="fa fa-pencil" aria-hidden="true" style="font-size: 27px;"></i></p>
                        </div>
                        <div>
                            <p class="after-digit-title" style="color: #01afee;" ><?php echo $lang['courier1'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- 2 step -->
                <div class="col-md-2 col-lg-2 col-sm-2 p-0 ">
                    <div>
                       <img src="../assets/shippment/images/2.png" class="img-fluid">
                       <div>
                           <p class="pt-2 digit">2.</p>
                       </div>
                       <div>
                           <p class="after-digit-title"><?php echo $lang['courier2'] ?></p>
                       </div>
                   </div>
               </div>
               <!-- 3 step -->
               <div class="col-md-2 col-lg-2 col-sm-2 p-0">
                <div>
                   <img src="../assets/shippment/images/3.png"  class="img-fluid">
                   <div>
                       <p class="pt-2 digit">3.</p>
                   </div>
                   <div>
                       <p class="after-digit-title"><?php echo $lang['courier3'] ?></p>
                   </div>
               </div>
           </div>
           <!-- 4 step -->
           <div class="col-md-2 col-lg-2 col-sm-2 p-0">
            <div>
                <img src="../assets/shippment/images/4.png"  class="img-fluid">
                <div>
                    <p class="pt-2 digit">4.</p>
                </div>
                <div>
                    <p class="after-digit-title"><?php echo $lang['courier4'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>


    </div>
    <!-- /end steps  row -->

    <!-- 2nd main form row  -->
    <div class="row mt-5">
        <!-- 1st main col for form -->
        <div class=" col-xs-12 col-md-12 col-lg-8 col-xl-8 step1" id="step1">
            <div class="row mt-3">
                <div class="col-xs-12 col-xl-12">
                    <p class="info-about-cargo-title"><?php echo $lang['courier5'] ?></p>
                </div>
            </div>
            <!-- zip location form -->
            <form action="../data.php?courier_id=<?php echo $_GET['courier_id'];?>&user_id=<?php echo $_GET['id'];?>&cus_name=<?php echo $_GET['cus_name'];?>" method="POST" enctype="multipart/form-data">
              <?php
                if(isset($result['id']))
                {
              ?>
                  <input type="hidden" name="id" value="<?php echo $result['id'];?>">              
              <?php
                }
              ?>
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                          <label for="" class="input-label m-0"><?php echo $lang['courier6'] ?></label>

                          <input type="search" name="pickLocation" id="pickLocation" class="form-control rounded-0 zip-input border-gray typeahead" 
                          placeholder="ZIP/Location" aria-describedby="helpId" required value="<?php echo @$result['pickLocation'];?>">  
                          <!-- <small id="helpId" class="text-muted">Help text</small> -->
                      </div>
                  </div>
                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group p-0">
                        <label for="" class="input-label m-0"><?php echo $lang['courier7'] ?></label>
                        <input type="search" name="deliveryLocation" id="deliveryLocation"  class="form-control rounded-0 zip-input border-gray typeahead" 
                        placeholder="ZIP/Location" aria-describedby="helpId" value="<?php echo @$result['deliveryLocation'];?>">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="form-group p-0">
                    <label for="" class="input-label m-0"><?php echo $lang['courier8'] ?></label>
                    <div class="input-group mb-3">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="add_tracking"><?php echo @$result['letter_or'];?></span>
                     </div>
                     <input type="hidden" name="tracking" class="add_tracking"  value="<?php echo @$result['letter_or'];?>" >
                     <input type="hidden" name="order_inv" class="order_inv" value="<?php echo @$result['tracking'];?>">
                     <input type="text" class="form-control" placeholder="Trancking Number" id="order_inv" disabled="" value="<?php echo @$result['tracking'];?>">
                 </div>
             </div>
         </div>

     </div>
     <!--------Cargo items portion------>
     <div id="cargoAdd">
        <?php
        if(isset($result['combine_data']))
        {
          foreach (json_decode($result['combine_data'],true) as $key => $value) {
            ?>
            <div class="row mt-5">
                <div class="col-12 cargo-item-head"><?php echo $lang['courier9'] ?> <?php echo $key+1;?></div>
            </div>
            <!-- 1st cargo row -->
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <label class="m-0 cargo-label"><?php echo $lang['courier10'] ?></label>
                    <select class="form-control border-input rounded-0" name="what[]">
                        <option>---</option>
                        <option style="font-size: 14px;" <?php if($value['what']=="Other")
                        {
                           echo "selected";
                       }?>>Other</option>
                       <option  style="font-size: 14px;" <?php if($value['what']=="Disposable pallet")
                       {
                           echo "selected";
                       }?>>Disposable pallet</option>
                       <option  style="font-size: 14px;" <?php if($value['what']=="Euro pallet")
                       {
                           echo "selected";
                       }?>>Euro pallet</option>
                   </select>
               </div>
        </div>

        <!-- 2nd cargo row -->
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group p-0">
                    <label for="" class="cargo-label m-0"><?php echo $lang['courier11'] ?></label>
                    <input type="number" name="cargo_item[]" value="1" 
                    class="form-control rounded-0 border-input cargo_item" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_item'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                <label class="m-0 cargo-label"><?php echo $lang['courier12'] ?></label>
                <div class="form-group p-0">
                    <input type="number" name="cargo_length[]"  
                    class="form-control rounded-0 border-input cargo_length" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_length'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                <div class="form-group p-0">
                    <label for="" class="cargo-label m-0"><?php echo $lang['courier13'] ?></label>
                    <input type="number" name="cargo_width[]"  
                    class="form-control rounded-0 border-input cargo_width" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_weight'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                <div class="form-group p-0">
                    <label for="" class="cargo-label m-0"><?php echo $lang['courier14'] ?></label>
                    <input type="number" name="cargo_height[]"  
                    class="form-control rounded-0 border-input cargo_height" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_height'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
        </div>

        <!-- 3rd cargo row -->
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group p-0">
                    <label for="" class="cargo-label m-0"><?php echo $lang['courier15'] ?></label>
                    <input type="number" name="cargo_weight[]"  
                    class="form-control rounded-0 border-input cargo_weight" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_weight'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group p-0">
                    <label for="" class="cargo-label m-0"><?php echo $lang['courier16'] ?></label>
                    <input type="number" name="cargo_value[]"  
                    class="form-control rounded-0 border-input" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_value'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
        </div>

        <!-- 4th cargo row -->
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-xl-12">
                <div class="form-group p-0">
                    <label for="" class="cargo-label m-0"><?php echo $lang['courier17'] ?></label>
                    <input type="search" name="cargo_title[]"  
                    class="form-control rounded-0 border-input" 
                    placeholder="" aria-describedby="helpId" value="<?php echo @$value['cargo_title'];?>">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
            </div>
        </div>

        <!-- 5th cargo row -->
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-xl-12">
                <div class="form-group">
                    <label  class="cargo-label"><?php echo $lang['courier18'] ?></label>
                    <textarea class="form-control rounded-0 border-input" name="cargo_description[]" rows="3"><?php echo @$value['cargo_description'];?></textarea>
                </div>
            </div>
        </div>

        <!-- cargo 6th row -->
        <div class="row pt-2" style="border-bottom: solid 1px #01afee;">
            <div class="col-sm-12 col-xs-12 col-xl-6">
                <div class="form-group">
                    <label for="" class="cargo-label"><?php echo $lang['courier19'] ?></label><br>
                    <input type="radio" checked="" name="cargo_goodsstacke[]" value="yes" <?php if($value['cargo_goodsstacke']=="yes")
                    {
                       echo "checked";
                   }?>>
                   <label>&nbsp;Yes</label>
                   <input class="ml-3" type="radio" checked="" name="cargo_goodsstacke[]" value="no" <?php if($value['cargo_goodsstacke']=="no")
                   {
                       echo "checked";
                   }?>>
                   <label>&nbsp;No</label>    
               </div>
           </div>

           <div class="col-sm-12 col-xs-12 col-xl-6">
            <div class="form-group">
                <label for="" class="cargo-label"><?php echo $lang['courier20'] ?></label><br>
                <div class="form-group">
                    <input type="radio" checked="" name="cargo_goodpackage[0]" value="yes">
                    <label>&nbsp;Yes</label>
                    <input class="ml-3" type="radio" checked="" name="cargo_goodpackage[0]" value="no">
                    <label>&nbsp;No</label>    
                </div>
            </div>
        </div>
    </div>
    <?php
}
}
else
{
    ?>
    <div class="row mt-5">
        <div class="col-12 cargo-item-head"><?php echo $lang['courier9'] ?> 1</div>
    </div>
    <!-- 1st cargo row -->
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <label class="m-0 cargo-label"><?php echo $lang['courier10'] ?></label>
            <select class="form-control border-input rounded-0" name="what[]">
                <option>---</option>
                <option style="font-size: 14px;">Other</option>
                <option  style="font-size: 14px;">Disposable pallet</option>
                <option  style="font-size: 14px;">Euro pallet</option>
            </select>
        </div>
    </div>

    <!-- 2nd cargo row -->
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group p-0">
                <label for="" class="cargo-label m-0"><?php echo $lang['courier11'] ?></label>
                <input type="number" name="cargo_item[]" value="1" 
                class="form-control rounded-0 border-input cargo_item" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <label class="m-0 cargo-label"><?php echo $lang['courier12'] ?></label>
            <div class="form-group p-0">
                <input type="number" name="cargo_length[]"  
                class="form-control rounded-0 border-input cargo_length" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group p-0">
                <label for="" class="cargo-label m-0"><?php echo $lang['courier13'] ?></label>
                <input type="number" name="cargo_width[]"  
                class="form-control rounded-0 border-input cargo_width" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group p-0">
                <label for="" class="cargo-label m-0"><?php echo $lang['courier14'] ?></label>
                <input type="number" name="cargo_height[]"  
                class="form-control rounded-0 border-input cargo_height" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
    </div>

    <!-- 3rd cargo row -->
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group p-0">
                <label for="" class="cargo-label m-0"><?php echo $lang['courier15'] ?></label>
                <input type="number" name="cargo_weight[]"  
                class="form-control rounded-0 border-input cargo_weight" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group p-0">
                <label for="" class="cargo-label m-0"><?php echo $lang['courier16'] ?></label>
                <input type="number" name="cargo_value[]"  
                class="form-control rounded-0 border-input" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
    </div>

    <!-- 4th cargo row -->
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-xl-12">
            <div class="form-group p-0">
                <label for="" class="cargo-label m-0"><?php echo $lang['courier17'] ?></label>
                <input type="search" name="cargo_title[]"  
                class="form-control rounded-0 border-input" 
                placeholder="" aria-describedby="helpId">
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
        </div>
    </div>

    <!-- 5th cargo row -->
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-xl-12">
            <div class="form-group">
                <label  class="cargo-label"><?php echo $lang['courier18'] ?></label>
                <textarea class="form-control rounded-0 border-input" name="cargo_description[]" rows="3"></textarea>
            </div>
        </div>
    </div>

    <!-- cargo 6th row -->
    <div class="row pt-2" style="border-bottom: solid 1px #01afee;">
        <div class="col-sm-12 col-xs-12 col-xl-6">
            <div class="form-group">
                <label for="" class="cargo-label"><?php echo $lang['courier19'] ?></label><br>
                <input type="radio" checked="" name="cargo_goodsstacke[0]" value="yes">
                <label>&nbsp;Yes</label>
                <input class="ml-3" type="radio" checked="" name="cargo_goodsstacke[0]" value="no">
                <label>&nbsp;No</label>    
            </div>
        </div>

        <div class="col-sm-12 col-xs-12 col-xl-6">
            <div class="form-group">
                <label for="" class="cargo-label"><?php echo $lang['courier20'] ?></label><br>
                <div class="form-group">
                    <input type="radio" checked="" name="cargo_goodpackage[0]" value="yes">
                    <label>&nbsp;Yes</label>
                    <input class="ml-3" type="radio" checked="" name="cargo_goodpackage[0]" value="no">
                    <label>&nbsp;No</label>    
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>



</div> <!--id cargo add /end here-->

<!-- 7th row cargo buttons -->
<div class="row mt-3 mb-4">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
        <button type="button" class="btn btn-cargo w-100" id="AddCargoButton"><?php echo $lang['courier21'] ?></button>
    </div>
    <!-- <div class="col-xs-12 col-sm-12 col-xl-6 bg-warning"> -->

        <div class="col-xs-12 col-md-7 col-lg-7 col-xl-8 text-right">
            <input type="submit" value="Next" class="btn btn-cargo btn-next" name='next-1' style="background-color: #E5005B;"></input>
        </div>
    </div>

</div> <!-- cargo item end-->




<!-- 2nd main summary column  -->
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
                <span id="pickLocation_show"><?php echo $result['pickLocation'];?></span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xs-12 col-xl-12">
                <i class="fa fa-map-marker color icon-location" aria-hidden="true"></i>
                <span id="deliveryLocation_show"><?php echo $result['deliveryLocation'];?></span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-8">
                <img src="../assets/shippment/images/s1.png"><span style="color: 1c2c3f;"><span id="cargo_distance_show"><?php echo $result['cargo_distance'];?></span> Km</span>
            </div>
            <div class="">
                <i class="fa fa-clock-o" style="font-size: 23px;" aria-hidden="true"><span id="cargo_time_show"><?php echo $result['cargo_time'];?></span></i>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xs-6 col-xl-6">
                <img src="../assets/shippment/images/s2.png"> <span><span class="cargo_weight_show"><?php echo $result['cargo_weight'];?></span> Kg</span>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-3">
                <img src="../assets/shippment/images/s3.png">
            </div>
            <div class="">
                <span><?php echo $lang['courier23'] ?><span class="cargo_item_show">1</span><br>
                <span class="cargo_length_show"><?php echo $lang['courier24'] ?></span>: cm <span class="cargo_width_show"><?php echo $lang['courier25'] ?></span>: cm <span class="cargo_height_show"><?php echo $lang['courier26'] ?></span>: cm<br>
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
                <input type="hidden" name="cargo_vat" id="cargo_vat" value="<?php echo $result['cargo_vat'];?>">
                <input type="hidden" name="cargo_without_vat" id="cargo_without_vat" value="<?php echo $result['cargo_without_vat'];?>">
                <input type="hidden" name="cargo_distance" id="cargo_distance" value="<?php echo $result['cargo_distance'];?>" >
                <input type="hidden" name="cargo_time" id="cargo_time" value="<?php echo $result['cargo_time'];?>">
                <p class="" style="border-bottom: dashed .5px #01afee;"><?php echo $lang['courier29'] ?></p>
                <h1 style="border-bottom: solid .5px #01afee;"><span id="cargo_without_vat_show"><?php echo $result['cargo_without_vat'];?></span></h1>
                <p class="text-right"><?php echo $lang['courier30'] ?></p>
                <h3><span id="cargo_vat_show"><?php echo $result['cargo_vat'];?></span></h3>
                <div style="width: 100%; height: 1px; background-color: #01afee;"></div>
                <div style="width: 100%; height: 1px; background-color: #01afee; margin-top: 1px;"></div>
                <p class="text-right mt-1"><?php echo $lang['courier31'] ?></p>
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
<!-- /1st main row end -->
        <!-- <div class="row mt-3 mb-5">
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <input type="submit" value="Next" class="btn btn-cargo btn-cargo-visible btn-next m-auto" name='next-1' style="background-color: #E5005B;"></input>
            </div>
        </div> -->
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
<script src="../assets/theme_deprixa/js/date.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<?php echo Core::doForm("processCourier");?>


<script>
    $(document).ready(function(){
            <?php
               if(isset($result['combine_data']) && json_decode($result['combine_data'],true)){
            ?>
                var counter = <?php echo count(json_decode($result['combine_data'],true));?>;
                var counter =counter+1;
            <?php
            }
            else 
            {
            ?>
            var counter=2;
            <?php
            }
            ?>
            console.log(counter);
        $("#AddCargoButton").click(function(event){
            event.preventDefault();
            var divv = $("#cargoAdd");
            var cargoadd = "";


            cargoadd += '<div id="cargoAdd"><div class="row mt-5"><div class="col-12 cargo-item-head"><?php echo $lang['courier9'] ?> '+counter+'</div></div>';  
            cargoadd += '<div class="text-right"><button type="button" class="btn btn-cargo pl-2 mw-25 white-button" id="removeCargo" style="font-size: 16px;">Remove cargo item</button></div>';
    // what col
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += '<label class="m-0 cargo-label"><?php echo $lang['courier10'] ?></label>';
    cargoadd += '<select class="form-control border-input rounded-0" name = "what[]">';
    cargoadd += ' <option>---</option>';
    cargoadd += '<option style="font-size: 14px;">Other</option>';
    cargoadd += '<option  style="font-size: 14px;">Disposable pallet</option>';
    cargoadd += '<option  style="font-size: 14px;">Euro pallet</option></select>';
    
    cargoadd += '</div></div>';
    

    // Lenght (in cm) col
    cargoadd += '<div class="row">';

      // Caount cargo item col
      cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
      cargoadd += '<div class="form-group p-0">';
      cargoadd += '<label for="" class="cargo-label m-0"><?php echo $lang['courier11'] ?></label>';
      cargoadd += '<input type="number" name="cargo_item[]" value="1"  class="form-control rounded-0 border-input cargo_item" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';


    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += ' <label class="m-0 cargo-label"><?php echo $lang['courier12'] ?></label>';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<input type="number" name="cargo_length[]"  class="form-control rounded-0 border-input cargo_length" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';

    // width in cm col
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0"><?php echo $lang['courier13'] ?></label>';
    cargoadd += ' <input type="number" name="cargo_width[]"  class="form-control rounded-0 border-input cargo_width" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';

    // Height in cm col
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0"><?php echo $lang['courier14'] ?></label>';
    cargoadd += ' <input type="number" name="cargo_height[]"  class="form-control rounded-0 border-input cargo_height" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';

    // Total weight col
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += ' <div class="form-group p-0">';
    cargoadd += ' <label for="" class="cargo-label m-0"><?php echo $lang['courier15'] ?></label>';
    cargoadd += '<input type="number" name="cargo_weight[]"  class="form-control rounded-0 border-input cargo_weight" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';

    // Total value col

    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += ' <div class="form-group p-0">';
    cargoadd += ' <label for="" class="cargo-label m-0"><?php echo $lang['courier16'] ?></label>';
    cargoadd += '<input type="number" name="cargo_value[]"  class="form-control rounded-0 border-input" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';
    
    // Freight title
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-12">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0"><?php echo $lang['courier17'] ?></label>';
    cargoadd += '<input type="search" name="cargo_title[]"  class="form-control rounded-0 border-input" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';
    
    // textarean descreption
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-12">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label  class="cargo-label"><?php echo $lang['courier18'] ?></label>';
    cargoadd += '<textarea class="form-control rounded-0 border-input" name="cargo_description[]" rows="3"></textarea>';
    cargoadd += '</div></div></div>';

    // good stackable radio
    cargoadd += '<row class="row pt-2" style="border-bottom: solid 1px #01afee;">';
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-6">';
    cargoadd += '<div class="form-group">';
    cargoadd += '<label for="" class="cargo-label"><?php echo $lang['courier19'] ?></label><br>';
    cargoadd += '<input type="radio" checked="" name="cargo_goodsstacke['+(counter-1)+']" value="yes">';
    cargoadd += '<label>&nbsp;Yes</label>';
    cargoadd += '<input class="ml-3" type="radio" checked="" name="cargo_goodsstacke['+(counter-1)+']" value="no">';
    cargoadd += '<label>&nbsp;No</label> ';
    cargoadd += '</div></div>';

    // 
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-6">';
    cargoadd += '<div class="form-group">';
    cargoadd += '<label for="" class="cargo-label"><?php echo $lang['courier20'] ?></label><br>';
    cargoadd += '<input type="radio" checked="" name="cargo_goodpackage['+(counter-1)+']" value="yes">';
    cargoadd += '<label>&nbsp;Yes</label>';
    cargoadd += '<input class="ml-3" type="radio" checked="" name="cargo_goodpackage['+(counter-1)+']" value="no">';
    cargoadd += '<label>&nbsp;No</label> ';
    cargoadd += '</div></div></div>';

        // continue after what cargo box coulmn
        divv.append(cargoadd);
        $("#cargoAdd").append(divv);  
        counter++;
    });

$("#cargoAdd").on("click", "#removeCargo", function (event) {
  $(this).closest("#cargoAdd").remove();
  counter -= 1
});

});

</script>
<!-- javascript -->

<script type="text/javascript">
    var countries = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.whitespace,
      queryTokenizer: Bloodhound.tokenizers.whitespace,
          // url points to a json file that contains an array of country names, see
          // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
          prefetch: '../location.json'
      });
    $('.typeahead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: countries,

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
            suggestion: function (data) {
                return '<div class="list-group-item" style="cursor: pointer;">'+data+'</div>'
            }
        }
    });

    $(document).ready(function () {
        <?php 
        if(!isset($_GET['courier_id']) && empty($_SESSION['courier_id']))
        {
            ?>
            var settings1 = {
              "url": "../data.php",
              "method": "POST",
              "data":{
                "setting-data": "setting-data"
            }
        }
        $.ajax(settings1).done(function (response) {
           $("#add_tracking").html(response.setting.prefix);
           $(".add_tracking").val(response.setting.prefix);
           $("#order_inv").val(response.order_inv);
           $(".order_inv").val(response.order_inv);
       });

        <?php 
    }
    if(empty($_SESSION['courier_id']))
    {
        ?>

        var settings = {
          "url": "https://dev.virtualearth.net/REST/v1/Routes?waypoint.1="+$("#pickLocation").val()+",%20switzerland&waypoint.2="+$("#deliveryLocation").val()+",%20switzerland&distanceUnit=km&o=json&c=en-GB&key=AsWn4MoGmLXLvJqF1C5zDF-l5yUVinLRxz2d2Ef7L-IfgKIF_LG281dfeIKGvSoV",
          "method": "GET"
      }
      $.ajax(settings).done(function (response) {
          $("#pickLocation_show").html($("#pickLocation").val());
          $("#deliveryLocation_show").html($("#deliveryLocation").val());

          const dist = response.resourceSets[0].resources[0].travelDistance > 0 ? response.resourceSets[0].resources[0].travelDistance : 0;
          const time = response.resourceSets[0].resources[0].travelDuration > 0 ? response.resourceSets[0].resources[0].travelDuration : 0;

          var hours = (time / (60*60));
          var rhours = Math.floor(hours);
          var minutes = (hours - rhours) * 60;
          var rminutes = Math.round(minutes);
                        //alert(time + " minutes = " + rhours + " hour(s) and " + rminutes + " minute(s).");
                        // var s = Math.floor(d % 3600 % 60);

                        var hDisplay = rhours > 0 ? rhours + "h " : "";
                        var mDisplay = rminutes > 0 ? rminutes + "min" : "";
                        // var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
                        
                        $("#cargo_distance_show").html(' '+dist);
                        $("#cargo_time_show").html(' '+hDisplay + mDisplay);



                        var total_item=0;
                        $('input[name^="cargo_item"]').each(function() {
                         total_item= total_item + parseInt($(this).val());
                     });
                        console.log(total_item);
                        var cost = dist * 0.70;
                        cost += total_item * 35;
                        fuelSurcharge = (1 * cost) / 100;
                        costWithoutVAT = (cost + fuelSurcharge).toFixed(2);
                        const vat = (cost * 7.7) / 100;
                        costWithVAT = (cost + vat).toFixed(2);
                        $("#cargo_vat_show").html(costWithVAT);
                        $("#cargo_without_vat_show").html(costWithoutVAT);
                        $("#cargo_vat").val(costWithVAT);
                        $("#cargo_without_vat").val(costWithoutVAT);
                        $("#cargo_distance").val(dist);
                        $("#cargo_time").val(time);


                    });
      <?php
  }
  ?>

  $('body').on('change', '#pickLocation,#deliveryLocation,.cargo_item', function() {
    if($("#pickLocation").val()!="" && $("#deliveryLocation").val()!="")
    {
        var settings = {
          "url": "https://dev.virtualearth.net/REST/v1/Routes?waypoint.1="+$("#pickLocation").val()+",%20switzerland&waypoint.2="+$("#deliveryLocation").val()+",%20switzerland&distanceUnit=km&o=json&c=en-GB&key=AsWn4MoGmLXLvJqF1C5zDF-l5yUVinLRxz2d2Ef7L-IfgKIF_LG281dfeIKGvSoV",
          "method": "GET"
      }

      $.ajax(settings).done(function (response) {
          $("#pickLocation_show").html($("#pickLocation").val());
          $("#deliveryLocation_show").html($("#deliveryLocation").val());

          const dist = response.resourceSets[0].resources[0].travelDistance > 0 ? response.resourceSets[0].resources[0].travelDistance : 0;
          const time = response.resourceSets[0].resources[0].travelDuration > 0 ? response.resourceSets[0].resources[0].travelDuration : 0;

          var hours = (time / (60*60));
          var rhours = Math.floor(hours);
          var minutes = (hours - rhours) * 60;
          var rminutes = Math.round(minutes);
                //alert(time + " minutes = " + rhours + " hour(s) and " + rminutes + " minute(s).");
                // var s = Math.floor(d % 3600 % 60);

                var hDisplay = rhours > 0 ? rhours + "h " : "";
                var mDisplay = rminutes > 0 ? rminutes + "min" : "";
                // var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
                
                $("#cargo_distance_show").html(' '+dist);
                $("#cargo_time_show").html(' '+hDisplay + mDisplay);



                var total_item=0;
                $('input[name^="cargo_item"]').each(function() {
                  total_item= total_item + parseInt($(this).val());
              });
                
                var cost = dist * 0.70;
                cost += total_item * 35;
                fuelSurcharge = (1 * cost) / 100;
                costWithoutVAT = (cost + fuelSurcharge).toFixed(2);
                const vat = (cost * 7.7) / 100;
                costWithVAT = (cost + vat).toFixed(2);
                $("#cargo_vat_show").html(costWithVAT);
                $("#cargo_without_vat_show").html(costWithoutVAT);
                $("#cargo_vat").val(costWithVAT);
                $("#cargo_without_vat").val(costWithoutVAT);
                $("#cargo_distance").val(dist);
                $("#cargo_time").val(hDisplay + mDisplay);


            });
  }
});

  $('body').on('change', '.cargo_length', function() {
    var total_length=0;
    $('input[name^="cargo_length"]').each(function() {
     total_length= total_length + parseInt($(this).val());
 });
    $(".cargo_length_show").html(total_length);
});
  $('body').on('change', '.cargo_width', function() {
    var total_width=0;
    $('input[name^="cargo_width"]').each(function() {
     total_width= total_width + parseInt($(this).val());
 });
    $(".cargo_width_show").html(total_width);
});
  $('body').on('change', '.cargo_height', function() {
    var total_height=0;
    $('input[name^="cargo_height"]').each(function() {
     total_height= total_height + parseInt($(this).val());
 });
    $(".cargo_height_show").html(total_height);
});
  $('body').on('change', '.cargo_weight', function() {
    var total_weight=0;
    $('input[name^="cargo_weight"]').each(function() {
     total_weight= total_weight + parseInt($(this).val());
 });
    $(".cargo_weight_show").html(total_weight);
});
  $('body').on('change', '.cargo_item', function() {
    var total_item=0;
    $('input[name^="cargo_item"]').each(function() {
     total_item= total_item + parseInt($(this).val());
 });
    $(".cargo_item_show").html(total_item);
});
  <?php 
  if(isset($_GET['courier_id']))
  {
    ?>
    var ajax = {
      "url": "../data.php",
      "method": "POST",
      "data":{
        "id":"<?php echo $_GET['courier_id']; ?>",
        "ajax-data": "ajax-data"
    }
}
$.ajax(ajax).done(function (response) {
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
<?php 
}
?>

<?php 
if(isset($_SESSION['courier_id']) && !isset($_GET['do']))
{
    ?>
    var ajax = {
      "url": "../data.php",
      "method": "POST",
      "data":{
        "id":"<?php echo $_SESSION['courier_id']; ?>",
        "ajax-data": "ajax-data"
    }
}
$.ajax(ajax).done(function (response) {
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
<?php 
}
?>    
});
</script>
<?php include 'templates/footer_add_courier.php'; ?>
