<?php 
$message ="";
session_start();
$connection = mysqli_connect("localhost","root","","Dashboard");
if(!$connection){
    die("connection death");
}
if(isset($_POST["name"])){
        $name = $_POST["name"];
        $image = $_POST["image"];
			$chackRef = $_GET['ref'];
			$userid = $_GET["userid"];
			 $sql = "UPDATE `pano` SET `image`= '$image', `name`= '$name' WHERE id='$userid';";
			if(!isset($chackRef)){
				header('location: /PORTAL/PORTAL/index.php');
			}else{
				header('location: '.$_GET['ref']);
			}
}
else{
    $message = "please fill in blank";
}
$userid = $_GET["userid"];
$query7 = mysqli_query($connection, "SELECT * FROM `pano` where id ='$userid';");
$data7 = mysqli_fetch_assoc($query7);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update DATA</title>
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
					<h2 class="title">Updata Data</h2>
				</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>name</h5>
           		   		<input type="text" class="input" name="name" value="<?php echo $data7['name'] ;?>">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa-solid fa-user-plus"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Image URL</h5>
           		    	<input type="text" class="input" name="image" value="<?php echo $data7['image']; ?>">
            	   </div>
            	</div>
				<?php echo $message; ?>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Update DATA">
            </form>
        </div>
    </div>
</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
<style>
	
</style>
</html>
