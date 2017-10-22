<?php
declare(strict_types=1);

use OrderItem\Item\ItemsController;
use OrderItem\Order\OrdersController;
use PseudoFramework\Http\Endpoint;

return [
    Endpoint::get('/items', ItemsController::class, 'getAll'),
    Endpoint::get('/items/{item_id}', ItemsController::class, 'getOne'),
    Endpoint::get('/orders', OrdersController::class, 'getAll'),
    Endpoint::get('/orders/{order_id}', OrdersController::class, 'getOne'),
];
