<?php

session_start();
	
	//Validate and sanitize username
	if(isset($_POST['user'])){
		$sanitizedName = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
			
	}
	else {
		exit();
	}
	
	
	//check the length of CC number and validate it
	if(isset($_POST['pass'])){
		$sanitizedPass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
	}
	else {
		exit();
	}
	
	//Calls the database
	require_once("DB.class.php");
	$db = new DB();
	
	//See if database is connected
		if (!$db->getConnStatus()) {
			print "An error has occurred with connection\n";
			exit;
		}
	$query = "SELECT * FROM user;";
	$result = $db->dbCall($query);

	foreach($result as $row){
		if($row['username'] == $sanatizedName){
			if(PASSWORD_VERIFY($sanatizedPass, $row['userpass'])) {
				$_SESSION['user'] = $sanitizedName;
				
				$id = $row['id'];
				$result2 = $db->dbCall("SELECT role.rolename FROM role, user2role, user 
					WHERE user.id = '$id' AND user.id = user2role.userid AND user2role.roleid = role.id");
		
					foreach($result2 as $row2){ 
						$_SESSION['role'] = $row2['rolename'];
					}
				header('Location: Home.php');
				exit();
			}
		} 	
	}
	
	
	
	
	
		
?>