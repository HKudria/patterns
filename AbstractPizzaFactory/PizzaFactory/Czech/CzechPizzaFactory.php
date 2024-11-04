<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Czech;

use App\AbstractPizzaFactory\Exception\InvalidPizzaTypeException;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Czech\CzechIngredient;
use App\AbstractPizzaFactory\PizzaFactory\PizzaFactory;
use App\AbstractPizzaFactory\PizzaFactory\PizzaInterface;

class CzechPizzaFactory implements PizzaFactory
{
    public function createPizza(string $type): PizzaInterface
    {
        $ingredient = new CzechIngredient();
        return match ($type) {
            'Cheese' => new CzechCheesePizza($ingredient),
            'Pepperoni' => new CzechPepperoniPizza($ingredient),
            default => throw new InvalidPizzaTypeException("Unknown pizza type: {$type}")
        };
    }
}