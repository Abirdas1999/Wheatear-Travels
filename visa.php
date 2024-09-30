<?php

$conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");
    if(!$conn){
        die("Connection Error");
    }
    
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
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- -----------------css-------------------- -->
    <link rel="stylesheet" href="./css/hotel.css">
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/style.css" />
      
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
    <title>Wheatear Travels</title>
    <style>
    .input-container_css select,
    .input-container_css option {
      background-color:rgb(199, 180, 26);
      color: white; /* Optional for better contrast */
    }
  </style>
</head>
<body>
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
      <div class="top_title container d-flex pt-5">
        <div class="icon_add">
          <!-- <button> <i class="fa-solid fa-circle-chevron-left"></i></button> -->
        <i class="fa-solid fa-circle-chevron-left" id="back1"></i>
        </div>
        <h1 class="text-center text-bold">
          Visa
        </h1>
      </div>
      <div class="container_css py-5 mt-5">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form_css">
        <div class="contact-info_css">
          <h3 class="title_css">Let's Enquiry About It</h3>
          <p class="text_css">
            To avail exciting offers and discounts contact now
          </p>
          <div class="form_image">
            <img class=" photo image-fluid" src="https://wheateartravels.com/assets/images/airport.jpg" alt="">
          </div>

        </div>

        <div class="contact-form_css">  
            <span class="circle one"></span>
            <span class="circle two"></span>

          <form action="enquiryform.php" method="POST" autocomplete="off">
            <h3 class="title_css">Contact us</h3>
           
            <div class="input-container_css">
              <input type="text" name="name" id="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
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

            <div class="input-container_css">
              <select type="text" name="name" id="name" class="input">
          <!-- <option class="input">Choose an option</option> -->
          <option>Visa</option>
          <option class="input">Buses</option>
          
          <option>Passport</option>
          <option>Forex</option>
          <option>Cruise</option>
          <option>Vehical on Rent</option>
          <option>Travel Insurance</option>
          
</select>
            </div>
            <div class="input-container_css textarea">
              <textarea name="message" id="message"class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="register" value="Send" class="btn_css" />
          </form>
        </div>
      </div>
    </div>
    <div class="container py-5 my-5">
    <h3 class="h3_new py-5">
        Questions & Answers Related with Visa
      </h3>
      <?php
          $query = "SELECT * FROM visa";
          $query_run  = mysqli_query($conn, $query);
          if ($query_run && mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $row) {
        ?>
      
      <div class="faqs-container">  
        <details open name="faq">
          <summary>
            <?php echo $row['question']; // Debugging: Show the file path ?>
          </summary>
  
          <p class="content text-dark">
            <?php echo $row['answer']; // Debugging: Show the file path ?>
          </p>
        </details>
        <!-- <details name="faq">
          <summary>
            How often do you need to do maintenance ?
          </summary> 
          <p class="content">
            This is dependent on the water source and your usage .Changes in the water source might disrupt your maintenance schedule .Hydra offers free first year maintenance service every 3 months so as to gauge the working of the systems in your space and advise on the best maintenance schedule that will give you optimum functioning of the system .The schedules may range from every 5 months to every 3 years.
          </p>
        </details>
        <details name="faq">
          <summary>
            How often do you need to do maintenance ?
          </summary>
          <p class="content">
            This is dependent on the water source and your usage .Changes in the water source might disrupt your maintenance schedule .Hydra offers free first year maintenance service every 3 months so as to gauge the working of the systems in your space and advise on the best maintenance schedule that will give you optimum functioning of the system .The schedules may range from every 5 months to every 3 years.
          </p>
        </details>
        <details name="faq">
          <summary>
            How often do you need to do maintenance ?
          </summary>
          <p class="content">
            This is dependent on the water source and your usage .Changes in the water source might disrupt your maintenance schedule .Hydra offers free first year maintenance service every 3 months so as to gauge the working of the systems in your space and advise on the best maintenance schedule that will give you optimum functioning of the system .The schedules may range from every 5 months to every 3 years.
          </p>
        </details>
        <details name="faq">
          <summary>
            How often do you need to do maintenance ?
          </summary>
          <p class="content">
            This is dependent on the water source and your usage .Changes in the water source might disrupt your maintenance schedule .Hydra offers free first year maintenance service every 3 months so as to gauge the working of the systems in your space and advise on the best maintenance schedule that will give you optimum functioning of the system .The schedules may range from every 5 months to every 3 years.
          </p>
        </details>
        <details name="faq">
          <summary>
            How often do you need to do maintenance ?
          </summary>
          <p class="content">
            This is dependent on the water source and your usage .Changes in the water source might disrupt your maintenance schedule .Hydra offers free first year maintenance service every 3 months so as to gauge the working of the systems in your space and advise on the best maintenance schedule that will give you optimum functioning of the system .The schedules may range from every 5 months to every 3 years.
          </p>
        </details> -->

      </div>
      <?php
    }
}
?>
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
                <ul>
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
                <ul>
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
                <ul>
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
    <script>
  document.getElementById('back1').onclick = function() {
      window.location.href = 'addon.php'; // Replace with your desired URL
    };
</script>
<script src="./js/test.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
