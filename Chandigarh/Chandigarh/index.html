<?php
session_start();
$title = 'Home';
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
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Sweet Alert CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- Main Container Start -->
    <div class="main-container">

        <!-- COVID-19 Pop-Up Start-->
        <!-- x COVID-19 Pop-Up End x-->



        <!-- Header Section Start -->
        <?php include "./pages/header.php" ?>
        <!-- x Header Section End x -->



        <!-- Main Section Start -->
        <main>
            <div class="row-1">
                <div class="headline">
                    <a href="#" class="1">Latest Info</a>
                    <a href="#" class="2">Tourist Guide</a>
                    <a href="https://www.google.com/maps/place/Chandigarh/@30.7354003,76.7530122,13z/data=!4m5!3m4!1s0x390fed0be66ec96b:0xa5ff67f9527319fe!8m2!3d30.7333148!4d76.7794179" title="Click to See Map" target="_blank">Google Map</a>
                    <a href="./about chnd.php" title="Click to See About Chandigarh">About Chandigarh</a>
                </div>

                <div class="box box-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                </div>
                <div class="box box-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                </div>
            </div>

            <div class="row-2">
                <div class="background"></div>
                <div class="top">
                    <ul>
                        <li onclick="clickToShow(0);">
                            <i class="fas fa-building"></i>Hotels
                        </li>
                        <li onclick="clickToShow(1);">
                            <i class="fa fa-plane"></i>Flight
                        </li>
                        <li onclick="clickToShow(2);">
                            <i class="fas fa-train"></i>Train
                        </li>
                        <li onclick="clickToShow(3);">
                            <i class="fas fa-bus"></i>Bus
                        </li>
                        <li onclick="clickToShow(4);">
                            <i class="fas fa-car"></i>Cab/Car
                        </li>
                        <li onclick="clickToShow(5);">
                            <i class="fas fa-utensils"></i>Food
                        </li>
                    </ul>
                </div>
                <div class="bottom">
                    <div class="tab tab-1">
                        <form class="innerTab" id="hotel-form" action="hotel.php" method="POST">
                            <div class="details hotel-1">
                                <label for="hName">Destination/Hotel Name</label>
                                <select required name="hName" id="hName">
                                    <?php
                                    include "./database/conn.php";
                                    $sql1 = "SELECT * FROM hotel";
                                    $result1 = mysqli_query($conn, $sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        echo '<option value="' . $row1["hotel_name"] . '">' . $row1["hotel_name"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="details hotel-2">
                                <div class="date3">
                                    <label for="hDateFrom">Check-in</label>
                                    <input type="date" name="hDateFrom" id="hDateFrom">
                                </div>
                                <div class="date3">
                                    1 Night
                                </div>
                                <div class="date3">
                                    <label for="hDateTo">Check-out</label>
                                    <input type="date" name="hDateTo" id="hDateTo">
                                </div>
                            </div>

                            <div class="details hotel-3">
                                <label for="hRoomsFake">Rooms and Guests</label>
                                <input type="text" id="hRoomFake" value="1 Room, 1 Guest" readonly>
                                <input type="hidden" name="hRoom" id="hRoom" value="">
                                <input type="hidden" name="hGuest" id="hGuest" value="">
                                <i class="fas fa-chevron-down"></i>
                                <div class="roomCountMainDiv">
                                    <div class="roomCount">
                                        <p>Room</p>
                                        <p>
                                            <i onclick="clickMinusR()" class="fas fa-minus-circle"></i>
                                            <span id="rPlusCount">1</span>
                                            <i onclick="clickPlusR()" class="fas fa-plus-circle"></i>
                                        </p>
                                    </div>
                                    <div class="roomCount">
                                        <p>Guest</p>
                                        <p>
                                            <i onclick="clickMinusG()" class="fas fa-minus-circle"></i>
                                            <span id="gPlusCount">1</span>
                                            <i onclick="clickPlusG()" class="fas fa-plus-circle"></i>
                                        </p>
                                    </div>
                                    <div class="roomCount">
                                        <span id="roomDone">Done</span>
                                    </div>
                                </div>
                            </div>

                            <div class="details hotel-4" id="hotel-form-btn">
                                <i class="fas fa-search"></i>
                                <script>
                                    document.getElementById('hotel-form-btn').addEventListener('click', () => {
                                        <?php
                                        if (isset($_SESSION['use'])) {
                                            echo "document.getElementById('hotel-form').submit();";
                                        } else {
                                            echo "document.querySelector('.log-background').style.opacity = 1;
                                            document.querySelector('.log-background').style.visibility = 'visible';";
                                        }
                                        ?>
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-2">
                        <form class="innerTab" id="flight-form" action="transport.php" method="POST">
                            <div class="details flight-1">
                                <div class="fLocation">
                                    <label for="fForm">From</label>
                                    <select name="fForm" id="fForm">
                                        <option value="Chandigarh" selected>Chandigarh</option>
                                        <?php
                                        $sql3 = "SELECT * FROM transport";
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['from'] != Null) {
                                                    echo '<option value="' . $row3['from'] . '">' . $row3['from'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="fLocation">
                                    <label for="fTo">TO</label>
                                    <select name="fTo" id="fTo">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                                            if ($row3['to'] != Null) {
                                                echo '<option value="' . $row3['to'] . '">' . $row3['to'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="details flight-2">
                                <label for="fDate">Depart</label>
                                <input type="date" name="fDate" id="fDate">
                            </div>
                            <div class="details flight-3">
                                <div class="f32">
                                    <p><span id="fCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="fightClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="fCount2">1</span>
                                        <i onclick="fightClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="fPassenger" id="fPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="fClass" id="fClass">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                                            if ($row3['flight_class'] != Null) {
                                                echo '<option value="' . $row3['flight_class'] . '">' . $row3['flight_class'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="details flight-4" id="flight-form-btn">
                                <i class="fas fa-search"></i>
                                <input type="hidden" name="transport" value="Flight">
                                <script>
                                    document.getElementById('flight-form-btn').addEventListener('click', () => {
                                        <?php
                                        if (isset($_SESSION['use'])) {
                                            echo "document.getElementById('flight-form').submit();";
                                        } else {
                                            echo "document.querySelector('.log-background').style.opacity = 1;
                                            document.querySelector('.log-background').style.visibility = 'visible';";
                                        }
                                        ?>
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-3">
                        <form class="innerTab" id="train-form" action="transport.php" method="POST">
                            <div class="details train-1">
                                <div class="tLocation">
                                    <label for="tForm">From</label>
                                    <select name="tFrom" id="tForm">
                                        <option value="Chandigarh" selected>Chandigarh</option>
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['from'] != Null) {
                                                    echo '<option value="' . $row3['from'] . '">' . $row3['from'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="tLocation">
                                    <label for="tTo">TO</label>
                                    <select name="tTo" id="tTo">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                                            if ($row3['to'] != Null) {
                                                echo '<option value="' . $row3['to'] . '">' . $row3['to'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="details train-2">
                                <label for="tDate">Depart Date</label>
                                <input type="date" name="tDate" id="tDate">
                            </div>
                            <div class="details train-3">
                                <div class="f32">
                                    <p><span id="tCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="trainClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="tCount2">1</span>
                                        <i onclick="trainClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="tPassenger" id="tPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="tClass" id="tClass">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                                            if ($row3['train_class'] != Null) {
                                                echo '<option value="' . $row3['train_class'] . '">' . $row3['train_class'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="details train-4" id="train-form-btn">
                                <i class="fas fa-search"></i>
                                <input type="hidden" name="transport" value="Train">
                                <script>
                                    document.getElementById('train-form-btn').addEventListener('click', () => {
                                        <?php
                                        if (isset($_SESSION['use'])) {
                                            echo "document.getElementById('train-form').submit();";
                                        } else {
                                            echo "document.querySelector('.log-background').style.opacity = 1;
                                            document.querySelector('.log-background').style.visibility = 'visible';";
                                        }
                                        ?>
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-4">
                        <form class="innerTab" id="bus-form" action="transport.php" method="POST">
                            <div class="details bus-1">
                                <div class="bLocation">
                                    <label for="bForm">From</label>
                                    <select name="bFrom" id="bForm">
                                        <option value="Chandigarh" selected>Chandigarh</option>
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['from'] != Null) {
                                                    echo '<option value="' . $row3['from'] . '">' . $row3['from'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="bLocation">
                                    <label for="bTo">TO</label>
                                    <select name="bTo" id="bTo">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['to'] != Null) {
                                                    echo '<option value="' . $row3['to'] . '">' . $row3['to'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="details bus-2">
                                <label for="bDate">Depart Date</label>
                                <input type="date" name="bDate" id="bDate">
                            </div>
                            <div class="details bus-3">
                                <div class="f32">
                                    <p><span id="bCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="busClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="bCount2">1</span>
                                        <i onclick="busClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="bPassenger" id="bPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="bClass" id="bClass">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['bus_class'] != Null) {
                                                    echo '<option value="' . $row3['bus_class'] . '">' . $row3['bus_class'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="details bus-4" id="bus-form-btn">
                                <i class="fas fa-search"></i>
                                <input type="hidden" name="transport" value="Bus">
                                <script>
                                    document.getElementById('bus-form-btn').addEventListener('click', () => {
                                        <?php
                                        if (isset($_SESSION['use'])) {
                                            echo "document.getElementById('bus-form').submit();";
                                        } else {
                                            echo "document.querySelector('.log-background').style.opacity = 1;
                                            document.querySelector('.log-background').style.visibility = 'visible';";
                                        }
                                        ?>
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-5">
                        <form class="innerTab" id="car-form" action="transport.php" method="POST">
                            <div class="details car-1">
                                <div class="cLocation">
                                    <label for="cForm">From</label>
                                    <select name="cFrom" id="cForm">
                                        <option value="Chandigarh" selected>Chandigarh</option>
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['from'] != Null) {
                                                    echo '<option value="' . $row3['from'] . '">' . $row3['from'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="cLocation">
                                    <label for="cTo">TO</label>
                                    <select name="cTo" id="cTo">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['to'] != Null) {
                                                    echo '<option value="' . $row3['to'] . '">' . $row3['to'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="details car-2">
                                <label for="cDate">Depart Date</label>
                                <input type="date" name="cDate" id="cDate">
                            </div>
                            <div class="details car-3">
                                <div class="f32">
                                    <p><span id="cCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="carClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="cCount2">1</span>
                                        <i onclick="carClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="cPassenger" id="cPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="cClass" id="cClass">
                                        <?php
                                        $result3 = mysqli_query($conn, $sql3) or die("Query Failed!!");
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                                if ($row3['car_class'] != Null) {
                                                    echo '<option value="' . $row3['car_class'] . '">' . $row3['car_class'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="details car-4" id="car-form-btn">
                                <i class="fas fa-search"></i>
                                <input type="hidden" name="transport" value="Car">
                                <script>
                                    document.getElementById('car-form-btn').addEventListener('click', () => {
                                        <?php
                                        if (isset($_SESSION['use'])) {
                                            echo "document.getElementById('car-form').submit();";
                                        } else {
                                            echo "document.querySelector('.log-background').style.opacity = 1;
                                            document.querySelector('.log-background').style.visibility = 'visible';";
                                        }
                                        ?>
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-6">
                        <form class="innerTab" id="food-form" action="" method="get">
                            <div class="details food-1"></div>
                            <div class="details food-2"></div>
                            <div class="details food-3"></div>

                            <div class="details food-4" id="food-form-btn">
                                <i class="fas fa-search"></i>
                                <input type="hidden" name="transport" value="food">
                                <script>
                                    document.getElementById('food-form-btn').addEventListener('click', () => {
                                        <?php
                                        if (isset($_SESSION['use'])) {
                                            echo "document.getElementById('food-form').submit();";
                                        } else {
                                            echo "document.querySelector('.log-background').style.opacity = 1;
                                            document.querySelector('.log-background').style.visibility = 'visible';";
                                        }
                                        ?>
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_SESSION['msg'])) {
                if ($_SESSION['msg'] == "F") {
                    echo "<script>swal('Error!', 'Booking Failed!!!', 'error');</script>";
                    $_SESSION['msg'] = null;
                } else {
                    echo "<script>swal('Done!', '{$_SESSION['msg']}', 'success');</script>";
                    $_SESSION['msg'] = null;
                }
            }
            ?>

            <div class="row-3">
                <div class="blogHeading">
                    <div class="blogH-1">
                        <div class="aniBar"></div>
                        <span onclick="clickToOpenBlogTab(0)">Blogs</span>
                        <span onclick="clickToOpenBlogTab(1)">
                            <?php
                            if (isset($_SESSION['use'])) {
                                echo 'My Blogs';
                            }
                            ?>
                        </span>
                    </div>
                    <div class="blogH-2">
                        <?php
                        if (isset($_SESSION['use'])) {
                            echo '<a href="./addblog.php"><i class="fa fa-plus-square"></i>Add</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="blogMainContainer">
                    <div class="blogContainer blog-1">
                        <div class="innerBlogContainer">

                            <?php
                            $sqlUserBlog = "SELECT * FROM blog ORDER BY blog_id DESC";
                            $resultUserBlog = mysqli_query($conn, $sqlUserBlog) or die("Query Failed!!");
                            if (mysqli_num_rows($resultUserBlog) > 0) {
                                $i = 0;
                                while (($rowUserBlog = mysqli_fetch_assoc($resultUserBlog)) && $i != 6) {
                                    $i = $i + 1;
                            ?>
                                    <a href="./blog.php?id=<?php echo $rowUserBlog['blog_id']; ?>" class="blog">
                                        <div class="blogImg">
                                            <img src="./blog images/<?php echo $rowUserBlog['blog_image']; ?>" alt="">
                                        </div>
                                        <div class="blogData">
                                            <h1>
                                                <?php echo substr($rowUserBlog['blog_tittle'], 0, 28) . ".."; ?>
                                                <span><?php echo $rowUserBlog['date']; ?></span>
                                            </h1>
                                            <p><?php echo substr($rowUserBlog['blog_dec'], 0, 130) . "..."; ?></p>
                                            <div>
                                                <span><?php echo $rowUserBlog['user_name']; ?></span>
                                                <img src="./profile images/<?php echo $rowUserBlog['user_image']; ?>" alt="Profile Picture">
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            } else {
                                echo "<h1>No Blog</h1>";
                            }
                            ?>
                        </div>
                        <span class="moreBtn">
                            <a href="./allblogs.php?id=0">
                                More <i class="fas fa-arrow-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="blogContainer blog-2">
                        <div class="innerBlogContainer">
                            <?php
                            $sqlUserBlog = "SELECT * FROM user_data JOIN blog ON user_data.id = blog.user_id WHERE user_data.id = '{$_SESSION['user_id']}' ORDER BY blog.blog_id DESC";
                            $resultUserBlog = mysqli_query($conn, $sqlUserBlog) or die("Query Failed!!");
                            if (mysqli_num_rows($resultUserBlog) > 0) {
                                $i = 0;
                                while (($rowUserBlog = mysqli_fetch_assoc($resultUserBlog)) && $i != 6) {
                                    $i = $i + 1;
                            ?>
                                    <a href="./blog.php?id=<?php echo $rowUserBlog['blog_id']; ?>" class="blog">
                                        <div class="blogImg">
                                            <img src="./blog images/<?php echo $rowUserBlog['blog_image']; ?>" alt="">
                                        </div>
                                        <div class="blogData">
                                            <h1>
                                                <?php echo $rowUserBlog['blog_tittle']; ?>
                                                <span><?php echo $rowUserBlog['date']; ?></span>
                                            </h1>
                                            <p><?php echo $rowUserBlog['blog_dec']; ?></p>
                                            <div>
                                                <span><?php echo $rowUserBlog['user_name']; ?></span>
                                                <img src="./profile images/<?php echo $rowUserBlog['image']; ?>" alt="Profile Picture">
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <span class="moreBtn">
                            <a href="./allblogs.php?id=<?php echo $_SESSION['user_id']; ?>">
                                More <i class="fas fa-arrow-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>




            <!-- <div class="row-33">
                <div class="owl-carousel owl-theme">
                    <div class="item item1">
                        <img src="./images/I Love Chandigarh.jpg" alt="I Love Chandigarh">
                    </div>
                    <div class="item item2">
                        <img src="./images/chandigarh-slider (1).jpg" alt="">
                    </div>
                    <div class="item item3">
                        <img src="./images/slide-image-1.jpg" alt="">
                    </div>
                    <div class="item item4">
                        <img src="./images/chandigarh-slider.jpg" alt="">
                    </div>
                </div>
            </div> -->

        </main>
        <!-- x Main Section End x -->

        

        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->

    </div>
    <!-- x Main Container End x -->



    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./javascript/owl.carousel.min.js"></script>
    <script src="./javascript/main.js"></script>
    <script src="./javascript/log.js"></script>

</body>

</html>