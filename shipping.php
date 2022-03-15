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
                <img src="assets/shippment/images/1.png"  class="img-fluid">
                <div>
                    <p class="pt-2 digit" style="color: #00A2AE;" >1.
                        <i class="fa fa-pencil" aria-hidden="true" style="font-size: 27px;"></i></p>
                </div>
                <div>
                    <p class="after-digit-title" style="color: #00A2AE;" >Information about the goods</p>
                </div>
                </div>
           </div>
           <!-- 2 step -->
           <div class="col-md-2 col-lg-2 col-sm-2 p-0 ">
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

        <!-- 2nd main form row  -->
        <div class="row mt-5">
            <!-- 1st main col for form -->
            <div class=" col-xs-12 col-md-12 col-lg-8 col-xl-8 step1" id="step1">
                <div class="row mt-3">
                    <div class="col-xs-12 col-xl-12">
                        <p class="info-about-cargo-title">INFORMATION ABOUT YOUR CARGO ITEMS</p>
                    </div>
                </div>
                <!-- zip location form -->
                <form action="data.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                          <label for="" class="input-label m-0">Pickup location</label>
                         
                          <input type="search" name="pickLocation" id="pickLocation" class="form-control rounded-0 zip-input border-gray typeahead" 
                          placeholder="ZIP/Location" aria-describedby="helpId" required>  
                          <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group p-0">
                            <label for="" class="input-label m-0">Delivery location</label>
                                <input type="search" name="deliveryLocation" id="deliveryLocation"  class="form-control rounded-0 zip-input border-gray typeahead" 
                                placeholder="ZIP/Location" aria-describedby="helpId">
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>
                     </div>
                </div>

                  <!--------Cargo items portion------>
                  <div id="cargoAdd">
                    <div class="row mt-5">
                        <div class="col-12 cargo-item-head">CARGO ITEM: 1</div>
                    </div>
                    <!-- 1st cargo row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                            <label class="m-0 cargo-label">What</label>
                            <select class="form-control border-input rounded-0" name="what[]">
                                <option>---</option>
                                <option style="font-size: 14px;">Other</option>
                                <option  style="font-size: 14px;">Disposable pallet</option>
                                <option  style="font-size: 14px;">Euro pallet</option>
                              </select>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group p-0">
                                <label for="" class="cargo-label m-0">Count Cargo items</label>
                                    <input type="number" name="cargo_item[]" value="1" 
                                    class="form-control rounded-0 border-input cargo_item" 
                                    placeholder="" aria-describedby="helpId">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                    </div>

                    <!-- 2nd cargo row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                            <label class="m-0 cargo-label">Length (in cm)</label>
                            <div class="form-group p-0">
                                    <input type="number" name="cargo_length[]"  
                                    class="form-control rounded-0 border-input cargo_length" 
                                    placeholder="" aria-describedby="helpId">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="form-group p-0">
                                <label for="" class="cargo-label m-0">Width (in cm)</label>
                                    <input type="number" name="cargo_width[]"  
                                    class="form-control rounded-0 border-input cargo_width" 
                                    placeholder="" aria-describedby="helpId">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="form-group p-0">
                                <label for="" class="cargo-label m-0">Height (in cm)</label>
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
                                <label for="" class="cargo-label m-0">Total weight (in kg)</label>
                                    <input type="number" name="cargo_weight[]"  
                                    class="form-control rounded-0 border-input cargo_weight" 
                                    placeholder="" aria-describedby="helpId">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group p-0">
                                <label for="" class="cargo-label m-0">Total value (CHF)</label>
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
                                <label for="" class="cargo-label m-0">Freight title</label>
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
                                <label  class="cargo-label">Freight description </label>
                                <textarea class="form-control rounded-0 border-input" name="cargo_description[]" rows="3"></textarea>
                              </div>
                        </div>
                    </div>

                     <!-- cargo 6th row -->
                     <div class="row pt-2" style="border-bottom: solid 1px #00A2AE;">
                        <div class="col-sm-12 col-xs-12 col-xl-6">
                            <div class="form-group">
                                <label for="" class="cargo-label">Are the goods stackable?</label><br>
                                <input type="radio" checked="" name="cargo_goodsstacke[0]" value="yes">
                                <label>&nbsp;Yes</label>
                                <input class="ml-3" type="radio" checked="" name="cargo_goodsstacke[0]" value="no">
                                <label>&nbsp;No</label>    
                            </div>
                        </div>

                        <div class="col-sm-12 col-xs-12 col-xl-6">
                            <div class="form-group">
                                <label for="" class="cargo-label">Are the goods packaged?</label><br>
                                <div class="form-group">
                                    <input type="radio" checked="" name="cargo_goodpackage[0]" value="yes">
                                    <label>&nbsp;Yes</label>
                                    <input class="ml-3" type="radio" checked="" name="cargo_goodpackage[0]" value="no">
                                    <label>&nbsp;No</label>    
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div> <!--id cargo add /end here-->

                 <!-- 7th row cargo buttons -->
                 <div class="row mt-3 mb-4">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                        <button type="button" class="btn btn-cargo w-100" id="AddCargoButton">Add cargo item</button>
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
                            <input type="hidden" name="cargo_vat" id="cargo_vat" value="vat">
                            <input type="hidden" name="cargo_without_vat" id="cargo_without_vat" value="without vat">
                            <input type="hidden" name="cargo_distance" id="cargo_distance" value="distance">
                            <input type="hidden" name="cargo_time" id="cargo_time" value="Time">
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
        <!-- /1st main row end -->
        <!-- <div class="row mt-3 mb-5">
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <input type="submit" value="Next" class="btn btn-cargo btn-cargo-visible btn-next m-auto" name='next-1' style="background-color: #E5005B;"></input>
            </div>
        </div> -->
    </form>
    </div> 

          
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- custom jquery -->
    <script>
        $(document).ready(function(){
            var counter = 1;
          $("#AddCargoButton").click(function(event){
            event.preventDefault();
            var divv = $("#cargoAdd");
            var cargoadd = "";
    
    
    cargoadd += '<div id="cargoAdd"><div class="row mt-5"><div class="col-12 cargo-item-head">CARGO ITEM: '+counter+'</div></div>';  
    cargoadd += '<div class="text-right"><button type="button" class="btn btn-cargo pl-2 mw-25 white-button" id="removeCargo" style="font-size: 16px;">Remove cargo item</button></div>';
    // what col
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += '<label class="m-0 cargo-label">What</label>';
    cargoadd += '<select class="form-control border-input rounded-0" name = "what[]">';
    cargoadd += ' <option>---</option>';
    cargoadd += '<option style="font-size: 14px;">Other</option>';
    cargoadd += '<option  style="font-size: 14px;">Disposable pallet</option>';
    cargoadd += '<option  style="font-size: 14px;">Euro pallet</option></select></div>';
    
    // Caount cargo item col
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0">Count Cargo items</label>';
    cargoadd += '<input type="number" name="cargo_item[]" value="1"  class="form-control rounded-0 border-input cargo_item" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';
    

    // Lenght (in cm) col
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">';
    cargoadd += ' <label class="m-0 cargo-label">Length (in cm)</label>';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<input type="number" name="cargo_length[]"  class="form-control rounded-0 border-input cargo_length" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';

    // width in cm col
    cargoadd += '<div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0">Width (in cm)</label>';
    cargoadd += ' <input type="number" name="cargo_width[]"  class="form-control rounded-0 border-input cargo_width" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';

    // Height in cm col
    cargoadd += '<div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0">Height (in cm)</label>';
    cargoadd += ' <input type="number" name="cargo_height[]"  class="form-control rounded-0 border-input cargo_height" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';

    // Total weight col
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += ' <div class="form-group p-0">';
    cargoadd += ' <label for="" class="cargo-label m-0">Total weight (in kg)</label>';
    cargoadd += '<input type="number" name="cargo_weight[]"  class="form-control rounded-0 border-input cargo_weight" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div>';

    // Total value col

    cargoadd += '<div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">';
    cargoadd += ' <div class="form-group p-0">';
    cargoadd += ' <label for="" class="cargo-label m-0">Total value (CHF)</label>';
    cargoadd += '<input type="number" name="cargo_value[]"  class="form-control rounded-0 border-input" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';
    
    // Freight title
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-12">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label for="" class="cargo-label m-0">Freight title</label>';
    cargoadd += '<input type="search" name="cargo_title[]"  class="form-control rounded-0 border-input" placeholder="" aria-describedby="helpId">';
    // cargoadd += '<!-- <small id="helpId" class="text-muted">Help text</small> -->';
    cargoadd += '</div></div></div>';
    
    // textarean descreption
    cargoadd += '<div class="row">';
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-12">';
    cargoadd += '<div class="form-group p-0">';
    cargoadd += '<label  class="cargo-label">Freight description </label>';
    cargoadd += '<textarea class="form-control rounded-0 border-input" name="cargo_description[]" rows="3"></textarea>';
    cargoadd += '</div></div></div>';

    // good stackable radio
    cargoadd += '<row class="row pt-2" style="border-bottom: solid 1px #00A2AE;">';
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-6">';
    cargoadd += '<div class="form-group">';
    cargoadd += '<label for="" class="cargo-label">Are the goods stackable?</label><br>';
    cargoadd += '<input type="radio" checked="" name="cargo_goodsstacke['+counter+']" value="yes">';
    cargoadd += '<label>&nbsp;Yes</label>';
    cargoadd += '<input class="ml-3" type="radio" checked="" name="cargo_goodsstacke['+counter+']" value="no">';
    cargoadd += '<label>&nbsp;No</label> ';
    cargoadd += '</div></div>';

    // 
    cargoadd += '<div class="col-sm-12 col-xs-12 col-xl-6">';
    cargoadd += '<div class="form-group">';
    cargoadd += '<label for="" class="cargo-label">Are the goods packaged?</label><br>';
    cargoadd += '<input type="radio" checked="" name="cargo_goodpackage['+counter+']" value="yes">';
    cargoadd += '<label>&nbsp;Yes</label>';
    cargoadd += '<input class="ml-3" type="radio" checked="" name="cargo_goodpackage['+counter+']" value="no">';
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
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/jquery.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/bootstrap.bundle.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/jquery.easing.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/owl.carousel.min.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/owl.init.js"></script>
        <!-- Main Js -->
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/app.js"></script>
        <script src="<?php SITEURL ?>assets/theme_deprixa/js/date.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script type="text/javascript">
        var countries = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.whitespace,
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // url points to a json file that contains an array of country names, see
          // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
          prefetch: 'location.json'
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
            if(!isset($_SESSION['courier_id']))
            {
            ?>
                var settings = {
                      "url": "http://dev.virtualearth.net/REST/v1/Routes?waypoint.1="+$("#pickLocation").val()+",%20switzerland&waypoint.2="+$("#deliveryLocation").val()+",%20switzerland&distanceUnit=km&o=json&c=en-GB&key=AsWn4MoGmLXLvJqF1C5zDF-l5yUVinLRxz2d2Ef7L-IfgKIF_LG281dfeIKGvSoV",
                      "method": "GET"
                    }
                    $.ajax(settings).done(function (response) {
                      $("#pickLocation_show").html($("#pickLocation").val());
                      $("#deliveryLocation_show").html($("#deliveryLocation").val());
                        
                        const dist = response.resourceSets[0].resources[0].travelDistance > 0 ? response.resourceSets[0].resources[0].travelDistance : 0;
                        const time = response.resourceSets[0].resources[0].travelDuration > 0 ? response.resourceSets[0].resources[0].travelDuration : 0;

                        var h = Math.floor(time / 60);
                        var m = Math.floor(time % 1);
                        // var s = Math.floor(d % 3600 % 60);

                        var hDisplay = h > 0 ? h + "h " : "";
                        var mDisplay = m > 0 ? m + "min" : "";
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
                        costWithoutVAT = (cost + fuelSurcharge).toPrecision(7);
                        const vat = (cost * 7.7) / 100;
                        costWithVAT = (cost + vat).toPrecision(7);
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
                var settings = {
                  "url": "http://dev.virtualearth.net/REST/v1/Routes?waypoint.1="+$("#pickLocation").val()+",%20switzerland&waypoint.2="+$("#deliveryLocation").val()+",%20switzerland&distanceUnit=km&o=json&c=en-GB&key=AsWn4MoGmLXLvJqF1C5zDF-l5yUVinLRxz2d2Ef7L-IfgKIF_LG281dfeIKGvSoV",
                  "method": "GET"
                }
                $.ajax(settings).done(function (response) {
                  $("#pickLocation_show").html($("#pickLocation").val());
                  $("#deliveryLocation_show").html($("#deliveryLocation").val());
                    
                    const dist = response.resourceSets[0].resources[0].travelDistance > 0 ? response.resourceSets[0].resources[0].travelDistance : 0;
                    const time = response.resourceSets[0].resources[0].travelDuration > 0 ? response.resourceSets[0].resources[0].travelDuration : 0;

                    var h = Math.floor(time / 60);
                    var m = Math.floor(time % 1);
                    // var s = Math.floor(d % 3600 % 60);

                    var hDisplay = h > 0 ? h + "h " : "";
                    var mDisplay = m > 0 ? m + "min" : "";
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
                    costWithoutVAT = (cost + fuelSurcharge).toPrecision(7);
                    const vat = (cost * 7.7) / 100;
                    costWithVAT = (cost + vat).toPrecision(7);
                    $("#cargo_vat_show").html(costWithVAT);
                    $("#cargo_without_vat_show").html(costWithoutVAT);
                    $("#cargo_vat").val(costWithVAT);
                    $("#cargo_without_vat").val(costWithoutVAT);
                    $("#cargo_distance").val(dist);
                    $("#cargo_time").val(hDisplay + mDisplay);


                });
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
            var ajax = {
                  "url": "data.php",
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
        });
    </script>
    </body>

</html>