<?php 
	//Example #1 Easy migration from the old mysql extension
	//arguments host,username,password,database
	//also, port number, socket
	//returns an object which represents the connection to a MySQL Server
	$mysqli = mysqli_connect("localhost","root","daniel123","single_signon");
	
	if(mysqli_connect_errno($mysqli)){
		echo "Failed to connect to MySQL: ". mysqli_connect_error();
	}

	$res = mysqli_query($mysqli,"SELECT * FROM login");

	$row = mysqli_fetch_assoc($res);

	var_dump($row);

	//The object-oriented interface
	$obj_mysqli = mysqli_connect("localhost","root","daniel123","single_signon");
	if($obj_mysqli->connect_errno){
		echo "Failed to connect to MySQL: " . $obj_mysqli->connect_error;
	}

	$ress = $obj_mysqli->query("SELECT * FROM login");

	$rows = $ress->fetch_assoc();

	var_dump($rows);


	// Mixing both styles is not recommended for code clarity and coding style reasons.	
	
?>

