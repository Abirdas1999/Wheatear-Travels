<?php session_start(); ?>
<?php
    $conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");
    $query = "SELECT * FROM dashpackage";
    $query_run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/0GUil8kD_400x400.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./card.css">
    <title>Wheatear Travels-Most Trusted Travel Management Company-Tour Highlights</title>
</head>
<body>
    <div style="overflow: hidden;">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark p-4">
            <div class="container">
              <img src="../assets/nav-img/wheater-travels.png" alt="" class="navlogo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../pakage.php">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../flight/flight.php">Flight</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../hotel/hotel.php">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../add.php">Add on</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../gallary/gallary.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-lg-3" href="../about/about.php">About Us</a>
                        </li> 
                    </ul>
                    <button class="btn btn-outline-success text-white  get_a_quote">Get A Quote</button>
                </div>
            </div>
          </nav>
    
        <div class="container  mt-2">
            <div class="row py-4 pb-5">
                <div class="col-lg-6" style="border-radius:10px 10px">
                    <img style="border-radius:10px 10px; background-size:cover" src="./img/Viet4.jpg" alt="" class="back">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex mt-3 mt-md-0">    
                        <div class="back1" style="border-radius:10px 0px 0px 0px">
                            <img style="height: 100%; width:100%;border-radius:10px 0px 0px 0px" src="./img/Viet3.jpg" alt="" class="back"/>
                        </div>
                        <div class="back2 ml-2" style="border-radius:0px 10px 0px 0px">
                            <img style="height: 100%; width:100%;border-radius:0px 10px 0px 0px" src="./img/Viet.jpg" alt="" class="back"/>
                        </div>
                    </div>
                    <div class="d-flex mt-2">    
                        <div class="back3" style="border-radius:0px 0px 0px 10px">
                            <img style="height: 100%; width:100%;border-radius:0px 0px 0px 10px" src="./img/Viet2.jpg" alt="" class="back"/>
                        </div>
                        <div class="back4 ml-2" style="border-radius:0px 0px 10px 0px">
                            <img style="height: 100%; width:100% ;border-radius:0px 0px 10px 0px" src="./img/Vietnm1.jpg" alt="" class="back"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
        <form action="" method="POST">
            
            <div class="row py-2">
                <div class="col-lg-7">
                    <?php
                        $conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");

                        $query = "SELECT * FROM dashpackage WHERE no = 3";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                                $inclusion = json_decode($row['inclusion']);
                                $exclusion = json_decode($row['exclusion']);
                                ?>
                    <h3 class="highlights"><?= $row['title']; ?></h3>
                    <p><?= $row['subtitle']; ?></p>
                    <hr>
    
                    <div class="svg">
                        <div class="svg1">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 80 80" width="20px" height="20px"><path d="M 40 5.820313 L 7 26.445313 L 7 35.804688 L 8.53125 34.847656 L 9 34.550781 L 9 71 L 71 71 L 71 34.554688 L 73 35.804688 L 73 26.445313 Z M 40 8.179688 L 71 27.554688 L 71 32.199219 L 40 12.820313 L 9 32.199219 L 9 27.554688 Z M 40 15.179688 L 69 33.304688 L 69 62 C 68.449219 62 68 62.449219 68 63 C 68 63.550781 68.449219 64 69 64 L 69 69 L 49 69 L 49 64 C 49.550781 64 50 63.550781 50 63 C 50 62.449219 49.550781 62 49 62 L 49 44 L 31 44 L 31 62 C 30.449219 62 30 62.449219 30 63 C 30 63.550781 30.449219 64 31 64 L 31 69 L 11 69 L 11 64 C 11.550781 64 12 63.550781 12 63 C 12 62.449219 11.550781 62 11 62 L 11 33.300781 Z M 31 25 L 31 37 L 49 37 L 49 25 Z M 33 27 L 39 27 L 39 35 L 33 35 Z M 41 27 L 47 27 L 47 35 L 41 35 Z M 33 46 L 47 46 L 47 69 L 33 69 Z M 43.5 57 C 42.671875 57 42 57.671875 42 58.5 C 42 59.328125 42.671875 60 43.5 60 C 44.328125 60 45 59.328125 45 58.5 C 45 57.671875 44.328125 57 43.5 57 Z M 15 62 C 14.449219 62 14 62.449219 14 63 C 14 63.550781 14.449219 64 15 64 C 15.550781 64 16 63.550781 16 63 C 16 62.449219 15.550781 62 15 62 Z M 19 62 C 18.449219 62 18 62.449219 18 63 C 18 63.550781 18.449219 64 19 64 C 19.550781 64 20 63.550781 20 63 C 20 62.449219 19.550781 62 19 62 Z M 23 62 C 22.449219 62 22 62.449219 22 63 C 22 63.550781 22.449219 64 23 64 C 23.550781 64 24 63.550781 24 63 C 24 62.449219 23.550781 62 23 62 Z M 27 62 C 26.449219 62 26 62.449219 26 63 C 26 63.550781 26.449219 64 27 64 C 27.550781 64 28 63.550781 28 63 C 28 62.449219 27.550781 62 27 62 Z"/></svg>
                        </div>
                        <div class="ml-2"><h4 style="margin-top:2px">Inclusion</h4></div>
                    </div>
                    <div class="d-flex mt-2">    
                        <div class="highlight">
                            <ul class="inclusion">
                                <?php foreach ($inclusion as $item) : ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="svg mt-2">
                        <div class="svg1">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 80 80" width="20px" height="20px"><path d="M 40 5.820313 L 7 26.445313 L 7 35.804688 L 8.53125 34.847656 L 9 34.550781 L 9 71 L 71 71 L 71 34.554688 L 73 35.804688 L 73 26.445313 Z M 40 8.179688 L 71 27.554688 L 71 32.199219 L 40 12.820313 L 9 32.199219 L 9 27.554688 Z M 40 15.179688 L 69 33.304688 L 69 62 C 68.449219 62 68 62.449219 68 63 C 68 63.550781 68.449219 64 69 64 L 69 69 L 49 69 L 49 64 C 49.550781 64 50 63.550781 50 63 C 50 62.449219 49.550781 62 49 62 L 49 44 L 31 44 L 31 62 C 30.449219 62 30 62.449219 30 63 C 30 63.550781 30.449219 64 31 64 L 31 69 L 11 69 L 11 64 C 11.550781 64 12 63.550781 12 63 C 12 62.449219 11.550781 62 11 62 L 11 33.300781 Z M 31 25 L 31 37 L 49 37 L 49 25 Z M 33 27 L 39 27 L 39 35 L 33 35 Z M 41 27 L 47 27 L 47 35 L 41 35 Z M 33 46 L 47 46 L 47 69 L 33 69 Z M 43.5 57 C 42.671875 57 42 57.671875 42 58.5 C 42 59.328125 42.671875 60 43.5 60 C 44.328125 60 45 59.328125 45 58.5 C 45 57.671875 44.328125 57 43.5 57 Z M 15 62 C 14.449219 62 14 62.449219 14 63 C 14 63.550781 14.449219 64 15 64 C 15.550781 64 16 63.550781 16 63 C 16 62.449219 15.550781 62 15 62 Z M 19 62 C 18.449219 62 18 62.449219 18 63 C 18 63.550781 18.449219 64 19 64 C 19.550781 64 20 63.550781 20 63 C 20 62.449219 19.550781 62 19 62 Z M 23 62 C 22.449219 62 22 62.449219 22 63 C 22 63.550781 22.449219 64 23 64 C 23.550781 64 24 63.550781 24 63 C 24 62.449219 23.550781 62 23 62 Z M 27 62 C 26.449219 62 26 62.449219 26 63 C 26 63.550781 26.449219 64 27 64 C 27.550781 64 28 63.550781 28 63 C 28 62.449219 27.550781 62 27 62 Z"/></svg>
                        </div>
                        <div class="ml-2"><h4 style="margin-top:2px">Exclusion</h4></div>
                    </div>
                    <div class="d-flex mt-2">    
                        <div class="highlight">
                            <ul class="exclusion">
                                <?php foreach ($exclusion as $item) : ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            echo "No record found";
                        }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-lg-8">
                    <p>
                        Important Note:-<br>
                        The above package is valid for the mentioned dates only.<br>
                        Guest(s) are requested to conduct a COVID test before travelling to the destination.<br>
                        Wheatear Travels is not responsible for any kind of personal belongings of the Guest(s).<br>
                        Wheatear Travels is not responsible for any kind of health issues of the Guest(s).<br>
                        Wheatear Travels is not responsible for any kind of changes in the itinerary due to weather conditions.<br>
                    </p>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-fluid">
                <div class="row bg-dark text-light p-5">
                    <div class="col-lg-4 text-center text-md-left">
                        <h5 class="pb-3">Wheatear Travels</h5>
                        <p>We are a leading travel management company committed to providing exceptional travel services and unforgettable experiences to our clients. Contact us today to start planning your next adventure.</p>
                    </div>
                    <div class="col-lg-4 text-center text-md-left">
                        <h5 class="pb-3">Contact Us</h5>
                        <p>Phone: +91-123-456-7890</p>
                        <p>Email: info@wheateartravels.com</p>
                        <p>Address: 123 Wheatear Lane, Wanderlust City, India</p>
                    </div>
                    <div class="col-lg-4 text-center text-md-left">
                        <h5 class="pb-3">Follow Us</h5>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <a href="#" class="text-light mr-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-light mr-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-light mr-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-light mr-3"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNlM5AzzV/Qf2EGS6R6E1t5vZ1kUk5XJO3W3cpZ8jI58jGF+nEnBy4G/QIt5nBg" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-I43uX/pETMJ/1uXBlKHd7ZC9FV6go14X4p5JvXAu9e+P3nheI7R4sUWwIv4r5Bbs" crossorigin="anonymous"></script>

</body>
</html>