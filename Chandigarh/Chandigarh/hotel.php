<?php
session_start();
include "./database/conn.php";
$title = 'Hotel';
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
    <link rel="stylesheet" href="./css/hotel.css">
</head>

<body>
    <div class="main-container">
        <?php include "./pages/header.php" ?>
        <main>
            <div class="main">
                <div class="row row1">
                    <h1>Hotel Name</h1>
                    <span><?php echo $_POST['hName']; ?></span>
                </div>
                <div class="row row2">
                    <h1>From</h1>
                    <span><?php echo $_POST['hDateFrom']; ?></span>
                    <h1>To</h1>
                    <span><?php echo $_POST['hDateTo']; ?></span>
                </div>
                <div class="row row3">
                    <h1>Room</h1>
                    <span><?php echo $_POST['hRoom'] ?></span>
                    <h1>Guest</h1>
                    <span><?php echo $_POST['hGuest'] ?></span>
                </div>
                <div class="row row4">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="hidden" name="hName" value="<?php echo $_POST['hName']; ?>">
                        <input type="hidden" name="hDateFrom" value="<?php echo $_POST['hDateFrom']; ?>">
                        <input type="hidden" name="hDateTo" value="<?php echo $_POST['hDateTo']; ?>">
                        <input type="hidden" name="hRoom" value="<?php echo $_POST['hRoom']; ?>">
                        <input type="hidden" name="hGuest" value="<?php echo $_POST['hGuest']; ?>">
                        <input type="submit" name="submit" value="Done">
                    </form>
                </div>
            </div>
        </main>
        <?php
	
        if (isset($_POST['submit'])) {
            $hotel_name = $_POST['hName'];
            $hotel_fromDate = $_POST['hDateFrom'];
            $hotel_toDate = $_POST['hDateTo'];
            $hotel_room = $_POST['hRoom'];
            $hotel_guest = $_POST['hGuest'];


            $to_email = $_SESSION['user_email'];
            $subject = "Hotel Booking";
            $body = "
                Hotel Name : $hotel_name
                From : $hotel_fromDate
                To : $hotel_toDate
                Room : $hotel_room
                Guest : $hotel_guest

                😊 Booking Confirm 😊
            ";
            $header = "From: xyz@gmail.com";
            $msg = "";

            if(mail($to_email, $subject, $body, $header)){
                $_SESSION['msg'] = "Booking Confirm !! Check Your Email...";
                echo "<script>window.location = '{$hostname}/';</script>";
            }else{
                $_SESSION['msg'] = "F";
                echo "<script>window.location = '{$hostname}/';</script>";
            }
        }

        ?>

        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->
    </div>
</body>

</html>