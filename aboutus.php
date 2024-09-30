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
  <!-- script- -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <!-- bootstrap 4.0 -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
    integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/about2.css">
  <link rel="stylesheet" href="./css/about3.css">
  <!-- ------favicon---------- -->
  <link rel="icon" type="image/x-icon" href="/compound/cropped-Logo-variations-02-02-300x298.png">
  <!-- style  -->
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/nav.css" />

  <!-- font family oxygen -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- font family lato -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <title>About Us - Wheatear Travels</title>
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
    <div class="banar">
    </div>
    <!-- --------------hero-card---------------- -->

    <div class="about_top">
      <main class="card_grid">
        <section class="card card_about cyan">
          <h2 class="card_title">Vision</h2>
          <p class="card_content">Our vision as a travel agency company is to be among the most outstanding travel agencies with superior quality services to our clients and a world of reference on exclusive travel services. Our mission is to aim to highest benchmark for travel services to ensure the journey is always pleasant and without hassle.</p>
          <img class="card_img" src="https://raw.githubusercontent.com/davidsonaguiar/frontendmentor/main/Four%20card%20feature%20section/images/icon-supervisor.svg" alt="Supervisor">
        </section>

        <section class="card card_about red">
          <h2 class="card_title">Mission</h2>
          <p class="card_content">Wheatear Travels LLP has a mission of becoming the leading travel management company through deployment of professionalism, hard work and efficient and effective service delivery through provision of unique solutions. This vision entails delivering unique, hitch-free travel solutions that turn our clients’ travel visions into a reality. </p>
          <img class="card_img" src="https://raw.githubusercontent.com/davidsonaguiar/frontendmentor/main/Four%20card%20feature%20section/images/icon-team-builder.svg" alt="page-home">
        </section>

        <section class="card card_about blue">
          <h2 class="card_title">Values</h2>
          <p class="card-content">The core values of Wheatear Travels LLP consist of business and operational integrity, partners’ and customers’ trust, and focus on clients’ success. Personalized approach combined with innovations and focus on providing the ultimate quality of services exclusively for the client, guarantee that everybody will meet their needs and will get maximum level of satisfaction during the time spent in travels.</p>
          <img class="card_img" src="https://raw.githubusercontent.com/davidsonaguiar/frontendmentor/main/Four%20card%20feature%20section/images/icon-karma.svg" alt="Karma">
        </section>

        <section class="card card_about orange">
          <h2 class="card_title">Goals</h2>
          <p class="card_content">Their objectives are eastward geographic expansion, the development of new services, and constant improvement of customer service for growing customers’ demands of the traveling population. Our long term goal is to establish loyalty with the clients, offer the best travel transactions, and ensure high customers’ loyalty stemming from quality services and assistance.</p>
          <img class="card_img" src="https://raw.githubusercontent.com/davidsonaguiar/frontendmentor/main/Four%20card%20feature%20section/images/icon-calculator.svg" alt="Calculator">
        </section>
      </main>
    </div>
    <!----------------------------------------------------- banar -->
    <div class="pre-contain border-bottom">
      <div class="container ">
        <div class="row">
          <div class="img text-center">
            <!-- <img src="/compound/AboutUsBannar.png" alt="Cinque Terre" width="1140" height="610"> -->
            <img class="img-fluid" style="background-size: fixed; border-radius: 10px;" src="./assets/images/person-traveling-enjoying-their-vacation.jpg" alt="" width="1100">
          </div>
          <div class="py-5 my-4 content-banar d-flex flex-column flex-md-row">
            <div class="col-lg-6">
              <h4 class="hero4_1">Elevate Your Travel Plans with Expert Guidance . Experience Unmatched Travel Services with Wheatear Travels.</h4>
            </div>
            <div class="col-lg-6">
              <p class="hero_cont">
                Unearth the most exhaustive travel management services offered to you by Wheatear Travels LLP, the synergy of knowledge, passion, and innovation. With a highly experienced staff, we meet all travel related services for business and leisure travellers providing a one stop solution. On this basis, we have individual approach to our clients, as our travel consultants will guide you through all your options. Furthermore, our support team is available for you 24/7, which means that no matter what place you will be, you can always rely on our help.
              </p>
              <p class="hero_cont py-3">
                Wheatear Travels LLP provides end-to-end travel services; airline ticketing, hotel accommodations, car rentals, Visas, foreign exchange, Passports, and vacations/trips planning. This way you have a complete package without any complications with high degree of services being offered through our preferred partnerships with the carriers, hotels, car rentals,/theme parks, and other suppliers. The organizations that are in partnership and affiliation with us ensures that you get serviced or assisted anywhere in the world you may be, thus leave alone going to the remote areas.
              </p>
              <p class="hero_cont">
                Wheatear Travels LLP gives importance to customer satisfaction hence, our customers stick to our travel agency and giving good reports. We thrive to ensure our interactions are always satisfactory to make sure that we are perfect in what we do. Trust us with your travel management and let servicing that come with professionalism, customer focus, and great solutions pleasantly surprise you. Why not turn those travel aspirations into reality with the help of Wheatear Travels LLP at the most affordable prices, outclass services and 24/7 assistance
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ----------------------------why chose--------------- -->

    <section id="features" class="features-area item-full text-center cell-items default-padding">
      <div class="container pt-5">
        <div class="row py-5">
          <div class="col-md-12">
            <div class="site-heading text-center">
              <h2>Our <span>Features</span></h2>
              <h4>Checkout our leatest features</h4>
            </div>
          </div>
        </div>
        <div class="row features-items">
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fa-duotone fa-camera-retro" style="color: #1c7ed6;"></i>
              </div>
              <div class="info">
                <h4>Expertise and Experience</h4>
                <p>
                  Our team has the knowledge and experience to handle every aspect of your travel needs. From business trips to leisure vacations, we offer tailored solutions that meet and exceed expectations.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fas fa-headset"></i>
              </div>
              <div class="info">
                <h4>Personalized Service</h4>
                <p>
                  We believe in the power of personalization. Our dedicated travel consultants work closely with you to understand your preferences and requirements, ensuring a seamless and enjoyable travel experience.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fas fa-chart-line" style="color:yellow"></i>
              </div>
              <div class="info">
                <h4>24/7 Support</h4>
                <p>
                  Travel emergencies don’t keep office hours, and neither do we. Our 24/7 support team is always available to assist you, no matter where you are in the world.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fa-solid fa-compass" style="color:crimson"></i>
              </div>
              <div class="info">
                <h4>Comprehensive Travel Solutions</h4>
                <p>
                  We provide a full range of travel services, including hotel reservations, car rentals and itinerary planning. Our all-in-one service ensures you have everything you need for a hassle-free trip.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fa-solid fa-money-bill" style="color:#1c7ed6"></i>
              </div>
              <div class="info">
                <h4>Exclusive Deals and Discounts</h4>
                <p>
                  Our strong partnerships with airlines, hotels, and other service providers allow us to offer you the best rates and special perks.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fa-brands fa-hive" style="color: green;"></i>
              </div>
              <div class="info">
                <h4>Global Network</h4>
                <p>
                  With a global network of partners and affiliates, we can provide support and services wherever your travels take you. Our extensive reach ensures that you are never alone, no matter how far from home you venture.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height feature_card_about">
            <div class="item">
              <div class="icon">
                <i class="fas fa-diagnoses"></i>
              </div>
              <div class="info">
                <h4>Customer Satisfaction</h4>
                <p>
                  Our clients’ satisfaction is our top priority. We pride ourselves on our high customer retention rate and positive feedback. Your satisfaction drives our commitment to excellence in every interaction.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------ -->

    <!-- -------------------------------------------choosse------- -->

    <!-- ----video--- -->
    <div class="container py-5 my-5">
      <div class="row">
        <div class="col-md-6">
          <div class="image_video" style="height: 100%;">
            <img
              class="img-fluid"
              style="border-radius: 8px;height:100%"
              src="./assets/images/Test1.jpg"
              alt="" />
          </div>
          <!--<a href="https://youtu.be/1VUB8Sm0kso?si=M9wiApWCK2gRJxC5">-->
          <!--  <button-->
          <!--    class="btn d-flex justify-content-center align-items-center"-->
          <!--    style="-->
          <!--      background-color: rgb(106, 150, 31);-->
          <!--      border-radius: 15px 0px;-->
          <!--      padding: 0.1rem 2.55rem;-->
          <!--      margin-top: -2rem;-->
          <!--      margin-left:1rem;-->
          <!--      position: relative;-->
          <!--    "-->
          <!--  >-->
          <!--    <svg-->
          <!--      width="32"-->
          <!--      height="32"-->
          <!--      viewBox="0 0 512 512"-->
          <!--      style="color: #ffffff"-->
          <!--      xmlns="http://www.w3.org/2000/svg"-->
          <!--      class="h-full w-full"-->
          <!--    >-->
          <!--      <rect-->
          <!--        width="10"-->
          <!--        height="10"-->
          <!--        x="0"-->
          <!--        y="0"-->
          <!--        rx="30"-->
          <!--        fill="#6a9620"-->
          <!--        stroke="transparent"-->
          <!--        stroke-width="0"-->
          <!--        stroke-opacity="100%"-->
          <!--        paint-order="stroke"-->
          <!--      ></rect>-->
          <!--      <svg-->
          <!--        width="280px"-->
          <!--        height="280px"-->
          <!--        viewBox="0 0 1200 1200"-->
          <!--        fill="#ffffff"-->
          <!--        x="128"-->
          <!--        y="128"-->
          <!--        role="img"-->
          <!--        style="display: inline-block; vertical-align: middle"-->
          <!--        xmlns="http://www.w3.org/2000/svg"-->
          <!--      >-->
          <!--        <g fill="#ffffff">-->
          <!--          <path-->
          <!--            fill="currentColor"-->
          <!--            d="M600 1200C268.65 1200 0 931.35 0 600S268.65 0 600 0s600 268.65 600 600s-268.65 600-600 600zM450 300.45v599.1L900 600L450 300.45z"-->
          <!--          />-->
          <!--        </g>-->
          <!--      </svg>-->
          <!--    </svg>-->
          <!--    <p class="button_text mt-3">Play the video</p>-->
          <!--  </button>-->
          <!--</a>-->
        </div>
        <div class="col-md-6">
          <div class="image_video" style="height: 100%;">
            <img
              class="img-fluid"
              style="border-radius: 10px;height:100%"
              src="./assets/images/Test3.jpg"
              alt="" />
          </div>
          <!--<a href="https://youtu.be/_e8BFrAPedM?si=n_3Tjj8x7xJ5Thy9">-->
          <!--  <button-->
          <!--    class="btn d-flex justify-content-center align-items-center"-->
          <!--    style="-->
          <!--      background-color: rgb(106, 150, 31);-->
          <!--      border-radius: 15px 0px;-->
          <!--      padding: 0.1rem 2.55rem;-->
          <!--      margin-top: -2rem;-->
          <!--      margin-left:1rem;-->
          <!--      position: relative;-->
          <!--    "-->
          <!--  >-->
          <!--    <svg-->
          <!--      width="32"-->
          <!--      height="32"-->
          <!--      viewBox="0 0 512 512"-->
          <!--      style="color: #ffffff"-->
          <!--      xmlns="http://www.w3.org/2000/svg"-->
          <!--      class="h-full w-full"-->
          <!--    >-->
          <!--      <rect-->
          <!--        width="10"-->
          <!--        height="10"-->
          <!--        x="0"-->
          <!--        y="0"-->
          <!--        rx="30"-->
          <!--        fill="#6a9620"-->
          <!--        stroke="transparent"-->
          <!--        stroke-width="0"-->
          <!--        stroke-opacity="100%"-->
          <!--        paint-order="stroke"-->
          <!--      ></rect>-->
          <!--      <svg-->
          <!--        width="280px"-->
          <!--        height="280px"-->
          <!--        viewBox="0 0 1200 1200"-->
          <!--        fill="#ffffff"-->
          <!--        x="128"-->
          <!--        y="128"-->
          <!--        role="img"-->
          <!--        style="display: inline-block; vertical-align: middle"-->
          <!--        xmlns="http://www.w3.org/2000/svg"-->
          <!--      >-->
          <!--        <g fill="#ffffff">-->
          <!--          <path-->
          <!--            fill="currentColor"-->
          <!--            d="M600 1200C268.65 1200 0 931.35 0 600S268.65 0 600 0s600 268.65 600 600s-268.65 600-600 600zM450 300.45v599.1L900 600L450 300.45z"-->
          <!--          />-->
          <!--        </g>-->
          <!--      </svg>-->
          <!--    </svg>-->
          <!--    <p class="button_text mt-3">Play the video</p>-->
          <!--  </button>-->
          <!--</a>-->
        </div>
      </div>
    </div>
    <!-- --------counter----- -->
    <div class="container">
      <div class="row py-5 text-center">
        <div class="col-md-4 col-sm-6 col-6 border-right">
          <div class="counter-box">
            <h1 class="counter">698</h1>
            <h4 class="counter_2">Happy People</h4>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-6 border-right">
          <div class="counter-box">
            <h1 class="counter">916</h1>
            <h4 class="counter_2">Total Tour</h4>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-6">
          <div class="counter-box">
            <h1 class="counter">129</h1>
            <h4 class="counter_2">Last Months</h4>
          </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6 col-6">
                    <div class="counter-box">
                        <h1 class="counter">754</h1>
                        <h4 class="counter_2">Tree plant</h4>
                    </div>
                </div> -->
      </div>
    </div>
    <!-- last -->
    <div class="banar2 d-flex justify-content-start align-items-center mt-5">
      <div class="container">
        <h2 class="hero4">
          Let's Bring Nature into Your Lovely <br> House
        </h2>
        <hr class="my-4" style="height:1.5px;border-width:0;color:gray;background-color:rgb(188,186,99);width: 4.5%;">
        <p class="hero3">Use these paragraph to focus on the topic in the headline.Make sure keep it short and <br> attractive.</p>
        <button class="button">
          <a href="questions.php" style="text-decoration: none;color:#ffffff">Get A Free Quote</a>
        </button>
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
  <!-- --------------------abir----------------------------- -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

  <script src="./js/script.js"></script>
  <!-- ---------------------------sayan-----------------------------------    -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
</body>

</html>