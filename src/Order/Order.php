<?php
declare(strict_types=1);

namespace OrderItem\Order;

use OrderItem\Item\Item;
use OrderItem\Item\ItemsCollection;
use PseudoFramework\Entity;

class Order implements Entity
{
    private $id;

    private $items;

    public function __construct(string $id)
    {
        $this->id = $id;
        $this->items = new ItemsCollection();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function addItem(Item $item): void
    {
        $this->items->addItem($item);
    }

    public function getItems(): ItemsCollection
    {
        return $this->items;
    }
}
