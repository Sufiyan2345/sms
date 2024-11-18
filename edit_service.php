<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: http://localhost/e-projectsms/admin-salon/login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "eproject");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM services WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $service = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];

    if (!empty($image)) {
        $image_path = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        $sql = "UPDATE services SET service_name='$service_name', description='$description', price='$price', image='$image_path' WHERE id=$id";
    } else {
        $sql = "UPDATE services SET service_name='$service_name', description='$description', price='$price' WHERE id=$id";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: services.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin -SMS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <style>
 
 h1 {
       text-align: center;
        color: white;
        font-size: 2rem;
        margin-top: 56px; 

    }
form {
  margin-top: 90px;
    max-width: 600px;
    margin-right: 90px ;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

label {
 
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="number"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="file"] {
    border: none;
}

button {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #218838;
}

img {
    display: block;
    margin: 10px 0;
    border-radius: 5px;
}



  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h2 class="mb-0 text-primary text-uppercase text-warning"><i class="fa fa-cut me-3 "></i>SMS</h2>
        <H5>ADMIN PANEL</H5>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
               
                  
                </div>
         
                
                </div>
              </div>
          
                
          </li>
      
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
              <span class="mdi mdi-view-dashboard"></span>

              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="services.php">
              <span class="menu-icon">
              <span class="mdi mdi-tune"></span>

              </span>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="appointment.php">
              <span class="menu-icon">
              <span class="mdi mdi-calendar-check-outline"></span>
              </span>
              <span class="menu-title">Appointment</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link"  href="register.php">
              <span class="menu-icon">
              <span class="mdi mdi-account-plus-outline"></span>
              </span>
              <span class="menu-title">Registered users </span>
             
           
              </a>
            <li class="nav-item menu-items">
            <a class="nav-link"  href="new_barber.php">
              <span class="menu-icon">
              <span class="mdi mdi-account-multiple-plus-outline"></span>
              </span>
              <span class="menu-title">Staff </span>
             
            </a>
          <li class="nav-item menu-items">
            <a class="nav-link" href="sales_report.php">
              <span class="menu-icon">
              <span class="mdi mdi-chart-bar"></span>
              </span>
              <span class="menu-title">Sales Report</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="product.php">
              <span class="menu-icon">
              <span class="mdi mdi-cart-arrow-up"></span>
              </span>
              <span class="menu-title">Products</span>
            </a>
          </li>
        
        </ul>
      </nav>
     <!-- Add your sidebar here (optional, for reusability) -->
     <h1>Edit Service</h1>
    <form action="edit_service.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <label for="service_name"  style="color:white">Service Name</label>
        <input type="text" name="service_name" value="<?php echo $service['service_name']; ?>" required><br>

        <label for="description"  style="color:white">Description</label>
        <textarea name="description" required><?php echo $service['description']; ?></textarea><br>

        <label for="price" style="color:white">Price</label>
        <input type="number" name="price" value="<?php echo $service['price']; ?>" required><br>

        <label for="image"  style="color:white">Service Image</label>
        <input type="file" name="image"><br>
        <img src="<?php echo $service['image']; ?>" width="100" height="100" alt="Current Image"><br>

        <button type="submit">Update Service</button>
    </form>
</body>
</html>
