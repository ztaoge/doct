<?php
/**
 * Created by PhpStorm.
 * User: ztaoge
 * Date: 16/10/14
 * Time: 下午10:41
 */
namespace src\Services;

class AppService extends Service
{
    public function test()
    {
        return $this->container;
    }
}