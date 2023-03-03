<?php 
$message ="";
session_start();
$connection = mysqli_connect("localhost","root","","Dashboard");
if(!$connection){
    die("connection death");
}
if(	isset($_POST["header"])){
        $header = $_POST["header"];
        $link = $_POST["link"];
        $image = $_POST["image"];
        $chack = mysqli_query($connection,"SELECT `header` FROM navbar WHERE `header` = '$header';");
        $chack2 = mysqli_query($connection,"SELECT `header` FROM navbar WHERE `header`= '$header';");
        $chackU = mysqli_fetch_assoc($chack);
        $chackU2 = serialize($chack2);
        if($chackU != true){
            $message = ("U are login sucessfully, Now you can click login again to directly in Dashboard!");
			$result = mysqli_query($connection,"INSERT INTO `navbar` (`id`,`header`,`link`,`image`, `time`) VALUES ( NULL,'$header','$link','$image',CURRENT_TIME());");
			$chackRef = $_GET['ref'];
			if(!isset($chackRef)){
				header('location: \PORTAL\PORTAL\Dashboard\index.php');
			}else{
				header('location: '.$_GET['ref']);
			}
        }
        else{
            $message = ("name or password was wrong");
        }
}
else{
    $message = "please fill in blank";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Navbar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c90b4e63b2.js" crossorigin="anonymous"></script>
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
				<div class="insert_icon">
					<!-- <script>
						function insertIMG(){
							var x = getElementById('img_url');
							x.style.position="absolute";
							return x ;
						}
					</script> -->
					<i onclick="insertIMG()" class="fa-solid fa-user-plus"></i>
					<h2 class="title">Insert Navbar</h2>
				</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Header</h5>
           		   		<input type="text" class="input" name="header">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>link</h5>
           		   		<input type="text" class="input" name="link">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa-solid fa-user-plus"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Image URL</h5>
           		    	<input type="text" class="input" name="image">
            	   </div>
            	</div>
				<?php echo $message; ?>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Sign up team">
            </form>
        </div>
    </div>
</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
