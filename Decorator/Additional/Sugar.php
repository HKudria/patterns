<?php
    
    namespace App\Decorator\Additional;
    
    class Sugar extends Decorator
    {
        public function cost(): float
        {
            return $this->drink->cost() + 0.25;
        }
        
        public function getDescription(): string
        {
            return $this->drink->getDescription() . ' Sugar';
        }
    }