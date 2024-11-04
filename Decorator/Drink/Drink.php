<?php
    
    namespace App\Decorator\Drink;
    
    abstract class Drink
    {
        protected string $description = '';
        
        public abstract function cost(): float;
        
        public function getDescription(): string
        {
            return $this->description;
        }
    }