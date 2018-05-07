<?php 
	//Example #1 Easy migration from the old mysql extension
	$mysqli = mysqli_connect("localhost","root","","single_signon");
	$res = mysqli_query($mysqli,"SELECT * FROM login");

	$row = mysqli_fetch_assoc($res);

	var_dump($row);

	//The object-oriented interface
?>