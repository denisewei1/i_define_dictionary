<?php
	define("DB_SERVER", "engr-cpanel-mysql.engr.illinois.edu");
	define("DB_USER", "cs411idefine_u00");
	define("DB_PASS", "u00000");
	define("DB_NAME", "cs411idefine_db");
	
	// 1. Create a database connection
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	// Test if connection succeeded
	if(mysqli_connect_errno()) {
		die("Database connection failed: " . 
			mysqli_connect_error() . 
			" (" . mysqli_connect_errno() . ")"
			);
	}
?>
