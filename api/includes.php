<?php

	function login_nav_markup($markup) {
		
		echo $markup;
		
		echo '<script>' .
			'$("#testbtn").on("click", function() { ' .
				
				'alert("swisher is awesome");' .
				
			'})' .
			
			'</script>';
		
	?>
		<nav style="height:50px;">
	
			<button id="loginbtn" class="btn btn-primary redbackground redborder">Login</button>
	
		</nav>
		
	<?php
	
	};
	
	function logout_nav_markup() {

	?>
		<nav style="height:50px;">
	
			<button id="logoutbtn" class="btn btn-primary redbackground redborder">Logout</button>
	
		</nav>
		
	<?php

	};
	
	function nav_markup() {

	?>
		<nav style="height:50px;">
	
		</nav>
		
	<?php

	};
?>

