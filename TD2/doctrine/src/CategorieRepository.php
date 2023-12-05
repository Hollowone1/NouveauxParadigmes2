<?php
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;
class CategorieRepository extends EntityRepository
{
    public function getProduits(string $keyword): Collection
    {

    }

}