<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: http://localhost/e-projectsms/admin-salon/login.php");
}

?>
<?php
// add-new-admin.php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "eproject");

// Initialize variables for error and success messages
$error = '';
$success = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form inputs
    $fullname = mysqli_real_escape_string($conn, trim($_POST['fullname']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));

    // Validate form inputs
    if (!empty($fullname) && !empty($email) && !empty($password)) {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert new user into the database
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            // Set success message
            $success = "User added successfully";
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
    } else {
        $error = "All fields are required.";
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
    <title>Add New Admin</title>
    <style>
    /* General Container Style */
  
.container {
    max-width: 800px; /* Adjust the width to your preference */
    margin: 80px ; /* Center the container horizontally and add some margin at the top */
    padding: 20px;
    margin-right: 100px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Heading Style */
h1 {
    margin-bottom: 20px;
    color: #fff; /* Text color */
}

/* Form Group Style */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #fff; /* Label color */
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #fff; /* Background color for input */
}

.form-group input:focus {
    border-color: white;
    outline: none;
}

/* Button Style */
button {
    background-color: green;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: darkgreen;
}

/* Link Style */
.container a {
    text-decoration: none;
    color: white;
}

.container a:hover {
    text-decoration: underline;
}

/* Error and Success Messages */
.error {
    color: red;
    margin-bottom: 20px;
}

.success {
    color: green;
    margin-bottom: 20px;
}

/* Popup Style */
.popup {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.popup.show {
    display: block;
}

.popup .close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

    </style>
    <div class="container">
        <h1>Add New Admin</h1>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Add Admin</button>
        </form>
        <a href="register.php">Back to Admin Data</a>
    </div>
</body>
</html>
