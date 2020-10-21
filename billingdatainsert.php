<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "own");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$billing = mysqli_real_escape_string($link, $_REQUEST['billing']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
  

 
// Attempt insert query execution
$sql = "INSERT INTO billing (name,mobile, email,billing,address,city,country) VALUES ('$name', '$mobile', '$email','$billing','$address','$city','$country')";
if(mysqli_query($link, $sql)){
    #echo "Records added successfully";
#setcookie("Auction_Item", "Records added successfully", time()-60);
	include"Index.php";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<link rel="stylesheet" href="css/alert.css">
<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> Records added successfully or positive action.
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>