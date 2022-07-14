    
    <?php
    

    include('dbConnection.php');
    // blank field warning
    if (isset($_REQUEST['rSignup'])) {
        if (($_REQUEST["rName"]=="") || ($_REQUEST["rEmail"]=="") ||($_REQUEST["rPassword"])=="") {
            $regmsg='<div class="alert alert-warning mt-2 role="alert">All field required</div>';
        //end of blank field warning
        } else {
            // already exist
            $sql="SELECT r_email FROM requsterlogin_db WHERE r_email='".$_REQUEST['rEmail']."'";
            $result = $conn->query($sql);
            if ($result->num_rows==1) {
                $regmsg='<div class="alert alert-warning mt-2 role="alert">email id already exist</div>';
            // end of already exist
            } else {

            //success to create account
                $rName=$_REQUEST['rName'];
                $rEmail=$_REQUEST['rEmail'];
                $rPassword=$_REQUEST['rPassword'];
                $sql="INSERT INTO requsterlogin_db(r_name,r_email,r_password) VALUES('$rName','$rEmail','$rPassword')";
                if ($conn->query($sql)==true) {
                    $regmsg='<div class="alert alert-success mt-2" role="alert">Account successfully created</div>';
                // end create account
        //unable to create account
                } else {
                    $regmsg='<div class="alert alert-danger mt-2" role="alert">Unable to create account</div>';
                }
                //end of unable to create account
            }
        }
    }
 
?>
    <!-- start registration form -->
    <div class="container pt-5">
        <h2 class="text-center">Create an Account</h2>
        <div class="row mt-4 mb-4" >
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST" class="shadow-lg p-4">
                    <!-- name -->
                    <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your name" name="rName">
                    </div>
                    <!-- email -->
                    <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="rEmail">
                    <small class="form-text">We'will never share your email with anyone</small>
                    </div>
                    <!-- password -->
                    <div class="form-group">
                    <i class="fas fa-key"></i><label for="name" class="font-weight-bold pl-2">Password</label>
                    <input type="text" class="form-control" placeholder="Enter Your Password" name="rPassword">
                    </div>
                    <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                    <em>Note-By clicking Sign up,you agree to our terms,Data policy and cookie Policy</em><br>

                    <?php if (isset($regmsg)) {
    echo $regmsg;
}?>
                </form>

            </div>
        </div>

     </div>
     <!-- end registration form -->
