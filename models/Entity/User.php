<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 14:52
 */
namespace models\Entity;

class User
{
    protected $id;
    protected $name;
    protected $gender;
    protected $age;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}