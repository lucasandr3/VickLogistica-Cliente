<?php
require 'environment.php';

ini_set('display_errors', 'on');

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/logistica/client/");
	$config['dbname'] = 'vick';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	define("BASE_URL", "http://localhost/psr/psr-4-mvc/");
	$config['dbname'] = 'mvc_psr4';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

date_default_timezone_set('America/Sao_Paulo'); 