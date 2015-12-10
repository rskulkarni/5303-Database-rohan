
<?php
	// connect
	$m = new MongoClient();
	
	// select a database
	$db = $m->rkulkarni;
	
	// select a collection (analogous to a relational database's table)
	$collection = $db->random_people;
	
    // Gets 1000 users from the randomuser api, and loads it into a variable called $json
	$json = file_get_contents("http://api.randomuser.me/?results=1000");
	
	for($i = 0;$i < count(json_decode($json)->results);$i++){
	// add records
	$document = json_decode($json)->results[$i];;
	//insert
	$collection->insert($document);
	}
		
?>
