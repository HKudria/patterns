<?php
    
    namespace App\Decorator\Additional;
    
    use App\Decorator\Drink\Drink;
    
    abstract class Decorator extends Drink
    {
        protected Drink $drink;
        
        public function __construct(Drink $drink)
        {
            $this->drink = $drink;
        }
    }