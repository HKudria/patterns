<?php

require __DIR__ . '/../vendor/autoload.php';

use App\AbstractPizzaFactory\Client;
use App\AbstractPizzaFactory\PizzaFactory\RegionalPizzaFactory;

$factory = new RegionalPizzaFactory('Poland');
new Client($factory, 'Cheese');

$factory = new RegionalPizzaFactory('Czech');
new Client($factory, 'Pepperoni');
