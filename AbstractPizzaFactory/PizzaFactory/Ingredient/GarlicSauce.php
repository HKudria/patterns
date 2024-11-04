<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\SauceInterface;

class GarlicSauce implements SauceInterface, ComponentInterface
{
    public function getName(): void
    {
        echo 'Garlic sauce' . PHP_EOL;
    }
}