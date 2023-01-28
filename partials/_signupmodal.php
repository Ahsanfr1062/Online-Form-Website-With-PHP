<!-- Modal -->
<?php
//   $showError = false;
//   $showAlert = false;
//  //  $showUser = false;
//  //  $exists = true;
//  if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    include 'partials/_dbconnect.php';
//    $username = $_POST["signupUsername"];
//    $email = $_POST["signupEmail"];
//    $password = $_POST["signupPassword"];
//    $cpassword = $_POST["signupCPassword"];
//    $sql = "select * from `users` where username = '$username'";
//    $result =  mysqli_query($conn, $sql);
//    $num = mysqli_num_rows($result);
//    if($num > 0){
//      $showError = "Username Already Exists";
//    }
//    else{
//      if(($password == $cpassword)){
//        // $hash = password_hash($password, PASSWORD_DEFAULT);

//        $sql = "INSERT INTO `users` (`sno`, `username`, `email`, `password`, `Date`) VALUES (NULL, '$username', '$email', '$password', current_timestamp());";
//        $result =  mysqli_query($conn, $sql);
//        if($result){
//          $showAlert = "Account has been created successfully";
//        }
//      }
//      else{
//        $showError = "Password Does not match";
//      }
//    }

// }


?>

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up to Get Access</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <main class="form-signin w-100 m-auto">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method = "post">
                        <h1 class="h3 mb-3 fw-normal text-center">Please SignUp</h1>
                        <div class="form-floating my-2">
                            <input type="text" name="signupUsername" class="form-control" id="signupUsername">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating my-3">
                            <input type="email" id= "signupEmail" name="signupEmail" class="form-control" id="floatingPassword" placeholder="">
                            <label for="floatingPassword">Email Address</label>
                        </div>
                        <div class="form-floating my-3">
                            <input type="password" id="signupPassword" name= "signupPassword" class="form-control">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating my-3">
                            <input type="password" class="form-control" id="signupCPassword" name="signupCPassword">
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                    </form>
                </main>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>