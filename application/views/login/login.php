<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = (isset($title)) ? $title :  "Selection Committee";
$langCode= (isset($langCode)) ? $langCode :  "en";

?><!DOCTYPE html>
<html lang="<?php echo $langCode; ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url();?>title.png" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.0.0/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Custom style //-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skeleton-1.0.0.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/formStuInfo.css">
  <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/tether-1.4.3/js/tether.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper-1.12.9..min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>
	<style>
		body{
			background-image: url("<?php echo base_url();?>assets/images/background/bg1.jpg");
			background-size: cover;
		}
	</style>
</head>
<body>
<br><br><br><br>
	<div class="container">
	    <div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				    		<div class="card box-shadow">
							  	<div class="card-body">
							    	<form accept-charset="UTF-8" role="form" action="<?php echo base_url() ?>/connection/login" method="post">
				                    <fieldset>
				                    	<div class="form-group text-center">
				                    		<img src="<?php echo base_url();?>assets/images/system_img/md_logo.png" alt="" width="95%">
				                    	</div>
							    	  	<div class="form-group">
							    		    <input class="form-control" placeholder="Username" name="login" type="text">
							    		</div>
							    		<div class="form-group">
							    			<input class="form-control" placeholder="Password" name="password" type="password">
							    		</div>
							    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                      <a href="#"><span class="float-right">Forgot your password?</span></a>
							    	</fieldset>
							      	</form>
							    </div>
							</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<br><br>
  </body>
</html>
