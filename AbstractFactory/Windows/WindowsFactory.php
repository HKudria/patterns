<?php
    
    namespace App\AbstractFactory\Windows;
    
    use App\AbstractFactory\ButtonInterface;
    use App\AbstractFactory\CheckboxInterface;
    use App\AbstractFactory\GUIFactoryInterface;
    
    class WindowsFactory implements GUIFactoryInterface
    {
        public function createCheckbox(): CheckboxInterface
        {
            return new WindowsCheckbox();
        }
        
        public function createButton(): ButtonInterface
        {
            return new WindowsButton();
        }
    }