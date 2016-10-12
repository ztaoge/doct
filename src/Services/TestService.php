<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 20:07
 */
namespace src\Services;

class TestService extends Service
{
    public function __construct()
    {
    }

    public function test() {
        return 'test';
    }
}