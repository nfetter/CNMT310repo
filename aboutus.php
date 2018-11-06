<?php

require_once("Template.php");

/*for nav and bottom*/require_once("navAndbottom.php");

$page = new Template("about us");

/*for nav and bottom*/$myPage = new navAndbottom("My content");

$page->setHeadSection("<link rel='stylesheet' href='main.css'>");

$page->setTopSection();

$page->setBottomSection();

/*for nav and bottom*/$myPage->setTopSection();

/*for nav and bottom*/$myPage->setBottomSection();

print $page->getTopSection();

/*for nav and bottom*/print $myPage->getTopSection();

print "<br />";
print "<h1> This is our Story </h1> \n";

print "<div id=contact> \n";

print "<p>We're a bookstore</p> \n";
print "<p>Yay</p> \n";
print "<p>Opening 2018</p> \n";
print "</div> \n";

print "<div class='video'> \n";
print "<iframe width='550' height='350' \n"; 
print "src='https://www.youtube.com/embed/9gFFuXJIPVE'  allow='autoplay; encrypted-media' allowfullscreen></iframe> \n";
print "</div> \n";
print "</div> \n";
print "<div class='border2'> \n";	
print "<img src='Pictures/books1.jpg' alt='Books' width='550' height='400'/> \n";	
print "<img src='Pictures/books2.jpg' alt='Books' width='550' height='400'/> \n";
print "<img src='Pictures/books3.jpg' alt='And more books' width='550' height='400'/> \n";
print "</div> \n";

/*for nav and bottom*/print $myPage->getBottomSection();


print $page->getBottomSection();
?>	
						