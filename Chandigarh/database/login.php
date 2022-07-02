<?php
session_start();

include "./conn.php";

if (isset($_POST['logIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql1 = "SELECT email FROM user_data WHERE email = '{$email}'";
    $result1 = mysqli_query($conn,$sql1);

    if(mysqli_num_rows($result1) > 0){
        $sql2 = "SELECT id, email, password FROM user_data WHERE email = '{$email}' AND password = '{$password}'";
        $result2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($result2) > 0){
            $row = mysqli_fetch_assoc($result2);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['use'] = "T";
            echo "<script>window.location='{$hostname}/';</script>";
        }else{
            echo "<script>window.location='{$hostname}/';</script>";
            $_SESSION['logError2'] = "Password not Match";
            $_SESSION['logPOP'] = "T";
        }

    }else{
        echo "<script>window.location='{$hostname}/';</script>";
        $_SESSION['logError1'] = "Email Does Not Exits";
        $_SESSION['logPOP'] = "T";
    }
}

?>