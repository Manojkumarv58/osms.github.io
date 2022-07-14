<?php
session_start();
define('TITLE', 'Logout');
define('PAGE', 'logout');
include('requester/manoj/header.php');

session_destroy();
echo "<script>location.href='index.php'</script>";


 ?>
<?php include('requester/manoj/footer.php')?>

