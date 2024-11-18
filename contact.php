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
    <title>SALON MANAGEMENT SYSTEM</title>
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
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="home.php">Home</a></li>
                   
                    <li class="breadcrumb-item text-warning active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">
                        <p class="d-inline-block bg-dark text-white py-1 px-4">Contact Us</p>
                        <h1 class="text-uppercase mb-4">Have Any Query? Please Contact Us!</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name"  required>
                                        <label for="name" id="nerror">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" required>
                                        <label for="email" id="emerror">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="subject" placeholder="Subject" required>
                                        <label for="subject" id="serror">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control  bg-transparent" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                        <label for="message" id="merror">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit" onclick="validate()">Send Message</button>
                                </div>
                                <a href="feedback.php" class="nav-item nav-link success" style="color:gold;"><b>Feedback Now</b></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="google-map w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.137712000841!2d67.0304584760764!3d24.9273781425753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1707734972071!5m2!1sen!2s"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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

                    <a class="btn btn-link" href="feedback.php">Give Feedback</a>

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
        function validate(){
            var usname=document.getElementById("name").value;
            var phno=document.getElementById("email").value;
            var emailadd=document.getElementById("subject").value;
            var Addre=document.getElementById("message").value;
            // var pass=document.getElementById("ps").value;
            // var confirmpass=document.getElementById("pc").value;
        
        
        
            var usnamepattern=/^[A-Za-z]{3,20}$/;
            var phnopattern=/^[A-Za-z0-9]+@(gmail).[A-za-z]{3,}$/;
            var emailaddpattern=/^[A-Za-z]{3,20}$/;
            var Addrepattern=/^[A-Za-z]{3,20}$/;
            // var passpattern=/^[A-Za-z0-9]{3,20}$/;
            // var confirmpasspattern=/^[A-za-z0-9]{3,20}$/;
        
        
            if(usnamepattern.test(usname)){
                document.getElementById("nerror").innerHTML="";
                document.getElementById("name").style.borderColor="green";
        }
        else{  document.getElementById("nerror").innerHTML="Username is invalid";
                document.getElementById("nerror").style.color="red";}
        
                if(phnopattern.test(phno)){
                document.getElementById("emerror").innerHTML="";
                document.getElementById("email").style.borderColor="green";
        }
        else{  document.getElementById("emerror").innerHTML="Enter your Email";
                document.getElementById("emerror").style.color="red";}
        
        
                if(emailaddpattern.test(emailadd)){
                document.getElementById("serror").innerHTML="";
                document.getElementById("subject").style.borderColor="green";
        }
        else{  document.getElementById("serror").innerHTML="enter your subject";
                document.getElementById("serror").style.color="red";}
        
                if(Addrepattern.test(Addre)){
                document.getElementById("merror").innerHTML="";
                document.getElementById("message").style.borderColor="green";
        }
        else{  document.getElementById("merror").innerHTML="message is invalid";
                document.getElementById("merror").style.color="red";}
        
        //         if(passpattern.test(pass)){
        //         document.getElementById("perror").innerHTML="";
        //         document.getElementById("ps").style.borderColor="green";
        // }
        // else{  document.getElementById("perror").innerHTML="Password is invalid";
        //         document.getElementById("perror").style.color="red";}
        
        //         if(passpattern.test(confirmpass)){
        //         document.getElementById("pcerror").innerHTML="";
        //         document.getElementById("pc").style.borderColor="green";
        // }
        // else{  document.getElementById("pcerror").innerHTML="Confirm password is invalid";
        //         document.getElementById("pcerror").style.color="red";}
        
        
                if(usnamePattern.test(usname)!=0 && phnoPattern.test(Phno) !=0 && usname.test(emailadd) !=0 && usnamepattern.test(Addre)){
                    document.getElementById("name").value = "" ;
                    document.getElementById("email").value = "" ;
                    document.getElementById("subject").value = "" ;
                    document.getElementById("message").value = "" ;
                    // document.getElementById("ps").value = "" ;
                    // document.getElementById("pc").value = "" ;
        
        
                
        }
        }
            </script>
    </body>

</html>