<?php
include "config.php";
session_start();
if(!isset( $_SESSION['username'])){
    header("location: login.php"); 
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
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Document</title>
</head>

<body>
    <div class="grid-container">
        <?php
        include "header.php";
        ?>
        <div class="sidebar">
            <h3>Admin Panel</h3>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="add.php">Add</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="del.php">Delete</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="welcome">
                <h3>Welcome</h3>
                <p>
                    I am a problem solver and a technology enthusiast. My journey into the realm of software
                    development started with an insatiable curiosity for creating seamless digital experiences
                </p>
            </div>

            <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="text" name="id" placeholder="ID" required />
                <input class="submit" type="submit" name="showbtn" value="UPDATE" />
            </form>

            <?php
            if (isset ($_POST["showbtn"])) {
                include "config.php";
                $cid = $_POST['id'];
                $select = "SELECT * FROM user WHERE id = {$cid}";
                $query = mysqli_query($conn, $select) or die ("Query Error");

                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>

                        <div class="contact-form">
                            <form action="updata.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                                <input type="text" placeholder="Name" name="name" value="<?php echo $row['name'] ?>" required />
                                <input type="email" placeholder="Email" name="email" value="<?php echo $row['email'] ?>" required />
                                <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $row['phone'] ?>"
                                    required />
                                <textarea name="message" id="msg" placeholder="Message" cols="30"
                                    rows="10"><?php echo $row['message'] ?></textarea>
                                <input type="submit" value="Send" id="send" name="update" required />
                            </form>
                        </div>
                        <?php
                    }
                }

            }
            ?>
        </div>
        <div class="footer">
            <p>Copyright @ 2024. Developed by <a href="">Bilal A.</a></p>
        </div>
    </div>
</body>

</html>