<?php
    
    namespace App\Strategy\PaymentStrategy;
    
    use App\Strategy\Client;
    
    interface PaymentStrategy
    {
        public function isSupport(Client $client): bool;
        
        public function pay(float $amount): void;
    }