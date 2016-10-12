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
        'testService' => 'src\Services\TestService'
    ];

    public function __construct($array = [])
    {
        parent::__construct($array);
        $this->container = self::$serviceArray;
    }

    public function index()
    {
        return $this->container;
    }
}
