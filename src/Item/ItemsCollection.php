<?php
declare(strict_types=1);

namespace OrderItem\Item;

class ItemsCollection
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    public function isEmpty(): bool
    {
        return count($this->items) === 0;
    }
}
