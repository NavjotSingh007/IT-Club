<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Navjot Singh">
  <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>ico/favicon.png">
  <script>    
  bootstrap_alert = function()
                    {}
  bootstrap_alert.warning = function( message )
                            {
                               $('#alert_placeholder').html(' <div id="alertdiv" style="line-height:50px; color:red;" class="alert-error"><a class="close" data-dismiss="alert">&times</a><span class="lead">'+message+'</span></div>')
                               // setTimeout( 
                               //             function()
                               //             { $("#alertdiv").remove(); } , 4000
                               //           );
                               $("#alertdiv").fadeOut(7000);
                            }

  function validateForm() {
    var a = document.forms["signin"]["email"].value;
    var b = document.forms["signin"]["password"].value;

    if (a == null || a == "") {
      bootstrap_alert.warning('Please enter your Email to sign in');
      return false;}
      if (b == null || b == "") {
        bootstrap_alert.warning('Please enter your password to sign in');
        return false; }
      }

      </script>

    </head>

    <body>

      <!-- navbar -->
      <header class="navbar  navbar-fixed-top navbar-inverse" role="banner">
        <div class="navbar-inner">
          <a class="brand navbar-brand" href="<?php echo base_url(); ?>/index.php/home_c" style="color:white; margin-left:0.1%;">IT CLUB</a>
          <ul class="nav pull-right" style="margin-right:1%;">
            <li class="active"><a href="<?php echo base_url(); ?>/index.php/home_c">Home</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/aboutclub_c">About Club</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/activities_c">Activities</a></li>
            <li><a href="joinus_c">Join Us</a></li>
          </ul>
        </div>
      </header>
      <br><br><br><br>
      <div class="container-fluid">

        <div class="row-fluid">
          <!-- left column -->
          <div class="span8">
            <div class="well">
              <h2><?php echo $heading1; ?></h2>
              <hr/>
              <p class="lead"><?php echo $data11; ?></p>
            </div>
              <br/>
              <div class="well">
               <h2><?php echo $heading2; ?></h2>
               <hr/>
               <p class="lead"><i class="icon-pencil"></i><?php echo $data21; ?></p>
               <br/>
               <p class="lead"><i class="icon-briefcase"></i><?php echo $data22; ?></p>
               <br/>
               <p class="lead"><i class="icon-qrcode"></i><?php echo $data23; ?></p>
             </div></div>

             <!-- right column -->
             <div class="span4">
               <div class="well"> <form name="signin" class="form-signin" method="post" onsubmit="return validateForm()" action="<?php echo base_url();?>/index.php/home_c/checklogin">
                <h2 class="form-signin-heading">Login</h2>

                <p class="lead" style=" color:red;">
                  <?php if( $this->session->flashdata('login_failed') ); ?>
                  <?php echo $this->session->flashdata('login_failed'); ?>
                </p>
                <div id="alert_placeholder"></div>

                E-mail:<input type="email" class="input-block-level" name="email">
                Password: <input type="password" class="input-block-level" name="password">
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                <button class="btn btn-large btn-primary" type="submit">Sign in</button>
              </form>
            </div></div>


          </div>

        </div>
      </body>
      </html>
