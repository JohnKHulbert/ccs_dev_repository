<!DOCTYPE html>

<html>

	<head>
		<title>Chasing Comet Studios</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon_ccs.png" />
		
		
		<style>	
			.nomargin {
				margin: 10px;
			}
		</style>

	</head>

	<body>
		
		<nav>
		
			<button id="logoutbtn" class="btn btn-primary redbackground redborder">Logout</button>
		
		</nav>
		
		<div>
			
			<div class="center">
				<img class="small" src="img/ccslogo.png"/>
			</div>
			
		</div>
		
		<div class="container">
		
			<div class="center" style="border: 1px solid black;">
				<div style="border: 1px solid black;max-width:300px;margin:auto;">
					<label for="username">Username</label>
					<br />
					<input type="text" id="username" class="form-control"></input>	
					<br /><br />
					<label for="password">Password</label>
					<br />
					<input type="password" id="password" class="form-control"></input>
				</div>
			</div>
		
		</div>

		<div class="logo_style"></div>

		<footer>

			<p class="nomargin center">
				Chasing Comet Studios is a multimedia production company specializing in character animation and podcasts. 
				<br />
				Be sure to follow @ChasingCometStudios on social media.
				<br />
			</p>

			<div class="center"> 			
				<img class="footer_logo" src="img/ccslogo.png"/>
			</div>

		</footer>

	</body>
	
	<script src="lib/jquery.3.6.4.min.js"></script>
	<script src="lib/bootstrap/bootstrap.min.js"></script>
	<script src="lib/popper.min.js"></script>
	<script src="js/scripts.js"></script>
	
</html>