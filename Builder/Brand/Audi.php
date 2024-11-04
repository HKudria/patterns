<?php
    
    namespace App\Builder\Brand;
    
    use App\Builder\Colour;
    use App\Builder\Seats;
    
    class Audi extends CarBuilder
    {
        public function getPrice(): float
        {
            $price = 75000;
            
            $price += match ($this->colour) {
                Colour::GREEN => 7000,
                Colour::RED => 4000,
                Colour::BLACK => 10000,
            };
            
            $price += match ($this->seats) {
                Seats::Sport => 20000,
                Seats::Standard => 10000,
                Seats::Minivan => 0,
            };
            
            $price += $this->airbag * 1000;
            
            return $price;
        }
    }