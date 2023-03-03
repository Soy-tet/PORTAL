<?php  
          $connection = mysqli_connect("localhost","root","","Dashboard");
          if(!$connection){
              die("connection death");
          }
// CONNECTION NEW VARIABLE 
          $connection_lesson2 = mysqli_connect("localhost","root","","Dashboard");
            if(!$connection_lesson2){
                die("connection death");
            }
            $result2 = mysqli_query($connection_lesson2,"SELECT * FROM `Profile`;");
            $data_nav = mysqli_query($connection,"SELECT * FROM `navbar`;");
            // if(!isset($_COOKIE['username'])){
            //     header("Location: ./login.php");
            //     exit();
            // }
?>