<?php
// Include config file
require_once "config.php";

//include_once 'config.php';
if(isset($_POST['update']))
{	 
	 $name=$_POST['n'];
	 $email=$_POST['e'];
	 $mobile =$_POST['mob'];
	 $gender =$_POST['gender'];
	 $bio=$_POST['bio'];
	 $occupation=$_POST['occupation'];
	 $sql = "INSERT INTO profileuser (n,e,mob,gender,occupation,bio)
	 VALUES ('$name','$email','$mobile','$gender','$bio','$occupation')";
	 if (mysqli_query($link, $sql)) 
	 {
		echo "New record created successfully !";
	 } 
	 else 
	 {
		echo "Error: " . $sql . "" . mysqli_error($link);
	 }

	 
	 
	 
	 
	 mysqli_close($link);
}

?>














<?php 
/*
extract($_POST);
if(isset($update))
{
//dob
$dob=$yy."-".$mm."-".$dd;
//hobbies


//$query="update users set name='$n',mobile='$mob',gender='$gen',hobbies='$hob',dob='$dob' where email='".$_SESSION['user']."'";

$query="update profileuser set name='$n',mobile='$mob',gender='$gen',occupation='$occupation',dob='$dob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($link,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($link,"select * from users where username='ShamolDas'");
$res=mysqli_fetch_assoc($sql);
*/
?>
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input class="form-control" value=""    type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input class="form-control" type="email"  value=""  name="e"/></td>
				</tr>
				
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input class="form-control" type="text" value=""  name="mob"/></td>
				</tr>
				
				<tr>
										
					<td>
					    Gender
					</td>
					   
					 <td>
						<label for="exampleFormControlSelect1"></label>
						<select class="form-control" id="exampleFormControlSelect1">
						  <option value="Male">Male</option>
						  <option value="female">Female</option>

						</select>
					</td>
				
				</tr>
				
				<tr>
					
					<td>
					    Occupation
						
					</td>
					   
					 <td>
					 <label for="exampleFormControlSelect1"></label>
						<select class="form-control" id="exampleFormControlSelect1">
						  <option name="occupation" value="Student">Student</option>
						  <option name="occupation" value="teacher">Teacher</option>
						  <option name="occupation" value="doctor">Doctor</option>
						  <option name="occupation" value="others">Others</option>

						</select>
					</td>
				</tr>
				
				
				<tr>
					<td>Enter Your DOB</td>
		
					
					</td>
				</tr>
								
				<tr>
					<td>Enter Your Bio</td>
					<Td><input class="form-control" value=""  type="text" name="bio"/></td>
				</tr>
				
				<tr>
					
					
					<Td colspan="2" align="center">
					<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
					<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	