<?php
    
    namespace App\AbstractFactory;
    
    interface ButtonInterface
    {
        public function create(): string;
    }