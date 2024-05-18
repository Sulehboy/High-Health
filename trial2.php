<?php
error_reporting();
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Set directory where the file will be uploaded
        $targetDir = "uploads/";
        
        // Get the file name
        $fileName = basename($_FILES["image"]["name"]);
        
        // Set the file path
        $targetFilePath = $targetDir . $fileName;
        $profilepicture = $_FILES['$profilepicture'];
        
        // Get the file extension
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        
        // Allow certain file formats
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
        
        // Check if the file type is allowed
        if (in_array($fileType, $allowTypes)) {
            // Upload the file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                echo "The file " . $fileName . " has been uploaded successfully.";
            } else {
                echo "Sorry, there was an error uploading your file.";
             header('location:home2.php');

            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "Please select an image file to upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>