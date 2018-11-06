<?php

require_once("Template.php");

/*for nav and bottom*/require_once("navAndbottom.php");

$page = new Template("home");

/*for nav and bottom*/$myPage = new navAndbottom("My content");

$page->setHeadSection("<link rel='stylesheet' href='main.css'>");

$page->setTopSection();

$page->setBottomSection();

/*for nav and bottom*/$myPage->setTopSection();

/*for nav and bottom*/$myPage->setBottomSection();

print $page->getTopSection();

/*for nav and bottom*/print $myPage->getTopSection();


print "<div class='border'> \n";
print "<img src='Pictures/holyGhost' alt='BestSellingBookCover' width='500' height='800'>";
print "<img src='Pictures/ambush' alt='BestSellingBookCover' width='500' height='800'> \n";

/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();
?>	
						