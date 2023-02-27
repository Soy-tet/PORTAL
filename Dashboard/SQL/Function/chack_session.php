<?php 
    if(!isset($_SESSION['username'])){
        header('location: .\PHP\Login\Clone\Login.php?ref='.$_SERVER["PHP_SELF"]);
    }
?>