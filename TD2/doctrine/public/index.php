<?php

require '../vendor/autoload.php';

use catadoct\catalog\Produit;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$entity_path = [__DIR__ . '/../src/'];
$isDevMode=true;
$dbParams = parse_ini_file(__DIR__ . '/../config/db.conf.ini');
$config = ORMSetup:: createAttributeMetadataConfiguration($entity_path, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);
$produitRepository = $entityManager->getRepository(Produit::class);

echo "ok";
