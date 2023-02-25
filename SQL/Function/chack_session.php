<?php 
    if(!isset($_SESSION['username'])){
        header('location: \PORTAL\ELearning-Full_Stack\PHP\Login\Clone\Login.php?ref='.$_SERVER["PHP_SELF"]);
    }
?>