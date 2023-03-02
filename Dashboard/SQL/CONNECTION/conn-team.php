<?php 
    $connection_team = mysqli_connect("localhost","root","","team");
    if(!$connection_team){
        die("connection death");
    }
    $result_team = mysqli_query($connection_team,"SELECT * FROM `team_login`;");
    $result_team2 = mysqli_query($connection_team,"SELECT * FROM `team_login`;");
?>