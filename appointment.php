<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: http://localhost/e-projectsms/admin-salon/login.php");
}

?>

<?php
$conn = mysqli_connect("localhost", "root", "", "eproject");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update appointment status
if (isset($_GET['action']) && isset($_GET['id'])) {
    $status = $_GET['action'] == 'accept' ? 'Accepted' : 'Rejected';
    $id = $_GET['id'];

    $updateQuery = "UPDATE client SET status='$status' WHERE a_id='$id'";
    mysqli_query($conn, $updateQuery);
}

// Fetch all appointments
$sql = "SELECT * FROM client";
$result = mysqli_query($conn, $sql);
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


/* Header */


/* Container */

.row{
  width: 118%;
  height: 80%;
  margin: 90px;
  margin-right: 3100px;
  margin-left: -525px;

padding: 70px;

}

/* Table Styles */
.table {
    width: 100%;
  
 
   
}

.table th, .table td {
    border: 1px solid grey; /* Border color */
   
    text-align: left;
}

.table th {
    background-color: black; /* Header background color */
    color: white:
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 16px;
    
}



.table tr:hover {
    background-color:black; /* Row hover effect */
}

/* Button Styles */
.btn {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #27ae60; /* Accept button color */
    color: white;
}

.btn-danger {
    background-color: #c0392b; /* Reject button color */
    color: white;
}

.btn-primary:hover {
    background-color: #219150; /* Darker green on hover */
}

.btn-danger:hover {
    background-color: #a93226; /* Darker red on hover */
}

/* Additional Styles */
.text-success {
    color: #2ecc71; /* Green for accepted status */
}

.text-danger {
    color: #e74c3c; /* Red for rejected status */
}

  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h1 class="mb-0 text-primary text-uppercase text-warning"><i class="fa fa-cut me-3 "></i>SMS</h1>
        <h5>ADMIN PANEL</h5>
        
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
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <h1 class="mb-0 text-primary text-uppercase text-warning"><i class="fa fa-cut me-3 "></i>SMS</h1>
        <H5>ADMIN PANEL</H5>          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" href="add-new-user.php">+ Create New Admin</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                
             
                 
                   
            
                
                   
             
             
              <li class="nav-item dropdown border-left">
             
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                 
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="https://png.pngtree.com/template/20190529/ourmid/pngtree-retro-round-and-simple-barber-shop-logo-image_204760.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                
                    
                <a href="register.php">
         <button type="submit" class="btn btn-dark rounded-0 py-2 px-lg-4 d-none d-lg-block" name="logout">view profile</button>
          </a>
            
                  <a href="logout.php">
         <button type="submit" class="btn btn-dark rounded-0 py-2 px-lg-4 d-none d-lg-block" name="logout">Logout/</button>
          </a>
              </li>
            </ul>
          
          </div>
        </nav>

         
        <h2 style="color: white; margin: 80px" ><b>All/Appointments</b></h2>    
        <div class="container-fluid d-flex justify-content-center">
        <div class="container-scroller">
          
        </div>
        <?php if(mysqli_num_rows($result) > 0): ?>
    <div class="container-fluid text">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Names</th>
                        <th>Email</th>
                        <th>Services</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th colspan="3" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['a_id']; ?></td>
                            <td><?php echo $row['a_name']; ?></td>
                            <td><?php echo $row['a_email']; ?></td>
                            <td><?php echo $row['a_services']; ?></td>
                            <td><?php echo $row['a_date']; ?></td>
                            <td><?php echo $row['a_time']; ?></td>
                            <td class="<?php echo $row['status'] === 'Accepted' ? 'text-success' : ($row['status'] === 'Rejected' ? 'text-danger' : ''); ?>">
                                <?php echo $row['status']; ?>
                            </td>
                            <td class="text-center">
                                <a href="?action=accept&id=<?php echo $row['a_id']; ?>" class="btn btn-primary">Accept</a>
                            </td>
                            <td class="text-center">
                                <a href="?action=reject&id=<?php echo $row['a_id']; ?>" class="btn btn-danger">Reject</a>
                            </td>
                            <td class="text-center">
                                <a href="?delete_id=<?php echo $row['a_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="text-center">
                <a href="?clear_all=1" class="btn btn-danger" onclick="return confirm('Are you sure you want to clear all appointments?');">Clear All Appointments</a>
            </div>
        </div>
    </div>
<?php else: ?>
    <p>No appointments found.</p>
<?php endif; ?>

        <?php
$conn = mysqli_connect("localhost", "root", "", "eproject");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update appointment status and send email
if (isset($_GET['action']) && isset($_GET['id'])) {
  $status = $_GET['action'] == 'accept' ? 'Accepted' : 'Rejected';
  $id = $_GET['id'];

  $updateQuery = "UPDATE client SET status='$status' WHERE a_id='$id'";
  if (mysqli_query($conn, $updateQuery)) {
      // Fetch user email and appointment details to send notification
      $query = "SELECT a_email, a_name, a_services, a_date, a_time FROM client WHERE a_id='$id'";
      $result = mysqli_query($conn, $query);
      $user = mysqli_fetch_assoc($result);

      // Email details
      $to = $user['a_email'];
      $subject = "Appointment Status Update";
      $message = "Hello " . $user['a_name'] . ",\n\n" .
                 "Your appointment has been " . strtolower($status) . ".\n\n" .
                 "Appointment Details:\n" .
                 "Service: " . $user['a_services'] . "\n" .
                 "Date: " . $user['a_date'] . "\n" .
                 "Time: " . $user['a_time'] . "\n\n" .
                 "Thanks For Applyツ!";
      $headers = "From: btsr66274@gmail.com";

      // Send email
      mail($to, $subject, $message, $headers);
  }
}
if (isset($_GET['delete_id'])) {
  $deleteId = $_GET['delete_id'];
  $deleteQuery = "DELETE FROM client WHERE a_id='$deleteId'";
  mysqli_query($conn, $deleteQuery);
}

// Fetch all appointments
$sql = "SELECT * FROM client";
$result = mysqli_query($conn, $sql);
// Clear all appointments
if (isset($_GET['clear_all'])) {
  $clearQuery = "DELETE FROM client";
  if (mysqli_query($conn, $clearQuery)) {
      echo "<script>alert('All appointments cleared successfully.');</script>";
      // Redirect to refresh the page
      header("Location: " . $_SERVER['PHP_SELF']);
      exit;
  } else {
      echo "<script>alert('Error clearing appointments: " . mysqli_error($conn) . "');</script>";
  }
}

?>
    </div>

    <!-- JS includes omitted for brevity -->
</body>
</html>
