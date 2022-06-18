<?php

include "../vendor/autoload.php";

use App\Controller\ErrorController;
// use App\Connection\Connection;

// $connection = Connection::getConnection();

// $query = "SELECT * FROM tb_category;";

// $preparation = $connection->prepare($query);
// $preparation->execute();


// while ($registry = $preparation->fetch()) {
//     var_dump($registry);
// }

$url = explode("?", $_SERVER["REQUEST_URI"])[0];

$routes = include "../config/routes.php";

if (false === isset($routes[$url])) {
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url]["controller"];
$methodName = $routes[$url]["method"];

(new $controllerName())->$methodName();
