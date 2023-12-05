<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use catadoct\catalog\Categorie;

require_once "../ormBootstrap.php";

$categorieRepository = $entityManager->getRepository(Categorie::class);
$cat = $categorieRepository->find(5);
var_dump($cat);

