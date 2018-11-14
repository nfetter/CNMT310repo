<?php

require_once("Template.php");

/*for nav and bottom*/require_once("navAndbottom.php");

$page = new Template("Thankyou");

/*for nav and bottom*/$myPage = new navAndbottom("My content");

$page->setHeadSection("

<script src='js/bootstrap.bundle.js'></script>
        <script src='js/bootstrap.js'></script>
        <script src='js/carousel.js'></script>
        <script src='js/validation.js'></script>
		    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>

	 <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
<link rel='stylesheet' href='css/main.css'>
<link rel='stylesheet' href='css/bootstrap-grid.css'>
        <link rel='stylesheet' href='css/bootstrap-reboot.css'>
        <link rel='stylesheet' href='css/bootstrap.css'>
");
$page->setTopSection();

$page->setBottomSection();

/*for nav and bottom*/$myPage->setTopSection();

/*for nav and bottom*/$myPage->setBottomSection();

if (!isset($_POST['emailAddress'])) {
    print"Email is not set";
	exit();
}

if (!isset($_POST['comment'])) {
    print"You have not submitted a comment";
	exit();
}

//Database stuff
require_once("DB.class.php");
$db = new DB();

//Check if connected
if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email_address = $_POST['emailAddress'];
$phone_number = $_POST['phoneNumber'];
$comment = $_POST['comment'];

$first_name = filter_var($first_name, FILTER_SANITIZE_STRING);
$last_name = filter_var($last_name, FILTER_SANITIZE_STRING);
$email_address = filter_var($email_address, FILTER_SANITIZE_EMAIL);
$phone_number = filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT);
$comment = filter_var($comment, FILTER_SANITIZE_STRING);

if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  print"Invalid email format<br />"; 
  exit();
}

$db->dbCall("INSERT into contactsubmit (firstname, lastname, email, phonenumber, comments) 
	VALUES ('$first_name', '$last_name', '$email_address', '$phone_number', '$comment');");

print $page->getTopSection();
/*for nav and bottom*/print $myPage->getTopSection();

print "<h1>Thank you for contacting us, we will contact you in 24 hours.</h1>  \n";

/*for nav and bottom*/print $myPage->getBottomSection();


print $page->getBottomSection();
?>	