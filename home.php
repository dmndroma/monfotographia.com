<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="finalojt3.css">
		<title></title>
	</head>

	<body>
		<nav>
			<div class="card">
			<img src="fotologo3.png" width="150px" height="150px" class="center">

			<ul>
				<li><a href='#'>Hire Me</a></li>
    			<li><a href='aboutme.html'>About Me</a></li>
    			<li><a href='photography.html'>Photography</a></li>
    			<li><a href='services.html'>Services</a></li>
    			<li><a href='contactme.html'>Contact Me</a></li>
			</ul>
		</nav>

		<div>
			<p style='color: white; background-color: black; font-size: 18px; padding-left: 20px; padding-bottom: 5px;'>Good Day! <?php echo $user_data['user_name']; ?> 📷</p>
			<img src="edmon.jpg" alt="bg" style="width: 100%; height: 600px;">

			<div class="centertext"> 
				<span class="headings">I AM <br> EDMOND ROMA  <br>
					
					
						<a href="contactme.html" class="btn" style="font-size: 15px; font-family: arial; text-decoration: none;">Hire Me</a>
				</span>
			</div>
		</div>
	</body>
</html>