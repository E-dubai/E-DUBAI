
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Dubai Login</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
            	<h4 class="">Search People for Car Pooling</h4>
            </div>
        
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="text" name="email" class="form-control" placeholder="From" value="" maxlength="40" />
                </div>
                 
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="text" name="pass" class="form-control" placeholder="TO" maxlength="15" />
                </div>
                 
            </div>
            
          
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Search</button>
            </div>
            
            
            
            <div class="form-group">
            	<a href="rt.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
    </div>	
<?php
 
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		$emailError="";
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
	 
		
		$DBHOST= 'localhost:3306';
$DBUSER ='guysmasa_abhik';
$DBPASS ='abhik@1234';

$con = mysqli_connect($DBHOST,$DBUSER,$DBPASS,"guysmasa_edubai");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
echo "From:  <b>".$email." </b>  To ------>  <b>".$pass."</b> <br><br>";
echo "<b>Name     |    Phone Number       | Time    </b><br>";
$query="SELECT * from users1";
	$email=str_replace(" ","",$email);
	$email=strtolower($email);
	$pass=str_replace(" ","",$pass);
	$pass=strtolower($pass);
$result =  mysqli_query($con, $query) or die
("Error in Selecting " . mysqli_error($con));
$rows = array();
while ($row = $result->fetch_assoc()) {
$rop1=str_replace(" ","",$row['place1']);
	$rop1=strtolower($row['place1']);
	$rop2=str_replace(" ","",$row['place2']);
	$rop2=strtolower($row['place2']);
	if($rop1==$email && $rop2==$pass){
		 $emailaa=$row['mid'];
		 
		
			$sqla="SELECT * from users where userId='$emailaa'";
$resulta=mysqli_query($con,$sqla);
$rowa=mysqli_fetch_array($resulta,MYSQLI_ASSOC);
		echo $rowa['userName']."    &nbsp;&nbsp;&nbsp;&nbsp;".$rowa['ph']."     &nbsp;&nbsp;&nbsp;&nbsp;".$row['time']."<br>";
	 $emailaa="";
		
		
	}
 
	}

	}

	
?>


</div><br><br>&copy;2017 E-Dubai. Project By Abhik and Team.<br>
<a href="index.php">Back to Home</a>
</body>
</html>
 