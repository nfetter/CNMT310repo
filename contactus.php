<?php

require_once("Template.php");
/*for nav and bottom*/require_once("navAndbottom.php");
$page = new Template("contactus");
/*for nav and bottom*/$myPage = new navAndbottom("My content");

$page->setHeadSection("<link rel='stylesheet' href='main.css'>");

$page->setTopSection();

$page->setBottomSection();
/*for nav and bottom*/$myPage->setTopSection();
/*for nav and bottom*/$myPage->setBottomSection();
print $page->getTopSection();

/*for nav and bottom*/print $myPage->getTopSection();

print "<div id=contact>";
print "<h1>Contact Us</h1> \n";
print "<p>* Please fill out this form.</p> \n";
print "<form action='Thankyou.php' method='post'> \n";
print "<fieldset> \n";
print "*First Name: <input name='firstName' id='firstName' type='text' /> <br /> \n";
print "*Last Name: <input name='lastName' id='lastName' type='text' /> <br /> \n";
print "*Email address: <input name='emailAddress' id='emailAddress' type='text' require/> <br /> \n";
print "*Phone Number: <input name='phoneNumber' id='phoneNumber' type='text' /> <br /> \n";	
print "*Comment: <br/> \n";
print "<textarea name='comment' id='comment' rows='5' cols='58' require></textarea><br/><br/>";			
print "<button type='submit'>submit</button> \n";
print "</fieldset> \n";
print "</form> \n";	
print "</div> \n";
print "</div> \n";

/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();
?>	