<?php
declare(strict_types=1);

namespace OrderItemTest\Functional;

use OrderItem\Item\Item;
use OrderItem\Item\ItemsCollection;
use OrderItem\Item\ItemsController;
use OrderItem\Item\ItemsRepository;
use PHPUnit\Framework\TestCase;
use PseudoFramework\Request\Request;
use PseudoFramework\Response\CollectionResponse;
use Ramsey\Uuid\Uuid;

class ItemsControllerTest extends TestCase
{
    /** @var ItemsController */
    private $itemsController;

    public function setUp()
    {
        $this->itemsController = new ItemsController(new ItemsRepository());
    }

    public function testGetAllItems()
    {
        $response = $this->itemsController->getAll();

        $itemsCollection = $response->getCollection();

        self::assertInstanceOf(CollectionResponse::class, $response);
        self::assertInstanceOf(ItemsCollection::class, $itemsCollection);
        self::assertContainsOnly(Item::class, $itemsCollection->toArray());
        self::assertCount(
            ItemsRepository::NUM_ALL_ITEMS,
            $itemsCollection->toArray()
        );
    }

    public function testGetOneItem()
    {
        $itemId = Uuid::uuid1()->toString();
        $request = new Request(['item_id' => $itemId]);
        $response = $this->itemsController->getOne($request);

        $item = $response->getEntity();

        self::assertInstanceOf(Item::class, $item);
        self::assertSame($itemId, $item->getId());
    }
}
