<?php
// $showError = false;
// $login = false;
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     include 'partials/_dbconnect.php';
//     $username = $_POST["loginUsername"];
//     $password = $_POST["loginPassword"];
//     $sql = "Select * from users where username='$username' AND password='$password'";
//     $result =  mysqli_query($conn, $sql);
//     $num = mysqli_num_rows($result);
//     if ($num == 1) {
//         $login = true;
//         session_start();
//         $_SESSION['loggedin'] = true;
//         $_SESSION['username'] = $username;
//         header("location: index.php");
//     } else {
        
//         $showError = "Invalid username or password";
//     }
// }

?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login to Get Access</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container">
                <main class="form-signin w-100 m-auto">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                        <div class="form-floating my-2">
                            <input type="text" name="loginUsername" class="form-control" id="loginUsername" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating my-3">
                            <input type="password" name="loginPassword" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                </main>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>