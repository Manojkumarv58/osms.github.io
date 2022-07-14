<?php
define('TITLE', 'Requester profile');
define('PAGE', 'requesterProfile');
include('manoj/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='requesterLogin.php'</script>";
}
$sql = "SELECT r_name,r_email FROM requsterlogin_db WHERE r_email='$rEmail'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
}
// update button
if (isset($_REQUEST['nameupdate'])) {
    if ($_REQUEST['rName'] == "") {
        $passmsg = '<div class="alert alert-danger text-danger" role="alert">Plz fill your name</div>';
    } else {
        $rName = $_REQUEST['rName'];
        $sql = "UPDATE requsterlogin_db SET r_name='$rName' WHERE r_email='$rEmail'";
        if ($conn->query($sql) == true) {
            $passmsg = '<div class="alert alert-success" roll="alert">Update successfully</div>';
        }
    }
}

?>
 

         

<!-- start profile area 2nd column -->

<div class="col-sm-6 mt-3  mb-5 ">
  
   <form action="" method="POST" class="mx-5">
      <!-- email -->
      <div class="form-group">
         <label for="rEmail">Email</label>
         <input type="email" name="rEmail" id="rEmail " class="form-control" readonly value="<?php
                                                                                             echo $_SESSION['rEmail']
                                                                                             ?>">
      </div>
      <!-- end email  -->
      <!-- name -->
      <div class="form-group">
         <label for="rName">Name</label>
         <input type="text" name="rName" id="rName" value="<?php
                                                            echo $rName;
                                                            ?>" class="form-control">
      </div>
      <!-- end name -->
      <!-- update -->
      <button type="submit" class="btn btn-outline-danger  mt-3" name="nameupdate">Update</button>
      <br>
      <br><br>
      <?php
      if (isset($passmsg)) {
          echo $passmsg;
      }
      ?>



   </form>
</div>
<!-- end profile area 2nd column -->

<?php
include('manoj/footer.php')
?>