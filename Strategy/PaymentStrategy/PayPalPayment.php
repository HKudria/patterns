<?php
    
    namespace App\Strategy\PaymentStrategy;
    
    
    use App\Strategy\Client;
    use App\Strategy\PaymentMethod;
    
    class PayPalPayment implements PaymentStrategy
    {
        public function isSupport(Client $client): bool
        {
            return $client->getWallet() === PaymentMethod::PAYPAL;
        }
        
        public function pay(float $amount): void
        {
            echo "$amount was paid by " . PaymentMethod::PAYPAL->value . PHP_EOL;
        }
    }