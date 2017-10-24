<?php
declare(strict_types=1);

namespace OrderItemTest\Unit\Order;

use OrderItem\Item\Item;
use OrderItem\Item\ItemsCollection;
use OrderItem\Order\Order;
use OrderItem\Order\OrderFactory;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class OrderFactoryTest extends TestCase
{
    public function testCreateOrderFromItems()
    {
        $orderFactory = new OrderFactory();
        $numItems = 5;
        $items = $this->createItems($numItems);

        $order = $orderFactory->createFromItems($items);

        self::assertInstanceOf(Order::class, $order);
        self::assertCount($numItems, $order->getItems()->toArray());
    }

    private function createItems(int $numItems): ItemsCollection
    {
        $items = new ItemsCollection();

        for ($i = 0; $i < $numItems; $i++) {
            $items->addItem(new Item(Uuid::uuid1()->toString()));
        }

        return $items;
    }
}
