<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $database = "WebPortfolio";

    $conn = mysqli_connect( "$server", "$username", "$pass","$database" ) or die("Connection Failed");
?>