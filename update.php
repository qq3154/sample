<html>
	<?php
		session_start();
		$host_heroku = "ec2-34-203-255-149.compute-1.amazonaws.com";
		$db_heroku = "dfafdda85iuufp";
		$user_heroku = "fwhvqbdasvcpdw";
		$pw_heroku = "ee454b013d21e0981d72f13efd5297cb5392457328d856308fe8bd8b23ac168a";
			
		# Create connection to Heroku Postgres
		$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			
		$pg_heroku = pg_connect($conn_string);

		$query = "select * from danang where product_name ='car_toy' ";
		$result = pg_query($pg_heroku, $query);
		$row = pg_fetch_array($result);
		if ($_POST["name"] == $row["product_name"]) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			if($_SSESION["role"] ==2) $table = "hanoi";
			if($_SSESION["role"] ==3) $table = "danang";	
			$query = "UPDATE $table set product_price = $price where product_name = '$name' ";
			pg_query($pg_heroku, $query);
			echo "$table";
			header( "refresh:1;url=index.php" );
		} 
	?>
</html>	