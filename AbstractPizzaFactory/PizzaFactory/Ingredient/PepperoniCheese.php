<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\CheeseInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;

class PepperoniCheese implements CheeseInterface, ComponentInterface
{
    public function getName(): void
    {
        echo 'Pepperoni cheese' . PHP_EOL;
    }
}