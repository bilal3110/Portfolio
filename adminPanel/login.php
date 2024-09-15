<?php
include "config.php";
session_start();
if (isset ($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: dashboard.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminUsername = "bilal1031";
    $adminpwd = "b1031ilal";

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    if ($username == $adminUsername && $pwd == $adminpwd) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit;
    } else {
        header("Location: login.php");
        exit;
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Seaweed+Script&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="grid-container">
        <div class="header">
            <div class="logo">
                <img src="../images/BILAL_A.-removebg-preview.png" alt="">
            </div>
            <!-- <a href="">Log Out</a> -->
        </div>
        <div class="main">
            <div class="loginForm">
                <h3>Login</h3>
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="Submit" name="send">
                </form>
            </div>
            <div class="head-img">
                <img src="../images/—Pngtree—programmer it developer_13520485.png" alt="">
            </div>
        </div>
        <div class="footer">
            <p>Copyright @ 2024. Developed by <a href="">Bilal A.</a></p>
        </div>
    </div>
</body>

</html>