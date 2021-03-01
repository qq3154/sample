<html>
	<?php
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
		echo "aasd";
	?>
	<form action="action_page.php" method="post">

		<div class="container">
			 <label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			 <label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<button type="submit">Login</button>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			 <button type="button" class="cancelbtn">Cancel</button>
			 <span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	</form>
</html>