<?php
    
    namespace App\AbstractFactory;
    
    use App\AbstractFactory\Mac\MacOSFactory;
    use App\AbstractFactory\Windows\WindowsFactory;
    use InvalidArgumentException;
    
    class Application
    {
        private GUIFactoryInterface $configuration;
        
        public function __construct(private string $os)
        {
        }
        
        public function render(): void
        {
            $this->configuration = match ($this->os) {
                'mac' => new MacOSFactory(),
                'windows' => new WindowsFactory(),
                default => throw new InvalidArgumentException("Invalid OS type: $this->os"),
            };
            
            echo "Configuration for " . $this->os . " is loaded"  . "\n";
            echo $this->configuration->createButton()->create() . "\n";
            echo $this->configuration->createCheckbox()->create() . "\n";
        }
    }