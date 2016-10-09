<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/9
 * Time: 15:14
 */
namespace models\Repository;
use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function getAllProduct()
    {
        $dql = 'SELECT p FROM models\Entity\Product p';
        return $this->_em->createQuery($dql)->getArrayResult();
    }

    public function test()
    {
        return 'test';
    }
}