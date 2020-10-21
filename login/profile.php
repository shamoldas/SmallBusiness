<title>Add Record Form</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<form action="blogdatainsert.php" method="post">

						 <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                      
                        </div>
						
						<div class="form-group">
							<label>CategorySelect</label>
						  <select class="form-control" name="category" id="category">
							<option value="Fruit">Fruit</option>
							<option value="OwnWrite">OwnWrite</option>
							<option value="Career">Career</option>
							<option value="FoodReview">FoodReview</option>
							<option value="BookReview">BookReview</option>
							<option value="MovieReview">MovieReview</option>
						  </select>
						</div>
						
							
						<div class="form-group">
						<label>SubCategory</label>
						  <select class="form-control" name="subcat" id="subcat">
							<option value="Fruit">Banana</option>
							<option value="Fruit">Apple</option>
							<option value="FoodReview">Biriyani</option>
							<option value="FoodReview">Cholabatura</option>
							<option value="OwnWrite">Story</option>
							<option value="OwnWrite">Motivational</option>
							<option value="OwnWrite">Love</option>
							<option value="OwnWrite">Country/Political</option>
							<option value="Career">BCS</option>
							<option value="Career">Bank</option>
							<option value="Career">IT & Software<option>
							<option value="BookReview">Novel<option>
							<option value="BookReview">Short<option>
							<option value="BookReview">Poem<option>
							<option value="MovieReview">Banlga<option>
							<option value="MovieReview">Indian<option>
							<option value="Motivational">English<option>
							<option value="MovieReview">Corian<option>
						</select>
						</div>
			
					
						
						
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message"  class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<script>
		//Reference: https://jsfiddle.net/fwv18zo1/
		var $category = $( '#category' ),
				$subcat = $( '#subcat' ),
			$options = $subcat.find( 'option' );
			
		$category.on( 'change', function() {
			$subcat.html( $options.filter( '[value="' + this.value + '"]' ) );
		} ).trigger( 'change' );
		</script>
		
		
		
		
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>