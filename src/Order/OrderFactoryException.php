<?php
declare(strict_types=1);

namespace OrderItem\Order;

class OrderFactoryException extends \Exception
{
    public static function emptyItemsCollection(): self
    {
        return new self('ItemsCollection is empty');
    }
}
