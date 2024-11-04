<?php
    require __DIR__ . '/../vendor/autoload.php';
    
    use App\AbstractFactory\Application;
    
    (new Application('mac'))->render();
    (new Application('windows'))->render();
    