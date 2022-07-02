<?php
session_start();
include "./database/conn.php";
$title = 'Blog';
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chandigarh Trip : <?php echo $title ?> </title> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Css -->
    <link rel="stylesheet" href="./css/blog.css">
</head>

<body>
    <div class="main-container">
        <!-- Header Section Start -->
        <?php include "./pages/header.php" ?>
        <!-- x Header Section End x -->

        <main>
            <div class="row-1">
                <div class="innerBlogContainer">

                    <?php
                    $sqlUserBlog = "SELECT * FROM blog WHERE blog_id = '{$_GET['id']}'";
                    $resultUserBlog = mysqli_query($conn, $sqlUserBlog) or die("Query Failed!!");
                    if (mysqli_num_rows($resultUserBlog) > 0) {
                        while ($rowUserBlog = mysqli_fetch_assoc($resultUserBlog)) {
                    ?>
                            <a href="./blog.php?id=<?php echo $rowUserBlog['user_id']; ?>" class="blog">
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
            </div>
        </main>

        <!-- Footer Section Start -->
        <?php include "./pages/footer.php"; ?>
        <!-- x Footer Section End x -->
    </div>
</body>

</html>