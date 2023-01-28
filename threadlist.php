<?php
$showAlert = false;
$id = $_GET['catid'];
require 'partials/_dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // include 'partials/_db.php';
    $title = $_POST["title"];
    $desc = $_POST["desc"];

    $sql = "INSERT INTO `thread` (`thread_id`, `thread_title`, `thread_desc`, `thread_user_id`, `thread_cat_id`, `timestamp`) VALUES (NULL, '$title', '$desc', '0', ' $id ', current_timestamp());";
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
      <strong>Success!</strong>Your Question has been successfully Added.      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    $id = $_GET['catid'];
    $sql = " SELECT * FROM `categories` WHERE `category_id` = $id";
    $result =  mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {

        $catname = $row["category_name"];
        $catdesc = $row["category_description"];
    }
    echo '<div class="row align-center align-items-md-stretch">
        <div class="col-md-6 my-4 mx-2">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Welcome to' . $catname . 'Forum</h2>
                <p>'. $catdesc . '</p>
                <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#askModal">Ask a Question!</button>
            </div>
        </div>';
        ?>    
        <div class="container">
            <h1>Ask a Question!</h1>
            <form action = "<?php $_SERVER['REQUEST_URI'] ?>"  method = "post">
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Thread Title</label>
                    <input type="text" name= "title" id = "title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Keep it short & Small</div>
                    <div class="form-floating">
                        <textarea class="form-control" name = "desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Add Details!</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>


        <div class="container">
            <h1>Browse Questions</h1>

        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `thread` WHERE thread_cat_id = $id";
        $result =  mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            while ($row = mysqli_fetch_array($result)) {
                $id = $row["thread_id"];
                $title = $row["thread_title"];
                $desc = $row["thread_desc"];
                echo '<div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="media">
                <img class="mr-3 rounded-circle" src="images/R.jpeg" width = "70px">
                <div class="media-body">
                    <h6 class="mx-1 text-danger">Anonymous' . $row["thread_user_id"] . '</h6>
                    <h5 class="mt-0"> <a class = "text-dark" href="thread.php?threadid=' . $row["thread_id"] . '">' . $title . '</a></h5>
                    <p>' . $desc . '</p>
                </div>
            </div>
            </div>';
            }
        } else {
            echo '<div class="container">
            <img width ="500px" src="images/undraw_Working_from_anywhere_re_9obt.png" alt="">';
            echo " <h1 class = 'text-center'>Be the First one to ask the Question! </h1>
            
            </div>";
        }
        
        ?>
        </div>

<?php
        require 'partials/_footer.php';

        ?>
</body>

</html>