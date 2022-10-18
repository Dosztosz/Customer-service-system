<?php
	define ('DB_HOST','mariadb106.server723887.nazwa.pl');
	define ('DB_USER', 'server723887_CustomerService');
	define ('DB_PASSWORD', 'A76bvo7856b287t!@#b71');
	define ('DB_NAME', 'server723887_CustomerService');
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$conn->set_charset("utf8");
?>