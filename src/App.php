<?php
declare(strict_types=1);

namespace OrderItem;

class App
{
    private $endpoints;

    public function __construct()
    {
        $this->endpoints = include __DIR__ . '/endpoints.config.php';
    }

    public function getEndpoints(): array
    {
        return $this->endpoints;
    }
}
