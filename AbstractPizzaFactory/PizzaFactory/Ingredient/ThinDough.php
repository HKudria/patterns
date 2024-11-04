<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\DoughInterface;

class ThinDough implements DoughInterface, ComponentInterface
{
    public function getName(): void
    {
        echo 'Thin dough' . PHP_EOL;
    }
}