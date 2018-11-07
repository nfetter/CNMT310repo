<?php

class navAndbottom {



  private $_top;

  private $_bottom;


	function setTopSection() {
		
		$returnVal = "";
		$returnVal .= "<div class='border'> \n";
		$returnVal .= "<img src='Pictures/icon' alt='pic' width='150' height='100'/> \n";
		$returnVal .= "<div id='nav'> \n";
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='Home.php'>Home</a></li> \n";
		$returnVal .= "<li><a href='search.php'>Search</a></li> \n";
		$returnVal .= "<li><a href='aboutus.php'>About Us</a></li> \n";
		$returnVal .= "<li><a href='underconstruction.php'>Shop</a></li> \n";
		$returnVal .= "<li><a href='contactus.php'>Contact Us</a></li> \n";	
		$returnVal .= "<li><a href='login.php'>Log In</a></li> \n";		
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";
		$returnVal .= "<div class='border'> \n";

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