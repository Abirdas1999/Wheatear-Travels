<?php
include_once './admin/classes/packageUpdate.php';
$packageUpdate = new PackageUpdate();

$name = '';
$title = '';
$subtitle = '';
$days = '';
$price = '';
$sell = '';
$fromD = '';
$toD = '';
$schedule = '';
$inclusion = '';
$exclusion = '';
$hotel = '';
$photo1 = '';
$photo2 = '';
$photo3 = '';
$photo4 = '';
$photo5 = '';
$photo6 = '';
$no = '';

if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $currentDetails = $packageUpdate->getPackageByNo($no);

    if ($currentDetails) {
        // Populate form fields with existing data
        $name = $currentDetails['name'];
        $title = $currentDetails['title'];
        $subtitle = $currentDetails['subtitle'];
        $days = $currentDetails['days'];
        $price = $currentDetails['price'];
        $sell = $currentDetails['sell'];
        $fromD = $currentDetails['fromD'];
        $toD = $currentDetails['toD'];
        $schedule = $currentDetails['schedule'];
        $inclusion = $currentDetails['inclusion'];
        $exclusion = $currentDetails['exclusion'];
        $hotel = $currentDetails['hotel'];
        $photo1 = $currentDetails['photo1'];
        $photo2 = $currentDetails['photo2'];
        $photo3 = $currentDetails['photo3'];
        $photo4 = $currentDetails['photo4'];
        $photo5 = $currentDetails['photo5'];
        $photo6 = $currentDetails['photo6'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no = $_POST['no'];

    // Retrieve form data
    $name = $_POST['name'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $days = $_POST['days'];
    $price = $_POST['price'];
    $sell = $_POST['sell'];
    $fromD = $_POST['fromD'];
    $toD = $_POST['toD'];
    $schedule = $_POST['schedule'];
    $inclusion = $_POST['inclusion'];
    $exclusion = $_POST['exclusion'];
    $hotel = $_POST['hotel'];

    // Check if new images are uploaded, otherwise keep the old images
    $photo1 = !empty($_FILES['photo1']['name']) && is_uploaded_file($_FILES['photo1']['tmp_name']) ? $_FILES['photo1']['name'] : $_POST['old_photo1'];
    $photo2 = !empty($_FILES['photo2']['name']) && is_uploaded_file($_FILES['photo2']['tmp_name']) ? $_FILES['photo2']['name'] : $_POST['old_photo2'];
    $photo3 = !empty($_FILES['photo3']['name']) && is_uploaded_file($_FILES['photo3']['tmp_name']) ? $_FILES['photo3']['name'] : $_POST['old_photo3'];
    $photo4 = !empty($_FILES['photo4']['name']) && is_uploaded_file($_FILES['photo4']['tmp_name']) ? $_FILES['photo4']['name'] : $_POST['old_photo4'];
    $photo5 = !empty($_FILES['photo5']['name']) && is_uploaded_file($_FILES['photo5']['tmp_name']) ? $_FILES['photo5']['name'] : $_POST['old_photo5'];
    $photo6 = !empty($_FILES['photo6']['name']) && is_uploaded_file($_FILES['photo6']['tmp_name']) ? $_FILES['photo6']['name'] : $_POST['old_photo6'];

    try {
        if ($no) {
            // Update package with new or existing images
            $packageUpdate->updatePackage(
                $no, $name, $title, $subtitle, $days, $price, $sell, $fromD, $toD, 
                $schedule, $inclusion, $exclusion, $hotel,
                $photo1, $photo2, $photo3, $photo4, $photo5, $photo6
            );
        } else {
            // Add a new package
            $packageUpdate->addPackage($name, $title, $subtitle, $days, $price, $sell, $fromD, $toD, $schedule, $inclusion, $exclusion, $hotel, $photo1, $photo2, $photo3, $photo4, $photo5, $photo6);
        }

        // Redirect after successful update/add
        header("Location: packages.php");
        exit;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link rel="stylesheet" href="assets/vendor/libs/dropzone/dropzone.css" />


    <!-- Custom fonts for this template---->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- ----------bootsrap icon--------------- -->



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
                    <form action="packageReset.php" method="POST" enctype="multipart/form-data">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Welcome to Wheatever travels</h1>
                        </div>
                        <!-- Content Row -->
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="name">Package Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="name"
                                                    value="<?php echo htmlspecialchars($name); ?>"
                                                    placeholder="Enter Package Name"
                                                    id="name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="title">Title</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="title"
                                                    value="<?php echo htmlspecialchars($title); ?>"
                                                    placeholder="Enter Package Title"
                                                    id="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Sub-Title</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="subtitle"
                                                    value="<?php echo htmlspecialchars($subtitle); ?>"
                                                    placeholder="Enter Package Sub-Title"
                                                    id="subtitle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="days">Total Days</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="days"
                                                    value="<?php echo htmlspecialchars($days); ?>"
                                                    placeholder="Enter Total Tour-Days"
                                                    id="days">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="price">Package Price ( ₹ )</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="price"
                                                    value="<?php echo htmlspecialchars($price); ?>"
                                                    placeholder="Enter Total Amount of Package ( ₹ )"
                                                    id="price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="sell">Selling Price ( ₹ )</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="sell"
                                                    value="<?php echo htmlspecialchars($sell); ?>"
                                                    placeholder="Enter Package Selling Price ( ₹ )"
                                                    id="sell">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-secondary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="fromD">Routes From</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="fromD"
                                                    value="<?php echo htmlspecialchars($fromD); ?>"
                                                    placeholder="Enter Package's Routes From"
                                                    id="fromD">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="toD">Routes To</label>
                                                <input
                                                    type="text"
                                                    class="form-control py-3"
                                                    name="toD"
                                                    value="<?php echo htmlspecialchars($toD); ?>"
                                                    placeholder="Enter Package's Routes To"
                                                    id="toD">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Row -->
                        <div class="row">
                            <!-- Area Chart -->

                            <div class="col-xl-12 col-lg-12 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="hotel">Hotels Details</label>
                                                <textarea name="hotel" id="hotel" class="form-control" cols="30" rows="10"><?php echo htmlspecialchars($hotel); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-4">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="inclusion">Package-Inclusions</label>
                                                <textarea name="inclusion" id="inclusion" class="form-control" cols="30" rows="10"><?php echo htmlspecialchars($inclusion); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="exclusion">Package-Exclusions</label>
                                                <textarea name="exclusion" id="exclusion" class="form-control" cols="30" rows="10"><?php echo htmlspecialchars($exclusion); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="schedule">Package-Schedule ( Days )</label>
                                                <textarea name="schedule" id="schedule" class="form-control" cols="30" rows="10"><?php echo htmlspecialchars($schedule); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Card-Image</label> <br>

                                                <p class="mb-2">Select Image File:</p>
                                                <input type="file" name="photo1">
                                                <p class="my-2">Your Previous Image:</p>
                                                <img style="height: 50px; weight:50px" src="./admin/img/packages/<?php echo htmlspecialchars($photo1); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Package-Banar-Image</label> <br>

                                                <p class="mb-2">Select Image File:</p>
                                                <input type="file" name="photo2">
                                                <p class="my-2">Your Previous Image:</p>
                                                <img style="height: 50px; weight:50px" src="./admin/img/packages/<?php echo htmlspecialchars($photo2); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Package-Desgin-Photo-1</label> <br>

                                                <p class="mb-2">Select Image File:</p>
                                                <input type="file" name="photo3">
                                                <p class="my-2">Your Previous Image:</p>
                                                <img style="height: 50px; weight:50px" src="./admin/img/packages/<?php echo htmlspecialchars($photo3); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Package-Desgin-Photo-2</label> <br>

                                                <p class="mb-2">Select Image File:</p>
                                                <input type="file" name="photo4">
                                                <p class="my-2">Your Previous Image:</p>
                                                <img style="height: 50px; weight:50px" src="./admin/img/packages/<?php echo htmlspecialchars($photo4); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Package-Desgin-Photo-3</label> <br>

                                                <p class="mb-2">Select Image File:</p>
                                                <input type="file" name="photo5">
                                                <p class="my-2">Your Previous Image:</p>
                                                <img style="height: 50px; weight:50px" src="./admin/img/packages/<?php echo htmlspecialchars($photo5); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2 form-group">
                                                <label class="text-xs font-weight-bold text-primary text-uppercase mb-1" for="subtitle">Package-Desgin-Photo-4</label> <br>

                                                <p class="mb-2">Select Image File:</p>
                                                <input type="file" name="photo6">
                                                <p class="my-2">Your Previous Image:</p>
                                                <img style="height: 50px; weight:50px" src="./admin/img/packages/<?php echo htmlspecialchars($photo6); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hidden fields to retain old images -->
                        <input type="hidden" name="old_photo1" value="<?php echo $photo1; ?>">
                        <input type="hidden" name="old_photo2" value="<?php echo $photo2; ?>">
                        <input type="hidden" name="old_photo3" value="<?php echo $photo3; ?>">
                        <input type="hidden" name="old_photo4" value="<?php echo $photo4; ?>">
                        <input type="hidden" name="old_photo5" value="<?php echo $photo5; ?>">
                        <input type="hidden" name="old_photo6" value="<?php echo $photo6; ?>">

                        <input type="hidden" name="no" value="<?php echo htmlspecialchars($no); ?>">
                        <button type="submit" class="btn btn-default btn-info mt-3 text-light px-5 py-3">Update</button>
                    </form>



                </div>
                <!-- Begin Page Content -->

                <!-- End of Main Content -->

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
                        <a class="btn btn-primary" href="index.php">Logout</a>
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

        <!-- implimentation of ck editor -->

        <script src="ckeditor/ckeditor.js"></script>
        <script>
            var editor = CKEDITOR.replace('hotel');
            var editor = CKEDITOR.replace('inclusion');
            var editor = CKEDITOR.replace('exclusion');
            var editor = CKEDITOR.replace('schedule');
        </script>
</body>

</html>