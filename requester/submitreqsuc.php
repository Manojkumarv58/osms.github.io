<?php 
define('TITLE','Success');
define('PAGE','reciept');
include('manoj/header.php');
include('../dbConnection.php');
session_start();


if ($_SESSION['is_login']) {
    $rEmail=$_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterLogin.php'</script>";
}
 $sql ="SELECT * FROM submitreq_db WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
    <table class='table'>
    <tbody>
    <tr>
    <th>Request ID</th>
    <td>".$row['request_id']."</td>
    </tr>
     <tr>
    <th>Name</th>
    <td>".$row['request_name']."</td>
    </tr>
 <tr>
    <th>Email</th>
    <td>".$row['request_email']."</td>
    </tr>
    <tr>
    <td>
    <form class='d-print-none'>
    <input class='btn btn-danger'
    type='submit' value='Print' onClick='window.print()'> </form>
    </td>
    </tr>
    </tbody>
    </table>
    </div> ";
}
else{
    echo " failed";
}
?>
<?php include('manoj/footer.php')?>