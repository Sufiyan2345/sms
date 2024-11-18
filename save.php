<?php

 $name  = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $services = $_POST['service'];
 $date = $_POST['adate'];
 $time = $_POST['atime'];
 //creating connection
 $conn = mysqli_connect("localhost","root","","eproject") or die("Connection failed");
 //sql Command line
 $sql = "INSERT INTO client(a_name,a_phone,a_email,a_services,a_date,a_time) VALUES('{$name}','{$phone}','{$email}','{$services}','{$date}','{$time}')";

 $result = mysqli_query($conn, $sql) or die("Failed");


header("Location: home.php");

mysqli_close($conn);

?>