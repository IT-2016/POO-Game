<?php
	session_start();
	
	function myAutoloader($class) {
		require_once('../app/class/' . $class . '.class.php');
	}
	spl_autoload_register('myAutoloader');
	$_DB = new DataBase();
	$_PAGE = new Page($_DB);

	require_once('functions.php');
