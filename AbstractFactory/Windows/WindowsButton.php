<?php
    
    namespace App\AbstractFactory\Windows;
    
    use App\AbstractFactory\ButtonInterface;
    
    class WindowsButton implements ButtonInterface
    {
        public function create(): string
        {
            return 'Windows button created';
        }
    }