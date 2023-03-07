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
            $pano_homepage = mysqli_query($connection,"SELECT * FROM `pano` WHERE `id` = 1;");
            $data_homepage = mysqli_fetch_assoc($pano_homepage);
            $pano_note = mysqli_query($connection,"SELECT * FROM `pano` WHERE `id` = 2;");
            $data_note = mysqli_fetch_assoc($pano_note);
            $pano_outcome = mysqli_query($connection,"SELECT * FROM `pano` WHERE `id` = 3;");
            $data_outcome = mysqli_fetch_assoc($pano_outcome);
?>