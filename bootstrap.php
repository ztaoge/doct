<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/9
 * Time: 15:03
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
//$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/src"], $isDevMode);
$config = Setup::createXMLMetadataConfiguration([__DIR__ . "/models/Mapping"], $isDevMode);

$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'doctrine',
    'user' => 'root',
    'password' => ''
];

return $entityManager = EntityManager::create($dbParams, $config);