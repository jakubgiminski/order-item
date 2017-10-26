<?php
declare(strict_types=1);

namespace OrderItem\Item;

use Ramsey\Uuid\Uuid;

class ItemsRepository
{
    public const NUM_ALL_ITEMS = 50;

    public const NUM_ORDER_ITEMS = 15;

    public function getOne(string $id): Item
    {
        // getting item...
        return new Item($id);
    }

    public function getAll(): ItemsCollection
    {
        $items = new ItemsCollection();

        // getting items...
        for ($i = 0; $i < self::NUM_ALL_ITEMS; $i++) {
            $items->addItem(new Item(Uuid::uuid1()->toString()));
        }

        return $items;
    }

    public function getAllFromOrder(string $orderId): ItemsCollection
    {
        $items = new ItemsCollection();

        // getting items...
        for ($i = 0; $i < self::NUM_ORDER_ITEMS; $i++) {
            $items->addItem(new Item(Uuid::uuid1()->toString(), $orderId));
        }

        return $items;
    }

    public function save(Item $item): Item
    {
        // saving item...
        return $item;
    }
}
