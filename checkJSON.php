<?php
session_start();

if (!isset($_POST['data'])) {
	print json_encode(array("result" => "no data"));
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
		
		$query = "SELECT user.username, user.userpass, role.rolename 
					FROM role, user2role, user WHERE user.id = user2role.userid AND user2role.roleid = role.id;";
	$result = $db->dbCall($query);
	$data = (array)json_decode($_POST['data']);
	$_SESSION['fail'] = " ";
	foreach($result as $row){
		if($row['username'] == $data['username']){
			if(PASSWORD_VERIFY($data['userpass'], $row['userpass'])) {
				print json_encode(array("result" => "true", "username" => $row['username'], "role" => $row['rolename']));
				exit();
			}
		
		} 	
		
	}
	
			print json_encode(array("result" => "false"));
			$_SESSION['fail'] = 'true';
			exit();
		
?>