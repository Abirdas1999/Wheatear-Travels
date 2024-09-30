<?php
$servername = "localhost";
$username = "u761644300_travels";
$password = "Travel@2024";
$dbname = "u761644300_wheatear";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $imageCount = count($_FILES['file']['name']);
    for ($i = 0; $i < $imageCount; $i++) {
        $imageName = $_FILES['file']['name'][$i];
        $imageTempName = $_FILES['file']['tmp_name'][$i];  // corrected from temp_name to tmp_name
        // $targetPath = "../dash/" . basename($imageName);
        $targetPath = "admin/img/photos/" . basename($imageName);

        if (move_uploaded_file($imageTempName, $targetPath)) {
            $sql = "INSERT INTO gallary(file) VALUES ('$imageName')";  // changed table name to gallary
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("Error: " . mysqli_error($conn));  // error handling for SQL query
            }
        }
    }
    header('Location: photo.php?msg=ins');
    exit();  // ensure no further code is executed after redirection
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallary-Dash</title>
    <link rel="stylesheet" href="assets/vendor/libs/dropzone/dropzone.css" />


    <!-- Custom fonts for this template---->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
     
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="./asset/logo.png" alt="" style="height: 45px; ">
                    <!-- <img src="../dash/" alt=""> -->
                </div>
                <div class="sidebar-brand-text mx-3">Wheatever-Travels</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesHome"
                    aria-expanded="true" aria-controls="collapseUtilitiesHotel">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>Home</span>
                </a>
                <div id="collapseUtilitiesHome" class="collapse" aria-labelledby="headingUtilitiesHome"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Hotel Organization:</h6>
<a class="collapse-item" href="hotel.php">Enquiry</a> -->
                        <a class="collapse-item" href="homeQ&A.php">Q&A</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-airplane-fill"></i>
                    <span>Packages</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom packages:</h6>
                        <a class="collapse-item" href="packages.php">Places</a>
                        <a class="collapse-item" href="package.php">Add Packages</a>
                        <a class="collapse-item" href="enquire.php">Enquiry</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesHotel"
                    aria-expanded="true" aria-controls="collapseUtilitiesHotel">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>Hotels</span>
                </a>
                <div id="collapseUtilitiesHotel" class="collapse" aria-labelledby="headingUtilitiesHotel"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hotel Organization:</h6>
                        <a class="collapse-item" href="hotel.php">Enquiry</a>
                        <a class="collapse-item" href="hotelq&a.php">Q&A</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesFlight"
                    aria-expanded="true" aria-controls="collapseUtilitiesFlight">
                    <i class="bi bi-airplane"></i>
                    <span>Flight</span>
                </a>
                <div id="collapseUtilitiesFlight" class="collapse" aria-labelledby="headingUtilitiesFlight"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Airport Organization:</h6>
                        <a class="collapse-item" href="flight.php">Enquiry</a>
                        <a class="collapse-item" href="flightq&a.php">Q&A</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesGallary"
                    aria-expanded="true" aria-controls="collapseUtilitiesGallary">
                    <i class="bi bi-image-fill"></i>
                    <span>Gallary</span>
                </a>
                <div id="collapseUtilitiesGallary" class="collapse" aria-labelledby="headingUtilitiesGallary"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Photos:</h6>
                        <a class="collapse-item" href="photo.php">Add Photos</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesAddons"
                    aria-expanded="true" aria-controls="collapseUtilitiesAddons">
                    <i class="bi bi-image-fill"></i>
                    <span>Addons</span>
                </a>
                <div id="collapseUtilitiesAddons" class="collapse" aria-labelledby="headingUtilitiesAddons"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Addons Types:</h6>
                        <a class="collapse-item" href="bus.php">Buses</a>
                        <a class="collapse-item" href="visa.php">Visa</a>
                        <a class="collapse-item" href="passport.php">Passport</a>
                        <a class="collapse-item" href="forex.php">Forex</a>
                        <a class="collapse-item" href="cruise.php">Cruise</a>
                        <a class="collapse-item" href="rent.php">Rent</a>
                        <a class="collapse-item" href="insurence.php">Insurance</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Divider -->


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline d-flex flex-row-reverse">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Welcome to Wheatever Travels</h1>
                        <?php
                        if (isset($_GET['msg']) && $_GET['msg'] == 'ins') {
                            echo '<h4 align="center">Images Uploaded Successfully</h4>';
                        }
                        ?>
                    </div>
                    <form action="photo.php" method="POST" enctype="multipart/form-data">
                        Select Image File:
                        <input type="file" name="file[]" multiple> <br> <br>
                        <input type="submit" name="submit" value="Upload">
                    </form>
                    <div class="row mt-4">
                        <?php
                        $servername = "localhost";
                        $username = "u761644300_travels";
                        $password = "Travel@2024";
                        $dbname = "u761644300_wheatear";

                        // Create a connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM gallary";  // use the correct table name
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($fetch = mysqli_fetch_assoc($result)) {
                        ?>
                                <img src="admin/img/photos/<?php echo htmlspecialchars($fetch['file']); ?>" width="100" height="100" alt="...">
                        <?php
                            }
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>


            </div>
            <!-- end of content   -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white py-5">
                <div class="container my-auto py-5">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aarhat iSERV LLP 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="./js/popup.js"></script>

</body>

</html>