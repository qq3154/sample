<?php
	/*
	$username = $_POST['user'];
	$password = $_POST['pass';]


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

	$result = pg_query("selct * from users where username = '$username' and password = '$password'")
		or die("Failed to query database");
	$row = pg_fetch_array($result);
	if ($row['username']  == $username && $row['password'] == password)
	{
		echo "Login success!!!";
	}
	esle
	{
		echo "Failed to login!!!";
	}
	*/
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
			# Get data by query
			$query = 'select * from test_lab6';
			$result = pg_query($pg_heroku, $query);
			# Display data column by column
			$i = 0;
			echo '<html><body><table><tr>';
			while ($i < pg_num_fields($result))
			{
				$fieldName = pg_field_name($result, $i);
				echo '<td>' . $fieldName . '</td>';
				$i = $i + 1;
			}
			echo '</tr>';
			# Display data row by row
			$i = 0;
			while ($row = pg_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			pg_free_result($result);

			echo '</table></body></html>';

	$username = $_POST['user'];
	$password = $_POST['pass'];
	$query = 'select * from users where username = '$username' and password = '$password'';
	$result = pg_query($pg_heroku, $query);
	echo "pg_num_rows($result)";
	
	
?>
		
