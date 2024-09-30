<?php
include_once './admin/admin/classes/packageUpdate.php';
$packageUpdate = new PackageUpdate();
$packageUpdates = $packageUpdate->getPackage();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="./assets/images/0GUil8kD_400x400.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oxygen:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/package.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/popup.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->

    <title>Wheatear Travels-Most Trusted Travel Management Company</title>
  </head>
  <body>
    <div style="overflow: hidden">
      <!-- navbar -->
      <nav class="navbar navbar-expand-md navbar-dark navbar_main">
        <div class="container navigation-wrap">
          <div class="navigation-wrap-toggler">
            <a href="./index.php">
            <img
              src="./assets/nav-img/wheater-travels.png"
              alt=""
              class="navlogo"
            />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#collapsibleNavbar"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          
          <div class="collapse navbar-collapse navigation_div" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-light mr-lg-3" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="pakage.php"
                  >Packages</a
                >
              </li>
              <!-- <li class="nav-item">
                <a
                  class="nav-link text-light mr-lg-3"
                  href="flight.php"
                  >Flight</a
                >
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-light mr-lg-3" href="hotel.php"
                  >Hotels</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-light mr-lg-3" href="addon.php"
                  >Add on</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-light mr-lg-3"
                  href="gallary.php"
                  >Gallery</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-light mr-lg-2" href="aboutus.php"
                  >About Us</a
                >
              </li>
            </ul>
            <!-- <button class="btn btn-success text-dark get_a_quote">
              Get A Quote
            </button> -->
          </div>
        </div>
      </nav>

      <!-- hero section -->
      <div class="landing">
        <img
          src="./assets/images/Destination.jpg"
          alt=""
          class="landing_image"
        />
      </div>
      <!-- ---------------new------------------- -->
      
      <!-- package card -->
      <div class="container pb-5">
        <div class="row py-5">
          <?php
          $index = 1; // Initialize a counter variable
          foreach ($packageUpdates as $pg): ?>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/7.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content text-center"><?= $pg['name']; ?></h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="ml-4 mb-0">
              <?= $pg['subtitle']; ?>
              </p>
              <span class="rupee ml-4">&#8377;<?= $pg['sell']; ?></span><br>
              <a href="thailand.php">
                <button class="btn btn-success button ml-4 mt-2">Click Here</button>
              </a>
            </div>
            <?php
                $index++; // Increment the counter
            endforeach;
            ?>
          </div>
          <!-- <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/4.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Madhya Pradesh</h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Embark on a spiritual journey through the heart of Madhya Pradesh with our 5-day Mahakal Pilgrimage Tour, starting at ₹17,999 per person (Premium Package). Explore the sacred cities of Ujjain, Maheshwar, and Indore, visiting renowned temples and experiencing the cultural richness of the region.


              </p>
              <span class="rupee">&#8377; 17,999</span><br>
              <a href="madhyapradesh.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/9.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Kashmir</h2>
            </div>
            <div class="mt-3 package-cards-text mt-3">
              <p class="m-0">
              Embark on an enchanting journey through the stunning landscapes of Kashmir with our 6-day tour, starting at ₹24,999 per person. From the serene beauty of Srinagar to the picturesque meadows of Sonamarg, Gulmarg, and Pahalgam, this tour offers an unforgettable experience.
              </p>
              <span class="rupee">&#8377; 24,999</span><br>
              <a href="kashmir.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/6.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Tamilnadu</h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Embark on a spiritual journey through the heart of Tamil Nadu with our 5-day Pilgrimage Tour, starting at ₹24,999 per person (Premium Package).
              </p>
              <span class="rupee">&#8377; 24,999</span><br>
              <a href="tamilnadu.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          
          <div class="col-md-4 mb-5">
            <div class="card package-cards pre-content">
              <img
                src="./card/img/1.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Azerbaijan</h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Explore the beauty of Azerbaijan with our 7-day tour starting at ₹25,000 per person.
              </p>
              <span class="rupee">&#8377; 25,000</span><br>
              <a href="azerbaijan.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/2.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Bhutan</h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Explore the enchanting kingdom of Bhutan with our 6-day tour starting at ₹29,999 per person.
              </p>
              <span class="rupee">&#8377; 29,999</span><br>
              <a href="bhutan.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/5.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Rishikesh</h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Luxury 5-Star Premium Package - Rishikesh Luxury Rishiskesh Vacation at ₹ 32,999/- per person.
              </p>
              <span class="rupee">&#8377; 32,999</span> <br>
              <a href="rishikesh.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/8.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Vietnam</h2>
              
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Explore Hanoi’s rich history, cruise through Ha Long Bay, visit ancient temples in Ninh Binh, and discover the vibrant cities of Da Nang and Ho Chi Minh City. Enjoy comfortable accommodations, local cuisine, and unforgettable cultural experiences.
              </p>
              <span class="rupee">&#8377; 49,999</span><br>
              <a href="vietnam.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card package-cards">
              <img
                src="./card/img/3.jpg"
                alt="..."
                class="photo"
              />
              <h2 class="content">Australia</h2>
            </div>
            <div class="package-cards-text mt-3">
              <p class="m-0">
              Australia Tour Package - 14 Nights & 15 Days. Melbourne (3N)/Cairns (3N)/Gold Coast (3N)/Sydney (5N)
              </p>
              <span class="rupee">&#8377; 199,999</span><br>
              <a href="australia.php">
                <button class="btn btn-success button mt-2">Click Here</button>
              </a>
            </div>
          </div> -->
        </div>
        <hr class="py-3">
        <div class="row py-5 d-flex justify-content-center">
          <div class="botom-content pb-3">
            <h2>
              Customize Your <span>P</span>ackages
            </h2>
          </div>
          <div class="d-flex align-items-center px-5 botom-content2">
            <div class="btn text-center bg-warning" id="contactButton">
              Contact Us Now
            </div>
          </div>
        </div>
      </div>
      <!-- -------addon form ----- -->
      <div id="overlay">
        
      </div>
      <div id="popupForm">
        <!-- <button type="button" >Close</button> -->
        <i class="fa-solid fa-xmark" onclick="closeForm()"></i>
        <div class="container_css mt-5 py-5">
          <div class="contact-form_css">  
            <form action="enquiryform2.php" method="POST" autocomplete="off">
              <h3 class="title_css"><span>C</span>ontact us</h3>
              <div class="input-container_css">
                <input type="text" name="name" id="name" class="input" />
                <label for="">Name</label>
                <span>Name</span>
              </div>
              <div class="input-container_css">
                <input type="email" name="mail" id="mail" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container_css">
                <input type="text" name="phone" id="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container_css textarea">
                <textarea name="message" id="message"class="input"></textarea>
                <label for="">Requirement</label>
                <span>Requirement</span>
              </div>
              <input type="submit" name="register" value="Send" class="btn_css" />
              
            </form>
            
          </div>
        </div>
      </div>
      </div>

      <!-- <div class="container mb-5">
        <div class="row">
          <div class="col-sm-12">
            <img
              src="./assets/images/Wheatear-travels-Offer.jpg"
              alt=""
              class="img-fluid"
            />
          </div>
        </div>
      </div> -->
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
                  <span >033 69029381</span>
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
                <p >
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
                <a
                  href="https://aarhatiserv.com/"
                  previewlistener="true"
                  style="color: rgb(152, 152, 81)"
                  >AARHAT ISERV</a
                >
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
  <script
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"
  ></script>
  <script>
       // Function to open the popup form
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }

    // Function to close the popup form
    function closeForm() {
      document.getElementById("popupForm").style.display = "none";
      document.getElementById("overlay").style.display = "none";
    }
        // Add onclick event to the button
        document.getElementById("contactButton").onclick = openForm;

  </script>
  <script src="./js/test.js"></script>
</html>
