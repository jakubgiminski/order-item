<?php
declare(strict_types=1);

namespace OrderItemTest\Unit\Order;

use OrderItem\Item\Item;
use OrderItem\Item\ItemsCollection;
use OrderItem\Order\Order;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class OrderTest extends TestCase
{
    public function testCreateOrderWithoutItems()
    {
        $order = new Order(Uuid::uuid1()->toString());

        self::assertInstanceOf(Order::class, $order);
    }

    public function testAddItemsToOrder()
    {
        $order = new Order(Uuid::uuid1()->toString());
        $numItems = 3;
        $items = $this->createItems($numItems);
        $order->setItems($items);

        self::assertCount($numItems, $order->getItems()->toArray());
        self::assertContainsOnly(Item::class, $order->getItems()->toArray());

        $order->addItem(new Item(Uuid::uuid1()->toString()));

        self::assertCount($numItems + 1, $order->getItems()->toArray());
        self::assertContainsOnly(Item::class, $order->getItems()->toArray());
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
