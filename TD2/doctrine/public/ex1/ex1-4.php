<?php

use catadoct\catalog\Categorie;

require_once "../ormBootstrap.php";

$catRepository = $entityManager->getRepository(Categorie::class);
$cat = $catRepository->find(5);
$products = $cat->getProduits();
foreach ($products as $product) {
    print $product->getLibelle() . "<br/>";
}


