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
            $all_data = $connection->query("SELECT * FROM Content;");
            $result2 = mysqli_query($connection_lesson2,"SELECT * FROM `Profile`;");
            $result_nav_insert=mysqli_query($connection, "INSERT INTO `navbar` (`id`, `header`, `link`, `image`, `time`) VALUES (NULL, '$header', '$link', '$image', CURRENT_TIME());");
// TODO: CHACK (IF NOT){REDIRECT TO LOGIN};
            // if(!isset($_COOKIE['username'])){
            //     header("Location: ./login.php");
            //     exit();
            // }
?>