<!DOCTYPE html>
<html lang="en">
<head>
  <title>Join Us</title>
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
                               $('#alert_placeholder').html(' <div id="alertdiv" style="line-height:50px" class="alert-error"><a class="close" data-dismiss="alert">&times</a><span class="lead">'+message+'</span></div>')
                               // setTimeout( 
                               //             function()
                               //             { $("#alertdiv").remove(); } , 4000
                               //           );
                               $("#alertdiv").fadeOut(7000);
                            }


  function validateForm() {
    var a = document.forms["registration"]["name"].value;
    var b = document.forms["registration"]["password"].value;
    var c = document.forms["registration"]["address"].value;
    var d = document.forms["registration"]["email"].value;

    if (a == null || a == "") {
      bootstrap_alert.warning('fields marked mandatory must be filled out');
      return false;}
      if (b == null || b == "") {
         bootstrap_alert.warning('fields marked mandatory must be filled out');
        return false; }
        if (c == null || c == "") {
           bootstrap_alert.warning('fields marked mandatory must be filled out');
          return false; }
          if (d == null || d == "") {
             bootstrap_alert.warning('fields marked mandatory must be filled out');
            return false; }
          }


          </script>

          <style type="text/css">
              sup { color: red; }
          </style>
        </head>

        <body ng-app="">

          <!-- navbar -->
          <header class="navbar  navbar-fixed-top navbar-inverse" role="banner">
            <div class="navbar-inner">
              <a class="brand" href="<?php echo base_url(); ?>/index.php/home_c" style="color:white; margin-left:0.1%;">IT CLUB</a>
              <ul class="nav pull-right" style="margin-right:1%;">
                <li ><a href="<?php echo base_url(); ?>/index.php/home_c">Home</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/aboutclub_c">About Club</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/activities_c">Activities</a></li>
                <li class="active"><a href="joinus_c">Join Us</a></li>
              </ul>
            </div>
          </div>
        </header>
        <br><br><br>



        <div class="container-fluid">
          <br><br>
          <div class="row-fluid">

           <center>
            <strong> please fill out the form below to become a registered member </strong><br/><br/>

            <div id="alert_placeholder"></div>

            <div class="well">
             <form align="center" name=registration method=POST onsubmit="return validateForm()" action="<?php echo base_url();?>/index.php/joinus_c/insert" >
              <table cellspacing="5" cellpadding="5" style="width:70%">
                <tr>
                  <td><sup>*</sup>Name:</td> <td><input type=text name=name value="" id="name"></td>
                </tr>
                <tr>
                  <td><sup>*</sup>password:</td>  <td><input type=password name="password"></td>
                </tr>
                <tr>
                  <td><sup>*</sup>D.O.B:</td> <td>

                  <select class="span3" name=s1 size="1" id="s1">
                   <option value=1>1 </option>
                   <option value=2>2 </option>
                   <option value=3>3 </option>
                   <option value=4>4 </option>
                   <option value=5>5 </option>
                   <option value=6>6 </option>
                   <option value=7>7</option>
                   <option value=8>8 </option>
                   <option value=9>9 </option>
                   <option value=10>10 </option>
                   <option value=11>11 </option>
                   <option value=12>12 </option>
                   <option value=13>13 </option>
                   <option value=14>14 </option>
                   <option value=15>15 </option>
                 </select>:Day

                 <select class="span3" name=s2 size=1 id="s2">
                  <option value=01>01</option>
                  <option value=02>02</option>
                  <option value=03>03</option>
                  <option value=04>04</option>
                  <option value=05>05</option>
                  <option value=06>06</option>
                  <option value=07>07</option>
                  <option value=08>08</option>
                  <option value=09>09</option>
                  <option value=10>10</option>
                  <option value=11>11</option>
                  <option value=12>12</option>
                </select>:Month

                <select class="span3" name=s3 size=1 id="s3">
                 <option value=1996>1996 </option>
                 <option value=1997>1997 </option>
                 <option value=1998>1998 </option>
                 <option value=1999>1999 </option>
                 <option value=2000>2000 </option>
               </select>:Year</td>
             </tr>
             <tr>
               <td><sup>*</sup>Sex:</td> <td>
               <label class="radio inline" name=sex>
                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="male">
                 Male
               </label>
               <label class="radio inline">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="female">
                Female
              </label>
            </td>
          </tr>
          <tr>
            <td> skills:</td> <td>
            <label class="checkbox inline">
             <input type="checkbox" name="skills[]" value="c">C</label>
             <label class="checkbox inline">
               <input type="checkbox" name="skills[]" value="c++">C++</label>
               <label class="checkbox inline">
                 <input type="checkbox" name="skills[]" value="java">Java</label>
                 <label class="checkbox inline">
                   <input type="checkbox" name="skills[]" value="mysql">Mysql</label>
                 </td>
               </tr>
               <tr>
                 <td><sup>*</sup>E-mail:</td> <td><input type=email name=email ng-model="text"></td>
             </tr>
             <tr>
               <td><sup>*</sup>Address:</td> <td><textarea rows=3 cols=30 name=address id=adrs1></textarea></td>
             </tr>
           </table><br/><br/>
           <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn">Reset</button>
          </div>
        </div>



      </form>
    </center>

  </div>
</body>
</html>
