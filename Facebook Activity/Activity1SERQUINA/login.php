<?php
			session_start();
					$servername = "localhost";
					$username = "root";
					$password = "";
					$databasename = "dbfacebook";

    		$connect = mysqli_connect($servername,$username,$password,$databasename);


    		if (isset($_POST['btnLogin'])){
			$lastname = $_POST['lastname'];
        	$firstname = $_POST['firstname'];
        	$email = $_POST['email'];
        	$password = $_POST['pass'];
        	$birthdate = $_POST['birthdate'];
        	$gender = $_POST['gender'];

$login ="SELECT*FROM tblfacebook WHERE email= '$email' AND pass = '$password'";

$result =mysqli_query($connect,$login);
$num = mysqli_num_rows($result);

if ($num == 1) {

	$_SESSION['email'] = $email;
	header('location:welcome.php');
}else{
	header('location:facebook.php');
}
}




	?>

