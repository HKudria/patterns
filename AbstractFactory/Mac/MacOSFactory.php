<?php
    
    namespace App\AbstractFactory\Mac;
    
    use App\AbstractFactory\ButtonInterface;
    use App\AbstractFactory\CheckboxInterface;
    use App\AbstractFactory\GUIFactoryInterface;
    
    
    class MacOSFactory implements GUIFactoryInterface
    {
        public function createCheckbox(): CheckboxInterface
        {
            return new MacOSCheckbox();
        }
        
        public function createButton(): ButtonInterface
        {
            return new MacOSButton();
        }
    }