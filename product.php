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
                    <h2>Best<b>Product</b></h2>
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
                            <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eproject";

$conn=mysqli_connect("localhost","root","","eproject") or die("Failed");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Check if products exist
if (mysqli_num_rows($result) > 0) {
    // Loop through the products
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="col-sm-3">
            <div class="thumb-wrapper">
                <div class="img-box">
                    <img src="img/<?php echo $row['image']; ?>" class="img-responsive" alt="<?php echo $row['name']; ?>">
                </div>
                <div class="thumb-content">
                    <h5 style="color:gold;"><?php echo $row['name']; ?></h5>
                    <h4><?php echo $row['description']; ?></h4>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <?php
                            // Display star rating based on the product's rating
                            $rating = $row['rating'];
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= floor($rating)) {
                                    echo '<li class="list-inline-item"><i class="fa fa-star"></i></li>';
                                } elseif ($i == ceil($rating)) {
                                    echo '<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>';
                                } else {
                                    echo '<li class="list-inline-item"><i class="fa fa-star-o"></i></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <h4>$<?php echo $row['price']; ?></h4>
                    <a href="cart.php?add_to_cart=<?php echo $row['id']; ?>" ></a>
                </div>						
            </div>
        </div>
<?php
    }
} else {
    echo "No products found!";
}
?>

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
