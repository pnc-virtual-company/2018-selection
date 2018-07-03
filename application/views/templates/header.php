<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = (isset($title)) ? $title :  "Selection Committee";
$langCode= (isset($langCode)) ? $langCode :  "en";
?>

<!DOCTYPE html>
<html lang="<?php echo $langCode; ?>">
<head>
	<meta charset="utf-8">
  	<link rel="shortcut icon" href="<?php echo base_url();?>title.png" type="image/x-icon">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-4.0.0/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all">

  	<!-- Custom style //-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layout.css">

  	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

  	<title><?php echo $title; ?></title>
</head>

<body>