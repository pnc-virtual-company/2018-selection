<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = (isset($title)) ? $title :  "Skeleton";
$langCode= (isset($langCode)) ? $langCode :  "en";

?><!DOCTYPE html>
<html lang="<?php echo $langCode; ?>">
<head>
	<meta charset="utf-8">
	<title>Selection Committee</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/system_img/logo.png" type="image/x-icon" style="width: 100px;">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.0.0/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Custom style //-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skeleton-1.0.0.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/formStuInfo.css">

  <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/tether-1.4.3/js/tether.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper-1.12.9..min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>

	<style type="text/css">
 /* body {
      padding-top: 60px;
  }*/
  .navbar-nav > li{
    padding-left:5px;
    padding-right:5px;
    /*font-weight: bold;*/
   font-size: 17px;
  }
  
  .myContainer {
      max-width: 98%;
  }
  #myCard{
    margin-top: -15px;
    max-height: 100px;
  }
	</style>
</head>
<body>
