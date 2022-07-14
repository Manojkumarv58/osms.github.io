<?php
define('TITLE', 'Requester Submit');
define('PAGE', 'submitReq');


 include('manoj/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='requesterLogin.php'</script>";
}
if (isset($_REQUEST['submitrequest'])) {
    //checking for empty fields
    if (($_REQUEST['requestinfo'] =="") || ($_REQUEST['descrip'] =="") || ($_REQUEST['requestername'] =="") || ($_REQUEST['requestadd1'] =="") || ($_REQUEST['requestadd2'] =="") || ($_REQUEST['requestercity']=="") || ($_REQUEST['requesterstate'] =="") || ($_REQUEST['requesterzip'] =="") ||($_REQUEST['requesteremail'] =="")||($_REQUEST['requestermobile'] =="")||($_REQUEST['requesterdate'] =="")) {
        $msg= '<div class="alert alert-danger mt-3" role="alert"> All fields are required </div>';
    } else {
        $rinfo = $_REQUEST['requestinfo'];
        $rdesc = $_REQUEST['descrip'];
        $rname= $_REQUEST['requestername'];
        $radd1 =  $_REQUEST['requestadd1'];
        $radd2 = $_REQUEST['requestadd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate = $_REQUEST['requesterstate'];
        $rzip = $_REQUEST['requesterzip'];
        $remail = $_REQUEST['requesteremail'];
        $rmobile  = $_REQUEST['requestermobile'];
        $rdate  =$_REQUEST['requesterdate'];
        $sql= "INSERT INTO submitreq_db (request_info,request_des,request_name,request_add1,request_add2,request_city,request_state,request_zipcode,request_email,request_mobile,request_date) VALUES( '$rinfo', '$rdesc','$rname','$radd1','$radd2' ,'$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
        if ($conn->query($sql)==true) {
            
            $genid=mysqli_insert_id($conn);
            $msg= '<div class="alert alert-success mt-3" role="alert"> Request Submitted Successfully </div>';
            $_SESSION ['myid'] = $genid;
             echo "<script> location.href='submitreqsuc.php'</script>";
        } else {
            $msg= '<div class="alert alert-danger mt-3" role="alert"> Unable to Submit Your Request </div>';
        }
    }
}



?>

<!-- start service req -->

<div class="col-sm-9 col-md-10 mt-3">
<form action="" class="mx-5" method="POST">

    <div class="form-group">
        <label for="inputRequestInfo">Request Info</label>
        <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
    </div>
    

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Write Description" name="descrip">
    </div>

     <div class="form-group">
        <label for="requestername">Name</label>
        <input type="text" class="form-control" id="inputname" placeholder="Enter Your Name" name="requestername">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">Address line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No.123 " name="requestadd1">
        </div>
        
        <div class="form-group col-md-6">
         <label for="inputAddress2">Address line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway colony " name="requestadd2">
        </div>

    </div>

    <div class="form-row">

           <div class=" form-group col-md-6">
                 <label for="inputCity">City</label>
             <input type="text" class="form-control" id="inputCity"  name="requestercity">
            </div>

        <div class=" form-group col-md-4">
              <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState"  name="requesterstate">
        </div>


            <div class=" form-group col-md-2">
                  <label for="inputZip">Zipcode</label>
                   <input type="text" class="form-control" id="inputCity"  name="requesterzip" onkeypress="isInputNumber(evt)">
            </div>

    </div>

<div class="form-row">

           <div class=" form-group col-md-6">
                 <label for="inputEmail">Email</label>
             <input type="email" class="form-control" id="inputEmail"  name="requesteremail">
            </div>

        <div class=" form-group col-md-2">
              <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile"  name="requestermobile" onkeypress="isInputNumber(evt)">
        </div>


            <div class=" form-group col-md-2">
                  <label for="inputDate">Date</label>
                   <input type="Date" class="form-control" id="inputDate"  name="requesterdate">
            </div>

    </div>

    <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
     <button type="reset" class="btn btn-secondary" name="resetrequest">Reset</button>






</form>
<?php

if (isset($msg)) {
    echo $msg;
}
?>
</div>
<script>

    function isInputNumber(evt){
        var ch=String.formCharCode(evt.which);
        if((/[0-9]/.test(ch))){
            evt.preventDefault();
        }

    }
</script>


<?php include('manoj/footer.php')?>



