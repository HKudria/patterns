<?php
    
    namespace App\AbstractFactory\Mac;
    
    use App\AbstractFactory\CheckboxInterface;
    
    class MacOSCheckbox implements CheckboxInterface
    {
        public function create(): string
        {
            return 'MacOS checkbox created';
        }
    }