<?php

 $id  = $_POST['id'];
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];

 //creating connection
 $conn = mysqli_connect("localhost","root","","eproject") or die("Connection failed");
 //sql Command line
 $sql = "INSERT INTO users (id,fullname,a_email,pass,e) VALUES('{$id}','{$fullname}','{$email}','{$pass}',')";

 $result = mysqli_query($conn, $sql) or die("Failed");


header("Location: http://localhost/e-projectsms/admin-salon/register.php");

mysqli_close($conn);

?>
