<html>
	<?php
		session_start();
		# Heroku credential 
		$host_heroku = "ec2-34-203-255-149.compute-1.amazonaws.com";
		$db_heroku = "dfafdda85iuufp";
		$user_heroku = "fwhvqbdasvcpdw";
		$pw_heroku = "ee454b013d21e0981d72f13efd5297cb5392457328d856308fe8bd8b23ac168a";
			
		# Create connection to Heroku Postgres
		$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			
		$pg_heroku = pg_connect($conn_string);
		$sql_query = "UPDATE danang SET product_price = 100 WHERE product_name = 'car_toy'";
		$myPDO = new PDO($conn_string);
		$myPDO->query($sql_query);

		$name=$_POST['name'];
		$price=$_POST['price'];
		$quantity=$_POST['quantity'];
		$query="UPDATE danang SET (product_price, product_quantity) = ($price,$quantity) WHERE product_name = 'car_toy' ";
		pg_query($pg_heroku, $query);
		$result = pg_query($pg_heroku, $query);
		echo "Update!!! $price $name";
		header( "refresh:1;url=index.php" );
	?>
</html>	