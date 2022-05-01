<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'alquiladb',
    'user' => 'huber',
    'password' => '2021'
);

$entityManager = EntityManager::create($conn, $config);
