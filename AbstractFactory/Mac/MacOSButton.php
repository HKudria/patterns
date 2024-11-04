<?php
    
    namespace App\AbstractFactory\Mac;
    
    use App\AbstractFactory\ButtonInterface;
    
    class MacOSButton implements ButtonInterface
    {
        public function create(): string
        {
            return 'MacOS button created';
        }
    }