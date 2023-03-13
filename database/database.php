<?php 
	define('HOST', 'localhost');
	define('DB_NAME', 'escat');
	define('USER', 'root');
	define('PASS', '');

	try{
		$db = new PDO("mysql:host=" .HOST. ";charset=utf8;dbname=" .DB_NAME, USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}   
	catch(PDOexception $e){
		echo $e;
	}
 ?>