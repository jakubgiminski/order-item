<?php
declare(strict_types=1);

namespace OrderItem\Item;

use OrderItem\Order\Order;
use OrderItem\Order\OrdersCollection;
use Ramsey\Uuid\Uuid;

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
            $orders->addOrder(new Order(Uuid::uuid1()->toString()));
        }

        return $orders;
    }
}
