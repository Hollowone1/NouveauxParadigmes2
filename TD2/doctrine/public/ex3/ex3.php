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

$products = $catRepository->getProduitsbycategorie("Salades");
var_dump($products);

$products = $productRepository->getProduitWithKeyword("Reine");
var_dump($products);
$products = $productRepository->getProduitsbyasctarif();
var_dump($products);