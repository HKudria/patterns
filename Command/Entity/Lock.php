<?php
    
    namespace App\Command\Entity;
    
    class Lock
    {
        private bool $isLocked = false;
        
        public function toggle(): void
        {
            $this->isLocked = !$this->isLocked;
            echo 'Lock is ' . ($this->isLocked ? 'locked' : 'unlocked') . PHP_EOL;
        }
    }