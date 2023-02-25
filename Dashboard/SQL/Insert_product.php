<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    <?php 
        $connection = mysqli_connect("localhost","root","","Dashboard");
        if(!$connection){
            die("connection death");
        }
        if( !isset($_POST["header"])&&
            !isset($_POST["title"])&&
            !isset($_POST["description"])&&
            !isset($_POST["image"])){
            echo"please fill in blank";
        }
        else{
            $header = $_POST["header"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $image = $_POST["image"];
            $result = mysqli_query($connection,"INSERT INTO `Content` (`Title`, `Header`, `Description`, `Image`) VALUES ('$title', '$header', '$description', '$image');");
            echo"succesfully";
        }
    ?>
    <style>
    .action{
        margin: 50px;
    }
    </style>
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
            <form method="post">
                <input type="text" name="header" value="" placeholder="Header">
                <input type="text" name="title" value="" placeholder="Title">
                <input type="text" name="description" value="" placeholder="Description">
                <input type="text" name="image" value="" placeholder="Image URL">
                <input type="submit" name="" value="submit">
            </form>   
    </body>
</html>