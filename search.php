<?php
require_once("Template.php");
/*for nav and bottom*/require_once("navAndbottom.php");
$page = new Template("My Page");
/*for nav and bottom*/$myPage = new navAndbottom("My content");
$page->setHeadSection("<script src='hello.js'></script><link rel='stylesheet' href='main.css'>");
$page->setTopSection();
$page->setBottomSection();
/*for nav and bottom*/$myPage->setTopSection();
/*for nav and bottom*/$myPage->setBottomSection();
print $page->getTopSection();

/*for nav and bottom*/print $myPage->getTopSection();

print "<div id= 'contact'> \n";
print "<form method='post' action='searchResult.php'>";
print "<fieldset> \n";
print "Search: <input type='text' name='search'>";
print "<br><input type='submit' name='Submit' value='Submit'>";
print "</fieldset> \n";
print "</form>";
print "</div> \n";

/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();


?>