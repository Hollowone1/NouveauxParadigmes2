<?php
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function getProduitsbycategorie(string $keyword): Collection
    {
        $dql = "SELECT p FROM \\doctrine\src\Produit p
        WHERE p.categorie ";
        $query= $this->getEntityManager()->createQuery($dql);
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