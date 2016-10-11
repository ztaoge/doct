<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 19:16
 */
namespace src;

class Service
{
    /** @var  \libraries\ContainerBase $container */
    protected $container;

    public function __construct(\libraries\Container $container)
    {
        $this->container = $container;
    }
}