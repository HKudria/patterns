<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Czech;

class CzechPepperoniPizza extends CzechAbstractPizza
{
    public function prepare(): void
    {
        echo "Czech pepperoni pizza: " . PHP_EOL;
        parent::prepare();
    }

    public function bake(): void
    {
        echo 'Bake 15 minutes at 300 degrees' . PHP_EOL;
    }
}