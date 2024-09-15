<?php
include "config.php";
// session_start();
if(!isset( $_SESSION['username'])){
    header("location: login.php"); 
}
?>
<div class="header">
            <div class="logo">
                <img src="../images/BILAL_A.-removebg-preview.png" alt="">
            </div>
            <a href="logout.php" name="" >Log Out</a>
</div>