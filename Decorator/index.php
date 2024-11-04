<?php
    
    use App\Decorator\Additional\DarkSugar;
    use App\Decorator\Additional\Milk;
    use App\Decorator\Additional\Sugar;
    use App\Decorator\Drink\Coffe;
    use App\Decorator\Drink\Tea;
    
    require __DIR__ . '/../vendor/autoload.php';
    
    $drink = new Coffe();
    $drink = new Sugar($drink);
    $drink = new Sugar($drink);
    $drink = new Milk($drink);
    echo 'Price ' . $drink->cost() . '; Description: ' . $drink->getDescription() . PHP_EOL;
    
    $drink2 = new Tea();
    $drink2 = new DarkSugar($drink2);
    $drink2 = new Sugar($drink2);
    echo 'Price ' . $drink2->cost() . '; Description: ' . $drink2->getDescription();
    