<?php
$service = $_POST['service'];
$cost = $_POST['cost'];

// Creating connection
$conn = mysqli_connect("localhost", "root", "", "eproject") or die("Connection failed");

// SQL command to insert data
$sql = "INSERT INTO add_services (s_name, s_cost) VALUES ('{$service}', '{$cost}')";

// Execute query
if (mysqli_query($conn, $sql)) {
    // Redirect on success
    header("Location: http://localhost:82/e-projectsms/admin-salon/services.php");
    exit(); // Ensure no further code is executed
} else {
    // Handle error
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
