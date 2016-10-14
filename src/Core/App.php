<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/14
 * Time: 18:41
 */

require_once('src/Core/BaseApp.php');

class App extends \APP\BaseApp
{
}

spl_autoload_register(['App', 'autoload'], true, true);
App::$classMap = require_once('src/Core/classes.php');
App::$container = new \libraries\Container();

