<?php  
// CONNECTION NEW VARIABLE 
          $connection_note = mysqli_connect("localhost","root","","note");
            if(!$connection_lesson2){
                die("connection death");
            }
            $result_note = mysqli_query($connection_note,"SELECT * FROM `note_book`;");
            // if(!isset($_COOKIE['username'])){
            //     header("Location: ./login.php");
            //     exit();
            // }
?>