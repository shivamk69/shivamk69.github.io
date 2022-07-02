<?php
session_start();
$title = 'Wallet';
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
    <link rel="stylesheet" href="./css/wallet.css">
</head>

<body>
    <div class="main-container">
        <!-- Header Section Start -->
        <?php include "./pages/header.php" ?>
        <!-- x Header Section End x -->

        <marquee behavior="scroll" direction="down">
            <center>
                <b><i>
                        <font color="red" size=50>Wallet Page</font></b></i></u>
            </center>
        </marquee>
        <form>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                <b>
                    <font color="red">Wallet Balance
                </b></font>&nbsp;&nbsp;&nbsp;
                <input type="text" size="20">
            </center>
            <br>
            <br>
            <br>
            <center>
                <b>
                    <font color="red">Total Balance
                </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20">
            </center>
            <br>
            <br>
            <br>
            <center>
                <b>
                    <font color="red">Add Money
                </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button> + </button>
            </center>
        </form>

        <br>
        <br>
        <br>
        <br>
        <marquee behavior="alternate">
            <font color="red">Thanks for visiting our site Thank you</font>
        </marquee>

        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->
    </div>
</body>

</html>