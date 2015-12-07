<?php

include_once 'db.php';

/* code for Flight_Status insert */
if(isset($_POST['insert']))
{
     $StatusID = $MySQLiconn->real_escape_string($_POST['StatusID']);
     $Status = $MySQLiconn->real_escape_string($_POST['Status']);
   
	
	 $SQL = $MySQLiconn->query("INSERT INTO Flight_Status(StatusID,Status) VALUES('$StatusID','$Status')");
	 
	 if(!$SQL)
	 {
		 echo $MySQLiconn->error;
	 } 
}
/* code for Flight_Status insert */


/* code for Flight_Status delete */
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM Flight_Status WHERE StatusID=".$_GET['del']);
	header("Location: home.php");
}
/* code for Flight_Status delete */



/* code for Flight_Status update */
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM Flight_Status WHERE StatusID=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE Flight_Status SET Status='".$_POST['Status']."' WHERE StatusID=".$_GET['edit']);
	header("Location: home.php");
}
/* code for Flight_Status update */

?>