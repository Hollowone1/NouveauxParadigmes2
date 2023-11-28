<?php
namespace catadoct\catalog;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use catadoct\catalog\Categorie;

#[Entity]
#[Table(name: "produit")]
class Spectacle {
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[Column(type: Types::INTEGER)]
    private int $numero;

    #[Column( type: Types::TEXT)]
    private string $libelle;

    #[Column( type: Types::TEXT)]
    private string $description;

    #[Column( type: Types::TEXT)]
    private string $image;

    #[ManyToOne(targetEntity: Categorie::class)]
    #[JoinColumn(name: "categorie_id", referencedColumnName: "id")]
    private ?Categorie $categorie = null;
}