<?php
session_start();
require_once("Template.php");
/*for nav and bottom*/require_once("navAndbottom.php");
if(!isset($_SESSION['role'])) {
	header('Location: Home.php');
	exit();
}
if ($_SESSION ['role']!= "admin"){
	header('Location: Home.php');
	exit();
}
//Database stuff
require_once("DB.class.php");
$db = new DB();
$page = new Template("My Page");
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
print $page->getTopSection();

/*for nav and bottom*/print $myPage->getTopSection();

//Check if connected
if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}

$query="SELECT * FROM contactsubmit;";

//Run query
$result = $db->dbCall($query);
print "<div id=contact>";
print "<table>";
print "<tr>";
print "<th>ID</th>";
print "<th>First Name</th>";
print "<th>Last Name</th>";
print "<th>Email</th>";
print "<th>Phone Number</th>";
print "<th>Comments</th>";
print "</tr>";
foreach($result as $row){
	print "<tr>";
	print "<td>" . $row['id'] . "</td>";
	print "<td>" . $row['firstname'] . "</td>";
	print "<td>" . $row['lastname'] . "</td>";
	print "<td>" . $row['email'] . "</td>";
	print "<td>" . $row['phonenumber'] . "</td>";
	print "<td>" . $row['comments'] . "</td>";
	print "</tr>";
}
print "</table>";
print "</div> \n";


/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();


?>
