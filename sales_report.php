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

$reportData = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['start_date']) && isset($_POST['end_date'])) {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $startDate = mysqli_real_escape_string($conn, $startDate);
    $endDate = mysqli_real_escape_string($conn, $endDate);
    
    // Fetch detailed appointment data
    $sql = "SELECT a_services, a_name, a_date, status
            FROM client 
            WHERE a_date BETWEEN '$startDate' AND '$endDate' 
            ORDER BY a_services, a_date";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $reportData = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

.container-fluid {
    background: dark;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 20px;
}

h2 {
    color: white;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
}

input[type="date"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
}

.btn {
    color: lightgreen; /* Primary button color */
    color: green;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: green; /* Darker shade on hover */
}

.table {
    width: 100%;
    margin-top: 20px;
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

.table th {
    background-color: black; /* Header background color */
    color: white;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2; /* Zebra striping for rows */
}

.table tr:hover {
    background-color: black; /* Highlight on hover */
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
              <li class="nav-item w-100">
              
              </li>
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
<!--navbar end-->
<div class="container-fluid">
        <h2 class="text-center" style="margin-top: 20px;">Date-wise Sales Report for Appointments</h2>
        
        <form method="POST" class="text-center" style="margin-bottom: 20px;">
            Start ➡<input type="date" name="start_date" required>
            End ➡ <input type="date" name="end_date" required>
            <button type="submit" class="btn btn-success">Show Report</button>
        </form>

        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($reportData)): ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Client Name</th>
                                <th>Appointment Date</th>
                                <th>Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($reportData as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['a_services']); ?></td>
                                    <td><?php echo htmlspecialchars($row['a_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['a_date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['status']); ?></td>
                                    
    </a>
                                </tr>
                                
                               
                            <?php endforeach; ?>
                            
                        </tbody>
                        
                    </table>
                <?php else: ?>
                    <p>No sales data found for the selected date.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- Include JS libraries -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>
