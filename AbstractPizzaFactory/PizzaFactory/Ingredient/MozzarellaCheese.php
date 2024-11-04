<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\CheeseInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;

class MozzarellaCheese implements CheeseInterface, ComponentInterface
{
    public function getName(): void
    {
        echo 'Mozzarella cheese' . PHP_EOL;
    }
}