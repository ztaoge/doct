<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 20:07
 */
namespace src;

class TestService extends Service
{
    public function __construct(\libraries\Container $container)
    {
        parent::__construct($container);
    }

    public function test() {
        return 'test';
    }
}