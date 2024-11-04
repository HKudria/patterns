<?php
    
    namespace App\Builder;
    
    enum Colour
    {
        case RED;
        case GREEN;
        case BLACK;
        
        public function value(): string
        {
            return match ($this) {
                self::BLACK => 'black',
                self::GREEN => 'green',
                self::RED => 'red',
            };
        }
    }