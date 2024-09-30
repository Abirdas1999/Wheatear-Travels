<?php
include_once 'classes/packageUpdate.php';
$packageUpdate = new PackageUpdate();
$packageUpdates = $packageUpdate->getCPackage();
// $packageUpdatess = $packageUpdate->getPackage();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap 4.0 -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
    integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- style  -->
  <link rel="stylesheet" href="./css/gallary.css">
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <!-- font family oxygen -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- font family lato -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link rel="stylesheet" href="./css/style.css" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- ------favicon---------- -->
  <link rel="icon" type="image/x-icon" href="/compound/cropped-Logo-variations-02-02-300x298.png">
  <title>Gallery - Wheatear Travels</title>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark navbar_main">
    <div class="container navigation-wrap">
      <div class="navigation-wrap-toggler">
        <a href="./index">
          <img
            src="./assets/nav-img/wheater-travels.png"
            alt=""
            class="navlogo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse navigation_div" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-3" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="packages/all-Packages.php">Packages</a>
          </li>
          <!-- <li class="nav-item">
                <a
                  class="nav-link text-light mr-lg-3"
                  href="flight.php"
                  >Flight</a
                >
              </li> -->
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-3" href="hotel.php">Hotels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-3" href="addon">Add on</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-light mr-lg-3"
              href="gallary.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-2" href="aboutus">About Us</a>
          </li>
        </ul>
        <!-- <button class="btn btn-success text-dark get_a_quote">
              Get A Quote
            </button> -->
      </div>
    </div>
  </nav>
  <div class="main-container">
    <!-- banar of gallery -->
    <div class="banar"></div>
    <!-- cards of gallery -->
    <div class="container mt-4">
      <div class="row">
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
            <div class="col-md-4 mb-5">
              <img src="./admin/admin/img/photos/<?php echo htmlspecialchars($fetch['file']); ?>" class="img-fluid" style="height:20rem;width:100%; padding:0px" alt="...">
            </div>
        <?php
          }
        } else {
          echo "<p>No images found in the gallery.</p>";
        }

        $conn->close();
        ?>
      </div>
    </div>
  </div>
  <!-- last -->
  <div class="banar29 d-flex justify-content-start align-items-center mt-5">
    <div class="container">
      <h2 class="hero4">
        Go around the world without<br />
        Hassles
      </h2>
      <hr
        class="my-4"
        style="
              height: 1.5px;
              border-width: 0;
              color: gray;
              background-color: rgb(188, 186, 99);
              width: 4.5%;
            " />
      <p class="hero3">
        Use these paragraph to focus on the topic in the headline.Make sure
        keep it short and <br />
        attractive.
      </p>
      <button class="button">
        <a href="questions.php" style="text-decoration: none;color:#ffffff">Get A Free Quote</a>
      </button>
    </div>
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
                <a href="index.html"><img src="./assets/nav-img/wheater-travels.png" class="img-fluid" alt="logo"></a>
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
                    <li><a href="index">Home</a></li>
                    <li><a href="addon">Add On</a></li>
                    <li><a href="packages/all-Packages">Packages</a></li>
                    <li><a href="aboutus">About Us</a></li>
                    <!-- <li><a href="flight.php">Flight</a></li> -->
                    <!-- <li><a href="#">Enquiry</a></li> -->
                    <li><a href="hotel.php">Hotel</a></li>
                    <!-- <li><a href="termAndCondition.php">Terms & Condition</a></li> -->
                    <li><a href="gallary.php">Gallery</a></li>
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
                    foreach ($packageUpdates as $pg): ?>
                      <li><a href="packages/package-details?no=<?= $pg['no']; ?>"><?= $pg['name']; ?></a></li>
                    <?php
                      $index++; // Increment the counter
                    endforeach;
                    ?>
                    <li><a href="packages/all-packages">More</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3 class="ml-5">Pages</h3>
                  </div>
                  <ul>
                    <li><a href="termAndCondition">Terms & Condition</a></li>
                    <li><a href="policy">Privacy Policy</a></li>
                    <li><a href="refund">Refund Policy</a></li>
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

</html>