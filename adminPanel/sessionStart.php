<?php
    include "config.php";
    
    session_start();
    $_SESSION['username'] = "admin"; //assigning username to the session variable
    $_SESSION['pwd'] = "admin"; 
?>