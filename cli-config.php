<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/9
 * Time: 15:35
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);
