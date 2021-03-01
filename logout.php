<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<body>

		<?php
			// remove all session variables
			session_unset();

			// destroy the session
			session_destroy();
			echo "Login successful!!!";
			header( "refresh:2;url=index.php" );
		?>

	</body>
</html>