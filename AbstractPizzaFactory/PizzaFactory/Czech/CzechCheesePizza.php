<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Czech;

class CzechCheesePizza extends CzechAbstractPizza
{
    public function prepare(): void
    {
        echo "Czech cheese pizza: " . PHP_EOL;
        parent::prepare();
    }

    public function bake(): void
    {
        echo 'Bake 30 minutes at 350 degrees' . PHP_EOL;
    }
}