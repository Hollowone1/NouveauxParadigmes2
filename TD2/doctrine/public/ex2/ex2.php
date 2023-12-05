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
//Q1
/*$produits = $productRepository->findOneBy(["numero" => "4"]);
    var_dump($produit->getInfos());
*/

//Q2
/*$produits = $productRepository->findOneBy(["numero" => "4", "libelle" => "Pepperoni"]);
if ($produits != null){
    var_dump($produits->getInfos());
}
else{
    echo "Produit non trouvé";
}*/

//Q3
/*$cat = $catRepository->findOneBy(["libelle" => "Boissons"]);
var_dump($cat->getInfos());
//$produits = $productRepository->findBy(["categorie" => $cat]);*/

//Q4
/*$qb = $entityManager->createQueryBuilder();
$qb->select('p')
    ->from(Produit::class, 'p')
    ->where('p.description LIKE :desc')
    ->setParameter('desc', '%'.'mozzarella'.'%');
    //->orderBy('u.name', 'ASC');
$query = $qb->getQuery();
$results = $query->getResult();


if ($results != null){
    foreach ($results as $result){
        var_dump($result->getInfos());
    }
}
else{
    echo "Produits non trouvés";
}*/

//Q5
/*$qb = $entityManager->createQueryBuilder();
$qb->select('p')
    ->from(Produit::class, 'p')
    ->where('p.description LIKE :desc')
    ->andWhere('p.categorie = :cat')
    ->setParameter('desc', '%'.'jambon'.'%')
    ->setParameter('cat', 5);
//->orderBy('u.name', 'ASC');
$query = $qb->getQuery();
$results = $query->getResult();


if ($results != null){
    foreach ($results as $result){
        var_dump($result->getInfos());
    }
}
else{
    echo "Produits non trouvés";
}*/

//Q6
$cat = $catRepository->find(5);
$products = $cat->getInfos();
var_dump($products);


