<?php
if(isset($_POST['upload'])) {
  $file_name = $_FILES['profile_picture']['name'];
  $file_tmp = $_FILES['profile_picture']['tmp_name'];
  $file_type = $_FILES['profile_picture']['type'];
  $file_size = $_FILES['profile_picture']['size'];
  
  // You can add further validation or processing here
  
  move_uploaded_file($file_tmp, "uploads/" . $file_name); // Move the uploaded file to a directory (you might need to create the 'uploads' directory)
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
  <div class="file-input-container">
    <input type="file" name="profile_picture" id="file-input" class="file-input">
    <label for="file-input" class="file-input-label">
      <span class="file-input-text">Choose a file</span>
      <span class="file-input-button">Browse</span>
    </label>
  </div>
  <button type="submit" name="upload">Upload</button>
</form>

</body>
</html>