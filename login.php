<?php

include('connect.php');

?>

<!DOCTYPE html>
<html>
<head>
		<title>login</title>
</head>
<body>
	<form method="POST" action="login.php">
		Username: <input type="text" name="username" required=""><br>
		Password: <input type="password" name="password" required=""><br>
		<input type="submit" name="login">
</form>
</body>
</html>
<?php
	if (isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = $con->query("SELECT * FROM `assign` WHERE `username` = '$username' AND password = '$password'");

			$row=mysqli_num_rows($query);

			if($row !=0)
				{
					echo "Login Success!";
					header('location: index.html');
				}

				else
				
				{
					echo "You have entered an invalid username or password..";
				}
			}
?>
