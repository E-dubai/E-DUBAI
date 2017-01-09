<?php


	
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

$sql="SELECT * from users where userEmail='arnabhik@gmail.com'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ($row["userName"]);
mysqli_close($con);
?>