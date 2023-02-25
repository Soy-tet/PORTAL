<?php 
$message = "";
$connection = mysqli_connect("localhost","root","","User");
if(!$connection){
    die("connection death");
}
if( isset($_POST["username"])&&
    isset($_POST["firstname"])&&
    isset($_POST["lastname"])&&
    isset($_POST["email"])&&
    isset($_POST["age"])){
    if(  $_POST["username"]!=""&&
         $_POST["firstname"]!=""&&
         $_POST["lastname"]!=""&&
         $_POST["email"]!=""&&
         $_POST["age"]!=""&&
         $_POST["pw"]!=""){
            $username = $_POST["username"];
            $password = $_POST["pw"];
            $chack = mysqli_query($connection,"SELECT Username, pw FROM User_input WHERE Username = '$username' && pw = '$password';");
            $chackU = mysqli_fetch_assoc($chack);
            if($chackU==true){ 
               $message =  "<p>This account existed registeration already!</p>";
                }
              else{
                  $username = $_POST["username"];
                  $firstname = $_POST["firstname"];
                  $lastname = $_POST["lastname"];
                  $age = $_POST["age"];
                  $email = $_POST["email"];
                  $password = $_POST["pw"];
                  $result = mysqli_query($connection,"INSERT INTO `User_input` (`Username`, `Firstname`, `Lastname`, `Age`, `Email`, `pw`, `ID`, `when-create`) VALUES ('$username', '$firstname', '$lastname', '$age', '$email', '$password', NULL, CURRENT_TIME());");
                  $message = "<p>succesfully 🌷 </p>";  
                } 
        }
        else{
            $message = "<p>Please chack it again & fill in all blank!</p>";
        }
    }
    else{
        $message = "<p>Please fill in blank!</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/signup.css">
    <style>
    p{
        color:coral;
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    </style>
</head>
<body>
    <div class="container_form">
        <div class="login">
            <form method="post" action="./login.php">
                <input type="submit" value="login" id="login">
            </form>
        </div>
        <div class="signup">Sign Up Account</div>
        <form method="post" action="#">
            <input type="text" placeholder="Username < 100 char" name="username" id="input">
            <input type="text" placeholder="Firstname < 50 char" name="firstname" id="input">
            <input type="text" placeholder="Lastname < 50 char" name="lastname" id="input">
            <input type="number" placeholder="Age < 3 char" name="age" id="input">
            <input type="text" placeholder="Example@gmail.com" name="email" id="input">
            <input type="password" placeholder="password < 50 char" name="pw" id="input">
            <?php echo $message; ?>
            <input type="submit" value="Sign Up" id="submit">
        </form>
    </div>
</body>
</html>