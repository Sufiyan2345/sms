<?php
$conn = mysqli_connect("localhost", "root", "", "eproject");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = $id";
    
    if(mysqli_query($conn, $sql)) {
        echo "Product deleted successfully.";
        header("Location: product.php"); // Redirect back to products page
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}
?>
