<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: http://localhost/e-projectsms/admin-salon/login.php");
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
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="add-new-user.php">+ Create New Admin</a>
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
                
                          
                <a href="edit.data.php">
         <button type="submit" class="btn btn-dark rounded-0 py-2 px-lg-4 d-none d-lg-block" name="logout">view profile</button>
          </a>
            
                  <a href="logout.php">
         <button type="submit" class="btn btn-dark rounded-0 py-2 px-lg-4 d-none d-lg-block" name="logout">Logout/</button>
          </a>
                 
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                
               <div class="container">
                
               </div>
                
               
              </div>
            </div>

            <div class="container d-flex justify-content-end">
         
            </div>
            <div class="container-fluid text-left">
           
              <h1>Staff Data</h1>
              <a href="add-new-barber.php" class="btn btn-primary"><span class="mdi mdi-plus"></span>+Add New Staff</a>
              <!-- <a href="add_service.php" class="btn btn-primary">+Add Services</a> -->
            </div>
          <?php
          $conn = mysqli_connect("localhost","root","","eproject");
          $sql = "SELECT * FROM team ";
          $result = mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)){
          
          
          ?>
            <br>
            <div class="container-fluid">
            <div class="row">
              <table class="table table-bordered">
                <thead>
                  <tr>
                   
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">designation</th>
                    <th scope="col">image_path</th>
                  
                   
                   
                    <th colspan="2" class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                while($row=mysqli_fetch_assoc($result)){
                
                ?> 
                
                <tr>
                 
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['designation'];?></td>
                    <td><?php echo $row['image_path'];?></td>
                 
                    
                  
                    <td class="text-center">
        <a href="edit_team_member.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
            <i class="mdi mdi-pencil"></i> Edit
        </a>
    </td>

    <!-- Delete Button -->
    <td class="text-center">
        <a href="delete_team_member.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">
            <i class="mdi mdi-delete"></i> Delete
        </a>
    </td>
</tr>
                  <?php
          }
          
          ?>
             
                </tbody>
              </table>
          <?php
          }
          
          ?>
             </div>
            
           
           

            
           
           
             
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>