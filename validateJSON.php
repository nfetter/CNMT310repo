<?php

session_start();
	
	//Validate and sanitize username
	if(!isset($_POST['user'])){
		header('Location: Home.php');
		exit();
		
	}
	
	
	//check the length of CC number and validate it
	if(!isset($_POST['pass'])){
		header('Location: Home.php');
		exit();
	}
	
	$data = array("username" => $_POST['user'], "userpass" => $_POST['pass']);
	$dataJson = json_encode($data);
	
	$postString = "user=YOU&password=SOMEPASS&data=" .
               urlencode($dataJson);

	$contentLength = strlen($postString);

	$header = array(
		'Content-Type: application/x-www-form-urlencoded',
		'Content-Length: ' . $contentLength
	);

	$url = "http://cnmtsrv2.uwsp.edu/~nfett296/SprintProject/Sprint3/checkJSON.php";
	
	$ch = curl_init($url);

	curl_setopt($ch,
		CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch,
		CURLOPT_POSTFIELDS, $postString);
	curl_setopt($ch,
		CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch,
		CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,
		CURLOPT_URL, $url);
	
	$return = curl_exec($ch);
	
	$return2 = (array)json_decode($return);
	
	var_dump($return);
	
	if($return2['result'] == "true"){
		$_SESSION['user'] = $return2['username'];
		$_SESSION['role'] = $return2['role'];
		header('Location: Home.php');
		exit();
	}
	
	if($return2['result'] == "false"){
		$_SESSION['fail'] = 'true';
		header('Location: login.php');
		exit();
	}
	
	curl_close($ch);
	
		
?>