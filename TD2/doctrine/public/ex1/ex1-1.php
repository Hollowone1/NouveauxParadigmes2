<?php

use catadoct\catalog\Produit;

require_once "../ormBootstrap.php";

$productRepository = $entityManager->getRepository(Produit::class);
$products = $productRepository->find(3);
print $products->getId() . "<br/>";
print $products->getLibelle() . "<br/>";
print $products->getDesc() . "<br/>";
print $products->getImg() . "<br/>";
