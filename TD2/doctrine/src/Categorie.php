<?php
namespace catadoct\catalog;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\Collection;
use catadoct\catalog\Produit;


#[Entity]
#[Table(name: "categorie")]
class Categorie {
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[Column( type: Types::TEXT)]
    private string $libelle;

    public function getId(): string
    {
        return $this->id;
    }
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    #[OneToMany(targetEntity: Produit::class, mappedBy: "categorie")]
    private Collection $produits;
}