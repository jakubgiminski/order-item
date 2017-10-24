<?php
declare(strict_types=1);

namespace OrderItem\Order;

use PseudoFramework\Controller;
use PseudoFramework\Request\Request;
use PseudoFramework\Response\CollectionResponse;
use PseudoFramework\Response\EntityResponse;

class OrdersController implements Controller
{
    private $ordersRepository;

    public function __construct(OrdersRepository $ordersRepository)
    {
        $this->ordersRepository = $ordersRepository;
    }

    public function getOne(Request $request): EntityResponse
    {
        $order = $this->ordersRepository->getOne(
            $request->getParameter('order_id')
        );

        return new EntityResponse($order);
    }

    public function getAll(): CollectionResponse
    {
        $orders = $this->ordersRepository->getAll();
        return new CollectionResponse($orders);
    }
}
