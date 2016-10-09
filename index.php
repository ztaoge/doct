<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/9
 * Time: 15:43
 */

$em = require_once "bootstrap.php";

$productRepository = $em->getRepository('models\Entity\Product');
var_dump($productRepository->test());