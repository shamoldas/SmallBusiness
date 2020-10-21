<?php
include('../config.php');
	
	$page=$_GET['id'];
	
	mysqli_query($link,"delete from order where id='$page'");
	header('location:dashboard.php?info=order');
?>