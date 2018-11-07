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

print"



           \n"




/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();


?>
