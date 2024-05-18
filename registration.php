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
	<title>HIGH HEALTH:Registration</title>

</head>

<body>

	<img src="images/logo.png" class="applogo"> 

	<form id="signUpForm" action="lib/processor.php?action=signup" method="post"  enctype="multipart/form-data">
		
<div id="SignInFormDiv">

	<div class="msgBox"><?php echo($msg); ?></div>
	<input type="text" name="fullname" id="userFormInput" placeholder="Enter Fullname" required style="border-radius:10px;"><br>
</div>
	
<div id="SignInFormDiv">
	<input type="email" name="email" id="userFormInput" placeholder="Enter Email (Optional)" style="border-radius:10px;"><br>
</div>
<div id="SignInFormDiv">
	<input type="tel" name="mobile" id="userFormInput" placeholder="Enter Mobile No." required style="border-radius:10px;"><br>
</div>
<div id="SignInFormDiv">
 
 	<input type="password" name="pass" id="userFormInput"  placeholder="Create Password" maxlength="150" required style="border-radius: 10px;">
 </div>

<div id="SignInFormDiv">
	<input type="file" name="file" id="userFormInput" class="custom-file-input" required style="border-radius:10px;">
</div>
<br>
<input type="checkbox" class="custom-checkbox" name="terms" required>

<p style=" font-family: poppins;">I agree to the healthcare Terms of Service<br> and Privacy Policy</p>

<a href="dashboard.php">
<input type="submit" name="signup" value="Sign Up" class="submitBtn"></a>

<br>
<a href="SignIn.php">
<img src="images/doc10.png" alt="Sign In">
	
</div>
	</form>
<!-- <h1>user sign Up form end</h1> -->
<!-- <style> -->

<style type="text/css">

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

#SignUpForm{
text-align:center;
background-color:red;
padding:5%;
}

#SignUpFormDiv{
text-align:center;
page-break-after:15px;
border-radius:10px;
padding-bottom:20px;
padding-top:20px;
width:100%;
height: 100px;
}

p{
font-size: 12PX;
text-align: center;
}
#applink{
		color: #1451EF;
		list-style: none;
		display: inline-block;
		padding-left: 15px;
		margin-right: 12px;
	}
#userFormInput{
	width:50%;
	height: 40px;
	text-align: center;
	border-radius: 7px;
	border-radius: 20px;
}


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
#SignUpForm{
text-align:center;
background-color:red;
padding:5%;
}

#SignUpFormDiv{
text-align:center;
page-break-after:15px;
border-radius:7px;
padding-bottom:20px;
padding-top:20px;
display-inline-flex;
width:100%;
height: 100px;
}
p{
font-size: 12PX;
text-align: center;
}
#applink{
		color: #1451EF;
		list-style: none;
		display: inline-block;
		padding-left: 15px;
		margin-right: 12px;
	}

#userFormInput{
	width:90%;
	height: 40px;
	text-align: center;
	border-radius: 7px;
	border-radius: 1px;
	border:1px solid grey;
	text-align: left;
	padding-left: 10px;
	margin-top: 15px;
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
	width: 45%;
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
  content: 'Upload profile photo';
  display: inline-block;
  background: transparent;
  width: 100%;
  height: 40px;
/*  background: linear-gradient(top, #f9f9f9, #e3e3e3);*/
  border: 1px solid #999;
  border-radius: 7px;
  padding: 5px 8px;
  text-align: left;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: inherit;
  border: none;
}
.custom-file-input:hover::before {
  border-color: none;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}
}
/*styles for checkbox*/

/* Style the custom checkbox */
.custom-checkbox {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #eee;
    border-radius: 3px;
    position: relative;
    cursor: pointer;
}

/* Style the custom checkbox when it's checked */
.custom-checkbox:checked {
    background-color: #007bff; /* Change to your preferred color */
}

/* Style the checkmark inside the custom checkbox */
.custom-checkbox:after {
    content: '';
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.2s ease-in-out;
}

/* Show the checkmark when the custom checkbox is checked */
/*.custom-checkbox:checked:after {
    transform: translate(-50%, -50%) scale(1);
}
*/
/* Optional: Add some margin between the checkbox and its label */
.checkbox-label {
    margin-left: 5px;
}
</style>


</body>
</html>
<!-- <script>
	setTimeout(function() {
		window.location="home1.php"
	}, 1000);
</script>
 -->