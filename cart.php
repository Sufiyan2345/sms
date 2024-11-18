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
    </nav>
    <!-- Navbar End -->
      
        </head>
        <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Book Your <b>Dealer</b></h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://us.123rf.com/450wm/georgerudy/georgerudy1701/georgerudy170100310/69608068-cute-little-boy-is-getting-haircut-by-hairdresser-at-the-barbershop.jpg" class="img-responsive" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Jack Henry</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>	
                                            
                                            							
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	
                                        </div>						
                                    </div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                       
                                        <div class="img-box">
                                            <img src="https://www.shutterstock.com/image-photo/getting-perfect-shape-closeup-side-600nw-364870139.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Thomas William</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	
                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://everythinghairbarbershop.com/wp-content/uploads/2024/04/Barbershop.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Jackson Evil</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://media.licdn.com/dms/image/D5612AQG5-O1lGSOTfA/article-cover_image-shrink_720_1280/0/1674041841871?e=2147483647&v=beta&t=2E4X8vM1wMyGfQ28OlGKPZkRqNdH3DQI35ou-y3kifc" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Henry Deck</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	                                        </div>						
                                    </div>
                                </div>						
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://static.ffx.io/images/$zoom_1%2C$multiply_0.312%2C$ratio_1.777778%2C$width_1987%2C$x_13%2C$y_93/t_crop_custom/q_86%2Cf_auto/2477d4de20e3d76ed8acfaee44088cf6acb61d86" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Smith Dav</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                           <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://i.ytimg.com/vi/AH7rCJrcylU/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLANBuO8_nyQRgI-8QwHgVzgStFfVg" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">kelvin smith</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://i.ytimg.com/vi/0XH9h8WvmWc/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGGUgWChGMA8=&rs=AOn4CLC9vUaHltR2GJwy8oQKv3tcFPJV5Q" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Harry Peter</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	                                        </div>						
                                    </div>
                                </div>	
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="https://piratefestivals.com/wp-content/uploads/2022/01/Choosing-The-Best-Suited-Haircut-For-A-Male.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h5 style="color:gold;">Daniel Porter</h5>
                                            <h4>Let your hair do the talking. Fast fades in no time </h4>
                                          
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="appointment.php" class="btn btn-primary" id="hh">Book Now</a>	                                        </div>						
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>

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

                    <a class="btn btn-link" href="appointment.php.php">Book now</a>
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
</body>
</html>
