<?php

use catadoct\catalog\Produit as Produit;
use catadoct\catalog\Categorie;
use catadoct\catalog\Taille;
use catadoct\catalog\Tarif;
use Doctrine\Common\Collections\Criteria;

require_once "../ormBootstrap.php";


$productRepository = $entityManager->getRepository(Produit::class);
$catRepository = $entityManager->getRepository(Categorie::class);
$tailleRepository = $entityManager->getRepository(Taille::class);
$tarifRepository = $entityManager->getRepository(Tarif::class);
//Q1
$produits = $productRepository->findOneBy(["numero" => "4"]);
var_dump($produits->getInfos());


//Q2
$produits = $productRepository->findOneBy(["numero" => "4", "libelle" => "Pepperoni"]);
if ($produits != null){
    var_dump($produits->getInfos());
}
else{
    echo "Produit non trouvé";
}

//Q3
$cat = $catRepository->findOneBy(["libelle" => "Boissons"]);
var_dump($cat->getInfos());
$produits = $productRepository->findBy(["categorie" => $cat]);
var_dump($produits);

//Q4

$products = $productRepository->matching( Criteria::create()
    ->where(Criteria::expr()->contains("description", "mozzarella"))
);

if ($products != null){
    foreach ($products as $result){
        var_dump($result->getInfos());
    }
}
else{
    echo "Produits non trouvés";
}

//Q5

$produits = $catRepository
    ->find(5)
    ->getProduits()
    ->matching(Criteria::create()
        ->where(Criteria::expr()->contains("description", "jambon"))
    );

if ($produits != null){
        var_dump($produits);
}
else{
    echo "Produits non trouvés";
}



