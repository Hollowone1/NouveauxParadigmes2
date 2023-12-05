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
#[Table(name: "tarif")]
class Tarif {
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[Column( type: Types::INTEGER)]
    private string $tarif;

    #[ManyToOne(targetEntity: Taille::class)]
    #[JoinColumn(name: "taille_id", referencedColumnName: "id")]
    private ?Taille $taille = null;
    #[ManyToOne(targetEntity: Produit::class)]
    #[JoinColumn(name: "produit_id", referencedColumnName: "id")]
    private ?Produit $produit = null;
    public function getInfos(): array
    {
        return [
            "tarif" => $this->tarif,
            "taille" => $this->taille->getLibelle(),
            "produit" => $this->produit->getLibelle()
        ];
    }

}