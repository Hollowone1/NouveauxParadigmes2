<?php

use catadoct\catalog\Produit as Produit;
use catadoct\catalog\Categorie;
use catadoct\catalog\Taille;
use catadoct\catalog\Tarif;

require_once "../ormBootstrap.php";

$productRepository = $entityManager->getRepository(Produit::class);
$catRepository = $entityManager->getRepository(Categorie::class);
$tailleRepository = $entityManager->getRepository(Taille::class);
$tarifRepository = $entityManager->getRepository(Tarif::class);

$products = $catRepository->getProduitsbycategorie("Boissons");
var_dump($products);

$products = $productRepository->getProduitWithKeyword("Savoyarde");
var_dump($products);

$products = $productRepository->getProduitsbyasctarif(8.99);
var_dump($products);

$products = $productRepository->getProduitsBynumero(5,"normale");
var_dump($products);