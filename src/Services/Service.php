<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 19:16
 */
namespace src\Services;
use libraries\Container;

class Service
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}