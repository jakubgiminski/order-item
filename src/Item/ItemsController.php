<?php
declare(strict_types=1);

namespace OrderItem\Item;

use PseudoFramework\Request\Request;

class ItemsController
{
    private $itemsRepository;

    public function __construct(ItemsRepository $itemsRepository)
    {
        $this->itemsRepository = $itemsRepository;
    }

    public function getOne(Request $request): Item
    {
        return $this->itemsRepository->getOne(
            $request->getArgument('item_id')
        );
    }

    public function getAll(): ItemsCollection
    {
        return $this->itemsRepository->getAll();
    }
}
