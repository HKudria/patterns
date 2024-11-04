<?php

namespace App\AbstractPizzaFactory\PizzaFactory;

interface PizzaFactory
{
    public function createPizza(string $type): PizzaInterface;
}