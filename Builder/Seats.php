<?php
    namespace App\Builder;
    
    enum Seats
    {
        case Sport;
        case Standard;
        case Minivan;
        
        public function value(): int
        {
            return match ($this) {
                self::Sport => 2,
                self::Standard => 4,
                self::Minivan => 7,
            };
        }
    }