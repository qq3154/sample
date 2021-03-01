<html>
	<head>
		<title>PHP Test</title>
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<ul class="nav navbar-nav">
		 <li class="active"><a href="#">Home</a></li>
		 <li><a href="#">Page 1</a></li>
		  <li><a href="#">Page 2</a></li>
		 </ul>
		  <ul class="nav navbar-nav navbar-right">
		 <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		 <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		 </ul>
		</div>
		</nav>
	</div>
	</head>
	<body>
		<?php 
			echo '<p>TEST HEROKU POSTGRESQL DATABASE </p>'; 
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

		?> 
	</body>
</html>
