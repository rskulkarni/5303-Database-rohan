<?php
// Gets 1000 users from the randomuser api, and loads it into a variable called $json
$json = file_get_contents("http://api.randomuser.me/?results=1000");
//print($json);


// This turns the variable into a PHP object
$json_array = json_decode($json);
//Connect to database
  $db = new mysqli('localhost', 'rkulkarni', 'rkulkarni2015','rkulkarni');

  if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

//store values of individual columns in Users table into variables
 for($i=0;$i<sizeof($json_array->results);$i++){
    $gender = $json_array->results[$i]->user->gender;
	$title = $json_array->results[$i]->user->name->title;
	$first = $json_array->results[$i]->user->name->first;
	$last = $json_array->results[$i]->user->name->last;
    $street = $json_array->results[$i]->user->location->street;
	$city = $json_array->results[$i]->user->location->city;
	$state = $json_array->results[$i]->user->location->state;
	$zip = $json_array->results[$i]->user->location->zip;
	$email = $json_array->results[$i]->user->email;
	$username = $json_array->results[$i]->user->username;
	$password = $json_array->results[$i]->user->password;
	$dob = $json_array->results[$i]->user->dob;
	$phone = $json_array->results[$i]->user->phone;
	$picture = $json_array->results[$i]->user->picture->medium;
	
	//print the data
	echo "$gender,$title,$first,$last,$street,$city,$state,$zip,$email,$username,
      $password,$dob,$phone,$picture <br>" ;
	  
    //Querying-insert Data into Users table
    $sql = "
	INSERT INTO Users
	Values('$gender','$title','$first','$last','$street','$city','$state','$zip','$email','$username',
      '$password','$dob','$phone','$picture')
 ";
 
 if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
 }
