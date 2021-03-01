<?php
	session_start();
	unset($_SESSION["username"]);
	unset($_SESSION["role"]);
	session_detroy();
	echo "Logout successful!!!";
	header( "refresh:2;url=index.php" );
?>