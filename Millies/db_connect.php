<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'millie';

	$conn = new mysqli($host,$user,$pass,$db);

	if (!$conn) {
		echo 'connection failed';
	}

?>