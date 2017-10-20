<?php
declare(strict_types=1);

namespace OrderItem;

use Framework\Route;
use OrderItem\Item\ItemsController;

$app = new OrderItemApp();

$app->addRoute(
    Route::get(
        'items',
        ItemsController::class,
        'getAll'
    )
);

$app->addRoute(
    Route::get(
        'items/{item_id}',
        ItemsController::class,
        'getOne'
    )
);
