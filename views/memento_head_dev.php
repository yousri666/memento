<!DOCTYPE html>
<html
	lang="<?php
	if (isset ( $_SESSION ['lang'] )) {
		echo test_input ( $_SESSION ['lang'], FILTER_SANITIZE_STRING );
	} else {
		echo "en";
	}
	?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-toggle-master/css/bootstrap-toggle.css">-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome-4.7.0/css/font-awesome.css">	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3-fix.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/code-ground.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/memento.css">
	<title>Memento</title>
</head>