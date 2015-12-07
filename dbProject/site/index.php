<html>
<head>
	<body background="./images/27949.jpg" >
	<title>Airport Reservation System Login Form</title>
</head>
<body>
<h1>Airport Reservation System Login Form </h1>
<?php

if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
	<center>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />

		<input type="submit" name="submit" value="Login" />
		</center>
	</form>
<?php
} else {
	
	require_once("db.php");
	$mysqli = new mysqli(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * from phpLogin WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
		
	} else {
		echo "<p>Logged in successfully</p>";
		$_SESSION['userName'] = $username;
        echo "<br />Welcome ".$_SESSION['userName']."!";
		echo "<br /><a href='home.php'>Show FlightS' Status Table</a>";
       
        echo "<br /><a href='logout.php'>LogOut</a>";
	}
}
	
	?>	
		
			

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style2.css" type="text/css" />
</head>
<body>
<center>


<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
</body>
</html>