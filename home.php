<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	 $dbhost = 'localhost:3306';
   $dbuser = 'guysmasa_abhik';
   $dbpass = 'abhik@1234';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"guysmasa_edubai");
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="themes/twitter.css">
 <script src="dist/sweetalert-dev.js"></script>
 <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =" Time : "+
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>

</head>
<body onload="startTime()">

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="javascript:us()">E-DUBAI</a>
		 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://guysmasala.com/oxwall">Dubai Network</a></li>
			 <li ><a href="http://guysmasala.com/edubai/trasport.php">Car Pool</a></li>
            <li><a href="javascript:aboutus()">About-Us</a></li>
            <li><a href="">What's Next</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	<div id="wrapper">

	<div class="container">
    <style>
	body {
    margin: 0;
    padding: 0;
}

.containera {
    width: 100%;
}

.box {
    float: left;
    width: 50%;
}

.box:before {
	content: "";
	display: block;
	padding-top: 100%;
}

.red {
    background: url(images/w.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}


.green {
    background: url(images/t.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}

.greena {
    background: url(images/ac.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}
.gaa{
    background: url(images/d.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}
.ga {
    background: url(images/p.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}

.daa{
    background: url(images/n.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}
.da {
    background: url(images/da.png);
	 background-size: 100px 100px;
    background-repeat: no-repeat;
}

.greenaa{
    background: url(images/e.png);
	 background-size: 120px 120px;
    background-repeat: no-repeat;
}
 
}
	</style><br>
   <div class="containera">



<div id="txt"></div><br>
   <a href="weather.php">  <div class="box red"></div></a>
    <a href="https://www.viamichelin.com/web/Traffic/Traffic_info-Dubai-_-Dubai-United_Arab_Emirates?strLocid=31NTEyamYyMTBjTWpVdU1qWTNOREU9Y05UVXVNamt5TmpnPQ=="><div class="box green"></div></a>
	 <a href="post.php"><div class="box greena"></div></a>
	 <div class="box greenaa"></div>
	  <div class="box ga"></div>
	  <a href="https://search.cdc.gov/search?utf8=%E2%9C%93&affiliate=cdc-main&query=head+pain"><div class="box gaa"></div></a>
	   <a href="http://www.thefreedictionary.com/meaning"> <div class="box da"></div></a>
	 <a href="news"><div class="box daa"></div></a>
</div>
 
    
    </div>
    
    </div>
    <link rel="stylesheet" href="example/example.css">
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   
   <script>
var a='<?php echo $userRow['userName']; ?>';
var b=Number(<?php echo rand(0,3000); ?>);


if(b%5==0){
	swal({
		title: "WOLALA!",
		text: "Welcome "+a+" To E-Dubai. It was Nice to meet you this day. we hope that you like our service",
		confirmButtonText: "Cool!",
		customClass: 'twitter'
	});
}
function aboutus(){
	swal({
		title: "About Us",
		text: "Developed by Abhik Saha , Abhinav Pryadarshi and the team. All in one social smart city platform. 50/50 source build.",
		confirmButtonText: "Cool!",
		customClass: 'twitter'
	});
	
}

function us(){
	swal({
		title: "E-DUBAI",
		text: "E-Dubai is a platform to provide online social service and real time information of all major possibilites with smart AI features to keep user up-to-dated and help to make better decisions in future.",
		confirmButtonText: "Cool!",
		customClass: 'twitter'
	});
	
}
</script>
<br>
&copy; 2017 E-Dubai. Under Team Project by Abhik , Abhinav, Abhishek .


</body>
</html>
<?php ob_end_flush(); ?>