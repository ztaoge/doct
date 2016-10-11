<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 19:29
 */
namespace libraries;

class Container extends ContainerBase
{
    public static $serviceArray = [
        'testService'
    ];

    public function __construct(array $array)
    {
        parent::__construct($array);
        $this->container = self::$serviceArray;
    }
}