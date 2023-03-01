<!-- CONNCETION LESSON DATABASE FROM MYSQL  -->
<?php
            $connection_lesson = mysqli_connect("localhost","root","","Dashboard");
            if(!$connection_lesson){
                die("connection death");
            }
//   CATCH ALL VIA TABLE Crash_course;
            $result = mysqli_query($connection_lesson,"SELECT * FROM Crash_course;");
            $count = mysqli_query($connection_lesson,"SELECT COUNT(*) FROM Crash_course;");
            $rowq = mysqli_fetch_assoc($result);
//   CATCH ID 
            $count_id = mysqli_query($connection_lesson,"SELECT * FROM Content;");
            $assoc = mysqli_fetch_assoc($count);
            $assoc_id = mysqli_fetch_assoc($count_id);
?>