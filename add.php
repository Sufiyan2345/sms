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
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0 ">
            <h1 class="mb-0 text-primary text-uppercase text-warning"><i class="fa fa-cut me-3 "></i>SMS</h1>
            <H5>SALON MANAGEMENT SYSTEM</H5>
            <!-- <img src="C:\Users\asp\Downloads\Black and White Modern Illustrative Barbershop Logo (2)-Photoroom.png" width="200px" height="200px"> -->
        </a>
        <button type="button" class="navbar-toggler me-4 " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon bg-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
             
                <a href="cart.php" class="nav-item nav-link" > Services</a>
                    
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="add.php" class="btn btn-danger rounded-0 py-2 px-lg-4 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <div class="page-header">
        <div class="container ">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Book Appointment</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Book Appointment</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container bg-secondary ">
            <div class="row" >

                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         
                            <h1>Appointment Form</h1>
                            <p> Book your appointment to save salon rush.</p>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" 
                                        
                                        for="name" style="color: aliceblue;"></label>
                                        <input type="text"  class="form-control bg-transparent" id="name" placeholder="Name" name="name" required="true">
                                    </div><br><br>
                                    <div class="col-md-6">
                                        <label class="control-label" for="phone"></label>
                                        <input type="text" class="form-control bg-transparent" id="phone" name="phone" placeholder="Phone" required="true" maxlength="10" pattern="[0-9]+">
                                    </div><br><br>
                                    <div class="col-md-6">
                                        <label class="control-label" for="email"></label>
                                         <input type="email" class="form-control bg-transparent" id="appointment_email" placeholder="Email" name="email" required="true">
                                    </div><br><br>
                                    <div class="col-md-6">
                                        <label class="control-label " for="Subject"></label>
                                        <select name="services" id="services " required="true" class="form-control bg-transparent">
                                
                                    </div><br><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label"  for="textarea"></label>
                                            <input type="date" class="form-control appointment_date bg-transparent" placeholder="Date" name="adate" id='inputdate' required="true">
                                        </div>
                                    </div><br><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea"></label>
                                            <input type="time" class="form-control appointment_time bg-transparent" placeholder="Time" name="atime" id='atime' required="true">
                                        </div>
                                        <br>
                                        <div class="container d-flex justify-content-center">
                                            <div class="col-md-8  ">
                                                <div class="form-group">
                                                    <button type="submit" id="submit" name="submit" class="btn btn-warning w-100 ">Book Now</button>
                                                </div>
                                            </div>
                                            </div>
                                            <br>
                                    </div>
                               
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<!-- <div class="container mt-5">
    <h2 class="text-center text-primary"><b>Add Student Records Here</b></h2>


    <form action="save.php" method="post">


    
    
        

        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="sname" placeholder="Enter your name">
        </div>
        <br>
        <div class="form-group">
            <label for="name"><b>Address</b></label>
            <input type="text" class="form-control" id="address"  name="saddress" placeholder="Enter your address">
        </div>
        <br>
        <div class="form-group">
            <label for="dropdown"><b>Select Class</b></label>
            <select class="form-control" id="dropdown" name="sclass">
                <option> Select</option> -->
               <?php
                $conn= mysqli_connect("localhost","root","","eproject") or die ("failed");
                $stu_id=$_GET['id'];
               $sql = "SELECT * FROM clients";
                $result = mysqli_query($conn,$sql) or die ("failed");
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <option><?php echo $row['a_services']?> . <?php echo $row['aservice'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="name"><b>Phone</b></label>
            <input type="text" class="form-control" id="phone" name="sphone" placeholder="Enter your phone">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add student Record</button>
    </form>
</div>
</body>
</html>