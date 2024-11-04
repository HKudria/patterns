<?php
    
    namespace App\Command\Commands;
    
    use App\Command\Entity\Thermostat;
    
    class TemperatureCommand implements Command
    {
        private Thermostat $thermostat;
        private float $temperature;
        
        public function __construct(Thermostat $thermostat, float $temperature)
        {
            $this->thermostat = $thermostat;
            $this->temperature = $temperature;
        }
        
        public function execute(): void
        {
            $this->thermostat->setTemperature($this->temperature);
        }
    }