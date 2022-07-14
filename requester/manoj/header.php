
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
  echo TITLE
    ?></title>
    <!-- css boot -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="requesterProfile.css" type="text/css">

</head>

<body>
    <nav class=" navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow ">
        <a href="requesterProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OSMS</a>
    </nav>
    <!-- start container -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- start row -->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <!-- first column sid bar -->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column  nav nav-pills nav-fill">
                        <li class="nav-item "><a href="requesterProfile.php" class="nav-link <?php
                        if (PAGE=='requesterProfile') {
                            echo 'active';
                        }
                        ?>
                        
                        "><i class="fas fa-user"></i>Profile</a></li>

                        <!-- submit request -->
                        <li class="nav-item"><a href="submitReq.php" class="nav-link  <?php
                        if (PAGE=='submitReq') {
                            echo 'active';
                        }
                        ?> ">

                           <i class="fab fa-accessible-icon"></i>Submit Request</a></li>

                        <!-- end submit request -->
                        <!-- check stuts -->

                        <li class="nav-item"><a href="status.php" class="nav-link <?php
                        if (PAGE=='status') {
                            echo 'active';
                        }
                        ?>
 
                        
                        
                        
                        "><i class="fas fa-align center"></i>Service Status</a></li>



                        <!-- end check-stuts -->
                        <!-- change password -->

                        <li class="nav-item"><a href="chngpswrd.php" class="nav-link   <?php
                        if (PAGE=='changepassword') {
                            echo 'active';
                        }
                        ?>
 ">
                            
                        
                        <i class="fas fa-key"></i>Change Password</a></li>

                        <!-- change password -->
                        <!-- logout button -->


                        <li class="nav-item"><a href="../logout.php" class="nav-link  <?php
                        if (PAGE=='logout') {
                            echo 'active';
                        }
                        ?>
 ">
                            
                        
                        
                        <i class="fas fa-sign-out-alt"></i>logout</a></li>


                    </ul>
                </div>
            </nav> <!-- 1st column end sid bar -->



