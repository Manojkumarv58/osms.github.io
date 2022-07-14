<?php
define('TITLE', 'Requester Login');

include('../dbConnection.php');
// /session start
session_start();
if (!isset($_SESSION['is_adminlogin'])) {
    if (isset($_REQUEST['aEmail'])) {
        $aEmail=trim($_REQUEST['aEmail']);
        $aPassword=trim($_REQUEST['aPassword']);
        $sql ="SELECT a_email,a_pass FROM  adminLogin_db WHERE a_email='".$aEmail."' AND  a_pass='".$aPassword."' limit 1 " ;

        $result=$conn->query($sql);

        // login code
        if ($result->num_rows==1) {
            $_SESSION['is_adminlogin']=true;
            $_SESSION['aEmail']=$aEmail;
            echo "<script> location.href='dashboard.php';</script>";
            exit;
        } else {
            $msg='<div class="alert alert-warning mt-2">Enter valid email and password</div>';
        }
    }
} else {
    echo "<script> location.href='dashboard.php';</script>";
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css" >
    
</head>
<body>
  <div class="mt-3 text-center"  style="font-size:40px;">
  <i class="fas fa-stethoscope"></i>
    <span>
        Online Service Management System
    </span>
  </div>
  <p class=" text-center mt-3" style="font-size:30px;"> <i class="fas fa-user-secret text-danger "></i>  Admin Area </p>

<!-- login form -->
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4 ">

        <form action="" method="post" class="shadow-lg p-4"  >
            <!-- email -->
            <div class="form-group">
         <i class="fas fa-user"></i><label for="email" class="pl-2">Email</label>
            <input type="email" name="aEmail" placeholder="Email" class=" form-control  ">
            <small class="form-text mt-1">we'wil never share your email with anyone else</small>
            </div>
<!-- password -->
<div class="form-group">
         <i class="fas fa-key"></i><label for="password" class="pl-2">Password</label>
            <input type="Password" name="aPassword" placeholder="Password" class=" form-control  ">
            
            </div>

<!-- login button -->
<button class="btn btn-outline-danger mt-4 mb-3 font-weight-bold btn-block shadow-sm">Login  </button>
<!-- warning -->
<?php
if (isset($msg)) {
    echo $msg;
}
?>

     </form>
     
        </div>
      
    </div>
</div>
 <div class="text-center"> <a href="../index.php "  class="btn btn-primary mt-3"> Back to Home</a></div>




  <!-- javascript file -->
   <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootsrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>