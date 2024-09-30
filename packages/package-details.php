<?php
// Include the PackageUpdate class
include_once '../admin/admin/classes/packageUpdate.php';
$packageUpdate = new PackageUpdate();
$packageUpdatess = $packageUpdate->getCPackage();

// Check if the ID (no) is provided in the URL
if (isset($_GET['no'])) {
    $packageNo = $_GET['no'];

    // Create a new instance of the PackageUpdate class
    $packageUpdate = new PackageUpdate();

    // Fetch the package details for the given packageNo
    $packageDetails = $packageUpdate->getPackageByNo($packageNo);

    // Check if the package exists
    if ($packageDetails) {
        // Display the package details
        $name = $packageDetails['name'];
        $title = $packageDetails['title'];
        $subtitle = $packageDetails['subtitle'];
        $days = $packageDetails['days'];
        $price = $packageDetails['price'];
        $sell = $packageDetails['sell'];
        $fromD = $packageDetails['fromD'];
        $toD = $packageDetails['toD'];
        $schedule = $packageDetails['schedule'];
        $inclusion = $packageDetails['inclusion'];
        $exclusion = $packageDetails['exclusion'];
        $hotel = $packageDetails['hotel'];
        $photos = [
            $packageDetails['photo1'],
            $packageDetails['photo2'],
            $packageDetails['photo3'],
            $packageDetails['photo4'],
            $packageDetails['photo5'],
            $packageDetails['photo6']
        ];
    } else {
        echo "Package not found!";
        exit;
    }
} else {
    echo "No package ID provided!";
    exit;
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/0GUil8kD_400x400.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/footer.css" />
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Wheatear Travels-Most Trusted Travel Management Company-Tour Highlights</title>
</head>

<body>
    <div style="overflow: hidden;">
        <nav class="navbar navbar-expand-md navbar-dark navbar_main">
            <div class="container navigation-wrap">
                <div class="navigation-wrap-toggler">
                    <a href="../index.php">
                        <img src="../assets/nav-img/wheater-travels.png" alt="" class="navlogo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navigation_div" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light mr-lg-3" href="../index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./all-Packages">Packages</a>
                        </li>
                        <!-- <li class="nav-item">
                <a
                  class="nav-link text-light mr-lg-3"
                  href="flight.php"
                  >Flight</a
                >
              </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-light mr-lg-3" href="../hotel.php">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light mr-lg-3" href="../addon">Add on</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light mr-lg-3" href="../gallary.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light mr-lg-2" href="../aboutus">About Us</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-success text-dark get_a_quote">
              Get A Quote
            </button> -->
                </div>
            </div>
        </nav>

        <div class="custom-container mt-2">
            <div class="row mb-4 align-items-center custom-content">
                <!-- Large Image -->
                <div class="col-md-6 col-xl-5 pre-sub-img2">
                    <img class="custom-img-fluid main-image" src="../admin/admin/img/packages/<?= $photos[1]; ?>" alt="Main Image">
                </div>
                <!-- Small Image Grid -->
                <div class="col-md-4 col-lg-5 col-xl-5 pre-sub-img3">
                    <div class="row">
                        <div class="col-6 pre-sub-img">
                            <img class="custom-img-fluid sub-image mb-1" style="border-radius:10px 0px 0px 0px" src="../admin/admin/img/packages/<?= $photos[2]; ?>" alt="Image 2">
                        </div>
                        <div class="col-6 pre-sub-img">
                            <img class="custom-img-fluid sub-image ml-1" style="border-radius:0px 10px 0px 0px" src="../admin/admin/img/packages/<?= $photos[3]; ?>" alt="Image 3">
                        </div>
                        <div class="col-6 pre-sub-img">
                            <img class="custom-img-fluid sub-image" style="border-radius:0px 0px 0px 10px" src="../admin/admin/img/packages/<?= $photos[4]; ?>" alt="Image 4">
                        </div>
                        <div class="col-6 pre-sub-img">
                            <img class="custom-img-fluid sub-image ml-1" style="border-radius:0px 0px 10px 0px" src="../admin/admin/img/packages/<?= $photos[5]; ?>" alt="Image 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container mt-4">

            <form action="" method="POST">
                <div class="row py-2">

                    <div class="col-lg-7">

                        <h3 class="highlights"><?php echo $title; ?></h3>
                        <p><?php echo $subtitle; ?></p>
                        <hr>

                        <div class="svg">
                            <div class="svg1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="20px" height="20px">
                                    <path d="M 40 5.820313 L 7 26.445313 L 7 35.804688 L 8.53125 34.847656 L 9 34.550781 L 9 71 L 71 71 L 71 34.554688 L 73 35.804688 L 73 26.445313 Z M 40 8.179688 L 71 27.554688 L 71 32.199219 L 40 12.820313 L 9 32.199219 L 9 27.554688 Z M 40 15.179688 L 69 33.304688 L 69 62 C 68.449219 62 68 62.449219 68 63 C 68 63.550781 68.449219 64 69 64 L 69 69 L 49 69 L 49 64 C 49.550781 64 50 63.550781 50 63 C 50 62.449219 49.550781 62 49 62 L 49 44 L 31 44 L 31 62 C 30.449219 62 30 62.449219 30 63 C 30 63.550781 30.449219 64 31 64 L 31 69 L 11 69 L 11 64 C 11.550781 64 12 63.550781 12 63 C 12 62.449219 11.550781 62 11 62 L 11 33.300781 Z M 31 25 L 31 37 L 49 37 L 49 25 Z M 33 27 L 39 27 L 39 35 L 33 35 Z M 41 27 L 47 27 L 47 35 L 41 35 Z M 33 46 L 47 46 L 47 69 L 33 69 Z M 43.5 57 C 42.671875 57 42 57.671875 42 58.5 C 42 59.328125 42.671875 60 43.5 60 C 44.328125 60 45 59.328125 45 58.5 C 45 57.671875 44.328125 57 43.5 57 Z M 15 62 C 14.449219 62 14 62.449219 14 63 C 14 63.550781 14.449219 64 15 64 C 15.550781 64 16 63.550781 16 63 C 16 62.449219 15.550781 62 15 62 Z M 19 62 C 18.449219 62 18 62.449219 18 63 C 18 63.550781 18.449219 64 19 64 C 19.550781 64 20 63.550781 20 63 C 20 62.449219 19.550781 62 19 62 Z M 23 62 C 22.449219 62 22 62.449219 22 63 C 22 63.550781 22.449219 64 23 64 C 23.550781 64 24 63.550781 24 63 C 24 62.449219 23.550781 62 23 62 Z M 27 62 C 26.449219 62 26 62.449219 26 63 C 26 63.550781 26.449219 64 27 64 C 27.550781 64 28 63.550781 28 63 C 28 62.449219 27.550781 62 27 62 Z M 53 62 C 52.449219 62 52 62.449219 52 63 C 52 63.550781 52.449219 64 53 64 C 53.550781 64 54 63.550781 54 63 C 54 62.449219 53.550781 62 53 62 Z M 57 62 C 56.449219 62 56 62.449219 56 63 C 56 63.550781 56.449219 64 57 64 C 57.550781 64 58 63.550781 58 63 C 58 62.449219 57.550781 62 57 62 Z M 61 62 C 60.449219 62 60 62.449219 60 63 C 60 63.550781 60.449219 64 61 64 C 61.550781 64 62 63.550781 62 63 C 62 62.449219 61.550781 62 61 62 Z M 65 62 C 64.449219 62 64 62.449219 64 63 C 64 63.550781 64.449219 64 65 64 C 65.550781 64 66 63.550781 66 63 C 66 62.449219 65.550781 62 65 62 Z" />
                                </svg>
                                <span>Stay Included</span>
                            </div>
                            <div class="svg2">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="20px" height="20px">
                                    <path d="M 40 5.820313 L 7 26.445313 L 7 35.804688 L 8.53125 34.847656 L 9 34.550781 L 9 71 L 71 71 L 71 34.554688 L 73 35.804688 L 73 26.445313 Z M 40 8.179688 L 71 27.554688 L 71 32.199219 L 40 12.820313 L 9 32.199219 L 9 27.554688 Z M 40 15.179688 L 69 33.304688 L 69 62 C 68.449219 62 68 62.449219 68 63 C 68 63.550781 68.449219 64 69 64 L 69 69 L 49 69 L 49 64 C 49.550781 64 50 63.550781 50 63 C 50 62.449219 49.550781 62 49 62 L 49 44 L 31 44 L 31 62 C 30.449219 62 30 62.449219 30 63 C 30 63.550781 30.449219 64 31 64 L 31 69 L 11 69 L 11 64 C 11.550781 64 12 63.550781 12 63 C 12 62.449219 11.550781 62 11 62 L 11 33.300781 Z M 31 25 L 31 37 L 49 37 L 49 25 Z M 33 27 L 39 27 L 39 35 L 33 35 Z M 41 27 L 47 27 L 47 35 L 41 35 Z M 33 46 L 47 46 L 47 69 L 33 69 Z M 43.5 57 C 42.671875 57 42 57.671875 42 58.5 C 42 59.328125 42.671875 60 43.5 60 C 44.328125 60 45 59.328125 45 58.5 C 45 57.671875 44.328125 57 43.5 57 Z M 15 62 C 14.449219 62 14 62.449219 14 63 C 14 63.550781 14.449219 64 15 64 C 15.550781 64 16 63.550781 16 63 C 16 62.449219 15.550781 62 15 62 Z M 19 62 C 18.449219 62 18 62.449219 18 63 C 18 63.550781 18.449219 64 19 64 C 19.550781 64 20 63.550781 20 63 C 20 62.449219 19.550781 62 19 62 Z M 23 62 C 22.449219 62 22 62.449219 22 63 C 22 63.550781 22.449219 64 23 64 C 23.550781 64 24 63.550781 24 63 C 24 62.449219 23.550781 62 23 62 Z M 27 62 C 26.449219 62 26 62.449219 26 63 C 26 63.550781 26.449219 64 27 64 C 27.550781 64 28 63.550781 28 63 C 28 62.449219 27.550781 62 27 62 Z M 53 62 C 52.449219 62 52 62.449219 52 63 C 52 63.550781 52.449219 64 53 64 C 53.550781 64 54 63.550781 54 63 C 54 62.449219 53.550781 62 53 62 Z M 57 62 C 56.449219 62 56 62.449219 56 63 C 56 63.550781 56.449219 64 57 64 C 57.550781 64 58 63.550781 58 63 C 58 62.449219 57.550781 62 57 62 Z M 61 62 C 60.449219 62 60 62.449219 60 63 C 60 63.550781 60.449219 64 61 64 C 61.550781 64 62 63.550781 62 63 C 62 62.449219 61.550781 62 61 62 Z M 65 62 C 64.449219 62 64 62.449219 64 63 C 64 63.550781 64.449219 64 65 64 C 65.550781 64 66 63.550781 66 63 C 66 62.449219 65.550781 62 65 62 Z" />
                                </svg>
                                <span>Breakfast Included</span>
                            </div>
                            <div class="svg3">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="20px" height="20px">
                                    <path d="M 40 5.820313 L 7 26.445313 L 7 35.804688 L 8.53125 34.847656 L 9 34.550781 L 9 71 L 71 71 L 71 34.554688 L 73 35.804688 L 73 26.445313 Z M 40 8.179688 L 71 27.554688 L 71 32.199219 L 40 12.820313 L 9 32.199219 L 9 27.554688 Z M 40 15.179688 L 69 33.304688 L 69 62 C 68.449219 62 68 62.449219 68 63 C 68 63.550781 68.449219 64 69 64 L 69 69 L 49 69 L 49 64 C 49.550781 64 50 63.550781 50 63 C 50 62.449219 49.550781 62 49 62 L 49 44 L 31 44 L 31 62 C 30.449219 62 30 62.449219 30 63 C 30 63.550781 30.449219 64 31 64 L 31 69 L 11 69 L 11 64 C 11.550781 64 12 63.550781 12 63 C 12 62.449219 11.550781 62 11 62 L 11 33.300781 Z M 31 25 L 31 37 L 49 37 L 49 25 Z M 33 27 L 39 27 L 39 35 L 33 35 Z M 41 27 L 47 27 L 47 35 L 41 35 Z M 33 46 L 47 46 L 47 69 L 33 69 Z M 43.5 57 C 42.671875 57 42 57.671875 42 58.5 C 42 59.328125 42.671875 60 43.5 60 C 44.328125 60 45 59.328125 45 58.5 C 45 57.671875 44.328125 57 43.5 57 Z M 15 62 C 14.449219 62 14 62.449219 14 63 C 14 63.550781 14.449219 64 15 64 C 15.550781 64 16 63.550781 16 63 C 16 62.449219 15.550781 62 15 62 Z M 19 62 C 18.449219 62 18 62.449219 18 63 C 18 63.550781 18.449219 64 19 64 C 19.550781 64 20 63.550781 20 63 C 20 62.449219 19.550781 62 19 62 Z M 23 62 C 22.449219 62 22 62.449219 22 63 C 22 63.550781 22.449219 64 23 64 C 23.550781 64 24 63.550781 24 63 C 24 62.449219 23.550781 62 23 62 Z M 27 62 C 26.449219 62 26 62.449219 26 63 C 26 63.550781 26.449219 64 27 64 C 27.550781 64 28 63.550781 28 63 C 28 62.449219 27.550781 62 27 62 Z M 53 62 C 52.449219 62 52 62.449219 52 63 C 52 63.550781 52.449219 64 53 64 C 53.550781 64 54 63.550781 54 63 C 54 62.449219 53.550781 62 53 62 Z M 57 62 C 56.449219 62 56 62.449219 56 63 C 56 63.550781 56.449219 64 57 64 C 57.550781 64 58 63.550781 58 63 C 58 62.449219 57.550781 62 57 62 Z M 61 62 C 60.449219 62 60 62.449219 60 63 C 60 63.550781 60.449219 64 61 64 C 61.550781 64 62 63.550781 62 63 C 62 62.449219 61.550781 62 61 62 Z M 65 62 C 64.449219 62 64 62.449219 64 63 C 64 63.550781 64.449219 64 65 64 C 65.550781 64 66 63.550781 66 63 C 66 62.449219 65.550781 62 65 62 Z" />
                                </svg>
                                <span>Sightseeing Included</span>
                            </div>
                        </div>
                        <hr class="my-4">
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="card enquiry-card p-3">
                            <p class="details-text">INR <?php echo $sell; ?><span class="px-2">INR<?php echo $price; ?></span> </p>
                            <span class="save">Save INR <?= $price - $sell; ?></span>
                            <a href="checkout?no=<?= $packageNo ?>" class="btn btn book_now" id="edit">Book Now !</a>

                        </div>
                    </div>
                </div>
                <div class="row pb-5 mb-5">
                    <div class="col-lg-7">
                        <p class="trip mt-3">Choose Trip Duration</p>
                        <div class="d-flex">
                            <div class="card trip-cards">
                                <img src="../admin/admin/img/packages/<?= $photos[2]; ?>" alt="..." class="photo img-fluid">
                                <div class="text trip-text ml-2 text-light">
                                    <?php echo $days; ?> days
                                </div>
                                <p class=" trip-text-info mt-3">Starting From <br><span>&#8377; <?php echo $sell; ?></span></p>
                            </div>
                            <div class="card trip-cards ml-3">
                                <img src="../admin/admin/img/packages/<?= $photos[3]; ?>" alt="..." class="photo img-fluid">
                                <div class="text trip-text ml-2 text-light">
                                    X days
                                </div>
                                <p class=" trip-text-info mt-3">Comming Soon...</p>
                            </div>
                        </div>
                        <div class="destination">
                            <p class="mt-3" style="font-weight: bold;">Destination Routes</p>
                            <div class="card p-1 route-card">
                                <p class="my-2 ml-3 route"><?php echo $fromD; ?>><?php echo $toD; ?></p>
                            </div>
                        </div>
                        <hr>
                        <hr>

                        <div class=" mt-3">
                            <?php echo $schedule; ?>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <form action="cardSubmit.php" method="POST" class="enquiry-form " onsubmit="return validateForm()">
                            <input type="text" id="name" placeholder="Full Name" name="name" class="field p-2">
                            <input type="email" id="mail" placeholder="Email Address" name="mail" class="field mt-3 p-2">
                            <input type="number" id="phone" placeholder="Phone Number" name="phone" class="field mt-3 p-2">
                            <div class="d-flex mt-3">
                                <input type="date" id="tdate" placeholder="Travel Date" name="tdate" class="field1 p-2">
                                <input type="number" id="tcount" placeholder="Traveller Count" name="tcount" class="field2 ml-2 p-2">
                            </div>
                            <textarea name="sms" id="sms" cols="30" rows="5" class="mt-3 p-3 msg-field p-2" placeholder="Message"></textarea>
                            <button class="btn btn-success submit-button py-2 my-3" name="register">Send</button>
                        </form>
                        <div class="div py-5">
                            <div class="">
                                <!-- ----- hotel ---- -->
                                <?php echo $hotel; ?>
                            </div>


                            <div class="">
                                <!-- ----- inclusion ---- -->
                                <?php echo $inclusion; ?>
                            </div>


                            <div class="">
                                <!-- ----- exclusion ---- -->
                                <?php echo $exclusion; ?>

                                <p class="ml-2" style="font-weight: bold;">Book Now:</p>
                                <p class="ml-2">Ready to embark on this journey? Contact us today to book your <?php echo $name; ?>Tour.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- footer -->
        <footer class="footer-section">
            <div class="container pb-5">
                <div class="footer-cta pt-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="bi bi-geo-alt-fill"></i>
                                <div class="cta-text">
                                    <h4 class="fsection py-4">Find us</h4>
                                    <span>88 Maharshi Devendra Road <br>1st Floor
                                        Kolkata </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="bi bi-telephone-fill"></i>
                                <div class="cta-text">
                                    <h4 class="fsection py-4">Call us</h4>
                                    <span>033 69029381</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="bi bi-envelope-open-fill"></i>
                                <div class="cta-text">
                                    <h4 class="fsection py-4">Mail us</h4>
                                    <!-- <a href="enquiry@wheateartravels.com"></a> -->
                                    <span>enquiry@wheateartravels.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-1">
                    <div class="row">
                        <div class="col-xl-2 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="../index.html"><img src="../assets/nav-img/wheater-travels.png" class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>*Terms - Redeemable upto 10% on your next package booking.</p>
                                    <p>
                                        <!-- <a class="nav-link text-secondary py-3" style="padding:0px" href="termAndCondition.php">Terms & Condition</a> -->
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 mb-30">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-heading">
                                            <h3 class="ml-5">Services</h3>
                                        </div>
                                        <ul>
                                            <li><a href="../index">Home</a></li>
                                            <li><a href="../addon">Add On</a></li>
                                            <li><a href="../packages/all-Packages">Packages</a></li>
                                            <li><a href="../aboutus">About Us</a></li>
                                            <!-- <li><a href="flight.php">Flight</a></li> -->
                                            <!-- <li><a href="#">Enquiry</a></li> -->
                                            <li><a href="../hotel.php">Hotel</a></li>
                                            <!-- <li><a href="termAndCondition.php">Terms & Condition</a></li> -->
                                            <li><a href="../gallary.php">Gallery</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-heading">
                                            <h3 class="ml-5">Packages</h3>
                                        </div>
                                        <ul>
                                            <?php
                                            $index = 1; // Initialize a counter variable
                                            foreach ($packageUpdatess as $pgs): ?>
                                                <li><a href="package-details?no=<?= $pgs['no']; ?>"><?= $pgs['name']; ?></a></li>
                                            <?php
                                                $index++; // Increment the counter
                                            endforeach;
                                            ?>
                                            <li><a href="all-packages">More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-heading">
                                            <h3 class="ml-5">Pages</h3>
                                        </div>
                                        <ul>
                                            <li><a href="../termAndCondition">Terms & Condition</a></li>
                                            <li><a href="../policy">Privacy Policy</a></li>
                                            <li><a href="../refund">Refund Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-50 pl-3">
                            <div class="">
                                <div class="footer-widget-heading">
                                    <h3 class="ml-5">Follow us</h3>
                                </div>
                                <ul class="d-flex social_icon" style="padding: 0px; width:60px">
                                    <li class="d-flex justify-content-start"><a href="https://www.facebook.com/people/WheatearTravels/61560026336025/"><i class="bi bi-facebook"></i></a></li>
                                    <!-- <li class="d-flex justify-content-start"><a href="#"><i class="bi bi-twitter"></i></a></li> -->
                                    <li class="d-flex justify-content-start"><a href="https://www.instagram.com/wheateartravels/"><i class="bi bi-instagram"></i></a></li>
                                    <!-- <li class="d-flex justify-content-start"><a href="#"><i class="fa-brands fa-youtube"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- ------------------ -->

                        <!-- ------------------------ -->
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p class="hero6">
                                    Maintained by
                                    <a
                                        href="https://aarhatiserv.com/"
                                        previewlistener="true"
                                        style="color: rgb(152, 152, 81)">AARHAT ISERV</a>
                                </p>
                                <!-- <p>Copyright &copy; 2023, All Right Reserved <a href="#">aarhatiserv.LLP</a></p> -->
                            </div>
                        </div>
                        <!-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
              <div class="footer-menu">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Policy</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- -----------footer end----------------- -->
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="../card/card.js"></script>

</html>