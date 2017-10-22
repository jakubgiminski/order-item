<?php
declare(strict_types=1);

use League\Container\Container;
use OrderItem\Item\ItemsController;
use OrderItem\Item\ItemsRepository;
use OrderItem\Item\OrdersController;
use OrderItem\Item\OrdersRepository;

$container = new Container();

$container
    ->add(ItemsController::class)
    ->withArgument(new ItemsRepository());

$container
    ->add(OrdersController::class)
    ->withArgument(new OrdersRepository());

return $container;
