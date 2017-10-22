<?php
declare(strict_types=1);

namespace OrderItem\Item;

use Ramsey\Uuid\Uuid;

class ItemsRepository
{
    const NUM_ALL_ITEMS = 50;

    public function getOne(string $id): Item
    {
        return new Item($id);
    }

    public function getAll(): ItemsCollection
    {
        $items = new ItemsCollection();

        for ($i = 0; $i < self::NUM_ALL_ITEMS; $i++) {
            $items->addItem(new Item(Uuid::uuid1()->toString()));
        }

        return $items;
    }
}
