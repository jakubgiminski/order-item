<?php
declare(strict_types=1);

namespace OrderItemTest\Functional;

use OrderItem\Order\Order;
use OrderItem\Order\OrdersCollection;
use OrderItem\Order\OrdersController;
use OrderItem\Order\OrdersRepository;
use PHPUnit\Framework\TestCase;
use PseudoFramework\Request\Request;
use PseudoFramework\Response\CollectionResponse;
use Ramsey\Uuid\Uuid;

class OrdersControllerTest extends TestCase
{
    /** @var OrdersController */
    private $ordersController;

    public function setUp()
    {
        $this->ordersController = new OrdersController(new OrdersRepository());
    }

    public function testGetAllOrders()
    {
        $response = $this->ordersController->getAll();

        $ordersCollection = $response->getCollection();

        self::assertInstanceOf(CollectionResponse::class, $response);
        self::assertInstanceOf(OrdersCollection::class, $ordersCollection);
        self::assertContainsOnly(Order::class, $ordersCollection->toArray());
        self::assertCount(
            OrdersRepository::NUM_ALL_ORDERS,
            $ordersCollection->toArray()
        );
    }

    public function testGetOneOrder()
    {
        $orderId = Uuid::uuid1()->toString();
        $request = new Request(['order_id' => $orderId]);
        $response = $this->ordersController->getOne($request);

        $order = $response->getEntity();

        self::assertInstanceOf(Order::class, $order);
        self::assertSame($orderId, $order->getId());
    }
}
