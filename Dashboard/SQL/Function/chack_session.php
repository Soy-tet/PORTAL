<?php 
    if(!isset($_SESSION['username'])){
        header('location: ./PHP/login.php?ref='.$_SERVER["PHP_SELF"]);
    }
?>