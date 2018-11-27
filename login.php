<?php
session_start();

require_once('Template.php');
/*for nav and bottom*/require_once('navAndbottom.php');

//Database stuff
require_once('DB.class.php');
$db = new DB();
$page = new Template('My Page');

/*for nav and bottom*/$myPage = new navAndbottom('My content');
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
if(isset($_SESSION['fail'])){
		if($_SESSION['fail'] == 'true'){
			print"<p class='fail'>The Username or Password you entered did not match our records</p> \n";
			$_SESSION['fail'] = "";
		}
			
	}


print"

<div class='login-form'>
    <form action='validateJSON.php' method='post'>
        <h2 class='text-center'>Log In</h2>       
        <div class='form-group'>
            <input type='text' class='form-control' id='user' name='user' placeholder='Username' required='required'>
        </div>
        <div class='form-group'>
            <input type='password' class='form-control' id='pass' name='pass' placeholder='Password' required='required'>
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
