<?php
    
    namespace App\Decorator\Drink;
    
    class Tea extends Drink
    {
        public function __construct()
        {
            $this->description = 'Tea';
        }
        
        public function cost(): float
        {
            return 5.01;
        }
        
        
    }