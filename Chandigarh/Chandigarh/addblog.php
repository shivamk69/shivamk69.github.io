<?php
session_start();
$title = 'Add Blog';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chandigarh Trip : <?php echo $title; ?> </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Css -->
    <link rel="stylesheet" href="./css/addbloh.css">
    <!-- Sweet Alert CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="main-container">
        <?php include "./pages/header.php" ?>

        <main>
            <form action="./database/saveBlog.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <label for="img">Add Blog Image</label>
                    <input type="file" name="image" id="img">
                </div>
                <div class="form-row">
                    <label for="heading">Add Blog Heading</label>
                    <input type="text" name="heading" id="heading">
                </div>
                <div class="form-row">
                    <label for="dec">Add Blog Dec</label>
                    <textarea name="dec" id="dec"></textarea>
                </div>
                <div class="form-row">
                    <input type="submit" name="submit" value="Post">
                </div>
            </form>
        </main>

        <?php
        if (isset($_SESSION['msg'])) {
            if($_SESSION['msg'] == "exeError"){
                echo "<script>swal('Error!', 'This File Does Not Support!!', 'error');</script>";
                $_SESSION['msg'] = null;
            }
        }
        ?>
        
        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->
    </div>
</body>

</html>