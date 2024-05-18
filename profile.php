<?php 
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
  $loggedinUsername = $_SESSION['username'];
  $loggedinUserEmail = $_SESSION['useremail'];
  $loggedinuserdp = $_SESSION['userdp'];
  $dir = 'uploads/';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIGH HEALTH:Profile</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>
<body>
	  <img src="<?php echo($dir.$loggedinuserdp);?> " class="userdp" alt="profile pic">
	<h3 style="font-family: poppins;"><?php echo($loggedinUsername); ?><br><small><?php echo($loggedinUserEmail); ?>
<br>
	<img src="images/symbols.png" id="imagesymbol">
	<br>
  <br>
  <br>
	<img src="images/Mysave (1).png">
  <br>
  <br>
    <img src="images/Mysave (3).png">
    <br>
    <br>
    <a href="check-out.php">
      <img src="images/Mysave (2).png" alt="check-out.php">
    </a>
      <br>
      <br>
        <img src="images/Mysave (4).png">
        <br>
        <br>
        <a href="logout.php">
          <img src="images/Mysave (5).png" alt="logout.php">
        </a>





	<br>
 <br>
      <hr>
      <a href="dashboard.php">
      <img src="images/home 2.png" style=" margin-bottom: 10%;" alt="home2.php"></a>
      <a href="Reports.php">
        <a href="Reports.php">
      <img src="images/reports.png" style="margin-left:15%; margin-bottom: 10%;" alt="Reports" alt="Reports.php"></a>
      <a href="Notification.php">
      <img src="images/notification.png" style="margin-left:15%; margin-bottom: 10%;" alt="Notification.php"></a>
  <img src="images/profile.png" id="profile" style="margin-left:15%; margin-bottom: 10%;">
</body>
</html>
<style type="text/css">
	body{

	background-color:#F5F5F5;
text-align:center;	
	}
	
#imagesymbol{
margin-top:3%;
}
#imagegroups{
margin-top:3%;

}
#imageapple{
margin-top:5%;
}
#home2{
  margin-left: 30px;
  margin-right: 5px;
  margin-top: 10%;
}
#rel{
  margin-left: 30px;
    margin-top: 10%;

}
#name{
  margin-left: 30px;
    margin-top: 10%;

}
#profile{
  margin-left: 30px;
    margin-top: 10%;

}

.poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}

.poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}

.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.poppins-extrabold {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: normal;
}

.poppins-black {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.poppins-thin-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.poppins-extralight-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: italic;
}

.poppins-light-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.poppins-regular-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.poppins-medium-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.poppins-semibold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: italic;
}

.poppins-bold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.poppins-extrabold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: italic;
}

.poppins-black-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: italic;
}
.userdp{
    width: 150px;
    height: 150px;
    border-radius: 100%;
}
}


</style>