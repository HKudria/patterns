<?php

namespace App\AbstractPizzaFactory\PizzaFactory;

use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\ComponentInterface;
use App\AbstractPizzaFactory\PizzaFactory\Ingredient\Interfaces\IngredientInterface;

abstract class GeneralAbstractPizza implements PizzaInterface
{
    /** @var ComponentInterface[] */
    protected array $listOfIngredients = [];

    public function __construct(private readonly IngredientInterface $ingredient)
    {
        $this->listOfIngredients = [
            $this->ingredient->getDough(),
            $this->ingredient->getSauce(),
            $this->ingredient->getCheese()
        ];
    }

    public function prepare(): void
    {
        foreach ($this->listOfIngredients as $component) {
            $component->getName();
        }
    }
}