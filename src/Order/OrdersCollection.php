<?php
declare(strict_types=1);

namespace OrderItem\Order;

use PseudoFramework\Arrayable;

class OrdersCollection implements Arrayable
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

    public function toArray(): array
    {
        return $this->orders;
    }
}
