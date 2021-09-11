<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>

	<style type="text/css">

	body
	{
		background: url("6.jpg") no-repeat;
			margin: 0;
			padding: 0;
			background-size: cover;
	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{
		background-color: transparent;
		margin: auto;
		width: 300px;
		padding: 20px;
		margin-top: 200px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Sign up to Fotografia</div>

			<input id="text" type="text" name="user_name" placeholder="Enter desired username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter desired password"><br><br>

			<input id="button" type="submit" value="Sign up"><br><br>

			<a href="login.php" style="color: white;">Click here to Log in</a><br><br>
		</form>
	</div>
</body>
</html>