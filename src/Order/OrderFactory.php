<?php
declare(strict_types=1);

namespace OrderItem\Order;

use OrderItem\Item\ItemsCollection;
use Ramsey\Uuid\Uuid;

class OrderFactory
{
    public function createFromItems(ItemsCollection $itemsCollection): Order
    {
        if ($itemsCollection->isEmpty()) {
            throw OrderFactoryException::emptyItemsCollection();
        }

        $order = new Order(Uuid::uuid1()->toString());

        foreach ($itemsCollection->getItems() as $item) {
            $order->addItem($item);
        }

        return $order;
    }
}
