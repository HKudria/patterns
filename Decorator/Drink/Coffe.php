<?php
    
    namespace App\Decorator\Drink;
    
    class Coffe extends Drink
    {
        public function __construct()
        {
            $this->description = 'Coffe';
        }
        
        public function cost(): float
        {
            return 2.50;
        }
        
    }