<?php 
error_reporting(0);
session_start();
if (isset($_SESSION['username'])); {
  $loggedinusername = $_SESSION['username'];
  $loggedinuserdp = $_SESSION['userdp'];
  $dir = 'uploads/';
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body style="background-color: #D5EBF1;">
  <img src="<?php echo($dir.$loggedinuserdp);?> " class="userdp" alt="profile pic">
  <h3 style=" text-align: center;">welcome !</h3>
    <h3 style=" text-align: center;"> <?php echo(ucfirst($loggedinusername)); ?></h3>
    <h4 style=" text-align: center;">How is it going today ?</h4>
<hr>

   <div class="homeformdiv">
      <input type="text" name="search doctors,drugs,articles...."id="homeforminput"placeholder="search doctors,drugs,articles...." style="width:70%;height: 50px;margin-left: 10%;text-align: center; border-radius: 100px;"></input>
      <br>
      <a href="doctors.php">
      <img src="images/icon3.png" style="margin-right: 2%;width: 90px;" alt="doctors.php"></a>
      <a href="phamercy.php">
      <img src="images/icon2.png" style="width:90px;" alt="pharmacy.php">
    </a>
    <a href="ambulance.php">
      <img src="images/icon1.png" style="width:90px;" alt="ambulance.php">
    </a>
      <h2 style="margin-right: 35%;">Health articles</h2>
      <img src="images/fruits.png" ma>
       <img src="images/firstaid.png" style="margin-left: 5%;">
       <br> 
      <img src="images/article (3).png" style="margin-left:5%;" >
       <hr>
       <img src="images/home3 (1).png" style="margin-left:10%;">
       <a href="reports.php"><img src="images/reports.png" style="margin-left:10%;" alt="report.php"></a>
       <a href="notification.php">
       <img src="images/notification.png" style="margin-left:10%;" alt="notification.php">
     </a>
     <a href="profile.php">
       <img src="images/home3 (2).png" style="margin-left:10%;" alt="profile.php">
      


    </div>
  

</body>
</html>
<style type="text/css">
  @media only screen and (max-width: 600px) {
  body{
    align-items: center;
    background-color: #D5EBF1;
  }
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
/*    display: inline-block;*/
  }
  .homeform{
    text-align:center;
padding:5%;
  }
  .homeformdiv{
    text-align:center;
page-break-after:15px;
border-radius:7px;
padding-bottom:20px;
padding-top:20px;
display-inline-flex;
width:100%;
height: 100px;
  }
  .homeforminput{
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
  .icon{
    margin-left: 20%;
  }
  .userdp{
    width: 150px;
    height: 150px;
    border-radius: 100%;
  }
}


</style>