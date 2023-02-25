<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $connection_lesson = mysqli_connect("localhost","root","","Lesson");
    if(!$connection_lesson){
        die("connection death");
    }
    if(!isset($_COOKIE['username'])){
        header("Location: ./Dasboard@.php");
        exit();
    }
    $result = mysqli_query($connection_lesson,"SELECT * FROM Crash_course where id=16;");
    $lesson_convert = mysqli_fetch_assoc($result);
    include_once('./framework.js');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lesson_convert["Title"]; ?></title>
</head>
<body>
    <style>
    .container-img-p{
        display: flex;
        margin: auto;
        text-align: center;
        width: 80vw;
        justify-content: space-between;
    }
    h1{
        margin: auto;
        width: 100vw;
        height: 100px;
        text-align: center;
        margin-top: 5vh;
    }
    img{
        object-fit: cover;
        height: 300px;
        width: 300px;
        margin: auto;
    }
    p{
        text-align: justify;
        width: 60%;
    }
    .container-button{
        margin: auto;
        display: flex;
        justify-content: space-between;
        width: 90vw;
    }
    </style>
    <div class="container-button">
        <form method="post" action="./Dashboard@.php">
            <input type="submit" value="Dashboard">
        </form>
        <form method="post" action="./insert_lesson.php">
            <input type="submit" value="Create New">
        </form>
    </div>
    <h1><?php echo $lesson_convert["Header"]; ?></h1>
    <div class="container-img-p">
        <img src="<?php  echo $lesson_convert["Image"]; ?>" alt="">
        <p><?php echo $lesson_convert["Description"]; ?></p>
        </div>
</body>
</html>