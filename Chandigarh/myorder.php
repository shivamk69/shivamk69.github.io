<?php
session_start();
$title = 'My Order';
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chandigarh Trip : <?php echo $title; ?> </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Css -->
    <link rel="stylesheet" href="./css/myorder.css">
</head>

<body>
    <div class="main-container">
        <!-- Header Section Start -->
        <?php include "./pages/header.php" ?>
        <!-- x Header Section End x -->

        <main>
            <h1>My Order Page is in Progress !!</h1>
        </main>


        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->
    </div>
</body>

</html>