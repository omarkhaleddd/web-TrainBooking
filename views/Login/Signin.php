<?php
    require_once '../../controllers/authControler.php';
	require_once '../../model/user.php';
	require_once '../../model/admin.php';
	$errMsg='';
    if (isset($_POST['username']) && isset($_POST['password']))
	{
		if(!empty($_POST['username'])&&!empty($_POST['password'])){
            if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
				header("location: ../TrainBooking/Admindashboard.php");
			}else{
				$user=new User();
				$auth=new AuthController();
				$_SESSION['userId'] = 
				$user->setUsername($_POST['username']);
				$user->setUserPassword($_POST['password']);
				if (!$auth->login($user)) {
					if (!isset($_SESSION['userId'])) {
						if(!isset($_SESSION)) 
						{ 
							session_start(); 
						}    					}
					echo 'userser1';
					echo '<br>';
					$errMsg=$_SESSION['errMsg'];
				}
				else{
					if (!isset($_SESSION['userId'])) {
						session_start();
					}
					if ($_SESSION['userRole'] == 'Admin') {
						header("location: ../TrainBooking/Admindashboard.php");
					}else{
						header("location: ../TrainBooking/index.php");
		
					}
				}
			}
        }
	}
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Train Booking - Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="images/png" href="images/trainIcon.svg.png">
	</head>
	<body>
	<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Online Train Booking</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/train.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="Signin.php" method='post' class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="username" required>
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="password" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a href="register.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

