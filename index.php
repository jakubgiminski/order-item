<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$app = new OrderItem\App();

foreach ($app->getRoutes() as $route) {
    echo "{$route->getMethod()->getValue()} : {$route->getUrl()} -> {$route->getActionName()}@{$route->getControllerName()}";
    echo PHP_EOL;
}
