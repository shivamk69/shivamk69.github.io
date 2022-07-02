<?php

include "./conn.php";
session_start();

if (isset($_POST['signIn'])){
    $name = $_POST['name'];
    $sEmail = $_POST['s-email'];
    $mNumber = $_POST['m-number'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $image = $_FILES['image'];
    $imgExt = explode('.',$image['name']);
    $imgExt = strtolower(end($imgExt));
    $extensions = array("jpeg","jpg","png");


    $sql = "SELECT email FROM user_data WHERE email = '{$sEmail}'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: {$hostname}/index.php");
        $_SESSION['signSMS'] = "This Email id Already Present";
        $_SESSION['logPOP'] = "F";
    }else{
        if(strlen($image) > 2){
            if(in_array($imgExt,$extensions) === false){
                $_SESSION['signSMS'] = "This Extensions Does Not Support";
                $_SESSION['logPOP'] = "F";
                header("Location: {$hostname}/");
                die();
            }else{
                $imageName = $sEmail.".".$imgExt;
                move_uploaded_file($image['tmp_name'],"../profile images/".$imageName);
            }
        }else{
            $imageName = "default.jpg";
        }

        $sql2 = "INSERT INTO user_data(name, email, number, password, image) VALUES ('{$name}', '{$sEmail}', '{$mNumber}', '{$password}', '{$imageName}')";

        if(mysqli_query($conn,$sql2)){
            header("Location: {$hostname}/");
            $_SESSION['signSMS'] = "Sign In Success";
            $_SESSION['logPOP'] = "T";
        }
    }
}
