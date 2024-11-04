<?php
    
    use App\Command\Commands\LightCommand;
    use App\Command\Commands\LockCommand;
    use App\Command\Commands\TemperatureCommand;
    use App\Command\Entity\Light;
    use App\Command\Entity\Lock;
    use App\Command\Entity\Thermostat;
    use App\Command\Invoker;
    
    require __DIR__ . '/../vendor/autoload.php';
    
    $light = new Light();
    $lock = new Lock();
    $thermostat = new Thermostat(75.00);
    
    $lightCommand = new LightCommand($light);
    $invoker = new Invoker($lightCommand);
    $invoker();
    $invoker();
    
    $lockCommand = new LockCommand($lock);
    $invoker = new Invoker($lockCommand);
    $invoker();
    $invoker();
    
    $temperatureCommand = new TemperatureCommand($thermostat, 100.00);
    $invoker = new Invoker($temperatureCommand);
    $invoker();