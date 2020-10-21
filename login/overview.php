<h1 align="center" style="text-decoration:underline"><a href="">Overview</a></h1>
<?php 
//all complaints
$qq=mysqli_query($link,"select * from billing ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green'>Total Number of Order : $rows</h2>";	

	


//all users
$q2=mysqli_query($link,"select * from contactus");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Total Number contact/feedback given by users  : $r2</h2>";	


					

?>
