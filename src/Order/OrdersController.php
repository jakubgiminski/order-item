<?php
declare(strict_types=1);

namespace OrderItem\Item;

use PseudoFramework\Request\Request;

class OrdersController
{
    private $ordersRepository;

    public function __construct(ItemsRepository $ordersRepository)
    {
        $this->ordersRepository = $ordersRepository;
    }

    public function getOne(Request $request): Item
    {
        return $this->ordersRepository->getOne(
            $request->getArgument('order_id')
        );
    }

    public function getAll(): ItemsCollection
    {
        return $this->ordersRepository->getAll();
    }
}
