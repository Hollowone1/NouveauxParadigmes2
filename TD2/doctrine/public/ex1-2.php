<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use catadoct\catalog\Categorie;

require_once "../vendor/autoload.php";

$paths = ['/../src'];
$isDevMode = true;


$dbParams = parse_ini_file(__DIR__ . '/../config/db.conf.ini');

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);
$categorieRepository = $entityManager->getRepository(Categorie::class);
$cat = $categorieRepository->find(5);
var_dump($cat);

