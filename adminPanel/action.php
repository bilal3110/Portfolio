<?php
 include "config.php";
 if(isset($_POST['send'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO user (`name`,`email`,`phone`,`message`) VALUES ('$name','$email','$phone','$message')";
    $result = mysqli_query($conn,$sql) or die("Query Failed");

    header("Location: ../index.php");

    mysqli_close( $conn );
 }
?>