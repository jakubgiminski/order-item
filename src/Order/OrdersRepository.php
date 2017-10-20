<?php
declare(strict_types=1);

namespace OrderItem\Item;

use OrderItem\Order\Order;
use OrderItem\Order\OrdersCollection;

class OrdersRepository
{
    public function getOne(string $id): Order
    {
        return new Order($id);
    }

    public function getAll(): OrdersCollection
    {
        $orders = new OrdersCollection();

        for ($i = 0; $i < 10; $i++) {
            $orders->addOrder(new Order(sha1(random_int(1, 1000))));
        }

        return $orders;
    }
}
