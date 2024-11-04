<?php
    
    namespace App\AbstractFactory;
    
    use App\AbstractFactory\ButtonInterface;
    use App\AbstractFactory\CheckboxInterface;
    
    interface GUIFactoryInterface
    {
        public function createButton(): ButtonInterface;
        
        public function createCheckbox(): CheckboxInterface;
    }