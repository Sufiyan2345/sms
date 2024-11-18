<?php
// delete.data.php
$conn = mysqli_connect("localhost", "root", "", "eproject");

// Check if id is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user
    $sql = "DELETE FROM services WHERE id = $id";
    mysqli_query($conn, $sql);

    // Redirect to the admin data page
    header("Location: services.php");
    exit();
} 

?>
