<?php


 if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5097152) {
         $errors[]='File size must be excately 5 MB';
      }
      
      if(empty($errors)==true) {

	  move_uploaded_file($file_tmp,"images/".'p'.$file_name);

		
      }else{
       
      }
   }

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from p.w3layouts.com/demos/aug-2016/19-08-2016/lambent_login_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2017 09:29:53 GMT -->
<head>
	<title>Lambent Login Form a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>


<body>


<!---728x90--->

	<div class="main-agileinfo">
		<h2>Contact Governmnet </h2>
<form action = "data.php" method = "get" enctype = "multipart/form-data">
	
<font color="white">Problem:
<select class="name" name="d" required="">
<option value="govr" >Road Problem</option>
<<option value="govt" >Traffic</option>
<option value="govd" >Drainage</option>
<option value="gove" >Electricity</option>
<option value="govw" >Water</option>
<option value="govair" >Air</option>
<option value="govl" >Land Issue</option>
<option value="gova" >Ask</option>
<option value="govs" >Suggest</option>
</select><br>	<br>		<br>	
Description:<textarea class="name" name="des" rows="5" required="" ></textarea>

	<br>	
	<input type="text" name="add" class="name" placeholder="Address" required="">	

Photo:<input type="file" name="image" accept="image/*" capture="camera" id="capture"> <br><br>
<input type="submit" value="Submit">
</form>
	</div>

</body>

<!-- Mirrored from p.w3layouts.com/demos/aug-2016/19-08-2016/lambent_login_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2017 09:29:57 GMT -->
</html>