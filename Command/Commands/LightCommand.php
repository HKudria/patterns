<?php
    
    namespace App\Command\Commands;
    
    use App\Command\Entity\Light;
    
    class LightCommand implements Command
    {
        private Light $light;
        
        public function __construct(Light $light)
        {
            $this->light = $light;
        }
        
        public function execute(): void
        {
            $this->light->toggle();
        }
    }