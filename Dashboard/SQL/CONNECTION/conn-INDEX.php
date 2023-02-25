<?php  
          $connection = mysqli_connect("localhost","root","","INDEX");
          if(!$connection){
              die("connection death");
          }
// CONNECTION NEW VARIABLE 
          $connection_lesson2 = mysqli_connect("localhost","root","","Dashboard");
            if(!$connection_lesson2){
                die("connection death");
            }
//MENU LINK
            $result = mysqli_query($connection,"SELECT * FROM `Menu_Link`;");
//ICON
            $result1 = mysqli_query($connection,"SELECT * FROM `Menu_Link`;");
            $data = mysqli_fetch_assoc($result1);
?>