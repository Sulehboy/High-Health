<?php 
$msg = null;
$_GET['msg'] = null;
if ($_GET['msg'] =='empty' ) {
	$msg = "All fields are required";
}elseif ($_GET['msg'] =='failed') {
	$msg = "Something went wrong!";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIGH HEALTH:SIGNIN</title>
</head>

</style>
<body>
	<img src="images/logo.png" class="applogo">
	<form id="signinForm" action="lib/processor.php?action=login" method="post">
		<div class="msgBox"><?php echo($msg); ?></div>
<div id="SignInFormDiv">
	<input type="emil" name="user_name" id="userFormInput" placeholder="Enter Your email" required>
	</div>
<div id="SignInFormDiv">

	<input type="password" name="pass" id="userFormInput"placeholder=" Enter Your password" required>
</div>
	<h5 style=" font-family: poppins;">Forgot password?</h5>
	<a href="home1.php">
		<input type="submit" name="signin" value="Sign In" class="submitBtn">

</a>
<br>
<a href="registration.php">
<img src="images/apple2.png" alt="registration">
</a>
<br>
<img src="images/line.png">
<br>
<a href="home2.php">
<img src="images/google.png"
alt="home2">
</a>
<br>
  <a href="home2.php">
<img src="images/facebook.png" alt="home2"></a>
</div>
</form>	
<style type="text/css">
/*Stytles for small screens (Mobile)*/
@media only screen and (max-width: 600px) {
html{
	 font-family:poppins;
      text-align: center;
}
    header{
    background: #FFFFFF;
	  text-align: center;
}	
nav{
	   background: #FFFFFF;
		 padding-bottom: 45px;
		 text-align: center;
/*		display: inline-block;*/
}
#SignInForm{
	text-align:center;
padding:5%;
}
#SignInFormDiv{
	text-align:center;
   page-break-after:15px;
   border-radius:7px;
   padding-bottom:2px;
   padding-top:2px;
   display-inline-flex;
   width:100%;
   height: 50px;
}
#userFormInput{
	width:90%;
	height: 40px;
	text-align: center;
	border-radius: 7px;
	border-radius: 5px;
	border:1px solid grey;
	text-align: left;
	padding-left: 10px;
	margin-top: 1px;	
}
.submitBtn{
background: rgb(77,25,159);
background: radial-gradient(circle, rgba(77,25,159,1) 0%, rgba(178,103,189,1) 100%);
width: 45%;
height: 45px;
color:#FFFF;
border-radius: 100px;
text-align: center;
border: none;
cursor: pointer;
}

.applogo{
	width: 52%;
	height: 45%;
}
.alert{
	color: lightblue;
}
.danger{
	color: red;
}
.success{
	color: green;
}
.warning{
	color: yellow;
}




/*//style for file input*/

.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}

.custom-file-input::before {
  content: 'Upload your pr';
  display: inline-block;
  background: linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}

.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}
}
</style>
</body>
</html>