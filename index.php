<html>
	<head>
		<title>PHP Test</title>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">ATN</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hanoi store <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							 <li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li><a href="#">Danang store</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			 </div>
		</nav>
		<?php 
			echo '<p>TEST HEROKU POSTGRESQL DATABASE </p>'; 
			/*
			# Heroku credential 
			$host_heroku = "ec2-34-203-255-149.compute-1.amazonaws.com";
			$db_heroku = "dfafdda85iuufp";
			$user_heroku = "fwhvqbdasvcpdw";
			$pw_heroku = "ee454b013d21e0981d72f13efd5297cb5392457328d856308fe8bd8b23ac168a";
			
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			
			$pg_heroku = pg_connect($conn_string);
			
			if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
			*/

			session_start();
			if($_SESSION["valid"] != true){
				header("location: login.php");
			}
			

		?> 
	</body>
</html>
