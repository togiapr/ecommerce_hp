<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

  <title>Login Admin</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url(); ?>css/bootstrap-theme2.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url(); ?>css/elegant-icons-style2.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>css/font-awesome2.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url(); ?>css/style2.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/style-responsive2.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="login-img3-body">
<style>
  
  .hde{color:#ff0000 !important;}
  .iw{padding: 6px; margin-top: 10px; width: 160px;}


</style>

  <div class="container">

    <form class="login-form" action="<?php echo base_url(); ?>AdminLogin/loginSubmit" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php //echo $loginerror; ?>" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="pass" id="password" class="form-control" placeholder="Password"><span toggle="#password" class="glyphicon glyphicon-eye-open field-icon toggle-password"></span>                      
                    <style>.field-icon { float: right; margin-left: -25px; margin-right: 10px;  margin-top: 15px; position: relative;  z-index: 10;}
                </style>
        </div>
        <div class="input-group">
          <?php echo $this->recaptcha->render(); ?>
        </div>
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label> -->
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <?php if (isset($loginerror)) { ?>
        <div class="iw">
            <span class="hde" href=""><?php echo validation_errors(); ?><?php if(isset($loginerror)){ ?><?php echo $loginerror; ?><?php }?></span>  
        </div>
        <?php }?>
        <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <!--<a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        </div>
    </div>
  </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

        <!============Start Visible Password=================>
          <script>
            $(".toggle-password").click(function() {
             $(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open');
              var input = $($(this).attr("toggle"));
              if (input.attr("type") == "password") {
                input.attr("type", "text");
              } else {
                input.attr("type", "password");
              }
            });
          </script>

</body>

</html>
