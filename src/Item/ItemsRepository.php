<?php
declare(strict_types=1);

namespace OrderItem\Item;

class ItemsRepository
{
    public function getOne(string $id): Item
    {
        return new Item($id);
    }

    public function getAll(): ItemsCollection
    {
        $items = new ItemsCollection();

        for ($i = 0; $i < 50; $i++) {
            $items->addItem(new Item(sha1(random_int(1, 1000))));
        }

        return $items;
    }
}
