<?php

define("DB_HOST", "localhost");    	 	// The host you want to connect to.
define("DB_USER", "root");    			// The database username. 
define("DB_PASS", "");    			 	// The database password. 
define("DB_NAME", "account_kanny");    	// The database name.



$p 				= isset($_GET['p']) ? $_GET['p'] : 'home';
$templatePath 	= __DIR__ . '/pages/'. $p .'.php';

$action 		= isset($_GET['action']) ? $_GET['action'] : NULL;
$id				= isset($_GET['id']) ? intval($_GET['id']) : 0;