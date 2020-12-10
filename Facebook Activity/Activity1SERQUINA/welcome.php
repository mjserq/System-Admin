<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<link rel="stylesheet" type="text/css" href="design.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<header>
		
	<div class="fb-header-base"></div>

 	<div class="fb-header">
		<div id="img1" class="fb-header"><img src="facebook.png" /></div>
		<div id="form2" class="fb-header"><br>
			<a class="btn btn-success" href="facebook.php">Logout</a>
		</div>


		</div>


</header>
<body>
<center>
	<br><br><br><br><br><br>
	<h1>Welcome <?php echo $_SESSION['email'];?><br>


<footer>	
			<div class="fb-body-footer">
			<div id="fb-body-footer-base" class="fb-body-footer"><br><hr>
				Facebook Register and Login |
				Design by Mark Jason Serquina</div>
			</div>
		</footer>
		</body>
</html>