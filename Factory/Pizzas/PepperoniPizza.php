<?php
    namespace App\Factory\Pizzas;
    
    use App\Factory\PizzaInterface;
    
    class PepperoniPizza implements PizzaInterface
    {
        public function __construct(
            private readonly string $size,
            private readonly array  $toppings = []
        )
        {
        }
        
        public function create_pizza(): string
        {
            return "Pepperoni Pizza size: $this->size";
        }
        
        public function prepare(): string
        {
            $result = '1 Pepperoni is preparing';
            return $this->toppings ? "$result with " . implode(', ', $this->toppings) : $result;
        }
    }