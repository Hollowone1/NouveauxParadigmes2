<?php


/**
 * Created by PhpStorm.
 * User: canals5
 * Date: 28/10/2019
 * Time: 16:16
 */

require_once "../src/vendor/autoload.php" ;

$c = new \MongoDB\Client("mongodb://mongo");
echo "connected to mongo <br>";

$db = $c->chopizza;

//ex2 1
$prod = $db->produits->find( [],
       ['projection'=>
           [ "numero"=>1,
               "categorie"=>1,
               "libelle"=>1] ]);
//var_dump($prod->toArray());

foreach ($prod as $document) {
    //var_dump($document);
}

//ex2 2
$produit = $db->produits->findOne( ["numero"=>6],
    ['projection'=>
        [ "libelle"=>1,
            "categorie"=>1,
            "description"=>1,
            "tarifs"=>1] ]);
$taros = [];
foreach ($produit['tarifs'] as $tarif) {
    $taros[] = [
        "taille" => $tarif['taille'],
        "tarif" => $tarif['tarif']
    ];
}
$affiche = [];
$affiche[] = $produit['libelle'];
$affiche[] = $produit['categorie'];
$affiche[] = $produit['description'];
$affiche[] = $taros;
//var_dump($affiche);

//ex2 3
$prod = $db->produits->find([
    "tarifs.tarif" => [ '$lt' => 8.0 ],
    "tarifs.taille" => 'grande'
]);
//var_dump($prod->toArray());

//ex2 4
$recettesProd = $db->produits->find( [],
    ['projection'=>
        [ "numero" => 1,
            "recettes"=>1] ]);

foreach ($recettesProd as $document) {
    if (count($document['recettes']) === 4) {
    //var_dump($document['numero']) ;
    //var_dump($document['recettes'])  ;
}
    //echo "<br/>";
}

