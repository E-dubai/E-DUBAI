<?php
	ob_start();
	session_start();
	if( isset($_SESSION['user'])=="" ){
		header("Location: index.php");
	}
 $dbhost = 'localhost:3306';
   $dbuser = 'guysmasa_abhik';
   $dbpass = 'abhik@1234';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"guysmasa_edubai");
	$error = false;

	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
 
 
			$ph = trim($_POST['phone']);
		$ph = strip_tags($ph);
		$ph = htmlspecialchars($ph);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		// basic name validation
		 
		$uid=$_SESSION['user'];
	 
		
		// if there's no error, continue to signup
	
			$time= trim($_POST['time']);
		$time = strip_tags($time);
		$time = htmlspecialchars($time);
			 
			$query = "INSERT INTO users1(place1,place2,mid,time) VALUES('$ph','$pass','$uid','$time')";
			//$res = mysqli_query($conn,$query);
				
			if (mysqli_query($conn,$query)) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				header("Location: trasport.php");
				unset($name);
				unset($email);
				unset($pass);
			} else {
				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		
		//here
	
	}
		  
			 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Dubai Carpool Register</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
            	<h2 class="">Add up your Location.</h2>
            </div>
        
       
       
            </div>
			    <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="phone" name="phone" class="form-control" placeholder="Enter From" maxlength="90" value="" />
                </div>
              
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="Text" name="pass" class="form-control" placeholder="Enter Destination" maxlength="90" />
                </div>
                
            </div>
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="Text" name="time" class="form-control" placeholder="Enter Time" maxlength="90" />
                </div>
                
            </div>
            
        
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            
            
            <div class="form-group">
            	<a href="trasport.php">Search Here</a>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>
<br><br>
&copy;2017 E-Dubai. Project By Abhik and Team.<br>
<a href="index.php">Back to Home</a>
</body>
</html>
<?php ob_end_flush(); ?>