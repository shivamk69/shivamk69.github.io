<?php

session_start();

include "./conn.php";

if (isset($_POST['submit'])) {

    $blog_tittle = $_POST['heading'];
    $blog_dec = $_POST['dec'];
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT name, image FROM user_data WHERE id = '{$user_id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    $user_name = $row['name'];
    $user_image = $row['image'];
    $date = date("Y-m-d");

    $image = $_FILES['image'];
    $imgExt = explode('.', $image['name']);
    $imgExt = strtolower(end($imgExt));
    $extensions = array("jpeg", "jpg", "png");



    if (isset($_FILES['image'])) {
        if (in_array($imgExt, $extensions) === false) {
            $_SESSION['msg'] = "exeError";
            echo "<script>window.location='{$hostname}/addblog.php';</script>";
            die();
        } else {
            $blog_image = $user_id . '-' . $date . '-' . time() . "." . $imgExt;
            move_uploaded_file($image['tmp_name'], "../blog images/" . $blog_image);


            $sql2 = "INSERT INTO blog(user_id, blog_image, blog_tittle, user_name, user_image, blog_dec, date) VALUES ('{$user_id}', '{$blog_image}', '{$blog_tittle}', '{$user_name}', '{$user_image}', '{$blog_dec}', '{$date}')";
            $result2 = mysqli_query($conn, $sql2);
            $_SESSION['msg'] = "Blog Posted !";

            echo "<script>window.location='{$hostname}/';</script>";
        }
    }
}
