<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Czech;

use App\AbstractPizzaFactory\PizzaFactory\GeneralAbstractPizza;

abstract class CzechAbstractPizza extends GeneralAbstractPizza
{
    public function box(): void
    {
        echo 'Packing in random box' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cut in random slice' . PHP_EOL;
    }
}