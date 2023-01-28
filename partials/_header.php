<?php

echo '<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">XCODE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="theards.php">Topics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catagories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Another</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action = "search.php" method= "get">
        <input class="form-control me-2" name= "search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <button class="btn btn-primary mx-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
      <button class="btn btn-primary mx-1" type="button" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
    </div>
  </div>
</nav>';
include 'partials/_loginmodal.php';
include 'partials/_signupmodal.php';

// if($showAlert){
//   echo '
// <div class="alert alert-success alert-dismissible fade show" role="alert">
// <strong>Success!</strong> '. $showAlert.' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
// if($showError){
//   echo '
//   <div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Sikes!</strong> '. $showError . '
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// }
// if($login){
//   echo '
//   <div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success!</strong>Your have been logged in!
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// }
?>


