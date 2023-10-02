<?php
	define ('DB_HOST','127.0.0.1');
	define ('DB_USER', 'u343191384_magazyn');
	define ('DB_PASSWORD', 'Magnetic1986!');
	define ('DB_NAME', 'u343191384_magazyn');
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$conn->set_charset("utf8");
?>