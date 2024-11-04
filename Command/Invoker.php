<?php
    
    namespace App\Command;
    use App\Command\Commands\Command;
    
    class Invoker
    {
        public function __construct(private readonly Command $command)
        {
        }
        
        public function __invoke(): void
        {
            echo get_class($this->command) . ' is running' . PHP_EOL;
            $this->command->execute();
        }
    }