<?php
    
    namespace App\Decorator\Additional;
    
    class DarkSugar extends Decorator
    {
        public function cost(): float
        {
            return $this->drink->cost() + 0.55;
        }
        
        public function getDescription(): string
        {
            return $this->drink->getDescription() . ' Dark Sugar';
        }
    }