<?php
require_once("Template.php");
/*for nav and bottom*/require_once("navAndbottom.php");
//Database stuff
require_once("DB.class.php");
$db = new DB();
$page = new Template("My Page");
/*for nav and bottom*/$myPage = new navAndbottom("My content");
$page->setHeadSection("<script src='hello.js'></script><link rel='stylesheet' href='main.css'>");
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

//Create a search variable for the integer table ISBN
$search = (int)$_POST['search'];
$search = filter_var($search, FILTER_SANITIZE_NUMBER_INT);
//Create a search variable for author and booktitle that searchs things that start with the user input
$searchLike = $_POST['search'];
$searchLike = filter_var($searchLike,FILTER_SANITIZE_STRING);
$searchLike .= "%";


//The query for searching
$query="SELECT * FROM bookinfo WHERE isbn = $search UNION 
SELECT * FROM bookinfo WHERE author LIKE '$searchLike' UNION 
SELECT * FROM bookinfo WHERE booktitle LIKE '$searchLike';";

//Run query
$result = $db->dbCall($query);
print "<div id=contact>";
print "<table>";
print "<tr>";
print "<th>Book Title</th>";
print "<th>ISBN</th>";
print "<th>Author</th>";
print "</tr>";
foreach($result as $row){
	print "<tr>";
	print "<td>" . $row['booktitle'] . "</td>";
	print "<td>" . $row['isbn'] . "</td>";
	print "<td>" . $row['author'] . "</td>";
	print "</tr>";
}
print "</table>";
print "</div> \n";

/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();


?>
