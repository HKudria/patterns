<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient\Poland;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\GarlicSauce;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\CheeseInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\DoughInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\IngredientInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\SauceInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\MozzarellaCheese;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\RoughDough;

class PolandIngredient implements IngredientInterface
{
    public function getCheese(): CheeseInterface
    {
        return new MozzarellaCheese();
    }

    public function getSauce(): SauceInterface
    {
        return new GarlicSauce();
    }

    public function getDough(): DoughInterface
    {
        return new RoughDough();
    }
}