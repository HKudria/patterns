<?php
    
    use App\Builder\Brand\Audi;
    use App\Builder\Brand\Ford;
    use App\Builder\Colour;
    use App\Builder\Seats;
    
    require __DIR__ . '/../vendor/autoload.php';
    
    echo (new Audi())
            ->setAirbag(6)
            ->setColour(Colour::RED)
            ->setEngine('V8')
            ->setSeats(Seats::Sport)
            ->build() . "\n";
    
    echo (new Ford())
        ->setAirbag(6)
        ->setColour(Colour::BLACK)
        ->setEngine('V8')
        ->setSeats(Seats::Minivan)
        ->build();
    
  
    