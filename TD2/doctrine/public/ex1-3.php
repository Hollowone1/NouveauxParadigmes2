<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use catadoct\catalog\Produit;

require_once "../vendor/autoload.php";

$paths = ['/../src'];
$isDevMode = true;


$dbParams = parse_ini_file(__DIR__ . '/../config/db.conf.ini');

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);
$productRepository = $entityManager->getRepository(Produit::class);
$products = $productRepository->find(3);
print $products->getId() . "<br/>";
print $products->getLibelle() . "<br/>";
print $products->getDesc() . "<br/>";
print $products->getImg() . "<br/>";
print $products->getCat() . "<br/>";

