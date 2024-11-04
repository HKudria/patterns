<?php
    namespace App\Factory;
    
    interface PizzaInterface
    {
        public function create_pizza(): string;
        public function prepare(): string;
    }