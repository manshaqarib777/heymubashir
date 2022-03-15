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
  
  if (isset($_POST['doLogin']))
      : $result = $user->login($_POST['username'], $_POST['password']);
  
  /* Login Successful */
	if ($result)
		if($_SESSION['userlevel'] == 9)
			:	redirect_to("dashboard/index.php");
	elseif($_SESSION['userlevel'] == 1)
			:	redirect_to("dashboard/client.php");
			
	elseif($_SESSION['userlevel'] == 2)
			:	redirect_to("dashboard/index.php");
			
	else:
		if($_SESSION['userlevel'] == 3)
			:	redirect_to("dashboard/dash_driver.php");
	endif;
	endif;
	endif;
	  
   $numusers = countEntries("users");
?>

<?php include("assets/templates/head_sign.php");?>


        <!-- Loader -->
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
                   <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="'.SITEURL.'/uploads/'.$core->logo.'" alt="'.$core->site_name.'" width="190" height="39"/>': $core->site_name;?></a>
                </div>                 

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
                        <li><a href="index.php"><?php echo $lang['left134'] ?></a></li>
                        
                        <li><a href="tracking.php"><i class="mdi mdi-package-variant-closed"></i> <?php echo $lang['left135'] ?></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-5">
                                <div class="mr-lg-6">   
                                    <img src="<?php SITEURL ?>assets/theme_deprixa/images/user/signup.png" class="img-fluid" alt="">
                                </div>
                            </div>
								
                            <div class="col-lg-5 col-md-7 mt-4 mt-sm-5 pt-2 pt-sm-3">
								<?php if(!$core->reg_allowed):?>
								<?php echo Filter::msgAlert("<span>Alert!</span>".$lang['langs_010133']."");?>
								<?php elseif($core->user_limit !=0 and $core->user_limit == $numusers):?>
								<?php echo Filter::msgAlert("<span>Alert!</span>".$lang['langs_010134']."");?>
								<?php else:?>
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4"><?php echo $lang['left136'] ?></h4>
										<p><?php echo $lang['left137'] ?></p>										
                                    </div>
									<div id="msgholder"></div>
									<div id="loader" style="display:none"></div>
									<br><br>	
                                    <form class="login-form" id="admin_form" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label><?php echo $lang['left138'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="<?php echo $lang['left139'] ?>" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                                
                                                    <label><?php echo $lang['left140'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="<?php echo $lang['left141'] ?>" name="lname">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label><?php echo $lang['left142'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-mail-ru ml-3 icons"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="<?php echo $lang['left143'] ?>" name="email" >
                                                </div>
                                            </div>
											<div class="col-md-12">
                                                <div class="form-group position-relative">                                               
                                                    <label><?php echo $lang['left144'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="<?php echo $lang['left145'] ?>" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label><?php echo $lang['left146'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="<?php echo $lang['left147'] ?>" name="pass">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label><?php echo $lang['left148'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" name="pass2" placeholder="<?php echo $lang['left149'] ?>">
                                                </div>
                                            </div>

											<div class="col-md-3">
												<div class="form-group">
													<label><span class="text-danger"></span></label>
													<span class="badge-light"><img src="lib/captcha.php" alt="" class="captcha-append" /></span>
												</div>
											</div> <!-- /.col- -->
											<div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?php echo $lang['left162'] ?> <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="captcha" placeholder="<?php echo $lang['left163'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="terms" value="yes" >
                                                        <label class="custom-control-label" for="customCheck1"><?php echo $lang['left164'] ?> <a href="#" class="text-primary"> <?php echo $lang['left165'] ?></a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-primary rounded w-100" name="dosubmit"><?php echo $lang['left166'] ?></button>
												<input name="locker" type="hidden" value="<?php echo generarCodigo(6); ?>" />
												<input name="doRegister" type="hidden" value="1" />
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2"><?php echo $lang['left167'] ?> </small> <a href="index.php" class="text-dark font-weight-bold"><?php echo $lang['left168'] ?></a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
								<script type="text/javascript">
								// <![CDATA[
								  function showResponse(msg) {
									  hideLoader();
									  if (msg == 'OK') {
										  result = "<div class=\"bggreen\"><p><span class=\"icon-ok-sign\"><\/span><i class=\"close icon-remove-circle\"></i><span>Success!<\/span>You have successfully registered. Please check your email for further information<\/p><\/div>";
										  $("#fullform").hide();
									  } else {
										  result = msg;
									  }
									  $(this).html(result);
									  $("html, body").animate({
										  scrollTop: 0
									  }, 600);
									  window.location='index.php';
								  }
								  $(document).ready(function () {
									  var options = {
										  target: "#msgholder",
										  beforeSubmit: showLoader,
										  success: showResponse,
										  url: "ajax/user.php",
										  resetForm: 0,
										  clearForm: 0,
										  data: {
											  processContact: 1
										  }
									  };
									  $("#admin_form").ajaxForm(options);
								  });
								// ]]>
								</script>
							<?php endif;?>
                            </div> <!--end col-->							
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a>
        <!-- Back to top -->

         <?php include("assets/templates/footer_all.php");?>