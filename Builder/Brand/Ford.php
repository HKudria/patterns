<?php
    
    namespace App\Builder\Brand;
    
    use App\Builder\Colour;
    use App\Builder\Seats;

    
    class Ford extends CarBuilder
    {
        public function getPrice(): float
        {
            $price = 10000;
            
            $price += match ($this->colour) {
                Colour::GREEN => 200,
                Colour::RED => 400,
                Colour::BLACK => 100,
            };
            
            $price += match ($this->seats) {
                Seats::Sport => 2000,
                Seats::Standard => 0,
                Seats::Minivan => 1000,
            };
            
            $price += $this->airbag * 100;
            
            return $price;
        }
    }