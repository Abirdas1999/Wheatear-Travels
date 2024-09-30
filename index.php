<?php
include_once 'classes/packageUpdate.php';
$packageUpdate = new PackageUpdate();
$packageUpdates = $packageUpdate->getCPackage();
// $packageUpdatess = $packageUpdate->getPackage();
?>


<?php

include_once 'classes/qUpdate.php';
$qUpdate = new QUpdate();

// Check if the form is submitted
if (isset($_POST['register'])) {
  // Get form data and sanitize it
  $travel = !empty($_POST['travel']) ? htmlspecialchars(trim($_POST['travel'])) : "";
  $name = !empty($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : "";
  $mail = !empty($_POST['mail']) ? htmlspecialchars(trim($_POST['mail'])) : "";
  $phone = !empty($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : "";
  $message = !empty($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : "";

  // Set the data to the object
  $qUpdate->setTravel($travel);
  $qUpdate->setName($name);
  $qUpdate->setMail($mail);
  $qUpdate->setPhone($phone);
  $qUpdate->setMessage($message);

  // Insert data into the database
  try {
      if ($qUpdate->insertEnquiry()) {
          // Redirect to the same page to prevent form resubmission
          header("Location: " . $_SERVER['PHP_SELF']);
          exit(); // Important: Exit after the redirect
      }
  } catch (Exception $e) {
      echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
  }
}
?>

<?php


$conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");
if (!$conn) {
  die("Connection Error");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="icon"
    href="./assets/images/0GUil8kD_400x400.ico"
    type="image/x-icon" />
  <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
    crossorigin="anonymous" />
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oxygen:wght@300;400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/about3.css" />
  <link rel="stylesheet" href="/about/about.css">
  <link rel="stylesheet" href="./css/addon.css">
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <title>Wheatear Travels-Most Trusted Travel Management Company</title>
</head>

<body>
  <div style="overflow: hidden; position:relative">
    <!-- -----Navbar------ -->
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


    <!-- Carousel -->
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel">
      <div class="carousel-inner carousel_body">
        <div class="carousel-item active">
          <img
            src="./assets/images/01.jpg"
            class="d-block w-100"
            alt="First Slide" />
        </div>
        <div class="carousel-item">
          <img
            src="./assets/images/02.jpg"
            class="d-block w-100"
            alt="Second Slide" />
        </div>

      </div>
    </div>

    <!-- form section -->
    <div class="container_css mt-5">
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

          <form action="" method="POST" autocomplete="off">
            <h3 class="title_css">Contact us</h3>
            <div class="d-flex justify-content-between">
              <label class=" h5 text-white" for="radio1">
                <input
                  type="radio"
                  class="mx-2"
                  id="travel"
                  name="travel"
                  value="domestic" />Domestic
              </label>
              <label class=" h5 text-white" for="radio2">
                <input
                  type="radio"
                  class="mx-2"
                  id="travel"
                  name="travel"
                  value="international" />International
              </label>
            </div>
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
            <div class="input-container_css textarea">
              <textarea name="message" id="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="register" value="Send" class="btn_css" />
          </form>
        </div>
      </div>
    </div>
    <!-- <div class="container form-container py-5 "> -->

    <!-- </div> -->
    <!-- package-cards -->
    <div class="container slide">
      <p class="text-center package">Packages</p>
      <div class="row mt-5">
        <?php
        $index = 1; // Initialize a counter variable
        foreach ($packageUpdates as $pg): ?>
          <div class="col-lg-3 mb-5">
            <div class="card package-cards">
              <img
                src="./admin/admin/img/packages/<?= $pg['photo1']; ?>"
                alt="..."
                class="photo" />
              <div class="text package-text">
                <h2 class="content"><?= $pg['name']; ?></h2>
                <a href="packages/package-details?no=<?= $pg['no']; ?>">
                  <p class="content">Know More</p>
                </a>
              </div>
            </div>
          </div>
        <?php
          $index++; // Increment the counter
        endforeach;
        ?>
      </div>
      <div class="text-center">
        <a href="packages/all-Packages.php">
          <button class="btn btn-success text-center button-view">
            View More
          </button>
        </a>
      </div>
    </div>

    <!-- --------------choose us section --------------------------------- -->
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
    <!-- <div class="container">
    <div class="row py-5 text-center">
        <div class="col-md-3 col-sm-6 col-6 border-right">
            <div class="counter-box">
                <h1 class="counter">698</h1>
                <h4 class="counter_2">Home Delivery</h4>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 border-right">
            <div class="counter-box">
                <h1 class="counter">1106</h1>
                <h4 class="counter_2">Happy People</h4>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 border-right">
            <div class="counter-box">
                <h1 class="counter">4469</h1>
                <h4 class="counter_2">Tons of Goods</h4>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <div class="counter-box">
                <h1 class="counter">754</h1>
                <h4 class="counter_2">Tree plant</h4>
            </div>
        </div>
    </div>
</div> -->
    <!-- --------------testymonial part --------------------------------- -->
    <div class="testy">
      <section class="creative-testimonial--slider">
        <div
          class="testimonial-inner"
          style="background-image: url(https://imgpanda.com/upload/ib/2Tgg58L106.png)">
          <div class="testimonial-row">
            <!-- <h2 class="testimonial-heading">Trusted by the world's fastest growing companies</h2> -->
            <div class="testimonial-wrap">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                    <div class="swiper-slide--inner">
                      <div class="slide-avatar">
                        <img
                          src="./card/img/blank-profile-picture-973460_640.png"
                          alt=""
                          style="height: 150px; width:150px;border-radius: 50%" />
                      </div>
                      <div class="testimonial-detail">

                        <p>
                          We had a wonderful journey to Meghalaya, Cherrapunjee, Kaziranga, and Assam with Wheatear Travels as our best travel agency. They had arranged a driver and a car, as well as booked furnished hotels. Overall, it was a hassle-free holiday experience with my wife on our first honeymoon.
                        </p>
                        <span>Shilajit Acharjee, Monday</span>
                      </div>
                    </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="swiper-slide">
                    <div class="swiper-slide--inner">
                      <div class="slide-avatar">
                        <img
                          src="./card/img/blank-profile-picture-973460_640.png"
                          alt=""
                          style="height: 150px; width:150px;border-radius: 50%" />
                      </div>
                      <div class="testimonial-detail">

                        <p>
                          Went on a trip to Bali, Indonesia, and booked the complete package from them. Very reliable and trustworthy. Throughout our trip, we had no booking issues. The assigned guide was excellent; he stayed with us to the very end. Thanks for planning such a lovely trip for us. I strongly recommend Wheatear Travels.
                        </p>
                        <span>Prasenjit Banarjee, Wednesday</span>
                      </div>
                    </div>
                  </div>
                  <!-- Slide 3 -->
                  <div class="swiper-slide">
                    <div class="swiper-slide--inner">
                      <div class="slide-avatar">
                        <img
                          src="./card/img/blank-profile-picture-973460_640.png"
                          alt=""
                          style="height: 150px; width:150px;border-radius: 50%" />
                      </div>
                      <div class="testimonial-detail">

                        <p>
                          It was a very nice trip arranged by Wheatear Travels. We will be approaching them again for our future trips.
                        </p>
                        <span>SK.Rafikul Ishlam, Friday</span>
                      </div>
                    </div>
                  </div>
                  <!-- ----slide-4---- -->
                  <div class="swiper-slide">
                    <div class="swiper-slide--inner">
                      <div class="slide-avatar">
                        <img
                          src="./card/img/blank-profile-picture-973460_640.png"
                          alt=""
                          style="height: 150px; width:150px;border-radius: 50%" />
                      </div>
                      <div class="testimonial-detail">

                        <p>
                          Great itinerary and travel arrangements 4 Nights 5 Days at reasonable rate for Hong Kong.
                        </p>
                        <span>Abir Das, Sunday</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next slide-btns"></div>
                <div class="swiper-button-prev slide-btns"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- -------------another ----------- -->
    <div class="body_under"></div>
    <!-- --------massage------------ -->
    <div class="container my-5 py-5">
      <div class="row py-5">
        <div
          class="col-md-6"
          style="
              display: flex;
              justify-content: center;
              flex-direction: column;
              align-items: center;
            ">
          <div class="card image" style="width: 70%; border-radius: 12px">
            <img
              class="img-fluid"
              style="border-radius: 12px"
              src="./assets/images/Testy2.jpg" />
          </div>
          <button class="btn btn2">
            <p class="button_text">
              Let's Beautify Your<br />
              Garden Togenther!
            </p>
          </button>
        </div>
        <div class="col-md-6">
          <div class="ml-5 ml-sm-0 mt-5 mt-md-0 head-1">

            <p
              class="my-4"
              style="
                  font-family: Lato, sans-serif;
                  font-weight: 400;
                  color: rgba(46, 45, 45, 0.751);
                  width: 90%;
                ">
              <!-- Use these paragraphs to focus on the topic in the headline. Make
                sure you keep it short and attractive. -->
            </p>
          </div>
          <div class="container py-5 my-5">
            <h3 class="h3_new py-5">
              Questions & Answers
            </h3>
            <?php
            $query = "SELECT * FROM home";
            $query_run  = mysqli_query($conn, $query);
            if ($query_run && mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $row) {
            ?>

                <div class="faqs-container">
                  <details open name="faq">
                    <summary class="pr-4" style="font-weight: 500;">
                      <?php echo $row['question']; // Debugging: Show the file path 
                      ?>
                    </summary>

                    <p class="content text-dark" style="font-weight: 400;">
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
    <!---- last ------------------->
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
  <!-- --------------------abir----------------------------- -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const counters = document.querySelectorAll('.counter');
      const speed = 200; // The lower the speed, the faster the counter

      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;
          const increment = target / speed;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 1);
          } else {
            counter.innerText = target;
          }
        };

        // Set the data-target attribute to the final count
        counter.setAttribute('data-target', counter.innerText);
        // Initialize the counter to 0
        counter.innerText = '0';
        updateCount();
      });
    });
  </script>
  <!-- ---------------------------sayan-----------------------------------    -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <script>
    const accordionItems = document.querySelectorAll(".accordion-item");
    accordionItems.forEach((item) => {
      const title = item.querySelector(".accordion-title");
      const content = item.querySelector(".accordion-content");

      title.addEventListener("click", () => {
        for (var i = 0; i < accordionItems.length; i++) {
          if (accordionItems[i] != item) {
            accordionItems[i].classList.remove("active");
          } else {
            item.classList.toggle("active");
          }
        }
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      const swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        keyboard: {
          enabled: true,
          onlyInViewport: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        effect: 'slide',
      });
    });
  </script>
  <script src="./js/test.js"></script>
</body>

</html>