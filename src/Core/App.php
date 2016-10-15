<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/14
 * Time: 18:41
 */

require_once('src/Core/AppBase.php');

class App extends \APP\AppBase
{
}


spl_autoload_register(['App', 'autoload'], true, true);
App::$classMap = require_once('src/Core/classes.php');
App::$container = new \libraries\Container();
App::$app = new App();


