<?php

namespace App\AbstractPizzaFactory\PizzaFactory;

use App\AbstractPizzaFactory\Exception\InvalidPizzaTypeException;
use App\AbstractPizzaFactory\PizzaFactory\Poland\PolandPizzaFactory;
use App\AbstractPizzaFactory\PizzaFactory\Czech\CzechPizzaFactory;
use App\AbstractPizzaFactory\Exception\InvalidRegionException;


class RegionalPizzaFactory implements PizzaFactory
{
    public function __construct(private readonly string $region)
    {
    }

    /**
     * @throws InvalidPizzaTypeException
     * @throws InvalidRegionException
     */
    public function createPizza(string $type): PizzaInterface
    {
        return match ($this->region) {
            'Poland' => (new PolandPizzaFactory())->createPizza($type),
            'Czech' => (new CzechPizzaFactory())->createPizza($type),
            default => throw new InvalidRegionException("Unknown region: {$this->region}")
        };
    }
}