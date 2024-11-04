<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\SauceInterface;

class TomatoSauce implements SauceInterface, ComponentInterface
{
    public function getName(): void
    {
        echo 'Tomato sauce' . PHP_EOL;
    }
}