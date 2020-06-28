<?php

include('connect.php');

?>

<!DOCTYPE html>
<html>
<title> Registration </title>
</head>
<body> 
	<form method ="POST" action="register.php">
	First name: <input type="text" name="firstname" required=""><br>
	Last name: <input type="text" name="lastname" required=""> <br>
	E-mail: <input type="email" name="email" required=""> <br>
	Username: <input type="text" name="username" required=""><br>
	Password: <input type="password" name="password" required=""><br>
	Confirm Password: <input type="password" name="confirmpassword" required=""><br>
	<input type= "submit" name="submit">

</form>
</html>

<?php
	if (isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		if ($confirmpassword == $password)
		{

			$qry = $con->query("INSERT INTO `assign` (`firstname`,`lastname`,`email`,`username`,`password`,`confirmpassword`) VALUES ('$firstname','$lastname','$email','$username','$password','$confirmpassword')");

			if($qry) {

			echo("You have successfully registered!");
			header('location: login.php');
		}

		else
			
		{
			echo("Password did not match..");
}
}
}
		
?>