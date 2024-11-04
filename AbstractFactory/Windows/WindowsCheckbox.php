<?php
    
    namespace App\AbstractFactory\Windows;
    
    use App\AbstractFactory\CheckboxInterface;
    
    class WindowsCheckbox implements CheckboxInterface
    {
        public function create(): string
        {
            return 'Windows checkbox created';
        }
    }