<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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
                <a class="nav-link text-light mr-lg-3" href="pakage.php"
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
                <a class="nav-link text-light mr-lg-3" href="aboutus.php"
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
    <div class="container_css">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form_css">
        <div class="contact-info_css">
          <h3 class="title_css">Let's get in touch</h3>
          <p class="text_css">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info_css">
            <div class="information_css">
              <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp

              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information_css">
              <i class="fas fa-envelope"></i> &nbsp &nbsp
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information_css">
              <i class="fas fa-phone"></i>&nbsp&nbsp
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media_css">
            <p>Connect with us :</p>
            <div class="social-icons_css">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form_css">  
            <span class="circle one"></span>
            <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title_css">Contact us</h3>
            <div class="">
                <label class="px-5 h5 text-white" for="radio1">
                    <input
                        type="radio"
                        class=""
                        id="travel"
                        name="travel"
                        value="domestic"
                    />Domestic
                </label>
                <label class="pl-5 h5 text-white" for="radio2">
                    <input
                        type="radio"
                        class=""
                        id="travel"
                        name="travel"
                        value="international"
                    />International
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
              <input type="number" name="phone" id="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
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
    

    <script src="test.js"></script>
  </body>
</html>
