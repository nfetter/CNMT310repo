<?php
/*if (!isset($_POST['data'])) {
	print json_encode(array("result" => "no data"));
	exit();
}*/

//Calls the database
	require_once("DB.class.php");
	$db = new DB();

	//See if database is connected
		if (!$db->getConnStatus()) {
			print "An error has occurred with connection\n";
			exit;
		}
	
	$data = (array)json_decode($_POST['data']);
	$username = $db->dbEsc($data['username']);
	$query = "SELECT user.userpass, role.rolename 
		FROM role, user2role, user WHERE user.username = '$username' AND user.id = user2role.userid AND user2role.roleid = role.id;";
	$result = $db->dbCall($query);
	
	if(count($result)==0){
		print json_encode(array("result" => "false"));
		exit();
	}
	
	if(PASSWORD_VERIFY($data['userpass'], $result[0]['userpass'])) {
		$role = array();
		foreach($result as $row){
			array_push($role, $row['rolename']);
		}
		print json_encode(array("result" => "true", "username" => $username, "role" => $role));
		exit();
	}else{
		print json_encode(array("result" => "false"));
		exit();
	}
		
?>