<?php 
$message ="";
session_start();
$connection = mysqli_connect("localhost","root","","User");
if(!$connection){
    die("connection death");
}
if(	isset($_POST["username"])&&
    isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
		$email = $_POST['email'];
        $chack = mysqli_query($connection,"SELECT username, `password`, `email` FROM User_SignUp WHERE username = '$username' && `password` = '$password' && `email` = '$email';");
        $chack2 = mysqli_query($connection,"SELECT username FROM User_SignUp WHERE username = '$username';");
        // $result = mysqli_query($connection,"INSERT INTO `User_login` (`Username`,`pw`, `ID`, `when-create`) VALUES ('$username', '$password', NULL, CURRENT_TIME());");
        $chackU = mysqli_fetch_assoc($chack);
        $chackU2 = serialize($chack2);
        if($chackU == true){
            $message = ("U are login sucessfully, Now you can click login again to directly in Dashboard!");
            $_SESSION['username'] = $username;
			$chackRef = $_GET['ref'];
			if(!isset($chackRef)){
				header('location: \PORTAL\ELearning-Full_Stack\index.php');
			}else{
				header('location: '.$_GET['ref']);
			}
        }
        else{
            $message = ("Username or password was wrong");
        }
}
else{
    $message = "please fill in blank";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PORTAL || LOGIN</title>
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
				<h2 class="title">user identification</h2>
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
