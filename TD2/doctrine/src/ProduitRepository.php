<?php
namespace catadoct\catalog;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class ProduitRepository extends EntityRepository
{
    public function getProduitWithKeyword(string $keyword): array
    {
        $dql = "SELECT p FROM \\catadoct\catalog\Produit p
        WHERE p.libelle LIKE :keyword
        OR p.description LIKE :keyword";

        $query= $this->getEntityManager()->createQuery($dql);
        $query->setParameter('keyword', '%'.$keyword.'%');
        return $query->getResult();
    }

    
    public function getProduitsByAsctarif(float $keyword): array
    {
            $dql = "SELECT p FROM \\catadoct\\catalog\\Produit p
            JOIN p.tarifs t
            WHERE t.tarif < :keyword
            ORDER BY p.numero ASC";

            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameter('keyword', $keyword);
            return $query->getResult();
    }

    public function getProduitsBynumero(int $numero, string $taille): array
    {
            $dql = "SELECT p FROM \\catadoct\\catalog\\Produit p
            JOIN p.tarifs t
            JOIN t.taille ta
            WHERE p.numero = :numero
            OR p.libelle LIKE :taille";

            $query = $this->getEntityManager()->createQuery($dql); 
            $query->setParameter('numero',$numero);
            $query->setParameter('taille', '%'.$taille.'%');
            return $query->getResult();
    }

}