<?php
include_once 'crud.php';
echo "<br /><a href='logout.php'>Log Out</a>";
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> CRUD Operations on Flights_Status table </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<center>
<div id="header">
	
</div>
<br />

<br />
<div id="form">
<form method="post">
<table width="100%" border="1" cellpadding="15">
<tr>
. <!-- get the value of status id and flight status-->
<td><input type="text" name="StatusID" placeholder="Status ID" value="<?php if(isset($_GET['edit'])) echo $getROW['StatusID'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="Status" placeholder="Flight Status" value="<?php if(isset($_GET['edit'])) echo $getROW['Status'];  ?>" /></td>
</tr>

<tr>
<td>
<?php
if(isset($_GET['edit']))
{
	?>
	<button type="submit" name="update">update</button>
	<?php
}
else
{
	?>
	<button type="submit" name="insert">insert</button>
	<?php
}
?>
</td>
</tr>
</table>
</form>

<br /><br />

<table width="100%" border="1" cellpadding="15" align="center">
<?php
//select all records from table Flight_Status and display and perform database read,edit and delete operations
$tbl = $MySQLiconn->query("SELECT * FROM Flight_Status");
while($record=$tbl->fetch_array())
{
	?>
    <tr>
    <td><?php echo $record['StatusID']; ?></td>
    <td><?php echo $record['Status']; ?></td>
    
    <td><a href="?edit=<?php echo $record['StatusID']; ?>" onclick="return confirm('table record will be edited !'); " >edit</a></td>
    <td><a href="?del=<?php echo $record['StatusID']; ?>" onclick="return confirm('Finalize the delete operation? !'); " >delete</a></td>
	</tr>
    <?php
}
?>
</table>
</div>
</center>
</body>
</html>