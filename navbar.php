<!DOCTYPE html>
<html lang="en">
<head>
  <title>SmallBusiness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=aboutus">AboutUs</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php?page=company">Company</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=product">Product</a>
      </li>
	  <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.php?page=services" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=services">Action</a>
          <a class="dropdown-item" href="header.php">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	  -->
	  <li class="nav-item">
        <a class="nav-link" href="index.php?page=services">Services</a>
      </li>
	
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=maintenance">Maintenance</a>
      </li>
	   
	<li class="nav-item">
        <a class="nav-link" href="index.php?page=contactus">ContactUs</a>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	
  </div>
</nav>
<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
-->

		<div class="col-md-12">
		
					<?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="aboutus")
						{
							include('aboutus.php');
						
						}
						elseif($page=="product")
						{
							include('product.php');
						}
						
						elseif($page=="maintenance")
						{
							include('maintenance.php');
						}
												
						elseif($page=="services")
						{
							include('services.php');
						}
						elseif($page=="company")
						{
							include('company.php');
						}
						elseif($page=="login")
						{
							include('login/login.php');
						}
						elseif($page=="contactus")
						{
							include('contactus.php');
						}
						
					  }
					  
					 
						
					?>
		
		
		</div>
  



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
