 <html>
<head>
 <body background="./images/27949.jpg" > 
 <center>
  </html>
</head>
<?php
  //start the session
	session_start(); 
    session_destroy(); //destroy the session
 
	if(!$_SESSION['userName']){

   		echo "You are logged out!<br />";
		echo "<br /><a href='index.php'>login again</a>";//link to login
	
	}
	    
	else
   		 echo "Error Occured!!<br />";
 
?>
</center>