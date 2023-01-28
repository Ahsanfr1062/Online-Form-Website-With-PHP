<?php
// session_start();
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//   // header("location: login.php");
//   exit;
// }

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XCODE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  require 'partials/_header.php';
  require 'partials/_dbconnect.php';
  require 'partials/_loginmodal.php';
  ?>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="images/hero.png" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Ask and Get Questions from Anywher in the World About Programming</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"> Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-center">XCODE - Catagories</h1>
  <?php
  $sql = 'SELECT * FROM `categories`';
  $result =  mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $id = $row["category_id"];
    echo '
          <div class="container my-2">
        <div class="row my-4">
             <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/OIP.9XKI54bo_4Duu9QQA6ZgAAHaEK?pid=ImgDet&rs=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="threadlist.php?catid=' . $row["category_id"] . '"> ' . $row["category_name"] . '</a></h5>
                        <p class="card-text">' . $row["category_description"] . '</p>';
    echo '<a href="threadlist.php?catid=' . $row["category_id"] . '" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>
        </div>
    </div>';
  }

  ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <?php

  require 'partials/_footer.php';
  ?>
</body>

</html>