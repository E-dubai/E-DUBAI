<?php
 $dbhost = 'localhost:3306';
   $dbuser = 'guysmasa_abhik';
   $dbpass = 'abhik@1234';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"guysmasa_edubai");

 $retval = mysqli_query( $conn ,$ress);