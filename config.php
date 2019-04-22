<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DATABASE", "test");

	// $con = new mysqli(HOST,USER,PASS,DATABASE);
	$con = mysqli_connect(HOST,USER,PASS,DATABASE);

	// if ($con) {
	// 	echo "Hello";
	// }
	// else
	// {
	// 	echo "Failed";
	// }

?>