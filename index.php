<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osms</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.min.css" >
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Nunito:wght@200&family=Tiro+Devanagari+Sanskrit:ital@1&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <!-- CSS only -->

</head>
<body>
    <!-- nav -->
 <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

    <!-- end nav -->
    <!-- start header jumbotron -->
    <header class=" jumbotron m1" style="background-image:url(img/backlit.webp)">
    <div class="mainHeading myClass">
       <h1 class="text-danger font-wight-bold">WELCOME TO OSMS</h1>
       <p class="font-italic"><i>Customer Happiness is our Aim</i></p>
       <a href="requester/requesterLogin.php" class="btn btn-primary mr-4">Login</a>
       <a href="#" class="btn btn-danger mr-4">Sign Up</a>
    </div>
    </header>
    <!-- end header -->
    <!-- intro section -->
    <div class="container">
        <div class="jumbotron">
        <h3 class="text-center">OSMS Services</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum nostrum totam aut molestiae natus recusandae cum. Aut officia optio quod harum adipisci iste reiciendis porro quisquam sed. Nulla iure ad voluptates numquam porro modi sequi dicta, nobis et natus commodi a, molestiae quas deleniti vitae repellat? Fugit, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, delectus officia? Accusamus placeat commodi nesciunt nihil, similique voluptate eum perferendis non obcaecati tenetur ut porro, nam adipisci velit et aperiam!</p>
        

        </div>

    </div>
<!-- end intro -->
<!-- services section -->
     <div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h2 class="mt-4">Electronic Appliances</h2>
            </div>
             <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h2 class="mt-4">Preventive Maintenanace</h2>
            </div>
             <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h2 class="mt-4">Fault Repair</h2>
            </div>
        </div>
     </div>
     <!-- end services section -->
     <!-- start registration form -->
     <?php include("userRegistraion.php") ?>
     <!-- end registration form -->
     <!--happy customer  -->
     <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white">Happy Customer</h2>
            <div class="row mt-5">
                <!-- 1st -->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="img/avtar1.jpeg" alt="avt1" style="border-radius:100px; " class="img-fluid">
                        <h4 class="card-title">Rahul kumar</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor quis. Sit facilis illo qui! Ad soluta porro optio!</p>
                </div>
                </div>
            </div>
            <!-- 2nd -->
             <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="img/avtar2.jpeg" alt="avt1" style="border-radius:100px; " class="img-fluid">
                        <h4 class="card-title">Sonam kumari</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor quis. Sit facilis illo qui! Ad soluta porro optio!</p>
                </div>
                </div>
            </div>
            <!-- 3rd -->
             <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="img/avtar3.jpeg" alt="avt1" style="border-radius:100px; " class="img-fluid">
                        <h4 class="card-title">Devansh kumar</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor quis. Sit facilis illo qui! Ad soluta porro optio!</p>
                </div>
                </div>
            </div>
            <!-- 4th -->
             <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="img/avtar4.jpeg" alt="avt1" style="border-radius:100px; " class="img-fluid">
                        <h4 class="card-title">Kajal kumari</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor quis. Sit facilis illo qui! Ad soluta porro optio!</p>
                </div>
                </div>
            </div>
            <!-- end column -->
            </div>
        </div>

     </div>
     <!-- end happy customer -->
     <!-- start contact us -->
     <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!-- start 1st column -->
            <?php include("contactForm.php")?>
            <!-- end first column -->
            <!-- start2nd col -->
            <div class="col-md-4 text-center">
                <strong>
                    Headquarter:
                </strong><br>OSMS pvt ltd, <br>Ashok Nagar,Ranchi <br>
                jharkhand-845418 <br>
                phone:7439237756 <br>
                <a href="#" target="_blank">www.osms.com</a><br><br>
                 <strong>
                    Branch:
                </strong><br>New delhi, <br>Ashok Nagar,Ranchi <br>
                jharkhand-845418 <br>
                phone:8651679610 <br>
                <a href="#" target="_blank">www.osms.com</a>
            </div>
            <!-- end 2nd col -->
        </div>
     </div>
     <!-- end contact us -->
     <!--start footer  -->
     <footer class="container-fluid text-white bg-dark mt-5">
        <div class="container">
            <div class="row py-3">
                <!-- start 1st column -->
                <div class="col-md-6">
                 <span class="pr-2 ">Follow Us</span>
                 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-rss"></i></a>
                </div>
                <!-- end first column -->
                <!-- 2nd column -->
                <div class="col-md-6">
                    <small>Designed by Manoj &copy; 2022</small>
                    <small><a href="Admin/adminLogin.php">Admin login</a></small>
                </div>
            </div>
        </div>

     </footer>
     <!-- end footer -->
    <!-- javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/bootsrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>