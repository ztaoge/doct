<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/9
 * Time: 15:43
 */
require_once("src/Core/App.php");
$em = require_once("bootstrap.php");

/** @var \models\Repository\ProductRepository $productRepository */
$productRepository = $em->getRepository('models\Entity\Product');
//var_dump($productRepository->getAllProduct());

//$product = new models\Entity\Product();
//$product->setName('产品1号');
//$em->persist($product);
//$em->flush();

/** @var \models\Repository\UserRepository $userRepository */
$userRepository = $em->getRepository('models\Entity\User');
//$userRepository->test();

/** @var \libraries\Container $container */
$container = new \libraries\Container();
/** @var \src\Services\TestService $testService */
$testService = $container['testService'];
var_dump($testService->test());










