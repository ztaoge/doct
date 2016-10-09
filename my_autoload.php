<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/9
 * Time: 15:39
 */
spl_autoload_register('myAutoload');

function myAutoload($class) {
    $path = preg_replace("/\\\/", '/', $class);
    $path .= '.php';
    include_once $path;
}
