<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces;

interface IngredientInterface
{
    public function getCheese(): CheeseInterface;

    public function getSauce(): SauceInterface;

    public function getDough(): DoughInterface;
}