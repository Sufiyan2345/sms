<?php
// Fetch the team member's data
$id = $_GET['id'];
$sql = "SELECT * FROM team WHERE id = $id";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    // Pre-fill form with existing data
    echo '
    <form action="edit.php?id='.$row['id'].'" method="post" enctype="multipart/form-data">
        <label for="name">Barber Name:</label>
        <input type="text" name="name" value="'.$row['name'].'" required><br>

        <label for="designation">Designation:</label>
        <input type="text" name="designation" value="'.$row['designation'].'" required><br>

        <label for="image">Image:</label>
        <input type="file" name="image"><br>
        <img src="'.$row['image_path'].'" width="100"><br>

        <label for="facebook_url">Facebook URL:</label>
        <input type="url" name="facebook_url" value="'.$row['facebook_url'].'"><br>

        <label for="twitter_url">Twitter URL:</label>
        <input type="url" name="twitter_url" value="'.$row['twitter_url'].'"><br>

        <label for="instagram_url">Instagram URL:</label>
        <input type="url" name="instagram_url" value="'.$row['instagram_url'].'"><br>

        <button type="submit" name="update">Update Team Member</button>
    </form>
    ';
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $facebook_url = $_POST['facebook_url'];
    $twitter_url = $_POST['twitter_url'];
    $instagram_url = $_POST['instagram_url'];

    // Handle image upload if new one is provided
    if (!empty($_FILES['image']['name'])) {
        $target_file = "img/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } else {
        // Keep the old image path if no new image is uploaded
        $target_file = $row['image_path'];
    }

    // Update the database
    $sql = "UPDATE team SET name='$name', designation='$designation', image_path='$target_file', facebook_url='$facebook_url', twitter_url='$twitter_url', instagram_url='$instagram_url' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Team member updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
