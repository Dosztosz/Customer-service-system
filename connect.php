<?php
	define ('DB_HOST','127.0.0.1');
	define ('DB_USER', 'root');
	define ('DB_PASSWORD', '');
	define ('DB_NAME', 'customer_service');
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$conn->set_charset("utf8");
?>