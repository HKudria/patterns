<?php

namespace App\AbstractPizzaFactory\PizzaFactory;

interface PizzaInterface
{
    public function prepare(): void;

    public function bake(): void;

    public function cut(): void;

    public function box(): void;
}