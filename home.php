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
             
                
                    <a href="cart.php" class="nav-item nav-link" > Services</a>#

                    <a href="product.php" class="nav-item nav-link" > Products</a>
                    
              
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
           
</div>

            <a href="appointment.php" class="btn btn-danger rounded-0 py-2 px-lg-4 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
             
            <a href="logout.php">
         <button type="submit" class="btn btn-warning rounded-0 py-2 px-lg-4 d-none d-lg-block" name="logout">Logout</button>
          </a>
        </div>
</div>

        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/image8.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" id="aaa"><i>
                                "Transform Your Look, Elevate Your Confidence."</i></h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-warning me-3"></i><i>123 Street, Islamabad, PAK</i></h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-warning me-3"></i><i>+(92) 345 6879076</i></h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/image9.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" id="aaa"><i>Luxury Style Haircut at Affordable Price</i></h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-warning  me-3"></i><i>123 Street, Islamabad, PAK</i></h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-warning  me-3"></i><i>+(92) 345 6879076</i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="img/image12.jpeg" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <h1 class="text-uppercase text-warning mb-3"><i>25 Years</i></h1>
                            <h2 class="text-uppercase mb-0">Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block bg-secondary text-white py-1 px-4">About Us</p>
                    <h1 class="text-uppercase mb-4">More Than Just A Haircut. Learn More About Us!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">Since 1990</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">1000+ clients</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-warning py-1 px-4">Services</p>
                <h1 class="text-uppercase">What We Provide</h1>
            </div>
            <div class="row g-4">
            <?php
// Include the database connection
$conn=mysqli_connect("localhost","root","","eproject") or die("Failed");


// Fetch services data from the database
$query = "SELECT * FROM services";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                    <img class="img-fluid" src="<?php echo htmlspecialchars($row['image']); ?>" alt="">
                </div>
                <div class="ps-4">
                    <h3 class="text-uppercase mb-3"><?php echo htmlspecialchars($row['service_name']); ?></h3>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <span class="text-uppercase text-warning">From $<?php echo htmlspecialchars($row['price']); ?></span>
                </div>
                <a class="btn btn-square" href="cart.php"><i class="fa fa-plus text-warning"></i></a>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No services available.</p>";
}

// Close the database connection
mysqli_close($conn);
?>

                </div>
    <!-- Service End -->


    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-white py-1 px-4 me-auto">Price & Plan</p>
                        <h1 class="text-uppercase mb-4">Check Out Our Barber Services And Prices</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Haircut</h6>
                                <span class="text-uppercase text-warning">$29.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Beard Trim</h6>
                                <span class="text-uppercase text-warning">$35.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Mans Shave</h6>
                                <span class="text-uppercase text-warning">$23.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Hair Dyeing</h6>
                                <span class="text-uppercase text-warning">$19.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Mustache</h6>
                                <span class="text-uppercase text-warning">$15.00</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Stacking</h6>
                                <span class="text-uppercase text-warning">$39.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/image10.jfif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->


     <!-- Team Start -->
     <div class="container-xxl py-5">
        <div class="container" >
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-white py-1 px-4">Our Barber</p>
                <h1 class="text-uppercase">Meet Our Barber</h1>
            </div>
            
            <div class="container-fluid" >
            <div class="row g-4">
    <?php
    // Database connection
    $host = 'localhost';
    $db = 'eproject';
    $user = 'root';
    $pass = '';

    $conn=mysqli_connect("localhost","root","","eproject") or die("Failed");


    // Fetch team members from the database
    $sql = "SELECT * FROM team";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="'.$row['image_path'].'" alt="'.$row['name'].'">
                        <div class="team-social">
                            <a class="btn btn-square" href="'.$row['facebook_url'].'"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="'.$row['twitter_url'].'"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="'.$row['instagram_url'].'"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">'.$row['name'].'</h5>
                        <span class="text-warning">'.$row['designation'].'</span>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo "<p>No team members found</p>";
    }

    $conn->close();
    ?>
</div>

 
    <!-- Team End -->



    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/image11.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-white py-1 px-4 me-auto">Working Hours</p>
                        <h1 class="text-uppercase mb-4">Professional Barbers Are Waiting For You</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Monday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Tuesday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Wednesday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Thursday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Friday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Sat / Sun</h6>
                                <span class="text-uppercase text-primary">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-white py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Darren Mckean</h4>
                    <p class="text-warning">Profession</p>
                    <span class="fs-5">Jason and the team are highly skilled professionals - what an experience. Really enjoyed the cut throat shave and professional haircut.”
                    .</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase"> Jon Abbott</h4>
                    <p class="text-warning">Profession</p>
                    <span class="fs-5">Immaculate shop with great setup, the team are well trained and tidy, very professional and engaging. They make getting a haircut a really enjoyable and relaxing experience.”</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Darcy Karaka</h4>
                    <p class="text-warning">Profession</p>
                    <span class="fs-5">“These guys are the real deal! Quality cuts delivered with expert advice. Hands down the best barbers I’ve ever had.”</span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 ">
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
</body>

</html>