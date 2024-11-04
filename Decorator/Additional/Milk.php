<?php
    
    namespace App\Decorator\Additional;
    
    class Milk extends Decorator
    {
        public function cost(): float
        {
            return $this->drink->cost() + 1.25;
        }
        
        public function getDescription(): string
        {
            return $this->drink->getDescription() . ' Milk';
        }
    }