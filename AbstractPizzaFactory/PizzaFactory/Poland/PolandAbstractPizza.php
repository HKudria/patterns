<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Poland;

use App\AbstractPizzaFactory\PizzaFactory\GeneralAbstractPizza;

abstract class PolandAbstractPizza extends GeneralAbstractPizza
{
    public function box(): void
    {
        echo 'Packing in round box' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cut diagonal slice' . PHP_EOL;
    }
}