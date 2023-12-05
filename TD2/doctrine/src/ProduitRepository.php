<?php
namespace catadoct\catalog;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class ProduitRepository extends EntityRepository
{
    public function getProduitWithKeyword(string $keyword): array
    {
        $dql = "SELECT p.libelle, p.description FROM \\catadoct\catalog\Produit p
        WHERE p.libelle LIKE :keyword
        OR p.description LIKE :keyword";

        $query= $this->getEntityManager()->createQuery($dql);
        $query->setParameter('keyword', '%'.$keyword.'%');
        return $query->getResult();
    }

    
    public function getProduitsbyasctarif(string $keyword): array
    {
        $dql = "SELECT p FROM \\catadoct\catalog\Produit p
        WHERE p.tarifs < :keyword
        ORDER BY p.tarifs ASC";

        $query= $this->getEntityManager()->createQuery($dql);
        $query->setParameter('keyword', '%'.$keyword.'%');
        return $query->getResult();
    }
}