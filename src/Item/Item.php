<?php
declare(strict_types=1);

namespace OrderItem\Item;

use PseudoFramework\Entity;

class Item implements Entity
{
    private $id;

    private $orderId;

    public function __construct(string $id, string $orderId = null)
    {
        $this->id = $id;
        $this->orderId = $orderId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
}
