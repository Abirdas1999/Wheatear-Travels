<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/0GUil8kD_400x400.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./css/testing.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <!-- <link rel="stylesheet" href="./css/style.css" /> -->
  <title>Checkout-Wheatear Travels-Most Trusted Travel Management Company</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark navbar_main">
    <div class="container navigation-wrap">
      <div class="navigation-wrap-toggler">
        <a href="./index.php">
          <img src="./assets/nav-img/wheater-travels.png" alt="" class="navlogo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse navigation_div" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-3" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="pakage.php">Packages</a>
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
            <a class="nav-link text-light mr-lg-3" href="addon.php">Add on</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-3" href="gallary.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light mr-lg-2" href="aboutus.php">About Us</a>
          </li>
        </ul>
        <!-- <button class="btn btn-success text-dark get_a_quote">
              Get A Quote
            </button> -->
      </div>
    </div>
  </nav>
  <div class="container mb-5 pb-5">

    <div class="py-5 text-center head_test">
      <h1>Checkout</h1>
      <p class="lead">Your Adventure Awaits: Complete Your Booking.</p>
    </div>
    <form id="paymentForm" method="POST" action="payment.php" class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your Package Details</span>
        </h4>
        <!--<ul class="list-group mb-3">-->
        <!--  <?php-->
        <!--  $conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");-->

        <!--  $query = "SELECT * FROM dashpackage WHERE no = 7";-->
        <!--  $query_run = mysqli_query($conn, $query);-->

        <!--  if (mysqli_num_rows($query_run) > 0) {-->
        <!--    foreach ($query_run as $row) {-->
        <!--      $price = $row['price'];-->
        <!--  ?>-->
        <!--      <li class="list-group-item d-flex justify-content-between lh-condensed">-->
        <!--        <div>-->
        <!--          <h4 class="highlights"><?= htmlspecialchars($row['title']); ?></h4>-->
        <!--        </div>-->
        <!--      </li>-->
        <!--      <li class="list-group-item d-flex justify-content-between lh-condensed">-->
        <!--        <div>-->
        <!--          <h6 class="my-0">Package Price</h6>-->
        <!--        </div>-->
        <!--        <span class="text-muted">₹<?= htmlspecialchars($price); ?></span>-->
        <!--      </li>-->
        <!--      <li class="list-group-item d-flex justify-content-between bg-light">-->
        <!--        <div class="text-success">-->
        <!--          <h6 class="my-0">Promo code</h6>-->
        <!--          <small>EXAMPLECODE</small>-->
        <!--        </div>-->
        <!--        <span class="text-success">-₹0</span>-->
        <!--      </li>-->
        <!--      <li class="list-group-item d-flex justify-content-between">-->
        <!--        <span>Total (INR)</span>-->
        <!--        <strong>₹<?= htmlspecialchars($price); ?></strong>-->
        <!--      </li>-->
        <!--      <input type="hidden" id="amount" name="amount" value="<?= htmlspecialchars($price); ?>">-->
        <!--    <?php-->
        <!--    }-->
        <!--  } else {-->
        <!--    ?>-->
        <!--    <tr>-->
        <!--      <td colspan="12">No Record Found</td>-->
        <!--    </tr>-->
        <!--  <?php-->
        <!--  }-->
        <!--  ?>-->
        <!--</ul>-->
        <div class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <div class="needs-validation" novalidate>
          <div class="bill" id="bill">
            <h4 class="mb-3">Billing address</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" required>

              </div>
            </div>
            <div class="mb-3">
              <label for="phone">Phone</label>
              <div class="input-group">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>

              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">

            </div>
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>

            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="eg : India">
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="eg : Delhi">
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="" required>
                <div class="invalid-feedback">
                  Amount is required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
          </div>
          <input class="btn btn-primary btn-lg btn-block" type="submit" value="Continue to Payment">
        </div>
      </div>
    </form>






  </div>
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
                  <ul class="p-0">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addon.php">Add On</a></li>
                    <li><a href="pakage.php">Packages</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
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
                  <ul class="p-0">
                    <li><a href="vietnam.php">Vietnam</a></li>
                    <li><a href="azerbaijan.php">Azerbaijan</a></li>
                    <li><a href="australia.php">Australia</a></li>
                    <li><a href="bhutan.php">Bhutan</a></li>
                    <!-- <li><a href="card/tamil.php">Tamilnadu</a></li> -->
                    <!-- <li><a href="#">Enquiry</a></li> -->
                    <li><a href="thailand.php">Thailand</a></li>
                    <!-- <li><a href="card/madhya.php">Madhyapradesh</a></li> -->
                    <li><a href="rishikesh.php">Rishikesh</a></li>
                    <li><a href="kashmir.php">Kashmir</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3 class="ml-5">Pages</h3>
                  </div>
                  <ul class="p-0">
                    <li><a href="termAndCondition.php">Terms & Condition</a></li>
                    <li><a href="policy.php">Privacy Policy</a></li>
                    <li><a href="refund.php">Refund Policy</a></li>
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
                <a href="https://aarhatiserv.com/" previewlistener="true" style="color: rgb(152, 152, 81)">AARHAT ISERV</a>
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

  <script src="./js/check.js"></script>
</body>


</html>