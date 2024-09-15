<?php    
    $cid = $_GET['cid'];
    include "config.php";
    $del  = "DELETE FROM user WHERE id = '{$cid}'";
    $query = mysqli_query($conn, $del) OR die("Query Error");

    header("Location: dashboard.php");

    mysqli_close($conn);

?>