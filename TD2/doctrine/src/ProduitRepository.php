<?php
namespace catadoct\catalog;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;

class ProduitRepository extends EntityRepository
{
    public function getProduitsbycategorie(string $keyword): array
    {
        $dql = "SELECT p FROM \\catadoct\catalog\Produit p JOIN p.categorie c
        WHERE c.libelle = :keyword";

        $query= $this->getEntityManager()->createQuery($dql);
        $query->setParameter('keyword', $keyword);
        return $query->getResult();
    }

}