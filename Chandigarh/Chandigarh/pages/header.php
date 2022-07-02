<!-- Login Form Start -->
<div class="log-background">
    <div class="x-btn">
        <span></span>
        <span></span>
    </div>
    <div class="log-container">
        <div class="log-button-container">
            <div class="log-buttons">
                <div class="backAni"></div>
                <button>Log in</button>
                <button>Sign in</button>
            </div>
        </div>
        <div class="log-body-container">
            <div class="login-container">
                <form action="./database/login.php" method="POST" id="form1">
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="off">
                        <span>
                            <?php
                            if (isset($_SESSION['logError1'])) {
                                echo "Email Does Not Exits";
                                $_SESSION['logError1'] = null;
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Enter Your Password">
                        <span>
                            <?php
                            if (isset($_SESSION['logError2'])) {
                                echo "Password Not Match";
                                $_SESSION['logError2'] = null;
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Log In" name="logIn">
                    </div>
                    <div class="form-group">
                        <a href="#">Forgot Password</a>
                    </div>
                </form>
            </div>
            <div class="signin-container">
                <form action="./database/signin.php" method="POST" id="form2" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" onfocus="iFocus(0)" onblur="iFocusout(0)" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="s-email">Email</label>
                        <input type="email" name="s-email" id="s-email" onfocus="iFocus(1)" onblur="iFocusout(1)" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="m-number">Mobile No</label>
                        <input type="text" name="m-number" id="m-number" onfocus="iFocus(2)" onblur="iFocusout(2)" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="s-password">Password</label>
                        <input type="password" name="password" id="s-password" onfocus="iFocus(3)" onblur="iFocusout(3)">
                    </div>

                    <div class="form-group">
                        <label for="Cpassword">Confirm Password</label>
                        <input type="password" name="cPassword" id="Cpassword" onfocus="iFocus(4)" onblur="iFocusout(4)">
                    </div>

                    <div class="form-group">
                        <label for="file" id="fileLabel">(Optional)</label>
                        <input type="file" id="file" name="image">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Sign In" name="signIn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if ((!isset($_SESSION['use'])) && ($_SERVER['REQUEST_URI'] == '/PROJECT/Chandigarh/' || $_SERVER['REQUEST_URI'] == '/PROJECT/Chandigarh/index.php')) { ?>
    <script>
        setTimeout(() => {
            document.querySelector(".log-background").style.opacity = 1;
            document.querySelector(".log-background").style.visibility = "visible";
        }, 3000)
    </script>
<?php
}

if (isset($_SESSION['logPOP'])) { ?>
    <script>
        document.querySelector(".log-background").style.opacity = 1;
        document.querySelector(".log-background").style.visibility = "visible";
        <?php
        if (isset($_SESSION['signSMS'])) {
            if ($_SESSION['logPOP'] == "T") { ?>
                swal('Done!', '<?php echo $_SESSION['signSMS']; ?>', 'success');
            <?php
            } else { ?>
                swal('Error!', '<?php echo $_SESSION['signSMS']; ?>', 'error');
        <?php
            }
            $_SESSION['signSMS'] = null;
        }
        ?>
    </script>
<?php
    $_SESSION['logPOP'] = null;
}
?>
<!-- x Login Form Start x -->


<?php
if ($title == "Home") {
    $active1 = "active";
}else if ($title == "Wallet") {
    $active2 = "active";
}else if ($title == "Wallet") {
    $active2 = "active";
}else if ($title == "My Order") {
    $active3 = "active";
}else if ($title == "Help") {
    $active4 = "active";
}
?>


<!-- Header Section Start -->
<header>
    <div class="left-container">
        <a href="./index.php" class="logo">
            <img src="./images/logo.png" alt="Logo">
        </a>
        <div class="search-bar">
            <form id="search-form" action="" method="get">
                <input type="search" name="search" id="search" placeholder="Search" autocomplete="off">
                <span onclick="document.getElementById('search-form').submit();"><i class="fas fa-search"></i></span>
            </form>
        </div>
        <div class="help">
            <div id="google_translate_element"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </div>
    <div class="right-container">
        <?php
        if (isset($_SESSION['use'])) { ?>
            <div class="login-section">
                <div class="buttons">
                    <a href="./help.php" class="<?php echo $active4 ?>">Help</a>
                    <a class="<?php echo $active1 ?>" href="./index.php">Home</a>
                    <a class="<?php echo $active2 ?>" href="./wallet.php">Wallet</a>
                    <a class="<?php echo $active3 ?>" href="./myorder.php">My Orders</a>
                </div>
                <?php
                include "./database/conn.php";
                $sql2 = "SELECT name, image FROM user_data WHERE id = '{$_SESSION['user_id']}'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                ?>
                <div class="profile-section">
                    <div class="info">
                        <span>Welcome</span>
                        <p><?php echo $row2['name']; ?></p>
                    </div>
                    <div class="p-pic">
                        <img src="./profile images/<?php echo $row2['image']; ?>" alt="Profile Image">
                    </div>
                </div>
                <a href="./database/logout.php" class="logout">Log Out</a>
            </div>
        <?php
        } else {
        ?>
            <div class="logout-section">
                <a>Log in <span>//</span> Sign in</a>
            </div>
            <script>
                const loginBtn = document.querySelector(".logout-section a");
                loginBtn.addEventListener("click", () => {
                    document.querySelector(".log-background").style.opacity = 1;
                    document.querySelector(".log-background").style.visibility = "visible";
                })
            </script>
        <?php
        }
        ?>
    </div>
    <div class="bar"></div>
</header>
<!-- x Header Section End x -->