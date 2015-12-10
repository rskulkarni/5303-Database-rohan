<?php

//error_reporting(1);

$mongo = new myMongoDb('rkulkarni');


//$mongo->loadJson("video_games","./video_games.json");

try {
	//instatiate the object of class myMongoDB
        $mongoObject= new myMongoDB();
		
	 // MongoDB connection
        $m = new MongoClient();
        //connect to rkulkarni database
        $db = $m->rkulkarni;
        // productsA collection object
        $collection = $db->productsA;
		 $documentInsert=array();
		 $documentUpdate['name'] = 'NFS3';//update the name
		 $fromDatabase = 'rkulkarni';
         $toDatabase = 'products';
		 
		 /*
		 Test each function
		 */
		//$mongoObject->mongoInsert($db, $collection, $documentInsert);
		//$mongoObject->mongoDelete($db, $collection, new MongoId("562926470d6788a45517970e"));
		  //$mongoObject->mongoUpdate($db, $collection, new MongoId("56371c920d67886a737b23c7"), $documentUpdate);
		//$mongoObject->mongoRead($db, $collection,new MongoId('5624451f0d67889f52c38a44')) ;
		// $mongoObject->mongoCollectionCount($db, $collection);
		 //$mongoObject->mongoCollectionCount($db, $collection, $query = array( 'name'=> 'NFS3'));
		// $mongoObject->CopyDB($db,$rename,$dbNewname);
		 //$mongoObject->dropDB($db,$toDatabase);
       
	   //close the connection
		$m->close();
    
  } catch (MongoConnectionException $e) {
    die('Error connecting to MongoDB server');
  } catch (MongoException $e) {
    die('Error: ' . $e->getMessage());
  }
  


//$docs = $mongo->findAll("food");

//print_r($docs);

class myMongoDB{

	
/**
 * Inserts a document into a productsA collection
 */
function mongoInsert($db, $collection, $document) {
  try {
  
	 $document = array( 
     "id:INTEGER"=>"3",
    "publisher"=>null,
    "genres"=>null,
    "coop"=>"No",
    "name"=>"11 Eyes CrossOver",
    "timestamp:INTEGER"=>"1238630400",
    "system"=>"Microsoft Xbox 360",
    "releaseDate"=>"04/02/2009",
    "players"=>null,
    "reviewRating"=>"0 / 10",
    "esrbRating"=>null,
    "developer"=>null
   );
	$collection->insert($document);
    
    return $document;
	$m->close();
    
  } catch (MongoConnectionException $e) {
    die('Error connecting to MongoDB server');
  } catch (MongoException $e) {
    die('Error: ' . $e->getMessage());
  }
  
}

/**
 * Given the criteria,retrieve the results from mongodb collection
 */
function mongoRead($db, $collection,$id) {
  
  try {
  
    $criteria = array(
      '_id' => new MongoId($id)
    );
    
    $document = $collection->findOne($criteria);
    // get all the documents in collection productsA
    $cursor = $collection->find();

    // total number of documents found as a result are stored in num_docs variable
    $num_docs = $cursor->count();

    if( $num_docs > 0 )
    {
        // loop over the results
        foreach ($cursor as $obj)
        {
            echo 'publisher: ' . $obj['publisher'] . "\n";
            echo 'genres: ' . $obj['genres'] . "\n";
            echo 'system: ' . $obj['system'] . "\n";
            echo "\n";
        }
		 $document['_id'] = $document['_id']->{'$id'};
		 return $document;
    }
	else
    {
        // if no products are found, we show this message
        echo "No products found \n";
    }

	
  } catch (MongoConnectionException $e) {
    die('Error connecting to MongoDB server');
  } catch (MongoException $e) {
    die('Error: ' . $e->getMessage());
  }
}

/**
 * function mongoUpdate Updates the document in the collection.
 Each document in the collection is identified by its unique id. 
 */
function mongoUpdate($db, $collection, $id, $document) {
  try {
  
    $criteria = array(
      '_id' => new MongoId($id)
	   
    );
    
    // make sure that an _id never gets through
    unset($document['_id']);
    
	//$set operator is used to replace the value of a field to the specified value. 
	//If the given field does not exist in the document, the $set operator will add the field with the specified value.
    $collection->update($criteria,array('$set' => $document));
    
    $document = $collection->findOne(  $criteria );
    $document['_id'] = $id;
	// specify new values for game
     
	 $collection->save( $document );
    return $document;
    
  } catch (MongoConnectionException $e) {
    die('Error connecting to MongoDB server');
  } catch (MongoException $e) {
    die('Error: ' . $e->getMessage());
  }
  
}
/**
 *function mongoDelete deletes the document in the collection given its unique id.
 Each document in the collection is identified by its unique id. 
 */
function mongoDelete($db, $collection, $id) {
  try {
  
     
    $criteria = array(
      '_id' => new MongoId($id)
    );
	
	//remove the document given the id
    $collection->remove($criteria,array('safe' => true));
  
    return array('success'=>'deleted');
    
  } catch (MongoConnectionException $e) {
    die('Error connecting to MongoDB server');
  } catch (MongoException $e) {
    die('Error: ' . $e->getMessage());
  }
  
}

/**
 * Collection count:Counts the number of documents in this collection
 */
function mongoCollectionCount($db, $collection, $query = null) {
  
  try {
  
    $m = new MongoClient();
    $db = $m->{$db};
    $collection = $db->{$collection};
    
    if($query) {
		$doc1=$collection->count($query);
	  echo "the count is: $doc1";
      return $collection->count($query);
	  
    } else {
		$doc=$collection->count();
		 echo "the count is: $doc";
      return $collection->count();
	 
	  
    }
    
  } catch (MongoConnectionException $e) {
    die('Error connecting to MongoDB server');
  } catch (MongoException $e) {
    die('Error: ' . $e->getMessage());
  }
  
}
/*
    CopyDB function copies the data from the source database to the destination database
    CopyDB creates the target database if it does not exist.
   
*/
 function CopyDB($db,$fromDatabase,$toDatabase)
 {
   
   $m = (new MongoClient());
   $db = $m->admin;
  
$response = $db->command(array(
    'copydb' => 1, 
    'fromhost' => 'localhost',
    'fromdb' => $fromDatabase,//source DB
    'todb' => $toDatabase //Destination DB
    ));

print_r($response);
		
	}
	
//given the database name the function dropDB removes the database
function dropDB($db,$dbname)
 {
$mongo = (new MongoClient());
$db = $mongo->$dbname;
$response = $db->command(array(
    'dropDatabase' => 1
    ));

print_r($response);
		
 }
	//-----------------

}

// connect
// $m = new MongoClient();
// 
// select a database
// $db = $m->griffin;

// select a collection (analogous to a relational database's table)
// $collection = $db->random_people;
// 
// $data = json_decode(file_get_contents("http://api.randomuser.me/?results=20"));
// 
// echo"<pre>";
// 
// foreach($data->results as $person){
// 	$collection->insert($person);
// }
// 
// find everything in the collection
// $cursor = $collection->find();
// 
// iterate through the results
// foreach ($cursor as $document) {
//     print_r($document);
// }

// 
// // select a collection (analogous to a relational database's table)
// $collection = $db->cartoons;
// 
// // add a record
// $document = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
// $collection->insert($document);
// 
// // add another record, with a different "shape"
// $document = array( "title" => "XKCD", "online" => true );
// $collection->insert($document);
// 
// // find everything in the collection
// $cursor = $collection->find();
// 
// // iterate through the results
// foreach ($cursor as $document) {
//     echo $document["title"] . "\n";
// }

// $collection = $db->cartoons;
// 
// $json = '
// {
//     "title":"The Far Side",
//     "author":"Gary Larson",
//     "funny":"True"
// }
// ';
// 
// 
// 
// $document = json_decode($json);
// print_r($document);
// 
// // add a record
// $collection->insert($document);
