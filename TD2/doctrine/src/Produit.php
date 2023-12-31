<?php
namespace catadoct\catalog;
use catadoct\catalog\Categorie;
use catadoct\catalog\Tarif;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\OneToMany;
use PhpParser\Node\Expr\Array_;
use catadoct\catalog\ProduitRepository;

#[Entity(repositoryClass: ProduitRepository::class)]
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNum(): string
    {
        return $this->numero;
    }
    public function setNum($num): void
    {
        $this->numero = $num;
    }
    public function getLibelle(): string
    {
        return $this->libelle;
    }
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }
    public function getDesc(): string
    {
        return $this->description;
    }
    public function setDesc($desc): void
    {
        $this->description = $desc;
    }
    public function getImg(): string
    {
        return $this->image;
    }
    public function setImg($img): void
    {
        $this->image = $img;
    }
    #[ManyToOne(targetEntity: Categorie::class)]
    #[JoinColumn(name: "categorie_id", referencedColumnName: "id")]
    private ?Categorie $categorie = null;
    public function getCat(): string
    {
        return $this->categorie->getLibelle();
    }
    public function setCat($cat): void
    {
        $this->categorie = $cat;
    }
    #[OneToMany(targetEntity: Tarif::class, mappedBy: "produit")]
    private Collection $tarifs;

    public function getTarifs(): array
    {
        $tarifs = [];
        foreach ($this->tarifs as $tarif) {
            $tarifs[] = $tarif->getInfos();
        }
        return $tarifs;
    }

    public function getInfos(): array
    {
        return [
            "id" => $this->id,
            "numero" => $this->numero,
            "libelle" => $this->libelle,
            "description" => $this->description,
            "image" => $this->image,
            "categorie" => $this->categorie->getLibelle(),
            "tarifs" => $this->getTarifs()
        ];
    }

}