<?php
declare(strict_types=1);

namespace OrderItem\Item;

use PseudoFramework\Controller;
use PseudoFramework\Request\Request;
use PseudoFramework\Response\CollectionResponse;
use PseudoFramework\Response\EntityResponse;

class ItemsController implements Controller
{
    private $itemsRepository;

    public function __construct(ItemsRepository $itemsRepository)
    {
        $this->itemsRepository = $itemsRepository;
    }

    public function getOne(Request $request): EntityResponse
    {
        $item = $this->itemsRepository->getOne(
            $request->getParameter('item_id')
        );

        return new EntityResponse($item);
    }

    public function getAll(): CollectionResponse
    {
        $items = $this->itemsRepository->getAll();
        return new CollectionResponse($items);
    }
}
