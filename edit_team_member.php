<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: http://localhost/e-projectsms/admin-salon/login.php");
}

?>
<?php
$conn = mysqli_connect("localhost", "root", "", "eproject");

// Check if id is passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the current data
    $sql = "SELECT * FROM team WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

// Update the data when the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $facebook_url = $_POST['facebook_url'];
    $twitter_url = $_POST['twitter_url'];
    $instagram_url = $_POST['instagram_url'];
    
    $sql = "UPDATE team SET name='$name', designation='$designation', facebook_url='$facebook_url', twitter_url='$twitter_url', instagram_url='$instagram_url' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Member updated successfully!";
        header("Location: new_barber.php");  // Redirect to the team members page
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
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

    .container{
      
        margin-left: 20px;
        padding: 20px;
       
    }
    form {

        max-width: 500px;
        margin: 20px ;
        margin-right: 30px;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

 
    form input[type="text"],
    form input[type="url"] {
        width: 200%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        box-sizing: border-box;
    }

    form input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: green;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        w
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form input[type="submit"]:hover {
        background-color: darkgreen;
    }

    h2 {
       text-align: center;
        color: white;
        font-size: 2rem;
        padding: 10px  

    }

    /* Add responsive design */
    @media (max-width: 768px) {
        form {
            width: 90%;
            padding: 15px;
        }
    }
</style>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h1 class="mb-0 text-primary text-uppercase text-warning"><i class="fa fa-cut me-3 "></i>SMS</h1>
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
<!-- HTML Form to Update Data -->

 <div class="container">
 <h2>Edit Data</h2>
<form method="POST" action="">
    <label style="color: white;">Name:</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    <label style="color: white;" >Designation:</label>
    <input type="text" name="designation" value="<?php echo $row['designation']; ?>" required><br>
    <label style="color: white;">Facebook URL:</label>
    <input type="text" name="facebook_url" value="<?php echo $row['facebook_url']; ?>"><br>
    <label style="color: white;">Twitter URL:</label>
    <input type="text" name="twitter_url" value="<?php echo $row['twitter_url']; ?>"><br>
    <label style="color: white;">Instagram URL:</label>
    <input type="text" name="instagram_url" value="<?php echo $row['instagram_url']; ?>"><br>
    <input type="submit" name="submit" value="Update">
</form>
</div>
</body>
</html