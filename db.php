<?php
// db.php
$conn = mysqli_connect("localhost", "root", "", "eproject");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
