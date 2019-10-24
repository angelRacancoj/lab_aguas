<?php
// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

/**
 *Genera el gestor de entidades
 *
 * @return Doctrine\ORM\EntityManager
 * @throws \Doctrine\ORM\ORMException
 */
function getEntityManager()
{
	//Cargar configuración de la conexión
	$dbParams = array (
		'host'		=> $_ENV['DATABASE_HOST'],
		'port'		=> $_ENV['DATABASE_PORT'],
		'dbname'	=> $_ENV['DATABASE_NAME'],
		'user'		=> $_ENV['DATABASE_USER'],
		'password'	=> $_ENV['DATABASE_PASSWD'],
		'driver'	=> $_ENV['DATABASE_DRIVER'],
		'charset'	=> $_ENV['DATABASE_CHARSET']
	);

	$config = Setup::createAnnotationMetadataConfiguration(
		array($_ENV['ENTITY_DIR']),		    //paths to mapped entities
		$_ENV['DEBUG'],					    //developer mode
        null,                       //Proxy dir
		null,						    //Cache implementation
		false 		    //Use Simple Annotation Reader
	);

	return EntityManager::create($dbParams, $config);
}

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$dotenv->required([
    'DATABASE_HOST',
    'DATABASE_NAME',
    'DATABASE_USER',
    'DATABASE_PASSWD',
    'DATABASE_DRIVER'
]);

$entityManager = getEntityManager();