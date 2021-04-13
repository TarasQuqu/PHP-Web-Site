<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>PHP Web Site</title>
</head>
<body>
<!--Header-->
 <?php require "blocks/header.php" ?>
<!--Articles-->
	<div class="container mt-5">
			<h3 class="mb-5">Our articles</h3>
		   
		   <div class="d-flex flex-wrap">
		   <?php
		for($i = 0;$i < 5;$i++):
			?>
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Just Text</h4>
          </div>
          <div class="card-body">
		   <img src="img/<?php echo ($i+1)?>.jpg" class="img-thumbnail" alt="">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
       <?php endfor; ?>
		
			
	</div><!--d-flex-->	
  </div><!--Container-->
  
<!--Footer-->
 <?php require "blocks/footer.php"?>