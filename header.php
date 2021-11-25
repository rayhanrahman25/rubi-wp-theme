<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="remus,business,company,agency,multipurpose,modern,bootstrap4">
  <meta name="author" content="Dreambuzz">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
<nav class="navbar navbar-expand-lg navigation header-padding site-header" id="navbar">
	<div class="container-fluid">
	  <a class="navbar-brand" href="index-2.html">
	  	<!-- <h2>Rubi.</h2> -->
	  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Rubi" class="img-fluid">
	  </a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span>
	  </button>
  
	  <div class="collapse navbar-collapse" id="navbarmain">
		 <?php get_template_part('template-parts/common/navigation');?>
		<form class="form-inline my-2 my-md-0 ml-lg-4">
		  <a href="#contact" class="btn btn-main btn-rounded smoth-scroll"><?php echo __('Contact Us','rubi') ?><i class="fa fa-angle-right ml-2"></i></a>
		</form>
	  </div>
	</div>
</nav>

<!-- Header Close --> 

