<?php
    session_start();

    // Check if user is not logged in, redirect to login page
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('Location: login.php');
        exit;
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
            <?php
            include "config.php";
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn, $sql) or die ("Query Failed");

            if (mysqli_num_rows($result) > 0) {
                ?>
                <table>
                    <thead>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr style="font-size: 14px;">
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['phone']; ?>
                                </td>
                                <td>
                                    <?php echo $row['message']; ?>
                                </td>
                                <td id="action-btn">
                                    <a id="t-btn" href="updateInline.php?cid=<?php echo $row['id']; ?>">Edit</a>
                                    <a id="t-btn" href="delinline.php?cid=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
            }
            ?>
        </div>
        <div class="footer">
            <p>Copyright @ 2024. Developed by <a href="../index.html">Bilal A.</a></p>
        </div>
    </div>
</body>

</html>