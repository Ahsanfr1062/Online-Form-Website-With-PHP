<?php


$showAlert = false;
$id = $_GET['threadid'];
require 'partials/_dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // include 'partials/_db.php';
    $content = $_POST["content"];

    $sql = "INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_user`, `date`) VALUES (NULL, '$content', '$id', '0', current_timestamp());";
    $result =  mysqli_query($conn, $sql);
    $showAlert = true;
}  

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
    if($showAlert){
        echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong>Your Comment has been added successfully!  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    $id = $_GET['threadid'];
    $sql = " SELECT * FROM `thread` WHERE `thread_id` = $id";
    $result =  mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){

        $title = $row["thread_title"];
        $desc = $row["thread_desc"];
        $time = $row["timestamp"];


    }
    ?>
    
    <div class="row align-center align-items-md-stretch">
        <div class="col-md-6 my-4 mx-2">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $time; ?></p>
                <p> <?php echo $desc; ?></p>
                <button class="btn btn-outline-light" type="button">Discussions</button>
                <p class="my-2"><strong>Posted by: harry</strong></p>
            </div>
        </div>


        <h1 class="text-primary">Post a Comment:</h1>
        
        <!-- <div class="container"> -->
            <!-- <h1>Comment Here!</h1> -->
            <form action = "<?php $_SERVER['REQUEST_URI'] ?>"  method = "post">
                <div class="mb-3">
                        <textarea class="form-control" name = "content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                        <button type="submit" class="btn btn-success my-4">Submit</button>
                    </div>
                </div>
            </form>
        <!-- </div> -->

        
        
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id = $id";
        $result =  mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
        while($row = mysqli_fetch_array($result)){
            $content = $row["comment_content"];
            $id = $row["comment_id"];
            $user = $row["comment_user"];
            $date = $row["date"];

        echo '<div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="media">
                <img class="mr-3 rounded-circle" src="images/R.jpeg" width = "70px">
                <div class="media-body">
                    <h6 class=" text-danger">Anonymous'. $user .'</h6> 
                    <span>'.$date.'</span>
                    <p>'. $content .'</p>
                </div>
            </div>
        </div>';

    }
} 
else{
    echo '<h1>No Discussions Here!</h1>';

}
    ?>


        <?php
        require 'partials/_footer.php';

        ?>
</body>

</html>