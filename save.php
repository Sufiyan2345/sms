<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "eproject");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $adate = mysqli_real_escape_string($conn, $_POST['adate']);
    $atime = mysqli_real_escape_string($conn, $_POST['atime']);

    // Insert appointment into the database
    $sql = "INSERT INTO appointments (name, phone, email, service, date, time) VALUES ('$name', '$phone', '$email', '$service', '$adate', '$atime')";

    if (mysqli_query($conn, $sql)) {
        // Successful insertion, redirect to a thank you page or display a message
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>