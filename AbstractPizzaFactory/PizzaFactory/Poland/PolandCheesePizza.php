<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Poland;

class PolandCheesePizza extends PolandAbstractPizza
{
    public function prepare(): void
    {
        echo "Poland cheese pizza: " . PHP_EOL;
        parent::prepare();
    }

    public function bake(): void
    {
        echo 'Bake 20 minutes at 300 degrees' . PHP_EOL;
    }
}