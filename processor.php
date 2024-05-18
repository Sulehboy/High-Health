<!-- We handle page requests -->
<?php
$action =  $_GET['action'];
	require '../dbconfig.php';
switch ($action) {
	case 'signup':
		
			if (isset($_POST['signup'])) {
				//submitted user data
				$appName = "high health";
				$userFullname = mysqli_escape_string($conn, $_POST['fullname']);
				$userEmail = mysqli_escape_string($conn, $_POST['email']);
				$userMobile = mysqli_escape_string($conn, substr($_POST['mobile'] ,-9));
				$userPass = mysqli_escape_string($conn, $_POST['pass']);
				$terms = mysqli_escape_string($conn, $_POST['terms']);
				$regdate = date('D-m_Y: H:i:s');
				$regstatus = 'inactive';
				$userPassword = password_hash($userPass, PASSWORD_DEFAULT);

				if (empty($userFullname) || empty($userMobile) || empty($userPassword) || empty($terms)) {
					header('location:../registration.php?msg=empty');
					exit();
				}else{
					$sqlchekuser = "SELECT * FROM `tblcustomers` WHERE `mobileno` = '$userMobile' OR `email` = '$userEmail'";
					$queryCheck = mysqli_query($conn,$sqlchekuser);

					if (mysqli_num_rows($queryCheck) > 0) {
						header('location:../registration.php?msg=exist');
						exit();
					}else{

         // Perform image upload
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileType = $_FILES['file']['type'];
      $fileError = $_FILES['file']['error'];
     
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowedFileType = array('png','jpg','jpeg');

      if (in_array($fileActualExt, $allowedFileType)) {
       
        if ($fileError === 0) {
         
          if ($fileSize < 10000000) {
           
            # unique file name
            $newFileName = $userMobile.".".$fileActualExt;

            $fileDestination = '../uploads/'.$newFileName;

            // move file to server
           
            move_uploaded_file($fileTmpName, $fileDestination);

          }else{
            echo "<script>
                  alert('Photo could not be uploaded');
              </script>";
          }
         
        }else{
          echo "<script>
                  alert('Unexpected error occured while uploading your photo');
              </script>";
        }
      }else{
        echo "<script>
                  alert('Please select jpg,png,jpeg file formats');
              </script>";
      }
     
// end image upload

				$sql= "INSERT INTO `tblcustomers`(`fullname`, `email`, `mobileno`, `password`, `regdate`, `regstatus`, `profilepic`) VALUES ('$userFullname','$userEmail','$userMobile','$userPassword','$regdate','$regstatus','$newFileName')";
				$query = mysqli_query($conn,$sql);

				if ($query == true) {
				header('location:../signin.php?msg=success');
				exit();
					}else{
					header('location:../registration.php?msg=failed');
					}
				} 

			} 
		}

		break;
	
	case 'login':
		
if (isset($_POST['signin'])) {
	//submitted user data

	$username = $_POST['user_name'];
	$userPassword = $_POST['pass'];
if (empty($username) || empty($userPassword)) {
	echo "All fields are required";
	}else{

		// search the database records
	$sql= "SELECT * FROM `tblcustomers` WHERE `email` = '$username' OR `mobileno` = '$username'";
	$query = mysqli_query($conn,$sql);
	// records found
	$count = mysqli_num_rows($query);
	if ($count < 1) {
		//$msg = "<span class='danger'>No record found...</span>";
		echo "No records found";
	}else{
		// call records from database
		foreach ($query as $key => $userData) {
			$userID =  $userData['id'];
			$userName = $userData['fullname'];
			$user_Email = $userData['email'];
			$user_Mobile = $userData['mobileno'];
			$userPass = $userData['password'];
			$userProfile = $userData['profilepic'];
		}

	// compare passwords and verify

		if (password_verify($userPassword, $userPass)) {
			// $msg = "<span class='success'>"." You Signed In successfully.</span>";
			// store in sessions
			$_SESSION['username'] = $userName;
			$_SESSION['userid'] = $userID;
			$_SESSION['useremail'] =  $user_Email;
			$_SESSION['useremobile'] =  $user_Mobile;
			$_SESSION['userdp'] =  $userProfile;


			header('location:../dashboard.php');
			exit();
		}else{
			$msg = "<span class='danger'>Login failed. Please try again...</span>";
			header('location:../signin.php?msg=failed');
		}
	}
}
}
		break;
	default:
		// code...
		break;
}










 ?>