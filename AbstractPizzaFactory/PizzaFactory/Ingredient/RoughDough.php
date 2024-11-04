<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\DoughInterface;

class RoughDough implements DoughInterface, ComponentInterface
{
    public function getName(): void
    {
        echo 'Rough dough' . PHP_EOL;
    }
}