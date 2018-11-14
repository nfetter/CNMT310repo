<?php
	SESSION_START();
	SESSION_DESTROY();
	SESSION_UNSET();
	$_SESSION['user'] = null;
	if(isset($_SESSION['user'])) {
		header('Location: logout.php');
	} else {
	header('Location: Home.php');
	}
?>