<?php

namespace App\AbstractPizzaFactory;

use App\AbstractPizzaFactory\PizzaFactory\PizzaFactory;

class Client
{
    public function __construct(PizzaFactory $factory, string $type)
    {
        $pizza = $factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        echo "\n ----------------------------- \n";
    }
}