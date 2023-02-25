<?php 
$message = "";
$link ="";
$connection = mysqli_connect("localhost","root","","User");
if(!$connection){
    die( $message = "connection death");
}
if( isset($_POST["username"])&&
    isset($_POST["email"])&&
    isset($_POST["password"])&&
    isset($_POST["age"])){
    if(  $_POST["username"]!=""&&
         $_POST["age"]!=""&&
         $_POST["email"]!=""&&
         $_POST["password"]!=""){
            $username = $_POST["username"];
            $chack = mysqli_query($connection,"SELECT Username FROM User_input WHERE Username = '$username';");
            $chackU = mysqli_fetch_assoc($chack);
            if($chackU==true){ 
               $message =  "<p>This account existed registeration already!</p>";
                }
              else{
                  $username = $_POST["username"];
                  $age = $_POST["age"];
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  $result = mysqli_query($connection,"INSERT INTO `User_SignUp` (`username`, `age`, `email`, `password`, `time`, `id`) VALUES ('$username', '$age', '$email', '$password', CURRENT_TIME(), NULL);");
                  $message = "<p>succesfully 🌷 </p>";  
				  $link = "/Dashboard@web/PHP/Login/Clone/Login.php";
				  header('location: \PORTAL\ELearning-Full_Stack\index.php');
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
<html>
<head>
	<title>Sing Up Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="containerAll">
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="./img/image-removebg-preview.png" alt="this is Makara playing guitar!!">
		</div>
		<div class="login-content">
			<form method="post">
				<h2 class="title">Get Started</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username ( Free style )</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Age < 2 </h5>
           		   		<input type="number" inputmode="numberic" class="input" name="age">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
				<?php echo $message; ?>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Create account">
            </form>
        </div>
    </div>
</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
