<?php
                      require_once '../../controllers/userController.php';
                      require_once '../../model/user.php';
                      $errMsg='';
                      if(!isset($_SESSION['userId'])){
                        if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
                      }
                      if (isset($_POST['newpassword']))
                    {
                      if(!empty($_POST['newpassword'])){
                          $auth=new UserController();
                          $check = $auth->updatepassword($_POST['newpassword'] , $_SESSION['userId']);
                            
                        }
                        echo $check;
                    }                            
                      ?>  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Train Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="images/png" href="../Login/images/trainIcon.svg.png">  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!--new vendors-->
  <link href="../Trainbooking/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../Trainbooking/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Trainbooking/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Trainbooking/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../Trainbooking/assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Train<span class="color-b">Booking</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="../Trainbooking/index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="property-grid.html">Booking tickets</a>
          </li>
          <li class=

          <li class="nav-item">
            <a class="nav-link " href="Gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Trainbooking/about.html">About</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link " href="../Trainbooking/blog-grid.html">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact</a>
          </li>
        
        <li class = "nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
          <div class="dropdown-menu">
            <a class="dropdown-item active " href="../TrainBooking/users-profile.php">Profile</a>
            <!--php code session close-->
          </div>
        </li>
      </ul>
      </div>
    </div>
  </nav><!-- End Header/Navbar -->
  <main id="main" class="main">
    
    <div class="pagetitle">
      <h1>Profile</h1>
      <div class="col-md-12-profile">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../Trainbooking/index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              My Account
            </li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Ahmed Naem</h2>
              <h3>User</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

               

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>
                <!--php code variables session-->
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">Ahmed  Naem </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8">NaemGamedAwe</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Password</div>
                    <div class="col-lg-9 col-md-8">***</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Balance</div>
                    <div class="col-lg-9 col-md-8"> 0 EGP</div>
                  </div>
                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-change-password">
                  <div class="tab-pane fade pt-3" id="profile-settings">
                    <form action ="/projectSoftware/views/TrainBooking/users-profile.php" method='post'>
                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>
                      <div class="text-center">
                        <button  name = "pass" type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form>
                    </form><!-- End Change Password Form -->
                    </div>
                </div> 
                
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <div class="tab-pane fade pt-3" id="profile-settings">
                    <form action = "/projectSoftware/views/TrainBooking/users-profile.php" method='post'>
<!-- change data -->
                    <?php
                     require_once '../../controllers/userController.php';
                     require_once '../../model/user.php';
                     $errMsg='';
                     if(!isset($_SESSION['userId'])){
                       
                      if(!isset($_SESSION)) 
                      { 
                          session_start(); 
                      }                      }
                     if (isset($_POST['gender']))
                   {
                     if(!empty($_POST['gender'])){
                         $auth=new UserController();
                         $check = $auth->updateage($_POST['gender'] , $_SESSION['userId']);
                           
                       }
                       echo $check;
                   }
                    ?>
                      <div class="row mb-3">
                        <label for="Gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="Gender" type="text" class="form-control" id="gender">
                        </div>
                      </div>
                      <?php
                     require_once '../../controllers/userController.php';
                     require_once '../../model/user.php';
                     $errMsg='';
                     if(!isset($_SESSION['userId'])){
                      if(!isset($_SESSION)) 
                      { 
                          session_start(); 
                      }                      }
                     if (isset($_POST['email']))
                   {
                     if(!empty($_POST['email'])){
                         $auth=new UserController();
                         $check = $auth->updateemail($_POST['email'] , $_SESSION['userId']);
                           
                       }
                       echo $check;
                   }
                    ?>
                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="Email" type="text" class="form-control" id="cuemailrrentPassword">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Age" class="col-md-4 col-lg-3 col-form-label">Age</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="Age" type="text" class="form-control" id="Age">
                        </div>
                      </div>
    
                      <div class="row mb-3">
                       
                        <div class="col-md-8 col-lg-9">
                        </div>
                      </div>
    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update profile</button>
                      </div>
                    </form>
                    </form><!-- End Change Password Form -->
                    </div>
                
                
              </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="nav-link  " href="index.html">Home</a>
            </li>
            <li class="list-inline-item">
              <a class="nav-link " href="about.html">About</a>
            </li>
            <li class="list-inline-item">
              <a class="nav-link active " href="property-grid.html">Booking tickets</a>
            </li>
            <li class="list-inline-item">
              <a class="nav-link " href="blog-grid.html">Help</a>
            </li>
            <li class="list-inline-item">
              <a class="nav-link " href="contact.html">Contact</a>
            </li>
            <li class="list-inline-item">
              <a class="nav-link " href="Gallery.html">Gallery</a>
            </li>
          </ul>
        </nav>
        <div class="socials-a">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-linkedin" aria-hidden="true"></i>
              </a>
            </li>
            
          </ul>
        </div>
        
    </div>
    
  </div>
</footer><!-- End  Footer -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>