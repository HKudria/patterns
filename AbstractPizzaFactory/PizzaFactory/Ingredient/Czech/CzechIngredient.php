<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient\Czech;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\CheeseInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\DoughInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\IngredientInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\SauceInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\PepperoniCheese;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\ThinDough;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\TomatoSauce;

class CzechIngredient implements IngredientInterface
{
    public function getCheese(): CheeseInterface
    {
        return new PepperoniCheese();
    }

    public function getSauce(): SauceInterface
    {
        return new TomatoSauce();
    }

    public function getDough(): DoughInterface
    {
        return new ThinDough();
    }
}