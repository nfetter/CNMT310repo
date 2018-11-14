<?php

require_once("Template.php");

/*for nav and bottom*/require_once("navAndbottom.php");

$page = new Template("about us");

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
print "<div class='border2'> \n";	
print "<img src='Pictures/books1.jpg' class='pic' alt='Books' width='550' height='400'/> \n";	
print "<img src='Pictures/books2.jpg' class='pic' alt='Books' width='550' height='400'/> \n";
print "<img src='Pictures/books3.jpg' class='pic' alt='And more books' width='550' height='400'/> \n";
print "</div> \n";

/*for nav and bottom*/print $myPage->getBottomSection();


print $page->getBottomSection();
?>	
						