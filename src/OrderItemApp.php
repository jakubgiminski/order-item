<?php
declare(strict_types=1);

namespace OrderItem;

class OrderItemApp implements App
{
    private $routes;

    public function __construct()
    {
        $this->routes = include __DIR__ . '/routes.php';
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}
