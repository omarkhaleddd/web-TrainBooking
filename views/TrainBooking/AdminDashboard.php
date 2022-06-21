<?php

require_once '../../controllers/authControler.php';
require_once '../../model/user.php';
require_once '../../model/admin.php';
require_once '../../controllers/adminController.php';
$Admin = new adminController();
$viewResult = $Admin->ViewUser();
$ViewTrains = $Admin->viewTrain();
$ViewStations = $Admin->viewStation();
$errMsg = '';
if (isset($_POST['stationName'])) {
    if (!empty($_POST['stationName'])) {
        $station = new stations();
        $station->setStationName($_POST['stationName']);
        if ($Admin->AddStation($station)) {
        } else {
            $errMsg = $_SESSION['errMsg'];
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../resources/favicon-train.ico" />
    <title>Booking ticket - Admindashboard</title>

    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" type="text/css" href="../Style/style-custom.css">
    <link rel="stylesheet" type="text/css" href="../Style/style-custom-nav.css">


    <script src="../Script/jquery-3.3.1.min.js"></script>
    <script src="../Script/Header.js"></script>

    <!--mdb-->
    <script src="../ExternalResources/MDB/js/popper.min.js"></script>
    <link href="../ExternalResources/MDB/css/mdb.min.css" rel="stylesheet">


    <!--Boostrap-->
    <link href="../ExternalResources/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../ExternalResources/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <link href="../ExternalResources/DateTimePicker/bootstrap-datepicker.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" type="images/png" href="../Login/images/trainIcon.svg.png">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="position:sticky;">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.php">Train<span class="color-b">Booking</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">

                <ul>

                </ul>

            </div>
        </div>
    </nav><!-- End Header/Navbar -->
    </ul>
    </div>
    <div id='Header'>
    </div>

    <!-- Tabs -->


    <div class="mt-3 mb-3">
        <section id="tabs">
            <div class="container">
                <h6 class="section-title h1">Admin Panel</h6>
                <div class="row">
                    <div class=" w-100">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active cls-users" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-users font-md-T ml-2"></i> &nbsp; </br>Users</a>
                                <a class="nav-item nav-link cls-trains" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-train font-md-T ml-2"></i> &nbsp; </br>Trains</a>
                                <a class="nav-item nav-link cls-station" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-warehouse font-md-T ml-2"></i> &nbsp; </br>Stations</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">


                                    <div class="card w-100 mb-3">
                                        <div class="card-header text-muted">
                                            List of Users

                                        </div>
                                        <div class="card-body">
                                            <table class="table" id="tblUsers">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col">UserID</th>

                                                        <th scope="col">First name</th>
                                                        <th scope="col">Last name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Locked</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // for ($i=0; $i < count($viewResult); $i++) { 
                                                    //     for ($j=0; $j < 9; $j++) { 
                                                    foreach ($viewResult as $i => $i_value) {
                                                    ?>
                                                        <tr>
                                                            <?php
                                                            foreach ($i_value as $j => $j_value) {
                                                            ?>

                                                                <td>
                                                                    <?php
                                                                    echo $j_value;
                                                                    ?>
                                                                </td>

                                                            <?php
                                                            }
                                                            ?>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="card w-100 mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            New Train
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="../TrainBooking/AdminDashboard.php" method="post">
                                                            <label for="trainTime">Time :</label>
                                                            <input type="text" name="TimeTrain">
                                                            <form action="./AdminDashboard.php">
                                                                <label for="train">Choose a car:</label>
                                                                <select name="train" id="train">
                                                                    <?php
                                                                    // for ($i=0; $i < count($viewResult); $i++) { 
                                                                    //     for ($j=0; $j < 9; $j++) { 
                                                                    foreach ($ViewStations as $i => $i_value) {
                                                                    ?>
                                                                            <?php
                                                                            foreach ($i_value as $j => $j_value) {
                                                                            if( $j == 'StationName')
                                                                            {
                                                                            ?>

                                                                                <option value=" <?php
                                                                                    echo $j_value;
                                                                                    ?>">
                                                                                    <?php
                                                                                    echo $j_value;
                                                                                    ?>
                                                                                    </option>
                                                                            <?php
                                                                            }
                                                                        }
                                                                            ?>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </select>
                                                                <br><br>
                                                                <input type="submit" value="Submit">
                                                            </form>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table" id="tblTrains">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col">TrainID</th>
                                                        <th scope="col">Train Code</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // for ($i=0; $i < count($viewResult); $i++) { 
                                                    //     for ($j=0; $j < 9; $j++) { 
                                                    foreach ($ViewTrains as $i => $i_value) {
                                                    ?>
                                                        <tr>
                                                            <?php
                                                            foreach ($i_value as $j => $j_value) {
                                                            ?>

                                                                <td>
                                                                    <?php
                                                                    echo $j_value;
                                                                    ?>
                                                                </td>

                                                            <?php
                                                            }
                                                            ?>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="card w-100 mb-3">
                                        <div class="card-header text-muted">
                                            List of Stations
                                            <!--<button type="button" class="btn btn-default margin-70-T" onclick="addNewStation()">New Station</button>-->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                New Station
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="../TrainBooking/AdminDashboard.php" method="post">
                                                                <label for="stationName">Station name :</label>
                                                                <input type="text" name="stationName">
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table" id="tblStations">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col">StationID</th>
                                                        <th scope="col">Station Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // for ($i=0; $i < count($viewResult); $i++) { 
                                                    //     for ($j=0; $j < 9; $j++) { 
                                                    foreach ($ViewStations as $i => $i_value) {
                                                    ?>
                                                        <tr>
                                                            <?php
                                                            foreach ($i_value as $j => $j_value) {
                                                            ?>

                                                                <td>
                                                                    <?php
                                                                    echo $j_value;
                                                                    ?>
                                                                </td>

                                                            <?php
                                                            }
                                                            ?>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ./Tabs -->
    </div>

    <div class="showbox" id="loader">
        <div class="loader-new">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>