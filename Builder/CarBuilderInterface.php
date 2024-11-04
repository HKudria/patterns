<?php
    
    namespace App\Builder;
    
    interface CarBuilderInterface
    {
        public function setEngine(string $engine): CarBuilderInterface;
        
        public function setColour(Colour $colour): CarBuilderInterface;
        
        public function setSeats(Seats $seats): CarBuilderInterface;
        
        public function setAirbag(int $airbag): CarBuilderInterface;
        
        public function getPrice(): float;
        
        public function build(): string;
    }