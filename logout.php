<?php
	unset($_SESSION['username']);
	unset($_SESSION['role']);
	session_detroy();
	echo"<script> window.location.href = '../index.php' ; </script>";
	exit();
?>