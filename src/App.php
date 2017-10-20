<?php
declare(strict_types=1);

namespace OrderItem;

use Framework\Route;

interface App
{
    public function addRoute(Route $route): void;
    public function getRoutes(): array;
    public function setRoutes(array $routes): void;
}
