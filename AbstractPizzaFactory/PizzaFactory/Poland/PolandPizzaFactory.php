<?php

namespace App\AbstractPizzaFactory\PizzaFactory\Poland;

use App\AbstractPizzaFactory\Exception\InvalidPizzaTypeException;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Poland\PolandIngredient;
use App\AbstractPizzaFactory\PizzaFactory\PizzaFactory;
use App\AbstractPizzaFactory\PizzaFactory\PizzaInterface;

class PolandPizzaFactory implements PizzaFactory
{
    public function createPizza(string $type): PizzaInterface
    {
        $ingredient = new PolandIngredient();
        return match ($type) {
            'Cheese' => new PolandCheesePizza($ingredient),
            'Pepperoni' => new PolandPepperoniPizza($ingredient),
            default => throw new InvalidPizzaTypeException("Unknown pizza type: {$type}")
        };
    }
}