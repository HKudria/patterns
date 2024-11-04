<?php
    
    namespace App\Command\Entity;
    
    class Thermostat
    {
        private float $temperature;
        
        public function __construct(float $temperature)
        {
            $this->temperature = $temperature;
        }
        
        public function setTemperature(float $temperature): void
        {
            echo 'Current temperature is ' . $this->temperature . PHP_EOL;
            $this->temperature = $temperature;
            echo 'Temperature is set to ' . $this->temperature . PHP_EOL;
        }
    }