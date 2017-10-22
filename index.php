<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$app = new OrderItem\App();

foreach ($app->getEndpoints() as $endpoint) {
    echo "{$endpoint->getMethod()->getValue()} : {$endpoint->getUrl()} -> {$endpoint->getActionName()}@{$endpoint->getControllerName()}";
    echo PHP_EOL;
}
