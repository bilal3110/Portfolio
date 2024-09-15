<?php
include "config.php";

if (isset ($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "UPDATE user SET `name` = '{$name}', `email` = '{$email}', `phone` = '{$phone}', `message` = '{$message}' WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql) or die ("Query Failed");

    header("Location: dashboard.php");

    mysqli_close($conn);
}
?>