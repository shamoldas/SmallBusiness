<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_order.php?id='+id;
     }
}

function updates(id)
{
	a=confirm('Are You Sure To update This Record ?')
	 if(a)
     {
        window.location.href='update_content.php?id='+id;
     }
}
</script>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Order Details</h2>
                        
                    </div>
                    <?php
                    // Include config file
                    //require_once "config.php";
                    
                    // Attempt select query execution
					
                    $sql = "SELECT * FROM billing";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0)
						{
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Mobile</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Bill</th>";
					echo "<th>Address</th>";
                                        echo "<th>City</th>";
                                        echo "<th>Country</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result))
								{
                  	               echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['mobile'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['billing'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
					echo "<td>" . $row['city'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
					


								
					echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'>View<span class='glyphicon glyphicon-eye-open'></span></a>";
                                            #echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>Update<span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>Delete<span class='glyphicon glyphicon-trash'></span></a>";
					    #echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;>Delete</span></a></td>";

                                        echo "</td>";

                                    echo "</tr>";
									
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>

</body>
</html>



				