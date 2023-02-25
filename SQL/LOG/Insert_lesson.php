<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INSERT LESSON </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        $connection_lesson = mysqli_connect("localhost","root","","Lesson");
        if(!$connection_lesson){
            die("connection death");
        }
        if( !isset($_POST["header"])&&
            !isset($_POST["title"])&&
            !isset($_POST["description"])&&
            !isset($_POST["Image"])){
            echo"please fill in blank";
        }
        else{
            $title = $_POST["title"];
            $header = $_POST["header"];
            $description = $_POST["description"];
            $image = $_POST["Image"];
            $result = mysqli_query($connection_lesson,"INSERT INTO `Crash_course` (`Title`, `Header`, `Description`, `Image`) VALUES ('$title', '$header', '$description', '$image');");
            echo"succesfully";
        }

    ?>
    </head>
    <body>
        <style>
    .container-button{
        margin: auto;
        display: flex;
        justify-content: space-between;
        width: 90vw;
        margin-bottom: 10vh;
    }
    .form-style{
        margin: auto;
        display: block;
        height: 50vh;
        align-content: center;
    }
    </style>
    <div class="container-button">
        <form method="post" action="./Dashboard@.php">
            <input type="submit" value="Dashboard">
        </form>
        <form method="post" action="./LessonAll.php">
            <input type="submit" value="Lesson">
        </form>
    </div>
        <div class="form-style">
           <form method="post">
                <input type="text" name="title" value="" placeholder="Title">
                <input type="text" name="header" value="" placeholder="Header">
                <input type="text" name="description" value="" placeholder="Description">
                <input type="text" name="Image" value="" placeholder="URL">
                <input type="submit" name="" value="submit">
            </form> 
            <div class="action">
            <form method="post" action="./Dashboard@.php">
            </div>
                <input type="submit" name="" value="Dashboard">
            </form>  
        </div>  
    <style>
        .form-style{
            margin: auto;
            display: block;
            justify-content: center;
        }
    </style>
    </body>
</html>