<?php

use catadoct\catalog\Produit;
use catadoct\catalog\Categorie;

require_once "../ormBootstrap.php";

$productRepository = $entityManager->getRepository(Produit::class);

// Q5
/*$catRepository = $entityManager->getRepository(Categorie::class);
$cat = $catRepository->find(5)->getId();
$s = new Produit();
$s->setNum(145);
$s->setLibelle("test");
$s->setDesc("test");
$s->setLibelle("test");
$s->setCat($entityManager->getRepository(Categorie::class)->find(5));
$entityManager->persist($s);
$entityManager->flush();*/

// Q6
/*$productRepository = $entityManager->getRepository(Produit::class);
$s = $productRepository->findOneBy(["libelle" => "testMODIFIE"]);
var_dump($s);
$s->setLibelle("testENCORE");
$entityManager->persist($s);
$entityManager->flush();
$modifie = $productRepository->findOneBy(["libelle" => "testENCORE"]);
var_dump($modifie);*/

// Q7
/*$s = $productRepository->findOneBy(["libelle" => "testENCORE"]);
$entityManager->remove($s);
$entityManager->flush();
$all = $productRepository->findAll();
var_dump($all);*/