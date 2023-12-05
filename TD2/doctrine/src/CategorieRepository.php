<?php
namespace catadoct\catalog;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function getProduitsbycategorie(string $keyword): array
    {
        $dql = "SELECT p FROM \\catadoct\catalog\Produit p JOIN p.categorie c
        WHERE c.libelle = :keyword";

        $query= $this->getEntityManager()->createQuery($dql);
        $query->setParameter('keyword', $keyword);
        return $query->getResult();
    }

    public function gettarifbyproducts(string $keyword): Collection
    {
        $dql = "SELECT t FROM \\doctrine\src\Tarif t
        WHERE t.produit ";
        $query= $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
}