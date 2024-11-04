<?php
    
    require __DIR__ . '/../vendor/autoload.php';
    
    use App\Factory\PizzaFactory;
    
    $pizza = PizzaFactory::createPizza('pepperoni', 'small');
    echo $pizza->create_pizza() . "\n";
    echo $pizza->prepare() . "\n\n";
    
    $pizza = PizzaFactory::createPizza('veggie', 'medium', ['cheese', 'bacon']);
    echo $pizza->create_pizza() . "\n";
    echo $pizza->prepare() . "\n\n";
    
    $pizza = PizzaFactory::createPizza('margherita', 'large', ['cheese', 'tomato']);
    echo $pizza->create_pizza() . "\n";
    echo $pizza->prepare() . "\n\n";