<?php 	// cli-config.php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

//Carga las variables de entorno
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$dotenv->required([
	'DATABASE_HOST',
	'DATABASE_NAME',
	'DATABASE_USER',
	'DATABASE_PASSWD',
	'DATABASE_DRIVER'
]);

require_once __DIR__ . '/bootstrap.php';

$entityManager = getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);