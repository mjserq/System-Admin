
<!DOCTYPE html>
<html>
<head>
	<title>Facebook Activity</title>
</head>
	<link rel="stylesheet" type="text/css" href="design.css">
	
		
	<header>
		<form action="login.php"  method="POST">	
	<div class="fb-header-base"></div>

 	<div class="fb-header">
		<div id="img1" class="fb-header"><img src="facebook.png" /></div>
		<div id="form1" class="fb-header">Email or Phone<br>
			<input placeholder="Email" type="mail" name="email" /><br>
			<input type="checkbox" />keep me logged in</div>
		<div id="form2" class="fb-header">Password<br>
			<input placeholder="Password" type="password" name="pass" /><br>

		</div>
	</div>
	 		<input type="submit" class="submit1" value="login" name="btnLogin" />
	 			

	 	</form>

</header>
<body>
	
 	
 	<div class="fb-body">
	<div id="intro1" class="fb-body">Facebook helps you 
	 connect and share with the <br>
	 people in your life.</div>

	 	<div id="intro2" class="fb-body">Create an account</div>
	 	<div id="img2" class="fb-body"><img src="world.jpg" /></div>
	 	<div id="intro3" class="fb-body">It's free and always will be.</div>
	 	<div id="form3" class="fb-body">
	 		<form action="facebook.php"  method="POST">	
	 		<input placeholder="First Name" type="text" id="namebox" name="firstname" />

	 				<input placeholder="Last Name" type="text" id="namebox" name="lastname"  /> <br>

	 					<input placeholder="Email" type="text" id="mailbox" name="email" /><br>

						<input placeholder="Password" type="password" id="mailbox" name="pass"  /><br>

	 				<input type="date" id="namebox" name="birthdate"  /><br><br>

	 		<input type="radio"name="gender" value="Male" id="r-b" />Male
	 		<input type="radio"name="gender" value="Female" id="r-b" />Female<br><br>

	 	<p id="intro4">By clicking Create an account, you agree to
	 					our Terms and that you have read our Data Policy, 
	 					including our Cookie Use.</p>
	 		<input type="submit" class="button2" value="Sign Up" name="btnCreate" />
	 				<br>

	 	<p id="intro5">Create a Page for a celebrity, band or business.</p>
	 </div>
	 </div>
	 </div>
				<?php

					$servername = "localhost";
					$username = "root";
					$password = "";
					$databasename = "dbfacebook";

    		$connect = mysqli_connect($servername,$username,$password,$databasename);

    			if (isset($_POST['btnCreate'])) {
        	$lastname = $_POST['lastname'];
        	$firstname = $_POST['firstname'];
        	$email = $_POST['email'];
        	$password = $_POST['pass'];
        	$birthdate = $_POST['birthdate'];
        	$gender = $_POST['gender'];

        $insert = "INSERT INTO tblfacebook(firstname,lastname,email,pass,birthdate,gender)VALUES('$firstname','$lastname','$email','$password','$birthdate','$gender')";
		$query = mysqli_query($connect,$insert);

			if ($query == TRUE) {
				echo "<strong>Account Created</strong>";
			}
			else{
				echo "<strong>Account not Created</strong>";
			}
    	}

    		

			?>
</form>	


	<footer>	
			<div class="fb-body-footer">
			<div id="fb-body-footer-base" class="fb-body-footer"><br><hr>
				Facebook Register and Login |
				Design by Mark Jason Serquina</div>
			</div>
		</footer>
</body>
</html>