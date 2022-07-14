<?php
define('TITLE', 'Change Password');
define('PAGE', 'changepassword');
include('../dbConnection.php');
include('manoj/header.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail=$_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterLogin.php'</script>";
}
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rPass']==""){
        $passmsg='<div class="alert alert-warning mt-3 mx-5" role="alert">Plz Fill New Password</div>';
    }
    else{

$rpass=$_REQUEST['rPass'];
$sql="UPDATE requsterlogin_db SET r_password= '$rpass' WHERE r_email='$rEmail'";
if($conn->query($sql) ==TRUE){
      $passmsg='<div class="alert alert-success mt-3 mx-5" role="alert"> Password Updated Successfully</div>';

} else{
    echo "failed";
}
    }
    
}
 
 ?>

<div class="col-sm-9 col-sm-10">
    <form action="" class="mt-5 mx-5" method="POST">

       <div class="form-group">
         <label for="inputEmail">Email</label>
         <input type="email" id="inputEmail"  class="form-control" readonly >
      </div>

 <div class="form-group">
         <label for="inputnewpassword"> New Password</label>
         <input type="email" id="inputnewpassword" placeholder="New Password" name="rPass" class="form-control"  >
      </div>
    
<button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
<button type="reset" class="btn btn-secondary mt-4">Reset</button>

    </form>
    <?php
    if(isset($passmsg)){
        echo $passmsg;
    }
    ?>

</div>


<?php include('manoj/footer.php')?>

