<?php
    
    namespace App\Builder\Brand;
    
    use App\Builder;
    use App\Builder\CarBuilderInterface;
    use App\Builder\Colour;
    use App\Builder\Seats;
    
    
    abstract class CarBuilder implements CarBuilderInterface
    {
        protected string $engine;
        protected Colour $colour;
        protected Seats $seats;
        protected int $airbag;
        
        public function setEngine(string $engine): CarBuilderInterface
        {
            $this->engine = $engine;
            
            return $this;
        }
        
        public function setColour(Builder\Colour $colour): Builder\CarBuilderInterface
        {
            $this->colour = $colour;
            
            return $this;
        }
        
        public function setSeats(Seats $seats): Builder\CarBuilderInterface
        {
            $this->seats = $seats;
            
            return $this;
        }
        
        public function setAirbag(int $airbag): Builder\CarBuilderInterface
        {
            $this->airbag = $airbag;
            
            return $this;
        }
        
        public function build(): string
        {
            return sprintf(
                'Car %s with %d seats and %d airbags and engine type %s and color %s was built. Price: %s',
                get_class($this),
                $this->seats->value(),
                $this->airbag,
                $this->engine,
                $this->colour->value(),
                $this->getPrice()
            );
        }
    }