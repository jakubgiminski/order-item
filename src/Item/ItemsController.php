<?php
declare(strict_types=1);

namespace OrderItem\Item;

use Framework\Controller;
use Framework\Request;

class ItemsController implements Controller
{
    private $itemsRepository;

    public function __construct(ItemsRepository $itemsRepository)
    {
        $this->itemsRepository = $itemsRepository;
    }

    public function getOne(Request $request): Item
    {
        return $this->itemsRepository->getOne(
            $request->getArgument('id')
        );
    }

    public function getAll(): ItemsCollection
    {
        return $this->itemsRepository->getAll();
    }
}
