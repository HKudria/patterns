<?php
    
    namespace App\Strategy\PaymentStrategy;
    
    use App\Strategy\Client;
    use App\Strategy\PaymentMethod;
    
    class BitcoinPayment implements PaymentStrategy
    {
        public function isSupport(Client $client): bool
        {
            return $client->getWallet() === PaymentMethod::BITCOIN;
        }
        
        public function pay(float $amount): void
        {
            echo "$amount was paid by " . PaymentMethod::BITCOIN->value . PHP_EOL;
        }
    }