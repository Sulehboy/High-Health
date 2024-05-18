<?php
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

        // Get the file extension
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');

        // Check if the file type is allowed
        if (in_array($fileType, $allowTypes)) {
            // Upload the file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Display the uploaded image
                echo "The file " . $fileName . " has been uploaded successfully.<br>";
                echo '<img src="' . $targetFilePath . '" alt="Uploaded Image">';
            } else {
                echo "Sorry, there was an error uploading your file.";
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
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <div class="wrapper">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" class="my_file" accept="image/*">
            <i class="fa fa-camera" aria-hidden="true"></i>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
<style type="text/css">
    body{
        margin: 0;
        padding: 0;
        background: purple;
    }
    .wrapper{
        height: 300px;
        width: 300px;
        position: relative;
        border: 5px solid #fff;
        border-radius: 100%;
        background: url(Alphonce.png); /* Placeholder image */
        background-size: 100% 100%;
        margin: 100px auto;
        overflow: hidden;
    }
    .my_file{
        position: absolute;
        bottom: 0;
        outline: none;
        color: transparent;
        width: 100%;
        box-sizing: border-box;
        padding: 15px 120px;
        cursor: pointer;
        transition: 0.5s;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
    }   
    .my_file::-webkit-file-upload-button{
        visibility: hidden;
    }
    .my_file::before{
        content:'\f030'; /* Using the correct font-awesome Unicode character */
        font-family: 'Font Awesome 5 Free'; /* Adjust font family */
        font-size: 50px;
        color: black;
        display: inline-block;
        -webkit-user-select: none;
    }
    .my_file::after{
        content: 'Update';
        font-family: arial;
        font-weight: bold;
        color: #fff;
        display: block;
        top: 70px;
        font-size: 14px;
        position: absolute;
    }
    .my_file:hover{
        opacity: 1;
    }
</style>