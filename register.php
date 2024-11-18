<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: http://localhost/e-projectsms/home.php");
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <style>
body{
    background-image:url(https://img.freepik.com/premium-photo/tools-barbershop-black-background-studio-shot_93675-164621.jpg) ;
    background-position: fixed;
    background-size: cover;
    
}
</style>
    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div class="container py-5" >
<div class="row">
<div class="col-lg-6 mx-auto border shadow p-4" style="color:white; font-family: monospace;">
    <h2 class="text-center mb-4" >Register</h2>
    <hr/>

<?php
if(isset($_POST['save'])){
$fullname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$error = array();
if(empty($fullname) OR empty($email) OR empty($password) OR empty($cpassword)){
    array_push($error, "All fields are required");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    array_push($error, "Email is not valid");
}

if(strlen($password) < 8 ){
    array_push($error, "password needs to be 8 characters long");
}

if(($password!==$cpassword)){
    array_push($error, "password does not match ");
}

//to check if the email exists already or not
require_once "config.php";
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
$rowCount = mysqli_num_rows($result);
if($rowCount > 0){
    array_push($error, "Email already exist!");
} 
if(count($error) > 0 ){
    foreach($error as $error){
        echo "<div class='alert alert-danger'>$error</div>";
    } 
}else{ 
   $sql = "INSERT into users(fullname,email,password) VALUES (?,?,?)";
   $stmt =  mysqli_stmt_init($conn);
   $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
   if($prepareStmt){
    mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$passwordhash); //if you want to add hidden password to db use $passwordhash instead of $password
    mysqli_stmt_execute($stmt);
    echo "<div class='alert alert-success'>You are registered successfully.</div>";
   }else{
    die("something went wrong");
   }
}
}
?>





    <form action="register.php" method="post">
    <div class="row mb-3">
        <label class="col-sm-4 col-form-label" style="color:white;">Full Name*</label>
        <div class="col-sm-8">
            <input type="text" name="fname" class="form-control" placeholder="First Name" value="">
            <span class="text-danger"></span>
        </div>
    </div>
 
    <div class="row mb-3">
        <label class="col-sm-4 col-form-label" style="color:white;">Email*</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" placeholder="Email" value="">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label"style="color:white;">Password*</label>
        <div class="col-sm-8">
            <input type="password" name="password" class="form-control" placeholder="password" value="">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label"style="color:white;">Confirm Password*</label>
        <div class="col-sm-8">
            <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" value="">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="offset-sm-4 col-sm-4 d-grid">
         <button type="submit" class="btn btn-warning" name="save">Register</button>
        </div>
       

    </div>
    </form>
    <div><p>Already Registered ? <a href="login.php"> Login here</a></p></div>
</div>

</div>
</div>





        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
