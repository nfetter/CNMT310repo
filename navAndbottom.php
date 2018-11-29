<?php

class navAndbottom {



  private $_top;

  private $_bottom;

  
  

	function setTopSection() {
		
		$returnVal = "";
		$returnVal .= "<div class='border'> \n";
		
		//Code to display user name
		if(isset($_SESSION['user'])) {	
			$returnVal .= "<h2 style='color:white;position:absolute;top:0px;right:0px;'>Welcome " . $_SESSION['user'] . "</h2>";
		}
		
		$returnVal .= "<img src='Pictures/icon' alt='pic' width='150' height='100'/> \n";
		
		$returnVal .= "	<nav class='navbar navbar-expand-md bg-dark navbar-dark'>
			<a class='navbar-brand' href='Home.php'>Bookstore</a>
			<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
			<span class='navbar-toggler-icon'></span>
			</button>
			<div class='collapse navbar-collapse' id='collapsibleNavbar'>
			<ul class = 'navbar-nav unstyled'> 
			<li class='nav-item'>
			<a class='nav-link' href='search.php'>Search</a>
			</li>
			<li class='nav-item'>
			<a class='nav-link' href='aboutus.php'>About Us</a>
			</li>
			<li class='nav-item'>
			<a class='nav-link' href='underconstruction.php'>Shop</a>
			</li> 
			<li class='nav-item'>
			<a class='nav-link' href='contactus.php'>Contact Us</a>
			</li>";
			if(isset($_SESSION['role'])) {
			if (in_array("admin", (array)$_SESSION['role'])){
				$returnVal .= "<li class='nav-item'>
			<a class='nav-link' href='contactdata.php'>Contact Data</a>
			</li>";
			}
			}
			
			$returnVal .= "<li class='nav-item'>";
		if(!isset($_SESSION['user'])) {
			$returnVal .= "<a class='nav-link' href='login.php'>Log In</a></li>";	
		}else{
			$returnVal .= "<a class='nav-link' href='logout.php'>Log Out</a></li>";	
		}	
		$returnVal .= "</ul>
			</div>  
			</nav>
			</div>
			<div class='border'>
			\n";

		$this->_top = $returnVal;

	} //end function setTopSection



	function setBottomSection() {

		$returnVal = "";

		$returnVal .= "<div id='footer'> \n";
		$returnVal .= "<div id='shop' style='float:left'> \n"; 
		$returnVal .= "<h2>Shop</h2> \n";
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Book</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>EBook</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Sell</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Art</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Gift Cards</a></li> \n";
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";
		$returnVal .= "<div id='store'> \n";		
		$returnVal .= "<h2>Book Store</h2> \n";			
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Find a Store </a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Camp</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Download an App</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Order Status</a></li> \n";
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";		
		$returnVal .= "<div id='others' style='float:right'> \n";				
		$returnVal .= "<h2>Others</h2> \n";
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='underconstruction.php'>News </a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Events</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Contact</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>investors</a></li> \n";
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";
		$returnVal .= "<div class='copyright'> \n";
		$returnVal .= "<p>Copyright @ 2018 BOOKSTORE. USA, Inc</p> \n";
		$returnVal .= "</div>";
		$returnVal .= "</div></div> \n";



		$this->_bottom = $returnVal;



	} //end function setBottomSection



	function getTopSection() {

		return $this->_top;

	}

	function getBottomSection() {

		return $this->_bottom;

	}

}

?>