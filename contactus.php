<?php

require_once("Template.php");
/*for nav and bottom*/require_once("navAndbottom.php");
$page = new Template("contactus");
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

/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();
?>	