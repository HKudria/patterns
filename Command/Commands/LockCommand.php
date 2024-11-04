<?php
    
    namespace App\Command\Commands;
    
    use App\Command\Entity\Lock;
    
    class LockCommand implements Command
    {
        private Lock $lock;
        
        public function __construct(Lock $lock)
        {
            $this->lock = $lock;
        }
        
        public function execute(): void
        {
            $this->lock->toggle();
        }
    }