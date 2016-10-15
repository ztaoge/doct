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
    /** @var  object $app */
    public $app;

    private $instance;

    public function __construct($array = [])
    {
        parent::__construct($array);
        $this->instance = \App::$container;
        $this->init();
    }

    private function init()
    {
        $this['memcached'] = function () {
            return '';
        };

        $this['redis'] = function() {
            /** @var \Redis $redis */
            $redis = new \Redis();
            return $redis;
        };

        $this['testService'] = function () {
            return new \src\Services\TestService();
        };

        $this['appService'] = function () {
            return new \src\Services\AppService();
        };
    }


}
