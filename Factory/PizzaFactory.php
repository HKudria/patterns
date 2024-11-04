<?php
    
    namespace App\Factory;
    
    use App\Factory\Pizzas\MargheritaPizza;
    use App\Factory\Pizzas\PepperoniPizza;
    use App\Factory\Pizzas\VeggiePizza;
    
    final class PizzaFactory
    {
        public static function createPizza(string $type, string $size, array $toppings = []): PizzaInterface
        {
            return match ($type) {
                'veggie' => new VeggiePizza($size, $toppings),
                'pepperoni' => new PepperoniPizza($size, $toppings),
                'margherita' => new MargheritaPizza($size, $toppings),
                default => throw new \InvalidArgumentException("Invalid pizza type: $type"),
            };
        }
    }