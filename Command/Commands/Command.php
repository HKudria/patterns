<?php
    
    namespace App\Command\Commands;
    
    interface Command
    {
        public function execute(): void;
    }