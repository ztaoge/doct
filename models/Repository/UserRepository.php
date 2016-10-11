<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 15:01
 */
namespace models\Repository;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function getAllUser() {

    }

    public function test() {
        var_dump($this->_entityName);
        var_dump($this->_class->fieldNames);
    }
}