<?php
session_start();

include "./conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $rand = $_POST['rand'];
    $from = $_POST['Form'];
    $to = $_POST['To'];
    $date = $_POST['Date'];
    $passenger = $_POST['Passenger'];
    $class = $_POST['Class'];


    $to_email = $_SESSION['user_email'];
    $subject = "$name Booked";
    $body = "
                $name Number : $rand
                From : $from
                To : $to
                Date : $date
                Passenger : $passenger
                Class : $class

                😊 $name Booking Confirm 😊
            ";
    $header = "From: xyz@gmail.com";

    if (mail($to_email, $subject, $body, $header)) {
        $_SESSION['msg'] = "Booking Confirm !! Check Your Email...";
        echo "<script>window.location = '{$hostname}/';</script>";
    } else {
        $_SESSION['msg'] = "F";
        echo "<script>window.location = '{$hostname}/';</script>";
    }
}
