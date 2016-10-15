<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/12
 * Time: 20:27
 */
namespace APP;

define('APP_VERSION', '0.0.1');

Class AppBase
{
    public static $classMap = [];

    public static $app;

    public static $container;

    public static function getVersion() {
        return APP_VERSION;
    }

    /**
     * 自动加载方法
     * @param string $className
     */
    public static function autoload($className)
    {
        $path = preg_replace("/\\\/", '/', $className);
        $path .= '.php';
        include_once $path;
    }
}