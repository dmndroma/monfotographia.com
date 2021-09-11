<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
					}
				}
			}
			
			echo "<p style='color: red; font-size: 20px; text-align: center;'>Wrong username or password!</p>";
		}else
		{
		echo "<p style='color: red; font-size: 20px; text-align: center;'>Wrong username or password!</p>";
		}
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<style>
	
		#text{

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button{

			width: 100%;
			background: none;
			border: 2px solid black;
			color: white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
		}

		#box{
			width: 300px;
			text-align: center;
			margin: 0 auto;
			margin-left: auto;
			margin-right: auto;
			margin-top: 180px;

		}

		.logIn-box h1
		{
			float: left;
			color: white;
			font-size: 40px;
			border-bottom: 6px solid black;
			margin-bottom: 50px;
			padding: 13px 0;
		}

		body
		{
			background: url(bggg.jpg) no-repeat;
			margin: 0;
			padding: 0;
			background-size: cover;
		}

		</style>
	</head>
	<body>
	<div id="box">
		
		<form method="post">
				<div class="logIn-box">
			<h1>Login</h1></div>

			<input id="text" type="text" name="user_name" placeholder="Please enter your username"><br><br>
			<input id="text" type="password" name="password" placeholder="Please enter your password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php" style="color: white;">Click here to Sign up</a><br><br>
		</form>
	</div>
</body>
</html> 