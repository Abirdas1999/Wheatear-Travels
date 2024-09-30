<?php

$conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");
if (!$conn) {
  die("Connection Error");
}

?>
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
  <!-- --------bootstarp 4.0--------------- -->
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
  <!-- -----------------css-------------------- -->
  <link rel="stylesheet" href="./css/hotel.css">
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/addon.css" />

  <!-- -------------favicon----------------- -->
  <link rel="icon" type="image/x-icon" href="/compound/cropped-Logo-variations-02-02-300x298.png">
  <!-- font family oxygen -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- font family lato -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <title>Hotel - Wheatear Travels</title>
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
            <a class="nav-link text-light" href="packages/all-Packages">Packages</a>
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
    <!-- banar of hotel -->
    <div class="banar">
    </div>
    <!-- -----------form------------ -->
    <div class="container-fluid">
      <form action="hotelForm.php" method="POST">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-4" id="col-1">
              <div class="iner-div"></div>
              <div class="card p-5" style="border: none; border-radius: 30px;box-shadow: 0 4px 8px 0 rgba(175, 220, 148, 0.597); height: 100%;">
                <div class="card-body" id="col1" style="">
                  <h3 style="margin-bottom: 20px;text-align: center;color: #777;">Give The Info</h3>
                  <input type="text" placeholder="Enter Full Name" id="name" name="name" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;"> <br>
                  <input class="mt-4" id="email" name="email" type="email" placeholder="Enter Your Email" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;"> <br>
                  <input class="mt-4" name="phone" id="phone" type="number" placeholder="Enter Phone number" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;"> <br>

                  <div class="btn-box">
                    <button class="btn" onclick="hideShow1()" type="button" id="Next1">Next</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-5 mt-md-0" id="col-2">
              <div class="iner-div"></div>
              <div class="card p-5" id="col2" style="border: none; border-radius: 30px;box-shadow: 0 4px 8px 0 rgba(175, 220, 148, 0.597); height: 100%;">
                <div class="card-body py-4" style="">
                  <h3 style="margin-bottom: 0px;text-align: center;color: #777;">Choose Your Date</h3>
                  <label class="pt-3" style="font-family: lato, sans-serif; font-weight: 600; font-size: 1rem;">Check in Date</label> <br>
                  <input type="date" id="checkin" name="checkin" class="form-control_1" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;"> <br>
                  <label class="pt-3" style="font-family: lato, sans-serif; font-weight: 600; font-size: 1rem;">Check out Date</label> <br>
                  <input type="date" id="checkout" name="checkout" class="form-control_1" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;">

                  <div class="btn-box mt-5">
                    <button class="btn" onclick="hideShow2()" type="button" id="Next2">Next</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-5 mt-md-0" id="col-3">
              <div class="iner-div"></div>
              <div class="card p-5" id="col3" style="border: none; border-radius: 30px;box-shadow: 0 4px 8px 0 rgba(175, 220, 148, 0.597); height: 100%;">
                <div class="card-body" style="">
                  <h3 style="margin-bottom: 20px;text-align: center;color: #777;">Room Details</h3>
                  <input type="Number" placeholder="Rooms" id="roompreference" name="roompreference" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;">
                  <input class="" type="number" placeholder="Guests Number" id="guestpreference" name="guestpreference" required style="width: 100%; padding: 10px 5px; margin: 5px 0; border:0; border-bottom: 1px solid #999; outline: none; background: transparent;"><br>
                  <label class="mt-3">
                    <p style="font-family: lato, sans-serif; font-weight: 800; font-size: 1rem;">Hotel Category</p>
                  </label> <br>
                  <select id="hotel" name="hotel" class="form-control" required>
                    <option value="5 star">5 Star</option>
                    <option value="4 star">4 Star</option>
                    <option value="3 star">3 Star</option>
                    <option value="2 star">2 Star</option>
                    <option value="1 star">1 Star</option>
                    <option value="resort">Resort</option>
                    <option value="villa">Villa</option>
                  </select>
                  <div class="btn-box">
                    <button class="btn" onclick="hideShow3()" type="button" id="preview">Preview</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row py-5">
            <div class="col-6 btn-box">
              <button class="btn float-right" type="Submit" id="submit1" name="register">Submit</button>
            </div>
            <div class="col-6 btn-box">
              <button class="btn" type="Submit" id="submit2">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- --------massage------------ -->
    <div class="container my-5 py-5">
      <div class="row py-5">
        <div class="col-md-6" style="display: flex; justify-content: center;flex-direction: column;align-items: center;">
          <div class="card image" style="width: 70%; border-radius: 12px;">
            <img class="img-fluid" style="border-radius: 12px;" src="./assets/images/Testy2.jpg">
          </div>
          <button class="btn btn2">
            <p class="button_text">Let's Beautify Your<br> Garden Togenther!</p>
          </button>
        </div>
        <div class="col-md-6">
          <div class="container py-5 my-5">
            <h3 class="h3_new py-5">
              Questions & Answers
            </h3>
            <?php
            $query = "SELECT * FROM hotelqna";
            $query_run  = mysqli_query($conn, $query);
            if ($query_run && mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $row) {
            ?>

                <div class="faqs-container">
                  <details open name="faq">
                    <summary class="pr-4">
                      <?php echo $row['question']; // Debugging: Show the file path 
                      ?>
                    </summary>

                    <p class="content text-dark">
                      <?php echo $row['answer']; // Debugging: Show the file path 
                      ?>
                    </p>
                  </details>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
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
  <!-- --------js----------------- -->
  <script>
    const accordionItems = document.querySelectorAll(".accordion-item");
    accordionItems.forEach(item => {
      const title = item.querySelector(".accordion-title");
      const content = item.querySelector(".accordion-content");

      title.addEventListener('click', () => {
        for (var i = 0; i < accordionItems.length; i++) {
          if (accordionItems[i] != item) {
            accordionItems[i].classList.remove('active')
          } else {
            item.classList.toggle('active');
          }
        }
      })
    })
  </script>
  <script>
    // document.getElementById("col-1").style.filter = "blur(10px)";
    document.getElementById("col-2").style.filter = "blur(10px)";
    document.getElementById("col1").style.backgroundColor = "white";
    document.getElementById("col2").style.backgroundColor = "rgba(97, 99, 96, 0.052)";
    document.getElementById("col3").style.backgroundColor = "rgba(97, 99, 96, 0.052)";
    document.getElementById("col-3").style.filter = "blur(10px)";
    document.getElementById("submit1").style.display = "none";
    document.getElementById("submit2").style.display = "none";

    function hideShow1() {
      document.getElementById("col-1").style.filter = "blur(10px)";
      document.getElementById("col-2").style.filter = "blur(0px)";
      document.getElementById("col-3").style.filter = "blur(10px)";
      document.getElementById("col1").style.backgroundColor = "rgba(97, 99, 96, 0.052)";
      document.getElementById("col2").style.backgroundColor = "white";
    }

    function hideShow2() {
      document.getElementById("col-1").style.filter = "blur(10px)";
      document.getElementById("col-2").style.filter = "blur(10px)";
      document.getElementById("col-3").style.filter = "blur(0px)";
      document.getElementById("col3").style.backgroundColor = "white";
      document.getElementById("col2").style.backgroundColor = "rgba(97, 99, 96, 0.052)";
    }

    function hideShow3() {
      document.getElementById("col-1").style.filter = "blur(0px)";
      document.getElementById("col-2").style.filter = "blur(0px)";
      document.getElementById("col-3").style.filter = "blur(0px)";
      document.getElementById("submit1").style.display = "block";
      document.getElementById("col1").style.backgroundColor = "white";
      document.getElementById("col2").style.backgroundColor = "white";
      document.getElementById("submit2").style.display = "block";
      document.getElementById("preview").style.display = "none";
      document.getElementById("Next1").style.display = "none";
      document.getElementById("Next2").style.display = "none";

    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>