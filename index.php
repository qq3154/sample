<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php 
			echo '<p>TEST HEROKU POSTGRESQL DATABASE </p>'; 
			# Heroku credential 
			$host_heroku = "ec2-52-72-162-207.compute-1.amazonaws.com";
			$db_heroku = "d6mojbeuc9tceb";
			$user_heroku = "esgecrotceaxcn";
			$pw_heroku = "1e14c630c237f514e40e5a7cf09c38074f3c6bafed3077120ec69fb4faf7e93d";
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

		?> 
	</body>
</html>
