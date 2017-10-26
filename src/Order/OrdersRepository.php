<?php
declare(strict_types=1);

namespace OrderItem\Order;

use Ramsey\Uuid\Uuid;

class OrdersRepository
{
    public const NUM_ALL_ORDERS = 10;

    public function getOne(string $id): Order
    {
        // getting order...
        return new Order($id);
    }

    public function getAll(): OrdersCollection
    {
        $orders = new OrdersCollection();

        // getting orders...
        for ($i = 0; $i < self::NUM_ALL_ORDERS; $i++) {
            $orders->addOrder(new Order(Uuid::uuid1()->toString()));
        }

        return $orders;
    }

    public function save(Order $order): Order
    {
        // saving order...
        return $order;
    }
}
