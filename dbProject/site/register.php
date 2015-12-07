<html>
<head>
    <body background="./images/27949.jpg" > 
	<title>Airport Reservation System Registration Form</title>
</head>
<body>	
<h1>Airport Reservation System Registration Form</h1>
</html>
<?php
//require_once("db_const.php");
//include 'bootsnipform.html';
require_once("db.php");
if (!isset($_POST['submit'])) {
	

     
?>	<!-- The HTML registration form -->
	<center>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		
		First name: <input type="text" name="first_name" /><br />
		Last name: <input type="text" name="last_name" /><br />
		Email:  <input type="type" name="email" /><br />
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />

		<input type="submit" name="submit" value="Register" />
		</center>
	</form>
<?php
} else {
## connect mysql server
	$mysqli = new mysqli(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$first_name	= $_POST['first_name'];
	$last_name	= $_POST['last_name'];
	$email		= $_POST['email'];

	# check if username and email exist else insert
	$exists = 0;
	$result = $mysqli->query("SELECT username from phpLogin WHERE username = '{$username}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists = 1;
		$result = $mysqli->query("SELECT email from phpLogin WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 2;	
	} else {
		$result = $mysqli->query("SELECT email from phpLogin WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 3;
	}

	if ($exists == 1) echo "<p>Username already exists!</p>";
	else if ($exists == 2) echo "<p>Username and Email already exists!</p>";
	else if ($exists == 3) echo "<p>Email already exists!</p>";
	else {
		# insert data into mysql database
		$sql = "INSERT  INTO `phpLogin` (`id`, `first_name`, `last_name`, `email` ,`username`, `password`) 
				VALUES (NULL, '{$first_name}', '{$last_name}', '{$email}', '{$username}', '{$password}')";

		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<p>Registred successfully!</p>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}
}
?>		

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>


</head>
<body>
<center>

<tr>
<td><a href="index.php">Click Here to Login</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
</body>
</html>