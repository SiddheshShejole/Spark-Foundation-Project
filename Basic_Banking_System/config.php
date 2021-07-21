<?php

	$conn = _connect('localhost','mysql_user','mysql_password');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>