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
#[Table(name: "taille")]
class Taille {
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[Column( type: Types::STRING)]
    private string $libelle;

    #[OneToMany(targetEntity: Tarif::class, mappedBy: "tarif")]
    private Collection $tarifs;

    public function getTarifs(): Collection
    {
        return $this->tarifs;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }
}