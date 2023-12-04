<?php
namespace catadoct\catalog;
use catadoct\catalog\Categorie;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: "produit")]
class Produit {
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

    public function getId(): string
    {
        return $this->id;
    }
    public function getLibelle(): string
    {
        return $this->libelle;
    }
    public function getDesc(): string
    {
        return $this->description;
    }

    public function getImg(): string
    {
        return $this->image;
    }

    #[ManyToOne(targetEntity: Categorie::class)]
    #[JoinColumn(name: "categorie_id", referencedColumnName: "id")]
    private ?Categorie $categorie = null;

    public function getCat(): string
    {
        return $this->categorie->getLibelle();
    }
}