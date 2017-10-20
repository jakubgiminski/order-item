<?php
namespace OrderItem;

use Framework\Route;

class OrderItemApp implements App
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}
