<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(
	array(__DIR__."/../src/Entity"), 
	$isDevMode, 
	$proxyDir, 
	$cache, 
	$useSimpleAnnotationReader
);

$conn = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'port' => '3306',
    'user' => 'root',
    'password' => '',
    'dbname' => 'ecommerce',
    'driverOptions' =>[
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ]
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);