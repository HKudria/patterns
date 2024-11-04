<?php
    
    namespace App\Command\Entity;
    
    class Light
    {
        private bool $isOn = false;
        
        public function toggle(): void
        {
            $this->isOn = !$this->isOn;
            echo 'Light is ' . ($this->isOn ? 'on' : 'off') . PHP_EOL;
        }
    }