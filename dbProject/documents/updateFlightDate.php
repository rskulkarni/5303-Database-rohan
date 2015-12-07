<?php

error_reporting(1);

$host 	= 'localhost';
$user 	= 'rkulkarni';
$pass 	= 'rkulkarni2015';
$db 	= 'rkulkarni';

$load = new LoadTestData($host,$user,$pass,$db);

$load->updatedate();
//$load->loadCourses();
$load->InsertReservation();


class LoadTestData{

	var $db;
	var $users;
	var $Roles;
	var $Aircrafts;

	function __construct($host,$user,$pass,$db){
		//connect to database on local server
		$this->db = new mysqli($host,$user,$pass,$db);


		if ($this->db->connect_errno) {
			echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		}
		
		$this->Roles = array();
		$this->loadFlights();
		$this->Aircrafts = array();
		$this->loadAircraft();
		$this->users = array();
		$this->loadusers();
		
	}
	
	
	function updatedate(){
	$int= mt_rand(0,1262055681);
	$string = date("Y-m-d H:i:s",$int);
	// print_r (date("d-m-Y H:i:s",$int));
	echo date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s",$int))+3600*3);
	for($i=0;$i<sizeof($this->Roles);$i++){
		$flightNumber = $this->Roles[$i]['FlightNumber'];
		if ($flightNumber!=NULL){
		$DepartureTime = date("Y-m-d H:i:s",$int);
		$ArrivalTime = date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s",$int))+3600*3);
		$query = "UPDATE Flights SET DepartureTime = '$DepartureTime' , TimeStamp='$DepartureTime' ,ArrivalTime ='$ArrivalTime' WHERE FlightNumber='$flightNumber'";
		
		$result = $this->db->query($query);
		//"UPDATE blogEntry SET content = '$udcontent', title = '$udtitle' WHERE id = $id"
		//echo $query;
		echo "\r\n";
		}
	}
	
	}
	function InsertReservation(){
		$array =  array("Vegetarian","Vegan","Kosher","Halal");
		for($i=0;$i<sizeof($this->Roles);$i++){
			$id = uniqid();
			$num = rand(1,100);
			$uuid = $this->users[$num]['UUID'];
			$flightNumber = $this->Roles[$i]['FlightNumber'];
			$TimeStamp = $this->Roles[$i]['TimeStamp'];
			$distanceId = $this->Roles[$i]['destinationid'];
			//echo $distanceId;
			$capacity = $this->getcapacity($this->Roles[$i]['TailNumber']);
			//echo "capacity : ".$capacity."\t";
			$seatNumber = mt_rand(0,$capacity);
			//echo "Seat : ".$seatNumber."\t";
			$Meal = $array[mt_rand(0,3)];
			//echo "Meal : ".$array[$Meal]."\t";
			$price = 50 + ($this->getDistance($distanceId)) * 0.11;
			echo $id;
			$this->insertValues($flightNumber,$TimeStamp,$seatNumber,$Meal,$price,$id,$uuid);
		}
	}
	
	function insertValues($flightNumber,$TimeStamp,$seatNumber,$Meal,$price,$id,$uuid){
		$sql = "insert into Reservations values('$flightNumber','$TimeStamp','$seatNumber','$Meal','$price','$id','$uuid')";
		print_r ($sql);
		$result = $this->db->query($sql);
		print_r ($result);
	}
	function getDistance($distanceId){
		//echo "call";
		$sql = "SELECT `Distance` FROM `TravelDistance` WHERE `id` = '$distanceId'";
		$result = $this->db->query($sql);
		$fetcharray =  $result->fetch_assoc();
		return $fetcharray['Distance'];	
	}	
	
	
	
	
	function getcapacity($tailnumber){
		//var $capacity;
		//echo "in Get capacity".sizeof($this->Aircrafts);
		for($i=0;$i<sizeof($this->Aircrafts);$i++){
			$tempemail = $this->Aircrafts[$i]['TailNumber'] ;
			//echo "$tempemail".$tempemail;
			if ($this->Aircrafts[$i]['TailNumber'] == $tailnumber){
				//$capacity =  $this->Aircrafts[$i]['Capacity'];
				//echo "in if block ".$this->Aircrafts[$i]['Capacity'];
				return $this->Aircrafts[$i]['Capacity'];
			}
		}
		//return $capacity;
		
	}
	

	private function loadFlights(){
		//echo "nanda";
		
		$query = "SELECT * FROM Flights";
        $result = $this->db->query($query);
        if($result) {
            while ($row = $result->fetch_assoc()) {
            	$this->Roles[] = $row;
				//print_r ($row);
             }
        }
	}
	private function loadAircraft(){
		//echo "nanda";
		
		$query = "SELECT * FROM Aircraft";
        $result = $this->db->query($query);
        if($result) {
            while ($row = $result->fetch_assoc()) {
            	$this->Aircrafts[] = $row;
				//print_r ($row);
             }
        }
	}
	
	private function loadusers(){
		//echo "nanda";
		
		$query = "SELECT UUID FROM Users";
        $result = $this->db->query($query);
        if($result) {
            while ($row = $result->fetch_assoc()) {
            	$this->users[] = $row;
				//print_r ($row);
             }
        }
	}
}

