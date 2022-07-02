<?php
session_start();
$title = 'Transport';

if($_POST['transport'] == "Flight"){
    $name = $_POST['transport'];
    $from = $_POST['fForm'];
    $to = $_POST['fTo'];
    $date = $_POST['fDate'];
    $passenger = $_POST['fPassenger'];
    $class = $_POST['fClass'];
}
if($_POST['transport'] == "Train"){
    $name = $_POST['transport'];
    $from = $_POST['tFrom'];
    $to = $_POST['tTo'];
    $date = $_POST['tDate'];
    $passenger = $_POST['tPassenger'];
    $class = $_POST['tClass'];
}
if($_POST['transport'] == "Bus"){
    $name = $_POST['transport'];
    $from = $_POST['bFrom'];
    $to = $_POST['bTo'];
    $date = $_POST['bDate'];
    $passenger = $_POST['bPassenger'];
    $class = $_POST['bClass'];
}
if($_POST['transport'] == "Car"){
    $name = $_POST['transport'];
    $from = $_POST['cFrom'];
    $to = $_POST['cTo'];
    $date = $_POST['cDate'];
    $passenger = $_POST['cPassenger'];
    $class = $_POST['cClass'];
}
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
    <link rel="stylesheet" href="./css/flight.css">
</head>

<body>
    <div class="main-container">
        <?php include "./pages/header.php" ?>

        <main>
            <div class="main">
                <div class="row row1">
                    <h1><?php echo $name; ?> Number</h1>
                    <span><?php echo $rand = mt_rand(1000, 9999); ?></span>
                </div>
                <div class="row row2">
                    <h1>From</h1>
                    <span><?php echo $from; ?></span>
                    <h1>To</h1>
                    <span><?php echo $to; ?></span>
                </div>
                <div class="row row3">
                    <h1>Date</h1>
                    <span><?php echo $date; ?></span>
                    <h1>Passenger</h1>
                    <span><?php echo $passenger; ?></span>
                    <h1>Class</h1>
                    <span><?php echo $class; ?></span>
                </div>

                <div class="row row4">
                    <form method="post" action="./database/mail.php">
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                        <input type="hidden" name="rand" value="<?php echo $rand; ?>">
                        <input type="hidden" name="Form" value="<?php echo $from; ?>">
                        <input type="hidden" name="To" value="<?php echo $to; ?>">
                        <input type="hidden" name="Date" value="<?php echo $date; ?>">
                        <input type="hidden" name="Passenger" value="<?php echo $passenger; ?>">
                        <input type="hidden" name="Class" value="<?php echo $class; ?>">
                        <input type="submit" name="submit" value="Done">
                    </form>
                </div>
            </div>
        </main>

        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->        
    </div>
</body>

</html>