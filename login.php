
<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location:  http://localhost/e-projectsms/admin-salon/index.php");
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>
<style>
body{
    background-image:url(https://png.pngtree.com/thumb_back/fh260/background/20230612/pngtree-some-pictures-of-an-antique-barber-shop-image_2906288.jpg) ;
    background-position: fixed;
    background-size: cover;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 290px;
   
    
}

.container{
  
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.col-lg-6 {
    background-color: rgba(0, 0, 0, 0.6); /* Slightly darken the background for contrast */
    border-radius: 10px;
}

h2 {
    color: white;
    font-family: monospace;
    font-weight: bold;
}


</style>
    <body>
       
        <main>
        <div class="container">
<div class="row">
<div class="col-lg-6 mx-auto border shadow p-4"  style="color:white; font-family: monospace;">
    <h2 class="text-center mb-4"style="color:white; font-family: monospace;"><b>Login Admin Panel...</b></h2>
    <hr/>
     <?php
     if(isset($_POST["login"])){
     $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "config.php";
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($user){
        if(password_verify($password, $user['password'])){
            session_start();
            $_SESSION["user"] = "yes";
            header("Location:  http://localhost/e-projectsms/admin-salon/index.php");
            die();
        }
        else{
            echo "<div class='alert alert-danger'> Password Does not matched</div>";
        }
    }else{
            echo "<div class='alert alert-danger'>Email  Does not matched</div>";
        }
       
    } 
//hassan@gmail.com
//hello1234#
     ?>



        <form action="login.php" method="post">
 
    <div class="row mb-3">
        <label class="col-sm-4 col-form-label" style="color:white;">Email</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" placeholder="Email" value="">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label" style="color:white;">Password*</label>
        <div class="col-sm-8">
            <input type="password" name="password" class="form-control" placeholder="password" value="">
            <span class="text-danger"></span>
        </div>
    </div>


    <div class="row mb-3">
        <div class="offset-sm-4 col-sm-4 d-grid">
         <button type="submit" class="btn btn-warning" name="login">Login</button>
        </div>
       

    </div>
    </form>
   
</div>
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
