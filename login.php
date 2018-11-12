<?php
session_start();

require_once('Template.php');
/*for nav and bottom*/require_once('navAndbottom.php');
//Database stuff
require_once('DB.class.php');
$db = new DB();
$page = new Template('My Page');
/*for nav and bottom*/$myPage = new navAndbottom('My content');
$page->setHeadSection("<script src='hello.js'></script>
<link rel='stylesheet' href='main.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>");
$page->setTopSection();
$page->setBottomSection();
/*for nav and bottom*/$myPage->setTopSection();
/*for nav and bottom*/$myPage->setBottomSection();
print $page->getTopSection();

/*for nav and bottom*/print $myPage->getTopSection();

print"
<div class='login-form'>
    <form action='validate.php' method='post'>
        <h2 class='text-center'>Log In</h2>       
        <div class='form-group'>
            <input type='text' class='form-control' id='user' placeholder='Username' required='required'>
        </div>
        <div class='form-group'>
            <input type='password' class='form-control' id='pass' placeholder='Password' required='required'>
        </div>
        <div class='form-group'>
            <button type='submit' class='btn btn-primary btn-block'>Log in</button>
        </div>
        
    </form>
  
</div>


           \n";




/*for nav and bottom*/print $myPage->getBottomSection();

print $page->getBottomSection();


?>
