<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: http://localhost/e-projectsms/admin-salon/login.php");
    exit(); // Make sure to exit after redirection
}

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = 'localhost';
$db = 'eproject';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $db) or die("Connection failed: " . mysqli_connect_error());

if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $facebook_url = $_POST['facebook_url'];
    $twitter_url = $_POST['twitter_url'];
    $instagram_url = $_POST['instagram_url'];

    // Image upload handling
    $target_dir = "uploads/";

    // Check if the uploads directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); // Create the directory if it doesn't exist
    }

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (limit: 5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
        echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload the file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Use prepared statement to insert data into the database
            $stmt = $conn->prepare("INSERT INTO team (name, designation, image_path, facebook_url, twitter_url, instagram_url) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name, $designation, $target_file, $facebook_url, $twitter_url, $instagram_url);

            if ($stmt->execute()) {
                echo "New team member added successfully!";
                header("Location: new_barber.php"); // Redirect to the display page
                exit(); // Make sure to exit after redirection
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>
