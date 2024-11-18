<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: http://localhost/e-projectsms/login.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SALON MANAGEMENT SYSTEMe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="home.php" class="navbar-brand ms-4 ms-lg-0 ">
            <h1 class="mb-0 text-primary text-uppercase text-warning"><i class="fa fa-cut me-3 "></i>SMS</h1>
            <H5>SALON MANAGEMENT SYSTEM</H5>
            <!-- <img src="C:\Users\asp\Downloads\Black and White Modern Illustrative Barbershop Logo (2)-Photoroom.png" width="200px" height="200px"> -->
        </a>
        <button type="button" class="navbar-toggler me-4 " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon bg-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
             
                
                    <a href="cart.php" class="nav-item nav-link" > Services</a>
                    <a href="product.php" class="nav-item nav-link" > Products</a>
              
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="appointment.php" class="btn btn-danger rounded-0 py-2 px-lg-4 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
             
            <a href="logout.php">
         <button type="submit" class="btn btn-warning rounded-0 py-2 px-lg-4 d-none d-lg-block" name="logout">Logout</button>
          </a>
        </div>
</div>

        </div>
    </nav>
<!-- Feedback Start -->
<div class="container-xxl py-5" id="feedback">
    <div class="container">
        <h2 class="text-uppercase mb-4">Feedback👍</h2>
        <div class="bg-secondary p-5">
            <h3 class="text-uppercase mb-4">We value your feedback!</h3>
            <p class="mb-4">Please share your experience with us and help us improve our services.</p>
            <form id="feedbackForm">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control bg-transparent" id="feedbackName" placeholder="Your Name" required>
                            <label for="feedbackName">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control bg-transparent" id="feedbackEmail" placeholder="Your Email" required>
                            <label for="feedbackEmail">Your Email</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control bg-transparent" placeholder="Leave your feedback here" id="feedbackMessage" style="height: 100px" required></textarea>
                            <label for="feedbackMessage">Feedback</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-warning w-100 py-3" type="submit" onclick="submitFeedback()">Submit Feedback</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Feedback End -->


    <!-- Footer Start -->
   <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Get In Touch</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-warning"></span>
                    </div>
                    <span>123 Street,Islamabad, PAK</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-warning"></span>
                    </div>
                    <span>+(92) 345 6879076</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-warning"></span>
                    </div>
                    <span>barbershop@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="cart.php">Our Services</a>
                    <a class="btn btn-link" href="feedback">Give Feedback</a>

                    <a class="btn btn-link" href="appointment.php">Book now</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Newsletter</h4>
                <div class="position-relative mb-4">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
                <div class="d-flex pt-1 m-n1">
                    <a class="btn btn-lg-square btn-dark text-warning m-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-dark text-warning m-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-dark text-warning m-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-lg-square btn-dark text-warning m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
   
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-muted btn-lg-square back-to-top" style="background-color: #191C24;"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

   <script>
    function validateForm() {
        var usname = document.getElementById("name").value;
        var phno = document.getElementById("email").value;
        var emailadd = document.getElementById("subject").value;
        var Addre = document.getElementById("message").value;
        
        var usnamepattern = /^[A-Za-z]{3,20}$/;
        var phnopattern = /^[A-Za-z0-9]+@(gmail).[A-za-z]{3,}$/;
        var emailaddpattern = /^[A-Za-z]{3,20}$/;
        var Addrepattern = /^[A-Za-z]{3,20}$/;

        var valid = true;

        if (!usnamepattern.test(usname)) {
            document.getElementById("nerror").innerHTML = "Username is invalid";
            document.getElementById("nerror").style.color = "red";
            valid = false;
        } else {
            document.getElementById("nerror").innerHTML = "";
        }

        if (!phnopattern.test(phno)) {
            document.getElementById("emerror").innerHTML = "Enter a valid Email";
            document.getElementById("emerror").style.color = "red";
            valid = false;
        } else {
            document.getElementById("emerror").innerHTML = "";
        }

        if (!emailaddpattern.test(emailadd)) {
            document.getElementById("serror").innerHTML = "Enter your subject";
            document.getElementById("serror").style.color = "red";
            valid = false;
        } else {
            document.getElementById("serror").innerHTML = "";
        }

        if (!Addrepattern.test(Addre)) {
            document.getElementById("merror").innerHTML = "Message is invalid";
            document.getElementById("merror").style.color = "red";
            valid = false;
        } else {
            document.getElementById("merror").innerHTML = "";
        }

        
    }
</script>



</body>
</html>
