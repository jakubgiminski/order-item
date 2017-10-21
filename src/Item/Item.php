<?php
declare(strict_types=1);

namespace OrderItem\Item;

use PseudoFramework\Entity;

class Item implements Entity
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
