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
  ?>

<!-- <div class="container my-3"> -->
    <h1>Search Results for "<?php echo $_GET['search']; ?>": </h1>
<?php
  $id = $_GET['search'];
  $sql = "select * from thread where match(thread_title,thread_desc) against ('$id')";
  $result =  mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num> 0){

      while($row = mysqli_fetch_array($result)){
          
          $title = $row["thread_title"];
          $desc = $row["thread_desc"];
          $threadid = $row["thread_id"];
        //   $url = "http://localhost/Forum/thread.php?threadid=" . $threadid . ";
        $url = 'thread.php?threadid='. $threadid;
        echo '<div class="result">
          <h3><a href="'.$url.'" class="text-dark">'. $title , '</a></h3>
          <p>'. $desc . '</p></div>';
          
        }
    }

    else{
        echo '<h3 class = "text-danger">No Result Found! </h3>';
    }
  ?>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <?php

  require 'partials/_footer.php';
  ?>
</body>

</html>