<?php
declare(strict_types=1);

namespace OrderItem\Order;

class OrdersCollection
{
    private $orders;

    public function __construct()
    {
        $this->orders = [];
    }

    public function getOrders(): array
    {
        return $this->orders;
    }

    public function addOrder(Order $order): void
    {
        $this->orders[] = $order;
    }
}
