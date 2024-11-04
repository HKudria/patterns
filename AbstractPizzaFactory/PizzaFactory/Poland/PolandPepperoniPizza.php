<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Poland;

class PolandPepperoniPizza extends PolandAbstractPizza
{
    public function prepare(): void
    {
        echo "Poland pepperoni pizza: " . PHP_EOL;
        parent::prepare();
    }

    public function bake(): void
    {
        echo 'Bake 20 minutes at 300 degrees' . PHP_EOL;
    }
}