


<?php
// Include config file
require_once "config.php";

//include_once 'config.php';

/*

if(isset($_POST['submit']))
{	
$title="";
$title_err="";
 
	 $title = $_POST['title'];
	 $category = $_POST['category'];
	 $subcat = $_POST['subcat'];
	 $message = $_POST['message'];
	 $file_name = $_POST['file_name'];
	 
	 

echo"$title <br>";
	 
	  if(empty($title))
	  {
        $title_err = "Please enter username.";
	  } 
		else
		{
			$title =$title;
		}
		 
	 
	 
	 
	 
	 //if(empty($title_err) && empty($select1_err) && empty($select2_err))
	 if(empty($title_err))
	 {
	 
		 echo "intert data";
		 $sql = "INSERT INTO content (title,category,subcat,message,file_name)
		 VALUES ('$title','$category','$subcat','$message','$file_name')";
		 if (mysqli_query($link, $sql)) 
		 {
			echo "New record created successfully !";
		 } 
	 else 
	 {
		echo "Error: " . $sql . "" . mysqli_error($link);
	 }
	 
	 
	 }
	 
	 
	 
	 
	 mysqli_close($link);
}
*/

if(isset($_POST["submit"])){
//if($_SERVER["REQUEST_METHOD"] =="POST"){
    // Validate images/$id

 
	   
	   
	  //Validate Title 
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter an address.";     
    } else{
        $title = $input_title;
    }
	
    
    // Validate Category
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please select correct one.";     
    } else{
        $category = $input_category;
    }
	//  $input_s = trim($_POST["select2"]);
	
	$input_subcat=trim($_POST['subcat']);
    if(empty($input_subcat)){
        $subcat_err = "Please select correct one.";     
    } else{
        $subcat = $input_subcat;
    }
    
	
    // Check input errors before inserting in database
    if(empty($title_err) && empty($category_err) && empty($subcat_err))
	{
		
		//if(isset($_POST['submit']))
			
		
		 
			 $title = $_POST['title'];
			 $category = $_POST['category'];
			 $subcat = $_POST['subcat'];
			 $message = $_POST['message'];
			 $file_name = $_POST['file_name'];
		
		
		
				//image
	//	$file_name=$_FILES['file_name']['name'];	   // Validate address
			   
	//	mkdir("images/$id");
	//	move_uploaded_file($_FILES['file_name']['tmp_name'],"images/$id/".$_FILES['file_name']['name']);  

	 $sql = "INSERT INTO content (title,category,subcat,message,file_name)
	 VALUES ('$title','$category','$subcat','$message','$file_name')";
	 if (mysqli_query($link, $sql)) 
	 {
		echo "New record created successfully !";
	 } 
	 else 
	 {
		echo "Error: " . $sql . "" . mysqli_error($link);
	 }
      

    }
    
    // Close connection
    mysqli_close($link);
}

















 /*
 
// Processing form data when form is submitted
if(isset($_POST["submit"])){
//if($_SERVER["REQUEST_METHOD"] =="POST"){
    // Validate images/$id

 
	   
	   
	  //Validate Title 
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter an address.";     
    } else{
        $title = $input_title;
    }
	
    
    // Validate Category
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please select correct one.";     
    } else{
        $category = $input_category;
    }
	//  $input_s = trim($_POST["select2"]);
	
	$input_subcat=trim($_POST['subcat']);
    if(empty($input_subcat)){
        $subcat_err = "Please select correct one.";     
    } else{
        $subcat = $input_subcat;
    }
    
	
    // Check input errors before inserting in database
    if(empty($title_err) && empty($category_err) && empty($subcat_err))
	{
		
		//if(isset($_POST['submit']))
			
		
		 
			 $title = $_POST['title'];
			 $category = $_POST['category'];
			 $subcat = $_POST['subcat'];
			 $message = $_POST['message'];
			 $file_name = $_POST['file_name'];
		
		
		
				//image
	//	$file_name=$_FILES['file_name']['name'];	   // Validate address
			   
	//	mkdir("images/$id");
	//	move_uploaded_file($_FILES['file_name']['tmp_name'],"images/$id/".$_FILES['file_name']['name']);  

	 $sql = "INSERT INTO content (title,category,subcat,message,file_name)
	 VALUES ('$title','$category','$subcat','$message','$file_name')";
	 if (mysqli_query($link, $sql)) 
	 {
		echo "New record created successfully !";
	 } 
	 else 
	 {
		echo "Error: " . $sql . "" . mysqli_error($link);
	 }
      

    }
    
    // Close connection
    mysqli_close($link);
}
*/

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>




    
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-header">
                        <h2>Blog Post</h2>
                    </div>
                 
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="">
							<span class="error"><?php if (isset($title_err)) echo $title_err ?></span>
                            
                        </div>
						
						<!--
						 <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
						-->
						
					
						 <!--<div class="form-group <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">-->
						 <div class="form-group <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">
							<label>CategorySelect</label>
						  <select class="form-control" name="category" id="category">
							<option value="1">Fruit</option>
							<option value="2">OwnWrite</option>
							<option value="Career">Career</option>
							<option value="BookReview">BookReview</option>
							<option value="MovieReview">MovieReview</option>
						  </select>
						</div>
					
					
				
						
						<div class="form-group">
						  <select class="form-control" name="subcat" id="subcat">
							<option value="1">Banana</option>
							<option value="1">Apple</option>
							<option value="1">Story</option>
							<option value="2">Motivational</option>
							<option value="2">Love</option>
							<option value="2">Country/Political</option>
							<option value="Career">BCS</option>
							<option value="Career">Bank</option>
							<option value="career">IT & Software<option>
							<option value="Novel">Novel<option>
							<option value="Short">Short<option>
							<option value="4">Poem<option> 
							<option value="5">Banlga<option>
							<option value="5">Indian<option>
							<option value="5">English<option>
							<option value="5">Corian<option>
						</select>
						</div>
			
					
						
						
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message"  class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
						
						
						 <div class="form-group">
							<label for="exampleFormControlFile1">File input</label>
							<input type="file" name="file_name" class="form-control" id="exampleFormControlFile1">
						  </div>
						  

                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <a href="" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
		
		<script>
		//Reference: https://jsfiddle.net/fwv18zo1/
		var $category = $( '#category' ),
				$subcat = $( '#subcat' ),
			$options = $subcat.find( 'option' );
			
		$category.on( 'change', function() {
			$subcat.html( $options.filter( '[value="' + this.value + '"]' ) );
		} ).trigger( 'change' );
		</script>
   
</body>
</html>