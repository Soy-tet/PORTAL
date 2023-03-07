<?php  
          $connection_note = mysqli_connect("localhost","root","","NOTE");
          if(!$connection_note){
              die("connection death");
          }
// CONNECTION NEW VARIABLE 
          $connection_lesson2 = mysqli_connect("localhost","root","","Dashboard");
            if(!$connection_lesson2){
                die("connection death");
            }
            $result2 = mysqli_query($connection_lesson2,"SELECT * FROM `Profile`;");
            $result_note = mysqli_query($connection_note,"SELECT * FROM `note_area`;");
// TODO: CHACK (IF NOT){REDIRECT TO LOGIN};
            // if(!isset($_COOKIE['username'])){
            //     header("Location: ./login.php");
            //     exit();
            // }
?>