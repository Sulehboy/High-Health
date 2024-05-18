<?php
// PROFILE INFO
include 'dbconfig.php';
if (isset($_SESSION['uid']) || isset($_SESSION['umail'])) {
	$userID = $_SESSION['uid'];
	$loggedUserName = $_SESSION['ufullname'];
	$loggedUserEmail = $_SESSION['umail'];
     


	//update records
	if (isset($_POST['update'])) {
		$newEmail = $_POST['newmobile'];
		$newpassword = $_POST['newemail'];
		$sql = "UPDATE `tblcustomers` SET $Email='$newEmail', $password ='$newpassword'  WHERE users.id ='$userID'";

		$query = mysqli_query($conn, $sql);
		if ($query == true) {
			exit(header('location:logout.php'));
		}else{
			echo "Failed";
		}
	}
}else{
	header('location:logout.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
<h2>Update My Profile</h2>

<form action="" method="post">
	<input type="email" name="newemail" value="<?php echo($loggedUserEmail); ?>" placeholder='New Email'>
	<br><br>
	<input type="password" name="newpassword" value="<?php echo($loggedUserpassword); ?>" placeholder='New Passsword'>
<br><br>
	<input type ="submit" name = "update" value="Update Profile">
</form>
</body>
</html>