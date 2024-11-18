<?php
$conn = mysqli_connect("localhost", "root", "", "eproject");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete the record from the database
    $sql = "DELETE FROM team WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Member deleted successfully!";
        header("Location: new_barber.php");  // Redirect to the team members page
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
