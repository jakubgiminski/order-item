<?php
declare(strict_types=1);

namespace OrderItem;

use Framework\Route;
use OrderItem\Item\ItemsController;
use OrderItem\Item\OrdersController;

$app = new OrderItemApp();

$routes = [
    Route::get('items', ItemsController::class, 'getAll'),
    Route::get('items/{item_id}', ItemsController::class, 'getOne'),
    Route::get('orders', OrdersController::class, 'getAll'),
    Route::get('orders/{order_id}', OrdersController::class, 'getOne'),
];

$app->setRoutes($routes);
